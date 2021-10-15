<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://www.career-plus.co.jp/contact.html");
exit();
?>

<?php include ('../header.php'); ?>
<title>お問い合わせフォーム（登録スタッフの皆様・お仕事をお探しの方） |【公式】株式会社キャリアプラス - 日払い対応人材派遣サービス</title>
<div id="main">
<div id="main-all">
<!--/トップ固定-->

<style type="text/css">
<!--
h2{
text-align: center;
border-bottom: double 6px #9d0784;
margin-bottom: .5em;
}
h2 span{
font-size: 17px;
}
.element_wrap{
border-top: solid 1px #ffdcfa;
border-bottom: solid 1px #ffdcfa;
margin: -1px 0 0;
}
input[type=text] ,
textarea,
select{
padding: 5px 10px;
font-size: 86%;
border: none;
border-radius: 3px;
border: solid 1px #888;
}
input[name=btn_confirm],
input[name=btn_submit],
input[name=btn_back] {
margin-top: 10px;
padding: 5px 20px;
font-size: 100%;
color: #fff;
cursor: pointer;
border: none;
border-radius: 5px;
box-shadow: 0 3px 0 #9a0d82;
background: #c105a2;
}
input[name=btn_back] {
margin-right: 20px;
box-shadow: 0 3px 0 #777;
background: #999;
}
.element_left span{
background-color: #fd4742;
padding: 0.2em .5em;
border-radius: 5px;
color: #fff;
font-size: 14px;
margin-left: .5em;
}
.button-area{
text-align: center;
}
textarea{
font-size: 100%;
}
.kakunin{
font-weight: bold;
color: #9b0681;
}
.back-top a{
display: inline-block;
margin-top: 1em;
text-decoration: none;
background-color: #999;
border-bottom: solid 3px #777;
border-radius: 10px;
padding: .5em 2em;
color: #fff;
}
/*--SP--*/
.sp_disp .content{
padding: 1em;
}
.sp_disp .element_wrap{
padding: 1em 0;
}
.sp_disp .element_left{
margin-bottom: .5em;
}
.sp_disp .element_left span{
vertical-align: middle;
}
.sp_disp .email,
.sp_disp .kind,
.sp_disp .otoiawase{
width: 100%;
}
.sp_disp .otoiawase{
height: 30%;
}
.sp_disp .btn_confirm{
width: 85%;
height: 8%;
font-size: 20px;
}
.sp_disp .btn_submit{
width: 40%;
height: 8%;
font-size: 20px;
}
/*--PC--*/
.pc_disp .content{
padding: 1em .8em;
}
.pc_disp .element_wrap{
padding: 1em;
}
.pc_disp .element_left{
float:left;
width:35%;
}
.pc_disp .element_right{
float:left;
width:65%;
padding-left: .5em;
}
.pc_disp .email,
.pc_disp .kind,
.pc_disp .otoiawase{
width: 95%;
}
.pc_disp .otoiawase{
height: 20%;
}
.pc_disp .btn_confirm{
width: 21em;
height: 2.5em;
font-size: 23px;
}
.pc_disp .btn_submit{
width: 10em;
height: 2.8em;
font-size: 20px;
}
-->
</style>


<?php
// ダンプ出力
//var_dump($_POST);
// 変数の初期化
$page_flag = 0;
if( !empty($_POST['btn_confirm']) ) {
$page_flag = 1;
}
elseif( !empty($_POST['btn_submit']) ) {
$page_flag = 2;

// 変数とタイムゾーンを初期化
$header = null;
$admin_reply_subject = null;
$admin_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

// ヘッダー情報を設定
$header = "MIME-Version: 1.0\n";
$header .= "From: お問い合わせ <cap.info@career-plus.co.jp>\n";
$header .= "Reply-To: お問い合わせ <cap.info@career-plus.co.jp>\n";

// 運営側へ送るメールの件名
$admin_reply_subject = "【CAP】お問い合わせ（スタッフ）を受け付けました";

// 本文を設定
$admin_reply_text = "このメールは CAPサイトのお問い合わせフォームから送信されました。
お問合わせ内容は下記内容となります。\n\n";
$admin_reply_text .= "【お問い合わせ日時】" . "\n" . date("Y-m-d H:i") . "\n\n";
$admin_reply_text .= "【お名前（漢字）】" . "\n" . $_POST['your_name'] . "\n\n";
$admin_reply_text .= "【お名前（フリガナ）】" . "\n" . $_POST['your_name2'] . "\n\n";
$admin_reply_text .= "【電話番号】" . "\n" . $_POST['tel'] . "\n\n";
$admin_reply_text .= "【メールアドレス】" . "\n" . $_POST['email'] . "\n\n";
$admin_reply_text .= "【お問い合わせ内容】" . "\n" . $_POST['otoiawase'] . "\n\n";

// 運営側へメール送信
mb_send_mail( 'cap.info@career-plus.co.jp', $admin_reply_subject, $admin_reply_text, $header);
}

// プレビューの改行
$newline = $_POST['otoiawase'];

// 強制改行
$ptn = "/(.{490})/u";
$rep = "$1 \n";
$newline = preg_replace($ptn,$rep,$newline);
?>


<script type="text/javascript">
<!--
// SP版safari対応
function check(){
var flag = 0;
// 設定開始（必須にする項目を設定してください）
if(document.form_sp.your_name.value == ""){
flag = 1;
}
else if(document.form_sp.your_name2.value == ""){
flag = 1;
}
else if(document.form_sp.email.value == ""){
flag = 1;
}
else if(document.form_sp.otoiawase.value == ""){
flag = 1;
}
// 設定終了
if(flag){
window.alert('必須項目に未入力があります');
return false;
}
else{
return true;
}
}
//-->
</script>


