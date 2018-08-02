<?php get_header(); ?>
<body class="single-page blog trans">

<!--****************************************************************************

	root wrap

********************************************************************************-->
<main class="root-wrap nowloading"><article>
<section class="contents"><div class="p960">
<!--****************************************************************************

	CONTENTS

********************************************************************************-->

<div class="post-wrap"><div class="inner">

<!--TIME-->
	<div class="time">
	<!-- July 5th, 2018 -->
		<!-- <p><?php echo get_post_time('F jS, Y'); ?></p> -->
	<!-- 2018年 7月 5日 -->
		<!-- <p><?php echo get_post_time('Y年 n月 j日'); ?></p> -->
	<!-- 2018年 07月 05日 -->
		<!-- <p><?php echo get_post_time('Y年 m月 d日'); ?></p> -->
	<!-- 2018 / 07 / 05 -->
		<p><?php echo get_post_time('Y / m / d'); ?></p>
	</div>

<!--TITLE-->
	<div class="title">
		<h2><?php echo get_the_title(); ?></h2>
	</div>

<!--SENTENCE-->
	<div class="sentence">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile;endif; ?>
	</div>

<!--FB LIKE-->
	<div class="group">

	<!--NORMAL-->
		<div class="fb-like-wrap flex left-right" style="margin-bottom: 4rem;">
			<div class="img-wrap">
				<div class="img" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;"></div>
			</div>
			<div class="text">
				<p>LIKE US!</p>
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
			</div>
		</div>

	<!--LARGE-->
		<div class="fb-like-wrap large flex left-right">
			<div class="img-wrap">
				<div class="img" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;"></div>
			</div>
			<div class="text">
				<p>LIKE US!</p>
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
			</div>
		</div>

	</div>

<!-- SHARE BTN -->
	<div class="group">
		<div class="share-btn-wrap flex left-right">
			<a class="item fb" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>&text=<?php single_post_title() ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sns-icon/fb-white.svg">
			</a>
			<a class="item tw" target="_blank" href="http://twitter.com/intent/tweet?source=&text=<?php single_post_title() ?>%0a%0a<?php bloginfo('name'); ?>%0a<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>%0a%0a&hashtags=<?php echo (get_post_meta($post->ID,'hashtag01',true)); ?>,<?php echo (get_post_meta($post->ID,'hashtag02',true)); ?>,<?php echo (get_post_meta($post->ID,'hashtag03',true)); ?>,<?php echo (get_post_meta($post->ID,'hashtag04',true)); ?>,<?php echo (get_post_meta($post->ID,'hashtag05',true)); ?>,<?php echo (get_post_meta($post->ID,'hashtag06',true)); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sns-icon/tw-white.svg">
			</a>
			<a class="item go" target="_blank" href="http://plus.google.com/share?url=<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sns-icon/go-white.svg">
			</a>
			<a class="item li" target="_blank" href="http://line.naver.jp/R/msg/text/<?php single_post_title() ?>｜<?php bloginfo('name'); ?>｜<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sns-icon/li-white.svg">
			</a>
			<a class="item po" target="_blank" href="http://getpocket.com/edit?url=<?php echo("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>&title=<?php single_post_title() ?>" onclick="window.open(this.href, 'PCwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sns-icon/po-white.svg">
			</a>
		</div>
	</div>

<!-- PAGER BTN -->
	<div class="group small">

		<div class="pager-wrap flex left-right">
			<div class="box next flex center">
				<?php next_post_link('%link'); ?>
			</div>
			<div class="box prev flex center">
				<?php previous_post_link('%link'); ?>
			</div>

		</div>

		<a href="<?php echo get_home_url(); ?>/" class="link-btn center"><span>ARCHIVES</span></a>

	</div>


</div></div>


<!--****************************************************************************

	root wrap - end

********************************************************************************-->
</div></section>
</article></main>
<?php get_footer(); ?>
