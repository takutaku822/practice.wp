<?php
/*
Template Name: OFTEN USE LAYOUT
*/
?>

<?php get_header(); ?>
<body class="sub-page oftenuse-page manual-page-com trans">

<!--****************************************************************************

	root wrap

********************************************************************************-->
<main class="root-wrap nowloading"><article>
<!--****************************************************************************

	ABOUT

********************************************************************************-->
<section class="about-wrap"><div class="p768">

	<h2 class="section-title">
		OFTEN USE LAYOUT
		<p>よく使うレイアウトの解説</p>
	</h2>

	<div class="text-area">
		<p>
			このページでは<span class="line">実際によく使うレイアウト</span>を解説していきます。これをマスターすれば、あとはどんなレイアウトも応用の連続です。php/cssにコメントアウトで解説を残しています。スマートフォン表示などのメディアクエリも設定して言及しています。しっかり読んでみてください。
		</p>
	</div>

</div></section>


<!--****************************************************************************

	STEP 1

********************************************************************************-->
<section class="step-wrap odd card-layout">

	<h3 class="step-title" style="margin-bottom: 2rem;">
		<p>CASE 1</p>
		<p>画像付きのカードレイアウト (3列)</p>
	</h3>

	<p class="text-box">スタンダードな3カラムレイアウトです。最も基本的なテクニックを使用して構築しています。難易度的に全く高くないのでしっかり身に付けましょう。</p>

	<div class="sample-card-wrap flex left-right"><!--カードの梱包要素-->

		<div class="card no01"><!--背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
			<div class="img"><!--画像はCSSで背景画像として設定--></div>
			<div class="info"><!--テキスト部分の梱包要素-->
				<div class="title">
					<h3>DummyTitle</h3><!--タイトル部分 見出しになるような要素は必ずhタグを使う-->
				</div>
				<div class="sentence">
					<!--hタグに付随する文章をpタグで作る-->
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

		<div class="card no02"><!--背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
			<div class="img"><!--画像はCSSで背景画像として設定--></div>
			<div class="info"><!--テキスト部分の梱包要素-->
				<div class="title">
					<h3>DummyTitle</h3><!--タイトル部分 見出しになるような要素は必ずhタグを使う-->
				</div>
				<div class="sentence">
					<!--hタグに付随する文章をpタグで作る-->
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

		<div class="card no03"><!--背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
			<div class="img"><!--画像はCSSで背景画像として設定--></div>
			<div class="info"><!--テキスト部分の梱包要素-->
				<div class="title">
					<h3>DummyTitle</h3><!--タイトル部分 見出しになるような要素は必ずhタグを使う-->
				</div>
				<div class="sentence">
					<!--hタグに付随する文章をpタグで作る-->
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

	</div>

</section>



<!--****************************************************************************

	CASE 2

********************************************************************************-->
<section class="step-wrap card-layout">

	<h3 class="step-title" style="margin-bottom: 2rem;">
		<p>CASE 2</p>
		<p>絶対配置の活用</p>
	</h3>

	<p class="text-box">position:absolite を使えば、要素を任意の位置に配置する事ができます。絶対配置する要素を<span class="line">子</span>として、親要素（どの要素が基準になるのか）を設定する事がポイントになります。ここでは先の例の3列カードレイアウトの<span class="line">画像部分を親として</span>、左上の付近にラベルを付けてみます。特徴として、絶対配置された要素は高さを持ちません。<a href="https://saruwakakun.com/html-css/basic/relative-absolute-fixed#section5" target="_blank">こちらの記事が参考になります。</a></p>

	<div class="sample-card-wrap flex left-right"><!--カードの梱包要素-->

		<div class="card no01">
			<div class="img"><!--これが親要素 cssで position:rerative; をつける-->
				<div class="label">NEW!</div><!--これが絶対配置する要素 position:absolute; 必ず親要素の中にネストする 親要素を基準として絶対配置される-->
			</div>
			<div class="info">
				<div class="title">
					<h3>DummyTitle</h3>
				</div>
				<div class="sentence">
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

		<div class="card no02">
			<div class="img"><!--これが親要素 cssで position:rerative; をつける-->
				<div class="label">HOT!</div><!--これが絶対配置する要素 position:absolute; 必ず親要素の中にネストする 親要素を基準として絶対配置される-->
			</div>
			<div class="info">
				<div class="title">
					<h3>DummyTitle</h3>
				</div>
				<div class="sentence">
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

		<div class="card no03">
			<div class="img"><!--これが親要素 cssで position:rerative; をつける-->
				<div class="label">NICE!</div><!--これが絶対配置する要素 position:absolute; 必ず親要素の中にネストする 親要素を基準として絶対配置される-->
			</div>
			<div class="info">
				<div class="title">
					<h3>DummyTitle</h3>
				</div>
				<div class="sentence">
					<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
				</div>
			</div>
		</div>

	</div>

</section>



<!--****************************************************************************

	CASE 3

********************************************************************************-->
<section class="step-wrap alternate-layout odd"><div class="p960">

	<h3 class="step-title" style="margin-bottom: 2rem;">
		<p>CASE 3</p>
		<p>互い違いレイアウト</p>
	</h3>

	<p class="text-box"><a href="<?php echo get_home_url(); ?>/flexbox-manual/">flex-box.cssの使用方法ページ</a>でも解説していますが、よく目にするレイアウトです。 flex-box.css を使えば簡単にできます。<span class="line">スマートフォン表示でワンカラムになった際の制御も簡単です。</span></p>

	<!--高さが揃った横並びにしたいので flex を使う-->
	<div class="item no01 flex"><!--背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
		<div class="img"><!--画像はCSSで背景画像として設定 / 横幅は40%--></div>
		<div class="info"><!--テキスト梱包要素 / 横幅は60%-->
			<h3>もしかしたら猫なのかもしれないし</h3>
			<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
		</div>
	</div>

	<div class="item no02 flex reve"><!--スマートフォン表示などでワンカラムになった際に、上下入れ替わってほしいので reve を振っておく / 背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
		<div class="info"><!--テキスト梱包要素 / 横幅は60%-->
			<h3>もしかしたら猫なのかもしれないし</h3>
			<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。</p>
		</div>
		<div class="img"><!--画像はCSSで背景画像として設定 / 横幅は40%--></div>
	</div>

	<div class="item no03 flex"><!--背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
		<div class="img"><!--画像はCSSで背景画像として設定 / 横幅は40%--></div>
		<div class="info"><!--テキスト梱包要素 / 横幅は60%-->
			<h3>もしかしたら猫なのかもしれないし</h3>
			<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。</p>
		</div>
	</div>

	<div class="item no04 flex reve"><!--スマートフォン表示などでワンカラムになった際に、上下入れ替わってほしいので reve を振っておく / 背景画像等をCSSで制御しやすくするため、ナンバーを振っておく-->
		<div class="info"><!--テキスト梱包要素 / 横幅は60%-->
			<h3>もしかしたら猫なのかもしれないし</h3>
			<p>吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。nameはまだ無い。どこで生れたかとんと見当がつかぬ。吾輩は猫である。</p>
		</div>
		<div class="img"><!--画像はCSSで背景画像として設定 / 横幅は40%--></div>
	</div>


</div></section>

<!--****************************************************************************

	root wrap - end

********************************************************************************-->
</article></main>
<?php get_footer(); ?>
