<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\n";
//$user .= $_SERVER['HTTP_USER_AGENT'] . "\n";
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$reply_message = <<< EOM
お世話になっております。
株式会社キャリアプラスでございます。

以下の内容でご相談を受け付けいたしました。

改めて、担当よりご連絡させていただきますので今しばらくお待ちください。

─────────────────────────────────

■お名前
{$_SESSION['name']}

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
