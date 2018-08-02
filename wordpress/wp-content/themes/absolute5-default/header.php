<!DOCTYPE html>
<html lang="ja" class="no-js">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">

	<meta charset="utf-8">

<!--Require Mobile-->
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">

	<meta name="keywords" content="検索キーワード">

	<meta itemprop="author" content="著作者情報">
	<meta name="author" content="著作者情報">

	<link rel="publisher" href="著作者情報URL">
	<link rel="author" href="著作者情報URL">

<!--FAVICON - https://www.favicon-generator.org/ -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favion/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favion/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favion/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favion/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favion/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favion/manifest.json"><!--Required EDIT-->
	<meta name="msapplication-TileColor" content="#hogehoge"><!--Required EDIT-->
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favion/ms-icon-144x144.png">
	<meta name="theme-color" content="#hogehoge"><!--Required EDIT-->

<!--Require Javascript-->
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.1.1');
?>

<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>

<!--****************************************************************************

	JS

********************************************************************************-->

<!-- COLORBOX -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/colorbox/jquery.colorbox.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/colorbox/colorbox.css">

<!-- SMOOTH SCROLL - page -->
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/SmoothScroll.js"></script>

<!-- SCROLL - CLASS ADD -->
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrollInFunc.js"></script>

<!-- SWIPER -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/swiper/swiper.min.js'></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/swiper/swiper.css">

<!-- SCROLL BAR -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/bar/trackpad-scroll-emulator.css">
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bar/trackpad-scroll-emulator.js'></script>

<!--SAMPLE JS-->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/00-component/js/sample-common.js'></script>

<!-- COMMON -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/00-component/js/common.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/01-top-page/js/top-page.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/02-sub-page/js/sub-page.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/03-single-page/js/single-page.js'></script>
	<!--DELETE--><script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/01-top-page/js/sample-top-page.js'></script>
	<!--DELETE--><script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/hero-header-demo.js'></script>

<!--****************************************************************************

	CSS

********************************************************************************-->

<!--Google Web fonts-->
	<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">

<!--BASE-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/00-component/css/parts.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/00-component/css/flex-box.css">

<!--COMPONENT-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/00-component/css/loading.css">

<!--TOP PAGE-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/01-top-page/css/top-page.css">

<!--SINGLE PAGE-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/03-single-page/css/single-component.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/03-single-page/css/sample-single-component.css">

<!--SUB PAGE-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sub-page.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sample-manual-page-component.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sample-flexbox-manual.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sample-oftenuse-layout.css">

<!--SAMPLE PAGE-->
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/00-component/css/sample-component.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/00-component/css/sample-menu.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sample-hero-header.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/02-sub-page/css/sample-jquery.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/01-top-page/css/sample-loop-post.css">
	<!--DELETE--><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/01-top-page/css/sample-top-page.css">

<!-- Jquery-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/wave/waves.css">

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-58888046-1', 'auto');
		ga('send', 'pageview');
	</script>

</head>
