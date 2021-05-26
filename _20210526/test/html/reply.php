<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\n";
//$user .= $_SERVER['HTTP_USER_AGENT'] . "\n";
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$reply_message = <<< EOM
お世話になっております。
株式会社キャリアプラスでございます。

この度は、お問い合わせいただきありがとうございます。
以下の内容でお問い合わせを受け付けいたしました。

改めて、担当よりご連絡させていただきますので今しばらくお待ちください。

─────────────────────────────────

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

株式会社キャリアプラス
WEB: https://www.career-plus.co.jp/

{$user}

EOM;
?>
