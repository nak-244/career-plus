<?php

/*--------------------------------------------------------------
	フォームメール - sformmmail
	2008-8-20 Ver. 1.40
	(c)sapphirus.biz

	詳しい説明は下記のURLを参照して下さい。
	http://www.sapphirus.biz/php/sformmail/

	sformmail.php - 本体
	sformmail.html - 入力フォーム
	sformmail.css - 共通スタイルシート
	confirm.php - 確認画面用
	completion.html - 送信完了画面
	template.php - メール送信用テンプレート
	reply.php - 自動返信用テンプレート

	フォームのnameに「;s」オプションをつけると
	必須項目扱いになります。
	例) name="comment;s"
	nameにemailを指定するとメールアドレスとして扱われます。
	nameにemailcheckを指定するとメールアドレスの再入力の確認を
	することができます。
	※emailを使わない場合、emailcheckも利用しないようにして下さい。

	入力画面もしくは確認画面で
	「autoReply」に対して「1」を渡すと入力されたメールアドレスに
	自動返信をします。
	例）<input name="autoReply" type="hidden" value="1" />
	or　<input name="autoReply" type="checkbox" value="1" />
	※emailの項目がない場合は無効になります。

	確認画面用(confirm.php)には非表示フィールドで
	「mode」に対して「SEND」を必ず渡して下さい。
	例）<input name="mode" type="hidden" value="SEND" />
================================================================
	画面の流れ
	sformmail.html(入力) ≫ sformmail.php(入力チェック) ≫
	confirm.php(確認) ≫ sformmail.php(送信[template.php/reply.php]) ≫
	completion.html(完了)
--------------------------------------------------------------*/
// 設定
// $mail_to = 'cap_help@career-plus.co.jp'; // フォームデータを受け取るメールアドレス
$mail_to = 'tsuyoshi.nakamura@openloop.co.jp'; // フォームデータを受け取るメールアドレス
$mail_subject = '相談窓口フォームからお問い合わせがありました。'; // 受け取る時のSubject（件名）
$reply_subject = 'ご相談を受け付けました／株式会社キャリアプラス(自動返信)'; // 送信者へ自動返信のSubject（件名）
$mail_bcc = ''; // BCCで受け取りが必要な場合は設定
$internal_enc = 'UTF-8'; // 文字エンコード

// メイン
session_start();
if (!extension_loaded('mbstring')) Err('マルチバイト文字列関数が利用できません');
if (!$mail_to) Err('受取先メールアドレスが設定されてません');
if (!$_POST) Err('POSTデータがありません');
mb_language('ja');
mb_internal_encoding($internal_enc);
$x_mailer = 'Sapphirus.Biz Formmail Ver. 1.40 (PHP/' . phpversion() . ')';
$mode = $_POST['mode'];

