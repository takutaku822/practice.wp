
/*================================================

* TOGGLE ACTION - CLICKでclassをon/off *

================================================*/
$(function(){
	//メニューボタンクリック
	$(".hmbg-icon-wrap").click(function(){
		$('.hmbg-icon-wrap').toggleClass('show');
		$('.main-menu-wrap').toggleClass('show');
	});
	//メニュー背景クリック
	$(".close-ovl.menu").click(function(){
		$('.hmbg-icon-wrap').toggleClass('show');
		$('.main-menu-wrap').toggleClass('show');
	});
});
