<!-- footer -->
	<div class="footer"><div class="p1240">

		<!-- SET MY CONTENTS -->

	</div></div>

<!-- INCLUDE CONTENTS -->
<?php include("00-component/sample-menu.php"); ?>
<?php include("00-component/loading.php"); ?>

<?php wp_footer(); ?>

<!-- ブラウザ判定 -->
<script>addBrowserClass();</script>

<!-- FB LIKE -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0&appId=1159569500826378&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>

<!-- WAVES -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wave/waves.js"></script>
<script type="text/javascript">
	Waves.displayEffect();
</script>

<!-- SR -->
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/scrollReveal.js"></script>
<script type="text/javascript">
	(function($) {
		'use strict';
		window.sr= new scrollReveal({
		reset: true,
		move: '500px',
		mobile: true
	});
	})();
</script>

<!-- BODYMOOVIN -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bodymovin.js'></script>
<script>
	/*LOGO*/
	var animDataLogo = {
		container: document.getElementById('bodymovin'),
		renderer: 'svg',
		loop: false,
		autoplay: true,
		path: '<?php echo get_template_directory_uri(); ?>/json/data.json'
	};
	var animLogo = bodymovin.loadAnimation(animDataLogo);
	window.onresize = animLogo.resize.bind(animLogo);

	/*LOADING SVG*/
	var animDataLogo = {
		container: document.getElementById('loading-svg'),
		renderer: 'svg',
		loop: true,
		autoplay: true,
		path: '<?php echo get_template_directory_uri(); ?>/json/data.json'
	};
	var animLogo = bodymovin.loadAnimation(animDataLogo);
	window.onresize = animLogo.resize.bind(animLogo);
</script>


</body>
</html>