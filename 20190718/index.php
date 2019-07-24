<?php include ('header.php'); ?>
<title>【公式】株式会社キャリアプラス - 日払い対応人材派遣サービス</title>
<div id="main">
<div id="main-all">
<!--/トップ固定-->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	var setImg = '#viewer';
	var fadeSpeed = 1000;
	var switchDelay = 5000;
	$(setImg).children('img').css({opacity:'0'});
	$(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
	setInterval(function(){
	$(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
	},switchDelay);
});
$(function(){
	var setImg = '#viewer2';
	var fadeSpeed = 1000;
	var switchDelay = 5000;
	$(setImg).children('img').css({opacity:'0'});
	$(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);
	setInterval(function(){
	$(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
	},switchDelay);
});
</script>

<style type="text/css">
/*--SP--*/
.sp_disp .bgcolor{
background-color:#1f1f1f;
}
.sp_disp #viewer2{
margin: 0 auto;
max-width: 320px;
width: 100%;
height: 185px;
text-align: left;
overflow: hidden;
position: relative;
}
.sp_disp #viewer2 img{
top: 0;
left: 0;
position: absolute;
}
.sp_disp .button {
margin:.5em 0 1em ;
}
.sp_disp .button-l {
float:left;
width:49%;
}
.sp_disp .button-r {
float:right;
width:49%;
}
.sp_disp .button img{
width:100%;
}
/*--PC--*/
.pc_disp #viewer{
margin: 0 auto;
width: 690px;
height: 400px;
text-align: left;
overflow: hidden;
position: relative;
}
.pc_disp #viewer img {
top: 0;
left: 0;
position: absolute;
}
.pc_disp .button {
margin:1em 0;
}
.pc_disp .button-l {
float:left;
width:49%;
}
.pc_disp .button-r {
float:right;
width:49%;
}
.pc_disp .button img {
width:100%;
}

</style>

<div class="sp_disp">

<div class="bgcolor">
<div id="viewer2">
<img src="img/top1_sp.png" alt="メインイメージ">
<img src="img/top2_sp.png" alt="メインイメージ2">
</div>
</div>

<div class="button">
 <div class="button-l">
 <a href="job"><img src="img/button1_sp.png" alt="お仕事情報"></a>
 </div>
 <div class="button-r">
 <a href="office"><img src="img/button2_sp.png" alt="事業所案内"></a>
 </div>
 <div style="clear:both;"></div>
</div>

</div>



<div class="pc_disp">

<div id="viewer">
<img src="img/top1.png" alt="メインイメージ">
<img src="img/top2.png" alt="メインイメージ2">
</div>

<div class="button">
 <div class="button-l">
 <a href="job"><img src="img/button1.png" alt="お仕事情報"></a>
 </div>
 <div class="button-r">
 <a href="office"><img src="img/button2.png" alt="事業所案内"></a>
 </div>
 <div style="clear:both;"></div>
</div>

</div>


</div>
<?php include ('side.php'); ?>
</div>
<?php include ('footer.php'); ?>