<div class="sp_disp">
<div class="wrap">

<?php if( $page_flag === 1 ): ?><!--確認ページ-->
<h2>入力内容の確認</h2>
<div class="content">
<form method="post" action="">

<div class="element_wrap">
<label class="kakunin">■お名前（漢字）</label>
<p><?php echo $_POST['your_name']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■お名前（フリガナ）</label>
<p><?php echo $_POST['your_name2']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■電話番号</label>
<p><?php echo $_POST['tel']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■メールアドレス</label>
<p><?php echo $_POST['email']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■お問い合わせ内容</label>
<p><?php echo nl2br($newline); ?></p>
</div><!--/element_wrap-->

<div class="button-area">
<input type="submit" name="btn_back" value="戻る" class="btn_submit">
<input type="submit" name="btn_submit" value="送信" class="btn_submit">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="your_name2" value="<?php echo $_POST['your_name2']; ?>">
<input type="hidden" name="tel" value="<?php echo $_POST['tel']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<input type="hidden" name="otoiawase" value="<?php echo $newline; ?>">
</div>
</form>
</div><!--/content-->


<?php elseif( $page_flag === 2 ): ?><!--完了ページ-->
<h2>完了</h2>
<div class="content">
<p>送信が完了しました。</p>

<div class="button-area">
<p class="back-top"><a href="../../">TOPページに戻る</a></p>
</div>
</div><!--/content-->


<?php else: ?><!--入力ページ-->
<h2>お問い合わせ入力フォーム<br><span>（登録スタッフの皆様・お仕事をお探しの方）</span></h2>
<div class="content">
<form method="post" action="" onSubmit="return check()" name="form_sp">

<div class="element_wrap">
<div class="element_left">
<label>お名前（漢字）</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="your_name" value="" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>お名前（フリガナ）</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="your_name2" value="" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>電話番号</label>
</div>
<div class="element_right">
<input type="text" name="tel" value="">
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>メールアドレス</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="email" value="" class="email" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>お問い合わせ内容</label>
<span>必須</span>
</div>
<div class="element_right">
<textarea name="otoiawase" value="" class="otoiawase" required>
</textarea>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="button-area">
<input type="submit" name="btn_confirm" value="入力内容を確認する" class="btn_confirm">
</div>
</form>
</div><!--/content-->
<?php endif; ?>

</div><!--/wrap-->
</div><!--/sp_disp-->



<div class="pc_disp">
<div class="wrap">

<?php if( $page_flag === 1 ): ?><!--確認ページ-->
<h2>入力内容の確認</h2>
<div class="content">
<form method="post" action="">

<div class="element_wrap">
<label class="kakunin">■お名前（漢字）</label>
<p><?php echo $_POST['your_name']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■お名前（フリガナ）</label>
<p><?php echo $_POST['your_name2']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■電話番号</label>
<p><?php echo $_POST['tel']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■メールアドレス</label>
<p><?php echo $_POST['email']; ?></p>
</div><!--/element_wrap-->

<div class="element_wrap">
<label class="kakunin">■お問い合わせ内容</label>
<p><?php echo nl2br($newline); ?></p>
</div><!--/element_wrap-->

<div class="button-area">
<input type="submit" name="btn_back" value="戻る" class="btn_submit">
<input type="submit" name="btn_submit" value="送信" class="btn_submit">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="your_name2" value="<?php echo $_POST['your_name2']; ?>">
<input type="hidden" name="tel" value="<?php echo $_POST['tel']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<input type="hidden" name="otoiawase" value="<?php echo $newline; ?>">
</div>
</form>
</div><!--/content-->


<?php elseif( $page_flag === 2 ): ?><!--完了ページ-->
<h2>完了</h2>
<div class="content">
<p>送信が完了しました。</p>

<div class="button-area">
<p class="back-top"><a href="../../">TOPページに戻る</a></p>
</div>
</div><!--/content-->


<?php else: ?><!--入力ページ-->
<h2>お問い合わせ入力フォーム<br><span>（登録スタッフの皆様・お仕事をお探しの方）</span></h2>
<div class="content">
<form method="post" action="">

<div class="element_wrap">
<div class="element_left">
<label>お名前（漢字）</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="your_name" value="" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>お名前（フリガナ）</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="your_name2" value="" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>電話番号</label>
</div>
<div class="element_right">
<input type="text" name="tel" value="">
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>メールアドレス</label>
<span>必須</span>
</div>
<div class="element_right">
<input type="text" name="email" value="" class="email" required>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="element_wrap">
<div class="element_left">
<label>お問い合わせ内容</label>
<span>必須</span>
</div>
<div class="element_right">
<textarea name="otoiawase" value="" class="otoiawase" required>
</textarea>
</div>
<div style="clear:both;"></div>
</div><!--/element_wrap-->

<div class="button-area">
<input type="submit" name="btn_confirm" value="入力内容を確認する" class="btn_confirm">
</div>
</form>
</div><!--/content-->
<?php endif; ?>

</div><!--/wrap-->
</div><!--/pc_disp-->


<!--下部固定/-->
</div><!--main-all-->
<?php include ('../side.php'); ?>
</div><!--main-->
<?php include ('../footer.php'); ?>