switch ($mode) {
case 'SEND': // メール送信
	if (!$_SESSION) Err('セッションデータがありません');

	// メールヘッダ
	if (!$_SESSION['email']) $mail_from = 'S.B.Formmail';
	else $mail_from = $_SESSION['email'];
	$mail_header  = "From: {$mail_from}\n";
	if ($mail_bcc) $mail_header .= "Bcc: {$mail_bcc}\n";
	$mail_header .= "X-Mailer: {$x_mailer}";

	// メール送信
	include ('template0.php');
	$mail_message = html_entity_decode($mail_message, ENT_QUOTES, $internal_enc);
	$mail_message = str_replace("<br />", "", $mail_message);
	$mail_message = str_replace("\t", "\n", $mail_message);
	$mail_message = mb_convert_encoding($mail_message, $internal_enc, 'AUTO');
	mb_send_mail($mail_to, $mail_subject, $mail_message, $mail_header);

	// メール自動返信
	if ($_SESSION['autoReply'] && $_SESSION['email'] && is_file('reply0.php')) {
		$reply_header  = "From: {$mail_to}\n";
		if ($mail_bcc) $reply_header .= "Bcc: {$mail_bcc}\n";
		$reply_header .= "X-Mailer: {$x_mailer}";
		include ('reply0.php');
		$reply_message = html_entity_decode($reply_message, ENT_QUOTES, $internal_enc);
		$reply_message = str_replace("<br />", "", $reply_message);
		$reply_message = str_replace("\t", "\n", $reply_message);
		$reply_message = mb_convert_encoding($reply_message, $internal_enc, 'AUTO');
		mb_send_mail($mail_from, $reply_subject, $reply_message, $reply_header, $file);
	}
	$_SESSION = array();
	session_unset();
	session_destroy();
	header('Location: completion0.php');
	break;


	// uploadファイル処理
	// 許可されるファイルの種類
	$allowedExtensions = array('XLS', 'XLSX', 'DOC', 'DOCX', 'PDF');
	// ファイルが選択されているか
	if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
		// ファイルの拡張子を取得
		$path_parts = pathinfo($_FILES['upload']['name']);
		$extension = strtoupper($path_parts['extension']);
		// 許可された拡張子でなければエラー
		if (!in_array($extension, $allowedExtensions)) {
			$invalid[5] = '添付ファイルが指定の形式ではありません';
		} else {
			// XSS対策でファイル名を少々変更
			$uploadedFileName = sprintf('%s%s', date('mdHis'),  $_FILES['upload']['name']);
			// ファイルを指定ディレクトリに移動
			if (!move_uploaded_file($_FILES['upload']['tmp_name'], sprintf('/upload/%s', $uploadedFileName))) {
				$invalid[5] = 'ファイルのアップロードに失敗しました';
			}
		}
	}


default: // 入力データ処理
	session_unset();
	foreach ($_POST as $key => $value) {
		list($name, $option) = explode(";", $key);
		if ($option == 's' && !$value) {
			$_SESSION[$name] = '<span class="ERR">必須項目です</span>';
			$error = 1;
		} elseif ($name == 'email' && $value) {
			if (!preg_match("/^[\w\-\.]+\@[\w\-\.]+\.([a-z]+)$/", $value)) {
				$_SESSION['email'] = '<span class="ERR">メールアドレスが正しく入力されてません</span>';
				$error = $email = 1;
			} else {
				$_SESSION['email'] = $email = $value;
			}
		} elseif ($name == 'emailcheck') {
			if ($email != 1 && $email != $value) {
				$_SESSION['email'] = '<span class="ERR">メールアドレスが一致しません</span>';
				$error = 1;
			}
		//利用規約処理
		} elseif ($name == 'agreement' && $value) {
			$ag = $_POST['agreement'];
			if ($ag == 0 ){
				$_SESSION['agreement'] = '利用規約に同意します';
			}else{
				$_SESSION['agreement'] = '<span class="ERR">利用規約に同意してください</span>';

				$error = 1;
			}
		} elseif ($name == 'finished' && $value) {
			$ag = $_POST['finished'];
			if ($ag == 0 ){
				$_SESSION['finished'] = 'スタッフガイドを読みました';
			}else{
				$_SESSION['finished'] = '<span class="ERR">「スタッフガイドを読みました」にチェックしてください</span>';

				$error = 1;
			}
		} else {
			if (is_array($value)) {
				$value = implode("\t", $value);
			}
		if (get_magic_quotes_gpc()) $value = stripslashes($value);
		$value = mb_convert_encoding($value, $internal_enc, 'AUTO');
		$value = mb_convert_kana($value, 'KV');
		$value = htmlspecialchars($value, ENT_QUOTES);
		$_SESSION[$name] = nl2br($value);
		}
	}
	$_SESSION['inputErr'] = $error;
	header('Location: confirm0.php');
}
exit;


function Err($err) { // エラー表示用
	$internal_enc = $GLOBALS['internal_enc'];
	echo <<<EOM
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset={$internal_enc}" />
<title>エラー：$err</title>
</head>
<body style="font-size: 12px; line-height: 1.8em;">
<strong>エラー : </strong>$err<br>
<input type="button" value="戻る" onclick="history.back();">
</body></html>
EOM;
	exit;
}

?>
