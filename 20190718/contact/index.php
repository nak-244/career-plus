<?php include ('../header.php'); ?>
<title>お問い合わせ | キャリアプラス Career plus</title>
<div id="main">
<div id="main-all">
<!--/トップ固定-->

<script type="text/javascript">
<!--
function nextPage_pc(){
	rcheck = document.myFormpc.radiobutton[0].checked;
	if(rcheck){
		document.location = "http://www.career-plus.co.jp/contact/form2.php";
		} else {
		alert("同意されない場合、お問い合わせいただけません。");
		}
}
//-->
</script>

<script type="text/javascript">
<!--
function staffPage_pc(){
	rcheck = document.myFormpc.radiobutton[0].checked;
	if(rcheck){
		document.location = "http://www.career-plus.co.jp/contact/form1.php";
		} else {
		alert("同意されない場合、お問い合わせいただけません。");
		}
}
//-->
</script>

<script type="text/javascript">
<!--
function nextPage_sp(){
	rcheck = document.myFormsp.radiobutton[0].checked;
	if(rcheck){
		document.location = "http://www.career-plus.co.jp/contact/form2.php";
		} else {
		alert("同意されない場合、お問い合わせいただけません。");
		}
}
//-->
</script>

<script type="text/javascript">
<!--
function staffPage_sp(){
	rcheck = document.myFormsp.radiobutton[0].checked;
	if(rcheck){
		document.location = "http://www.career-plus.co.jp/contact/form1.php";
		} else {
		alert("同意されない場合、お問い合わせいただけません。");
		}
}
//-->
</script>

<style type="text/css">
<!--
h2{
text-align: center;
border-bottom: double 6px #9d0784;
}
.content{
padding: 1em;
text-align: center;
}
.content a{
display: inline-block;
text-decoration: none;
background-color: #d761c3;
border-radius: 8px;
border-bottom: solid 5px #c105a2;
padding: 1em;
width:100%;
height: 7em;
}
.bold{
font-weight: bold;
font-size: 20px;
color: #ffdcfa;
}
.slide{
position: relative;
top: .7em;
}
.white{
color: #1e1e1e;
font-size: 17px;
}
/*--SP--*/
.sp_disp .content-right{
margin-top: 1em;
}
/*--PC--*/
.pc_disp .content-left{
float:left;
display: inline-block;
width: 40%;
margin-left: 2em;
}
.pc_disp .content-right{
float:right;
display: inline-block;
width: 40%;
margin-right: 2em;
}
-->
</style>

<div class="sp_disp">
<div class="wrap">
<h2>お問い合わせ</h2>
<div style="margin: 35px 0; padding: 10px 20px; border: solid 3px #900378;">
<h3><span>お問い合わせ情報の取り扱いについて</span></h3>
<h5 style="margin: 5px 0; font-size: 14px;">【利用目的】</h5>
<p>株式会社キャリアプラス（以下当社）が取得した個人情報は、お問い合わせへの回答以外に使用することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【第三者提供】</h5>
<p>当社は、お預かりした個人情報を、法令の規定または司法手続きに基づく要請による場合を除き、第三者に提供することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【外部委託】</h5>
<p>当社は、お預かりした個人情報を委託することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【情報提供の任意性】</h5>
<p>当社への個人情報の提供は任意となっています。ただし、情報に漏れやミスがある場合、お問い合わせへの適切な回答ができない場合がございます。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【個人情報の開示等】</h5>
<p>個人情報の利用目的の通知、開示、訂正、追加または削除、利用又は提供の拒否、その他お問い合わせ等については、下記問い合わせ先までご一報ください。<br />
        個人情報の取り扱いに関して、詳細は<a href="http://www.career-plus.co.jp/privacy/">プライバシーポリシー</a>をご覧ください。</p>
<h5 style="margin: 7px 0; font-size: 14px;">個人情報に関するお問い合わせ先</h5>
<p>03-5909-0790<br />
          <a href="mailto:privacyinfo-cap@career-plus.co.jp">privacyinfo-cap@career-plus.co.jp</a><br />
          個人情報保護管理者（本社 本部長）</p>
</p>
</div>
<p>      <!-- //box end --></p>
<p align="center">上記に同意いただける方は【上記の内容に同意します。】ボタンをチェックして<br />
        お問い合わせ内容入力画面へお進みください。</p>
