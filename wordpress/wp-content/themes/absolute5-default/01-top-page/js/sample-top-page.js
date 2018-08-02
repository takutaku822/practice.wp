
/*================================================================================================

* FIRST VIEW HEIGHT 100% - android chrome 対策　指定した要素に最初に開いたウィンドウサイズ分のheightを付与 *

================================================================================================*/
$(window).load(function() {
	$('.first-view').css('height', $(window).height() + 'px');
});

/*================================================================================================

* FIRST VIEW *

================================================================================================*/
$(window).on('scroll load',function(e) {
	var windowWidth = $(window).width();
	if (windowWidth < 1240) {
		// 1240以下 //
			var header = $('.first-view').height();
			var scroll = $(window).scrollTop();
			var scrollY = ( header + 10 * scroll ) / header - 1;
			$('.hero-img-').css('transform','translateY('+scrollY+'rem)');
	} else {
		// 1240以上 //
			var header = $('.first-view').height();
			var scroll = $(window).scrollTop();
			var scrollblur = ( header + 15 * scroll ) / header - 1;
			var scrollY = ( header + 15 * scroll ) / header - 1;
			$('.hero-img-').css('-webkit-filter','blur('+scrollblur+'px)');
			$('.hero-img-').css('filter','blur('+scrollblur+'px)');
			$('.hero-img-').css('transform','translateY('+scrollY+'rem)');
	}
});

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
		}
	});
});

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
		}
	});

	//detail
	$('.detail-trigger.no01').scrollInFunc({
	delayHeight: 50,
	fadeOutEvent : true,/*Repeat*/
		targetReach: function( elm ) {
			$('.detail-img.no01').addClass('on');// . 無し
		},
		targetBack: function( elm ) {
			$('.detail-img.no01').removeClass('on');// . 無し
		}
	});
	$('.detail-trigger.no02').scrollInFunc({
	delayHeight: 50,
	fadeOutEvent : true,/*Repeat*/
		targetReach: function( elm ) {
			$('.detail-img.no02').addClass('on');// . 無し
		},
		targetBack: function( elm ) {
			$('.detail-img.no02').removeClass('on');// . 無し
		}
	});

});
