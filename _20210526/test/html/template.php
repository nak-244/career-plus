<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . ;
//$user .= $_SERVER['HTTP_USER_AGENT'] . ;
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$mail_message = <<< EOM
【{$mail_subject}】より以下の内容で問い合わせがありました。

────────────────────────────────

■法人／個人
{$_SESSION['customer_category']}

■企業名
{$_SESSION['company']}

■お名前
{$_SESSION['name']}

■お名前(フリガナ)
{$_SESSION['kana']}

■電話番号
{$_SESSION['phone']}

■メールアドレス
{$_SESSION['email']}

■お問い合わせ内容
{$_SESSION['message']}

─────────────────────────────────

{$user}
EOM;
?>