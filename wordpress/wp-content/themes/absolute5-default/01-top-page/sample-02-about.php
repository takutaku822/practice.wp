<!--****************************************************************************

	ABOUT

********************************************************************************-->
<section class="about-wrap"><div class="p960">

	<h2 class="section-title">
		ABOUT
	</h2>

	<div class="text-box">
		<p>このページはABSOLUTE 5 を使ってどんなWordpressが作成できるかのサンプルページです。</p>
		<p>ABSOLUTE 5 の特徴と使い方を、コーディングのコツを交えながら解説していきます。</p><br>
		<p><span class="line">特徴と使い方はこのページを読んで、コーディングのコツに関してはphp/cssファイルにコメントを入れていますので、直接ファイルを開いて読んでみてください。</span>実際にこのページがどういった手法で書かれているか解説してあります。</p><br>
		<p style="margin-bottom: 4rem;">開発環境下では、sample-の先頭文字で始まるファイルは削除し、header.phpで読み込んだり、includeしたりしないようにしましょう。</p>
	</div>

<!--ITEM-->
	<div class="item flex left-right"><!-- FLEX を使って入れ子になっている .img(width:45%) と .info(width:55%) を整列 -->
		<div class="img"></div>
		<div class="info">
			<div class="title">
				<h3>ABSOLUTE 5 における html/css のキホン</h3>
			</div>
			<div class="text">
				<p style="margin-bottom: 2rem;">
					ABSOLUTE 5 は基本的に、flex box を使用してレイアウトを形成します。bootstrapと比較にならないほどプレーンなため柔軟にデザインできますが、html/cssの知識は標準以上に要求されます。<br>
					ABSOLUTE 5 には、flex box を気軽に使えるようにするフレームワークを作成して同梱していますので、並ばせたい要素の親要素に対して、classを振るだけで簡単に使用できます。<br>
					使用方法は別ページにまとめてありますので参考にしてください。
				</p>

				<!-- FlexxBox仕様解説ページへのリンクボタン -->
				<a href="<?php echo get_home_url(); ?>/flexbox-manual" class="link-btn"><span>MORE</span></a>

			</div>
		</div>
	</div>


</div></section>