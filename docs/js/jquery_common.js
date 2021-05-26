// JavaScript Document

$(function(){
	$(".footer").load("footer.html");
	$(".header").load("header.html");
});

$(function() {
	sal({
		threshold: 0.1,
		once: true
		});
	setTimeout(function(){
		$('.start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
	setTimeout(function(){

	},2500);
});

jQuery(function($) {
	$('.mainimg_inner').bgSwitcher({
		images: ['img/home/mainimg01.jpg','img/home/mainimg02.jpg','img/home/mainimg03.jpg','img/home/mainimg04.jpg'],
		interval: 6000, // 背景画像を切り替える間隔を指定 3000=3秒
		loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
		shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
		effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
		duration: 2000, // エフェクトの時間を指定します。
		easing: "swing" // エフェクトのイージングをlinear,swingから指定
	});
});

$(window).scroll(function(){
  if ($(window).scrollTop() > 300) {
	$('.header').addClass('scroll');
  } else {
	$('.header').removeClass('scroll');
  }
});

// 別ページからのリンク
$(window).on('load', function() {
  var headerHight = 80; //ヘッダの高さ
  if(document.URL.match("#")) {
  var str = location.href ;
  var cut_str = "#";
  var index = str.indexOf(cut_str);
  var href = str.slice(index);
  var target = href;
  var position = $(target).offset().top - headerHight;
  $("html, body").scrollTop(position);
  return false;
}

});


		
