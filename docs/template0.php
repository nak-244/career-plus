<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . ;
//$user .= $_SERVER['HTTP_USER_AGENT'] . ;
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$mail_message = <<< EOM
【{$mail_subject}】より以下の内容で相談がありました。

────────────────────────────────

■お名前
{$_SESSION['name']}

■メールアドレス
{$_SESSION['email']}

■ご相談内容
{$_SESSION['message']}

─────────────────────────────────

{$user}
EOM;
?>
