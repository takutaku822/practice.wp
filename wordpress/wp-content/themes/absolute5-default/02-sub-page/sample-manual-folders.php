<?php
/*
Template Name: WordPress FOLDERS
*/
?>

<?php get_header(); ?>
<body class="sub-page manual-page-com trans">

<!--****************************************************************************

	root wrap

********************************************************************************-->
<main class="root-wrap nowloading"><article>
<!--****************************************************************************

	ABOUT

********************************************************************************-->
<section class="about-wrap"><div class="p768">

	<h2 class="section-title">
		WP FOLDERS
		<p>各フォルダについて解説していきます</p>
	</h2>

	<div class="text-area">
		<p>
			flywheelを使って構築したローカルWP環境に、ABSOLUTE 5 を使って作られたWPを設置した場合の主要のフォルダ構造についてのお話。
		</p>
	</div>

</div></section>


<!--****************************************************************************

	APP/PUBLIC

********************************************************************************-->
<section class="step-wrap odd">

	<h2 class="section-title">
		app/public
	</h2>

	<p class="text-box">
		WP本体がまるっと格納されています。<span class="line">逆を言うとこのフォルダに入っているファイル以外はWPではありません。</span>このフォルダ以外のファイルは、fleywheelが動くために必要なファイルと思って良いです。<br><br>

		注意<br>
		flywheelでWPをインストールすると、publicフォルダ内直下にWPを配下する事になりますが、本番環境のサーバーなどでは、ドメイン直下にWPを設置するケースがほとんどです。<span class="line">publicの配下にするのはローカル環境下の特殊な状態です。</span><br>
		なので、本番環境では　launchcraft/ などが publicと同意義である場合がほとんどです。
	</p>

</section>



<!--****************************************************************************

	app/public/wp-content

********************************************************************************-->
<section class="step-wrap">

	<h2 class="section-title">
		app/public/wp-content
	</h2>

	<p class="text-box">
		WPのフロント部分の重要なファイルが格納されているフォルダです
	</p>

	<div class="text-group">
		<h3>
			app/public/wp-content/plugins
		</h3>
		<p>
			WPの機能を拡張するファイル（これをプラグインと呼びます）が格納されています。WPのプラグインって何？については<a href="https://www.infact1.co.jp/staff_blog/webmarketing/24081/" target="_blank">こちらの記事が参考になると思います。</a><br>
			ABSOLUTE 5 がどんなプラグインを搭載しているかは<a href="<?php echo get_home_url(); ?>/#plugins">ここを御覧ください。</a>
		</p>
	</div>

	<div class="text-group">
		<h3>
			app/public/wp-content/uploads
		</h3>
		<p>
			WP管理画面からアップロードされたメディアファイル（画像など）が格納されています。WPのブログ記事などの投稿タイプのページは、ここのフォルダを参照して画像を表示させています。
		</p>
	</div>

	<div class="text-group">
		<h3>
			app/public/wp-content/theme
		</h3>
		<p>
			このフォルダの中に入っているものを、WPの<span class="line">テーマ</span>と呼びます。WPはここに入っているテーマファイルを適用する事でフロントの見た目が変わります。管理画面からテーマAを選ぶとテーマAに、テーマBを選ぶとテーマBに　といった風に、好きなように見た目を選べるわけです。<br><br>
			我々のWP開発というのは、この、<span class="line">テーマを開発する</span>といった事と同義になります。ABSOLUTE 5 は現在 absolute5-default という名前のテーマを適応しています。これが案件によって <span class="line">absolute5-hogehoge</span> といった風に変わるわけです。
		</p>
	</div>

</section>


<!--****************************************************************************

	app/public/wp-content

********************************************************************************-->
<section class="step-wrap odd">

	<h2 class="section-title">
		wp-content/theme/absolute5-<span class="line">hogehoge</span>
		<p style="font-size: 0.8rem; color: #929292;font-weight: 700;">以下 app/public/ は略します</p>
	</h2>

	<p class="text-box">
		ABSOLUTE 5 で作成されたテーマフォルダです。<span class="line">原則、atom や sublimetext に読み込ませるフォルダはここだけで大丈夫です。</span>hogehoge の部分は案件によって変わります。
	</p>

	<div class="text-group">
		<h3>
			/00-component
		</h3>
		<p>
			最もコアとなる、ページを跨いで使用する php / css / js が格納されています。<br>
		</p>
	</div>

	<div class="text-group">
		<h3>
			/01-top-page
		</h3>
		<p>
			トップページに使う php / css / js が格納されています。<br>
			WPでは<span class="line">フロントページ</span>と呼ぶ事もあります。
		</p>
	</div>

	<div class="text-group">
		<h3>
			/02-sub-page
		</h3>
		<p>
			下層ページに使う php / css / js が格納されています。<br>
			WPでは<span class="line">固定ページ</span>と呼ぶ事もあります。
		</p>
	</div>

	<div class="text-group">
		<h3>
			/03-single-page
		</h3>
		<p>
			ブログやお知らせなど、<span class="line">投稿タイプのページ</span>に使う php / css / js が格納されています。投稿タイプのページは、ブログの投稿のたびに動的に増えていきますので、このページのスタイルが増産されていくイメージです。
			WPでは<span class="line">シングルページ</span>と呼びます。
		</p>
	</div>

	<div class="text-group">
		<h3>
			/favicon
		</h3>
		<p>
			faviconを格納します。スタートアップでは空ですが、開発が進みfaviconを用意したらこのフォルダに入れます。
		</p>
	</div>

	<div class="text-group">
		<h3>
			/img
		</h3>
		<p>
			サイトに使うimgが格納されています。<span class="line">通常のウェブサイト開発と同じ認識で大丈夫です。</span>
		</p>
	</div>

	<div class="text-group">
		<h3>
			/js
		</h3>
		<p>
			主にswiper.js(slick.jsのようなもの)など、<span class="line">よく使うjQueryのプラグイン</span>が格納されています。案件によっては不要なものも出てくるので都度調整が必要です。<br><br>
			この中に入っている<span class="line">common-stock.jsはよく使うjsをストックして溜めているファイル</span>です。用途に応じて、該当する箇所のjsファイル（00-component/01-top-page/02-sub-page/03-single-page）にコピペして使いましょう。
		</p>
	</div>

	<div class="text-group">
		<h3>
			header.php
		</h3>
		<p>
			head の部分です。metaタグや読み込みたいCSSやJSなどが記載されています。トップと下層全ページで読み込まれます。<br>
		</p>
	</div>

	<div class="text-group">
		<h3>
			index.php
		</h3>
		<p>
			サイトのトップページになります。ここに <span class="line">/01-top-page 内に作成したphpファイルをincludeしていってトップページを作ります。</span><br>
		</p>
	</div>

	<div class="text-group">
		<h3>
			footer.php
		</h3>
		<p>
			footer の部分です。<br>
		</p>
	</div>

	<div class="text-group">
		<h3>
			style.css
		</h3>
		<p>
			WPのルールで、テーマフォルダの直下にstyle.cssを置かないといけません。ここにはCSSのリセットやテーマの名前やversion等が設定されています。<br>
			<span class="line">開発で触ることはほとんどありません。</span>
		</p>
	</div>

</section>

<!--****************************************************************************

	root wrap - end

********************************************************************************-->
</article></main>
<?php get_footer(); ?>
