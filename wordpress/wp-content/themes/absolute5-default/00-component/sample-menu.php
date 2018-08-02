<!--****************************************************************************

	HMBG BTN

********************************************************************************-->

<div class="hmbg-icon-wrap">
	<span></span>
	<span></span>
	<span></span>

	<span></span>
	<span></span>
</div>

<!--****************************************************************************

	MAIN MENU

********************************************************************************-->
<div class="main-menu-wrap"><div class="inner">

	<div class="close-ovl menu"></div>

	<nav class="main-menu-content flex lefti-right">
		<ul>
			<li class="title"><h2>MAIN MENU</h2></li>

			<li>
			<?php if ( is_home() || is_front_page() ) : ?><!--TOP PAGE-->
				<a href="#home">
					<div>HOME</div>
				</a>
			<?php else : ?><!--NOT TOP PAGE-->
				<a href="<?php echo get_home_url(); ?>/#home">
					<div>HOME</div>
				</a>
			<?php endif; ?>

			<li class="title"><h3>WP FOLDERS MANUAL</h3></li>
			<li><a href="<?php echo get_home_url(); ?>/wordpress-folders/">フォルダ構造の解説</a></li>

			<li class="title"><h3>LAYOUT MANUAL</h3></li>
			<li><a href="<?php echo get_home_url(); ?>/flexbox-manual/">flex-box.css の使用方法</a></li>
			<li><a href="<?php echo get_home_url(); ?>/often-use-layout/">よく使うレイアウトの作成方法</a></li>

			<li class="title"><h3>jQuery DEMO</h3></li>
			<li><a href="<?php echo get_home_url(); ?>/jquery-swiper-sample/">swiper</a></li>
			<li><a href="<?php echo get_home_url(); ?>/jquery-scrollbar-sample/">trackpad scroll bar</a></li>
			<li><a href="<?php echo get_home_url(); ?>/hero-header-demos-a/">hero header animation</a></li>

		</ul>
	</nav>

</div></div>