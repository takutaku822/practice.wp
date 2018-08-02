<!--****************************************************************************

	BLOG

********************************************************************************-->
<section class="sample-blog-wrap"><div class="p960">

	<h2 class="section-title">
		BLOG
	</h2>

	<div class="item-wrap flex left-right">

<?php
$args = array(
	'post_type' => 'blog',
	'posts_per_page' =>3,
	'paged' => get_query_var( 'paged' ),
	//array('hoge','hoge')で複数指定
	// add conditions
); ?>
<?php query_posts( $args ); ?>
<?php if ( have_posts() ) $x=1; while ( have_posts() ) : the_post(); ?>

<!--/////////// ITEM ///////////-->

	<a class="item shadow01" href="<?php the_permalink(); ?>">
		<div class="img" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;"></div>
		<div class="info">
			<div class="title">
				<h3><?php echo get_the_title(); ?></h3>
			</div>
			<div class="text">
				<p><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>
	</a>

<!--/////////// ITEM ///////////-->

<?php $x++; endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?><!-- RESET -->


	</div>



</div></section>
