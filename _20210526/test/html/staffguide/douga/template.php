<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . ;
//$user .= $_SERVER['HTTP_USER_AGENT'] . ;
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$mail_message = <<< EOM
【{$mail_subject}】より以下の内容でスタッフガイド【動画版】完了報告がありました。\n
────────────────────────────────\n
■姓名:
{$_SESSION['name']}
\n
■姓名(フリガナ):
{$_SESSION['kname']}
\n
■メールアドレス:
{$_SESSION['email']}
\n
■生年月日:
{$_SESSION['birthday']}
\n
■スタッフナンバー:
{$_SESSION['number']}
\n
■利用規約:
{$_SESSION['agreement']}
\n
■スタッフガイド完了報告:
{$_SESSION['finished']}
─────────────────────────────────\n
{$user}
EOM;
?>