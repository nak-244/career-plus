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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46077894-1', 'willagency.co.jp');
  ga('send', 'pageview');

</script>
</head>
<body style="font-size: 12px; line-height: 1.8em;">
<strong>エラー : </strong>$err<br>
<input type="button" value="戻る" onclick="history.back();">
</body></html>
EOM;
	exit;
}
//ここまで
?>
<!DOCTYPE html>
<html lang="ja" prefix="og:http://ogp.me/ns#">
<head>
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="アスペイワーク,スタッフガイド">
<meta name="description" content="アスペイワークのスタッフガイドです">
<title>スタッフガイド|株式会社アスペイワーク</title>
<link rel="stylesheet" href="css/douga.css">
</head>

<body class="page">
	<header class="box_set">
		<img class="logo" src="img/apw_logo.svg" alt="株式会社アスペイワーク" />
		<h1><span>スタッフガイド</span>完了報告　確認</h1>
	</header>
	
	<article class="contents">
		<section class="f_set box_set">
			<!-- FORM SET -->
			<form id="form_set" name="form" method="post" action="smmail.php">
				<dl class="kakunin">
				
				<dt>姓名</dt>
				<dd><?php echo $_SESSION['name']?></dd>
				
				<dt>姓名(フリガナ)</dt>
				<dd><?php echo $_SESSION['kname']?></dd>
	
				<dt>メールアドレス</dt>
				<dd><?php echo $_SESSION['email']?></dd>
	
				<dt>生年月日</dt>
				<dd><?php echo $_SESSION['birthday']?></dd>
				
				<dt>スタッフナンバー</dt>
				<dd><?php echo $_SESSION['number']?></dd>
	
				<dt>利用規約</dt>
				<dd><?php echo $_SESSION['agreement']?></dd>
				
				<dt>スタッフガイド完了報告</dt>
				<dd><?php echo $_SESSION['finished']?></dd>
				</dl>
				<div class="bt_set"><?php
					//入力項目エラー判定
					if($_SESSION['inputErr']){
						echo'<input type="button" value="戻 る" onclick="history.back()" />';
					}else{
						echo'<p><span>入力が正しければ、送信ボタンを押して下さい。</span>
					<input name="mode" type="hidden" id="mode" value="SEND" />
					<input type="submit" value="送 信" />&nbsp&nbsp
					<input type="button" value="戻 る" onclick="history.back()" /></p>';
					}
					?>
				</div>
			</form><!-- FORM END -->
		</section>
	</article><!-- contents END-->

	<footer>(C) Aspay Work Inc. ALL Rights Reserved.</footer>

<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000407440;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1000407440/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
<!-- Yahoo Code for your Target List end -->
<!-- Yahoo Code for your Target List 2 -->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'TU5WY397JB';
var yahoo_retargeting_label = '';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="https://b92.yahoo.co.jp/js/s_retargeting.js"></script>
<!-- Yahoo Code for your Target List 2 end -->

<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nyjyk');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
</body>
</html>
