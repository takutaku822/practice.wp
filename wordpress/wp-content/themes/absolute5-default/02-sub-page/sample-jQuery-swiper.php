<?php
/*
Template Name: jQuery-swiper-sample
*/
?>

<?php get_header(); ?>
<body class="demo-page trans">

<div class="root-wrap jquery-sample nowloading">

<!-- SWIPER -->
<div class="swiper-demo-wrap">

<!-- DEFAULT -->
	<div class="title">
		<h2>DEFAULT</h2>
		<p>freeMode: true</p>
	</div>
	<div class="swiper-container defa">
		<div class="swiper-wrapper">
			<div class="swiper-slide flex center"><p>Slide 1</p></div>
			<div class="swiper-slide flex center"><p>Slide 2</p></div>
			<div class="swiper-slide flex center"><p>Slide 3</p></div>
			<div class="swiper-slide flex center"><p>Slide 4</p></div>
			<div class="swiper-slide flex center"><p>Slide 5</p></div>
			<div class="swiper-slide flex center"><p>Slide 6</p></div>
			<div class="swiper-slide flex center"><p>Slide 7</p></div>
			<div class="swiper-slide flex center"><p>Slide 8</p></div>
			<div class="swiper-slide flex center"><p>Slide 9</p></div>
			<div class="swiper-slide flex center"><p>Slide 10</p></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination defa"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next defa"></div>
		<div class="swiper-button-prev defa"></div>
	</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container.defa', {
		pagination: '.swiper-pagination.defa',
		slidesPerView: 'auto',
		centeredSlides: true,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next.defa',
		prevButton: '.swiper-button-prev.defa'
    });
    </script>
<!-- //DEFAULT// -->


<!-- INFINITE -->
	<div class="title">
		<h2>INFINITE</h2>
		<p>loop: true</p>
	</div>
	<div class="swiper-container inf">
		<div class="swiper-wrapper">
			<div class="swiper-slide flex center"><p>Slide 1</p></div>
			<div class="swiper-slide flex center"><p>Slide 2</p></div>
			<div class="swiper-slide flex center"><p>Slide 3</p></div>
			<div class="swiper-slide flex center"><p>Slide 4</p></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination inf"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next inf"></div>
		<div class="swiper-button-prev inf"></div>
	</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container.inf', {
		pagination: '.swiper-pagination.inf',
		slidesPerView: 'auto',
		centeredSlides: true,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next.inf',
		prevButton: '.swiper-button-prev.inf',
		loop: true
    });
    </script>
<!-- //INFINITE// -->

<!-- AUTO -->
	<div class="title">
		<h2>AUTO PLAY</h2>
		<p>autoplay: 2500</p>
		<p>autoplayDisableOnInteraction: false</p>
	</div>
	<div class="swiper-container auto">
		<div class="swiper-wrapper">
			<div class="swiper-slide flex center"><p>Slide 1</p></div>
			<div class="swiper-slide flex center"><p>Slide 2</p></div>
			<div class="swiper-slide flex center"><p>Slide 3</p></div>
			<div class="swiper-slide flex center"><p>Slide 4</p></div>
			<div class="swiper-slide flex center"><p>Slide 5</p></div>
			<div class="swiper-slide flex center"><p>Slide 6</p></div>
			<div class="swiper-slide flex center"><p>Slide 7</p></div>
			<div class="swiper-slide flex center"><p>Slide 8</p></div>
			<div class="swiper-slide flex center"><p>Slide 9</p></div>
			<div class="swiper-slide flex center"><p>Slide 10</p></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination auto"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next auto"></div>
		<div class="swiper-button-prev auto"></div>
	</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container.auto', {
		pagination: '.swiper-pagination.auto',
		slidesPerView: 'auto',
		centeredSlides: true,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next.auto',
		prevButton: '.swiper-button-prev.auto',
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    </script>
<!-- //AUTO// -->


<!-- FREE MODE -->
	<div class="title">
		<h2>FREE MODE</h2>
		<p>freeMode: true</p>
	</div>
	<div class="swiper-container free">
		<div class="swiper-wrapper">
			<div class="swiper-slide flex center"><p>Slide 1</p></div>
			<div class="swiper-slide flex center"><p>Slide 2</p></div>
			<div class="swiper-slide flex center"><p>Slide 3</p></div>
			<div class="swiper-slide flex center"><p>Slide 4</p></div>
			<div class="swiper-slide flex center"><p>Slide 5</p></div>
			<div class="swiper-slide flex center"><p>Slide 6</p></div>
			<div class="swiper-slide flex center"><p>Slide 7</p></div>
			<div class="swiper-slide flex center"><p>Slide 8</p></div>
			<div class="swiper-slide flex center"><p>Slide 9</p></div>
			<div class="swiper-slide flex center"><p>Slide 10</p></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination free"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next free"></div>
		<div class="swiper-button-prev free"></div>
	</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container.free', {
		pagination: '.swiper-pagination.free',
		slidesPerView: 'auto',
		centeredSlides: true,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next.free',
		prevButton: '.swiper-button-prev.free',
		freeMode: true
    });
    </script>
<!-- //FREE MODE// -->


<!-- FADE -->
	<div class="title">
		<h2>FADE MODE</h2>
		<p>effect: 'fade'</p>
	</div>
	<div class="swiper-container fade">
		<div class="swiper-wrapper">
			<div class="swiper-slide flex center"><img src="https://source.unsplash.com/1600x900/?sweets" alt=""></div>
			<div class="swiper-slide flex center"><img src="https://source.unsplash.com/1600x900/?food" alt=""></div>
			<div class="swiper-slide flex center"><img src="https://source.unsplash.com/1600x900/?fruit" alt=""></div>
			<div class="swiper-slide flex center"><img src="https://source.unsplash.com/1600x900/?baby" alt=""></div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination fade"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-next fade"></div>
		<div class="swiper-button-prev fade"></div>
	</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container.fade', {
		pagination: '.swiper-pagination.fade',
		slidesPerView: 'auto',
		centeredSlides: true,
		paginationClickable: true,
		spaceBetween: 30,
		grabCursor: true,
		nextButton: '.swiper-button-next.fade',
		prevButton: '.swiper-button-prev.fade',
        effect: 'fade'
    });
    </script>
<!-- //FADE// -->



</div>

</div>
<?php get_footer(); ?>
