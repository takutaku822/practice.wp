<!--****************************************************************************

	header

********************************************************************************-->

<?php get_header(); ?>


<!--****************************************************************************

	body start

********************************************************************************-->
<body class="index trans">

<!--****************************************************************************

	background movie [不要な場合は削除]

********************************************************************************-->
<!-- <?php if($user_agent == 'pc'): ?>
	<video preload autoplay muted loop class="background-video">
		<source src="<?php echo get_template_directory_uri(); ?>/video/video01.mp4" type="video/mp4">
		<source src="<?php echo get_template_directory_uri(); ?>/video/video01.webm" type="video/webm">
		<source src="<?php echo get_template_directory_uri(); ?>/video/video01.ogv" type="video/ogv">
	</video>
<?php endif; ?> -->


<!--****************************************************************************

	root wrap

********************************************************************************-->
<div id="home"></div>
<main class="root-wrap nowloading"><article>

<!--****************************************************************************

	top page include

********************************************************************************-->
<?php include("01-top-page/sample-01-firstview.php"); ?>
<?php include("01-top-page/sample-02-about.php"); ?>
<?php include("01-top-page/sample-03-point.php"); ?>
<?php include("01-top-page/sample-04-detail.php"); ?>
<?php include("01-top-page/sample-08-loop-post.php"); ?>

<?php include("01-top-page/sample-07-plugin.php"); ?>


<!--****************************************************************************

	root wrap - end

********************************************************************************-->
</article></main>

<!--****************************************************************************

	footer

********************************************************************************-->
<?php get_footer(); ?>