<p><!--/pc_disp--></p>
<form name="myFormsp">
<table style="margin: 15px auto; border: solid 2px #900378;">
<tr>
<td style="vertical-align: middle; text-align: center;">
	<label><br />
	<input name="radiobutton" type="radio" value="agree"><br />
	上記の内容に同意します<br />
	</label><br />
	<input name="radiobutton" type="hidden" value="notagree">
	</td>
</tr>
</table>

<div class="content">
<div class="content-left">
<p><a onclick="staffPage_sp()" style="cursor:pointer;"><span class="bold">お問い合わせフォーム</span><br><span class="white">・登録スタッフの皆様<br>・お仕事をお探しの方</span></a></p>
</div>
<div class="content-right">
<p><a onclick="nextPage_sp()" style="cursor:pointer;"><span class="bold slide">お問い合わせフォーム</span><br><span class="white slide">・法人のお客様</span></a></p>
</div>
<div style="clear:both;"></div>
</div><!--/content-->
</form>
</div><!--/wrap-->
</div><!--/sp_disp-->



<div class="pc_disp">
<div class="wrap">
<h2>お問い合わせ</h2>
<div style="margin: 35px 0; padding: 10px 20px; border: solid 3px #900378;">
<h3><span>お問い合わせ情報の取り扱いについて</span></h3>
<h5 style="margin: 5px 0; font-size: 14px;">【利用目的】</h5>
<p>株式会社キャリアプラス（以下当社）が取得した個人情報は、お問い合わせへの回答以外に使用することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【第三者提供】</h5>
<p>当社は、お預かりした個人情報を、法令の規定または司法手続きに基づく要請による場合を除き、第三者に提供することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【外部委託】</h5>
<p>当社は、お預かりした個人情報を委託することはございません。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【情報提供の任意性】</h5>
<p>当社への個人情報の提供は任意となっています。ただし、情報に漏れやミスがある場合、お問い合わせへの適切な回答ができない場合がございます。</p>
<h5 style="margin: 5px 0; font-size: 14px;">【個人情報の開示等】</h5>
<p>個人情報の利用目的の通知、開示、訂正、追加または削除、利用又は提供の拒否、その他お問い合わせ等については、下記問い合わせ先までご一報ください。<br />
        個人情報の取り扱いに関して、詳細は<a href="http://www.career-plus.co.jp/privacy/">プライバシーポリシー</a>をご覧ください。</p>
<h5 style="margin: 7px 0; font-size: 14px;">個人情報に関するお問い合わせ先</h5>
<p>03-5909-0790<br />
          <a href="mailto:privacyinfo-cap@career-plus.co.jp">privacyinfo-cap@career-plus.co.jp</a><br />
          個人情報保護管理者（本社 本部長）</p>
</p>
</div>
<p>      <!-- //box end --></p>
<p align="center">上記に同意いただける方は【上記の内容に同意します。】ボタンをチェックして<br />
        お問い合わせ内容入力画面へお進みください。</p>
<p><!--/pc_disp--></p>
<form name="myFormpc">
<table style="width: 500px; margin: 15px auto; border: solid 2px #900378;">
<tr>
<td style="vertical-align: middle; text-align: center;">
	<label><br />
	<input name="radiobutton" type="radio" value="agree"><br />
	上記の内容に同意します<br />
	</label><br />
	<input name="radiobutton" type="hidden" value="notagree">
	</td>
</tr>
</table>

<div class="content">
<div class="content-left">
<p><a onclick="staffPage_pc()" style="cursor:pointer;"><span class="bold">お問い合わせフォーム</span><br><span class="white">・登録スタッフの皆様<br>・お仕事をお探しの方</span></a></p>
</div>
<div class="content-right">
<p><a onclick="nextPage_pc()" style="cursor:pointer;"><span class="bold slide">お問い合わせフォーム</span><br><span class="white slide">・法人のお客様</span></a></p>
</div>
<div style="clear:both;"></div>
</div><!--/content-->
</form>
</div><!--/wrap-->
</div><!--/pc_disp-->


<!--下部固定/-->
</div><!--main-all-->
<?php include ('../side.php'); ?>
</div><!--main-->
<?php include ('../footer.php'); ?>