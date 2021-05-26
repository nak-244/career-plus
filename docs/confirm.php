<?php
//セッションを利用するのでここは削除しないで下さい
session_start();
if (SID) Err('Cookieを有効にして下さい');
if (!$_SESSION) header('Location: completion.php');

function Err($err) {
	echo <<< EOM
<html><head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
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

<!doctype html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width">
		<title>お問い合わせ内容確認 | 【公式】株式会社キャリアプラス</title>
		<link href="css/reset.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/sal.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="shortcut icon" href="img/favicon.ico">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/sal.js"></script>
		<script src="js/jquery.bgswitcher.js"></script>
		<script src="js/jquery_common.js"></script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KDLXFC5');</script>
		<!-- End Google Tag Manager -->
	</head>

<body class="page contact">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDLXFC5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">
		<div class="header"></div>
		<div class="mainimg_page">
			<div class="mainimg_page_inner">
				<h1 class="title" data-sal="slide-right" data-sal-duration="2000"><span>Contact</span>お問い合わせ</h1>
			</div>
		</div>

		<div class="contents">

			<h2>お問い合わせ</h2>
			<div class="section">
				<p class="txt_explan">ご依頼やご相談等は下記フォームからお問い合わせください。<br>
				お問い合わせ完了後、弊社スタッフよりご連絡させていただきます。</p>
				<form class="form_set" name="form" method="post" action="smmail.php">
					<table class="form">
						<tr>
							<th>法人／個人</th>
							<td><?php echo $_SESSION['customer_category']?></td>
						</tr>
						<tr>
							<th>企業名</th>
							<td><?php echo $_SESSION['company']?></td>
						</tr>
						<tr>
							<th>お名前<span>必須</span></th>
							<td><?php echo $_SESSION['name']?></td>
						</tr>
						<tr>
							<th>お名前(フリガナ)</th>
							<td><?php echo $_SESSION['kana']?></td>
						</tr>
						<tr>
							<th>電話番号<span>必須</span></th>
							<td><?php echo $_SESSION['phone']?></td>
						</tr>
						<tr>
							<th>メールアドレス<span>必須</span></th>
							<td><?php echo $_SESSION['email']?></td>
						</tr>
						<tr>
							<th>お問い合わせ内容<span>必須</span></th>
							<td><?php echo $_SESSION['message']?></td>
						</tr>
					</table>

					<?php
					//入力項目エラー判定
					if($_SESSION['inputErr']){
						echo'<input class="back" type="button" value="入力に誤りがあります。修正してください。" onclick="history.back()" />';
					}else{
						echo'<p class="txt_center">入力が正しければ、送信ボタンを押して下さい。</p>
						<div class="submit">
							<input name="mode" type="hidden" id="mode" value="SEND" />
							<input class="back" type="button" value="修正する" onclick="history.back()" />
							<input class="bt_s" type="submit" value="送信する" />
						</div>
					';
					}
					?>
				</form>
			</div>

		</div><!--contents end-->

		<div class="footer"></div>

		</div><!--wrapper end-->
</body>
</html>
