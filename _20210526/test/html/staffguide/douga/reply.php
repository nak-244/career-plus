<?php
//ユーザー情報
//$user  = @gethostbyaddr($_SERVER['REMOTE_ADDR']) . "\n";
//$user .= $_SERVER['HTTP_USER_AGENT'] . "\n";
//$user = date("Y/m/d - H:i:s");

//送信メッセージ
$reply_message = <<< EOM

◇ご注意◇━━━━━━━━━━━━━━━━━━━━━━━━
このメールは確認フォームよりお問い合わせいただいた方へ自動送信しております。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

スタッフガイドのご確認ありがとうございました。
以下の内容で送信を受け付けました。

また、このメールは面談の時に担当者が確認させていただくことがありますので大切に保管してください。。
─────────────────────────────────\n
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
\n
株式会社ウィルエージェンシー\n
https://www.willagency.co.jp/\n
{$user}

EOM;
?>
