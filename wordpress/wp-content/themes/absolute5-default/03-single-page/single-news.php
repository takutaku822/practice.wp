<?php get_header(); ?>

<!-- sticky-header-left -->
<script type="text/javascript" src="http://simmz.co.jp/data/share/js/wave/waves.js"></script>
  <script type="text/javascript">
    Waves.displayEffect();
  </script>


<div class="single-header" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;height:700px;">

</div>

<div class="single-wrap">

	<div class="single-top-wrap">
		<div class="single-title">
			<?php if(mb_strlen($post->post_title)>50) { $title= mb_substr($post->post_title,0,50) ; echo $title. ･･･ ;} else {echo $post->post_title;}?>
		</div>
		<div class="single-time">
			<p><?php echo get_post_time('F jS, Y'); ?></p>
		</div>
		<div class="single-sns">

		</div>
	</div>

	<div class="single-content"><div class="single-post-wrap">

<!-- left column -->	
		<div class="single-left">
			<div class="single-left-img">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="single-left-text">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;endif; ?>

<!-- selectbox -->
		<div class="selectbox-wrap pc">
			<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;' class="archive"> 
			<option checked="checked">過去の記事を読む</option>
				<?php
					// --- サイドバー用リスト
					$side_special_list = '';
					// --- 初年度（2011）を設定したらあとは自動的に追加
					$now_y = date('Y');
					$now_m = date('m');
					for($y=$now_y; $y>=2015; $y--){

						if($y===$now_y){
							for ($m = $now_m ; $m> 0 ; $m--)  {
								$str = sprintf("%d/%02d", $y, $m);
								$side_special_list .= '<option value="/test/hinata/category/blog/date/'. $str .'">'. sprintf("%d年 %02d月", $y, $m) .'</option>';
							}
							echo $side_special_list;
							$side_special_list = '';
						}else{
							for ($m = 12 ; $m> 0 ; $m--)  {
								$str = sprintf("%d/%02d", $y, $m);
								$side_special_list .= '<option value="/test/hinata/category/blog/date/'. $str .'">'. sprintf("%d年 %02d月", $y, $m) .'</option>';
							}echo $side_special_list;
							$side_special_list = '';
						}
					}
				?>
			</select>
			<i class="fa fa-angle-down"></i>
		</div>


			</div>
			<div class="single-left-pager">
				<ul>
					<span class="waves-effect waves-button"><li><i class="fa fa-arrow-circle-o-left"></i> <?php next_post_link('%link', 'new', TRUE, ''); ?></li></span>
					<li> | </li>
					<span class="waves-effect waves-button"><li><?php previous_post_link('%link', 'old', TRUE, ''); ?> <i class="fa fa-arrow-circle-o-right"></i></li></span>
				<ul>		
			</div>
		</div>

<!-- right column -->	
		<div class="single-right">
			<div class="archive-box-arrow-up"><i class="fa fa-sort-asc"></i></div>
			<div class="archive-box-arrow-down"><i class="fa fa-sort-desc"></i></div>
			<ul class="archive">
				<li class="title">ARCHIVE POST</li>

				<div class="archive-box"><!-- ARCHIVE BOX -->

			<?php $args = array(
				'category_name' => 'blog',
				'posts_per_page'   => 8,
				'offset'           => 0,
				'category'         => '',
				'orderby'          => 'post_date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'post_status'      => 'publish',
				'suppress_filters' => true ); ?>

				<?php $myposts = get_posts( $args ); ?>
				<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>"><!-- POST LINK -->
					<li>
						<div class="grid01" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-size:cover; background-repeat:no-repeat; background-position:center center;height:100px;"></div>
						<?php if(mb_strlen($post->post_title)>24) { $title= mb_substr($post->post_title,0,24) ; echo $title. ･･･ ;} else {echo $post->post_title;}?>
					<p><?php echo get_post_time('F jS, Y'); ?><!-- POST TIME--></p>
					</li>
				<?php endforeach; wp_reset_postdata(); ?></td>
				</li></a>
			</ul>

			</div><!--// ARCHIVE BOX //-->
		</div><!--// single-right //-->

	</div></div><!--// single-content //--><!--// single-post-wrap //-->


<?php get_footer(); ?>