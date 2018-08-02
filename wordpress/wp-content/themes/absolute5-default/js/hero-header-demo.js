
/*================================================

* HERO HEADER DEMO - A *

================================================*/
$(window).on('scroll load',function(e) {
	var windowWidth = $(window).width();
	if (windowWidth < 1240) {
		// 1240以下 //
			var header = $('.hero-header-wrap').height();
			var scroll = $(window).scrollTop();
			var scrollY = ( header + 10 * scroll ) / header - 1;
			$('.hero-img.a').css('transform','translateY('+scrollY+'rem)');
	} else {
		// 1240以上 //
			var header = $('.hero-header-wrap').height();
			var scroll = $(window).scrollTop();
			var scrollblur = ( header + 15 * scroll ) / header - 1;
			var scrollY = ( header + 15 * scroll ) / header - 1;
			$('.hero-img.a').css('-webkit-filter','blur('+scrollblur+'px)');
			$('.hero-img.a').css('filter','blur('+scrollblur+'px)');
			$('.hero-img.a').css('transform','translateY('+scrollY+'rem)');
			$('.hero-bg.a').css('transform','translateY('+scrollY+'rem)');
	}
});

/*================================================

* HERO HEADER DEMO - B *

================================================*/

$(window).scroll(function() {
	if ($(this).scrollTop() > 100){
			$('.hero-img-b').addClass("scale");
			$('.hero-header-wrap.b').addClass("show");
		}
		else{
			$('.hero-img-b').removeClass("scale");
			$('.hero-header-wrap.b').removeClass("show");
	}
	if ($(this).scrollTop() > 250){
			$('.hero-img-b').addClass("scale-");
		}
		else{
			$('.hero-img-b').removeClass("scale-");
	}
});
