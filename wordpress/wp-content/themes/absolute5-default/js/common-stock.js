
/*================================================================================================

* FIRST VIEW HEIGHT 100% - android chrome 対策　指定した要素に最初に開いたウィンドウサイズ分のheightを付与 *

================================================================================================*/
$(window).load(function() {
	$('.classname').css('height', $(window).height() + 'px');
});


/*================================================================================================

* ページ表示後 n 秒後に任意の要素にclassを付与 *

================================================================================================*/
setTimeout(function(){
	$('.top-wrap').addClass('show');
},5000);


/*================================================================================================

* SCROLL CLASS add - トリガーが画面に入った際に、任意の要素にclassを付与する *

================================================================================================*/
$(window).load(function() {

	//DEFAULT
	$('.trigger').scrollInFunc({
	delayHeight: 600,
	fadeOutEvent : false,/*Repeat*/
		targetReach: function( elm ) {
			elm.addClass('on');
		},
		targetBack: function( elm ) {
			elm.removeClass('on');
		}
	});

});


/*================================================================================================

 Waypoint - default

================================================================================================*/
$(function(){
	$('.classname').waypoint(function(){ //triggerになるclass名
		$('.classname').addClass('classname'); //targetになるclass名 / targetに付与するclass名
	},{
		offset : '90%' //ブラウザ最上部からの距離
	});
});

/*================================================================================================

 SCROLL UP DOWN ADD CLASS - 上スクロール / 下スクロールでclassを付け替える

================================================================================================*/
$(function() {
	var before = $(window).scrollTop();
	$(window).scroll(function() {
		var after = $(window).scrollTop();
		if(before > after) {
			$('.menu-main').addClass("scroll");
		}
		else if(before < after) {
			$('.menu-main').removeClass("scroll");
		}
		before = after;
	});
});


/*================================================================================================

* SCROLL ACTION - 任意の量スクロールしたら任意の要素にclass付与 *

================================================================================================*/
$(window).scroll(function() {
	if ($(this).scrollTop() > 450){//スクロール量(px)
			//付与
			$('.対象のclass name').addClass("付与するclass name");// . 無し
		}
		else{
			//スクロールを戻すとclassを外す
			$('.対象のclass name').removeClass("外すclass name");// . 無し
	}
});

/*================================================================================================

* CLICK ACTION - CLICK でclass付与 *

================================================================================================*/
$(function(){

	//付与
	$(".対象のclass name").click(function(){
		$('.対象のclass name').addClass('付与するclass name');// . 無し
	});

	//外す
	$(".対象のclass name").click(function () {
		$(".対象のclass name").removeClass("外すclass name");// . 無し
	});
});

/*================================================================================================

* TOGGLE ACTION - CLICK で class を on/off *

================================================================================================*/
$(function(){

	$(".対象のclass name").click(function(){
		$('.対象のclass name').toggleClass('付与/外すclass name');// . 無し
	});

});

/*================================================================================================

* HOVER ACTION - hover で class 付与 *

================================================================================================*/

$(function(){

	//付与
	$(".対象のclass name").mouseover(function(){
		$('.対象のclass name').addClass('外すclass name');// . 無し
	});

	//外す
	$(".対象のclass name").mouseout(function () {
		$(".対象のclass name").removeClass("外すclass name");// . 無し
	});
});

/*================================================================================================

* COLOR BOX - jQuery plugin [colorbox] をレスポンシブ化 *

================================================================================================*/
$(document).ready(function(){
	//Examples of how to assign the Colorbox event to elements
		$(".gallery").colorbox({rel:'gallery', transition:"fade"});

		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"100%", height:"100%"});

		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){
		$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
		return false;
	});
});

//対象の a 要素には 必ず rel="lightbox" を付ける
$(function() {
	$('a[rel^=lightbox]').colorbox({maxWidth:'95%',maxHeight:'95%',speed:'200', fixed:true});
});


/*================================================================================================

* SCROLL BAR - jQuery plugin [Trackpad scroll] の実行文 *

================================================================================================*/
$(function(){
	$('.対象のclass name').TrackpadScrollEmulator();
});


/*================================================================================================

* BRANCH - 条件分岐 *

================================================================================================*/
$(function() {
		var windowWidth = $(window).width();
		var windowSm = 768;
		if (windowWidth <= windowSm) {
			//MOBILE 768px 以下の端末で実行させる
		} else {
			//PC 768px 以上の端末で実行させる
		}
});

