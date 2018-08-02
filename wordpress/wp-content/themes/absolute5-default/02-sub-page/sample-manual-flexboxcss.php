<?php
/*
Template Name: flexbox manual page
*/
?>

<?php get_header(); ?>
<body class="sub-page flexbox-manual-page manual-page-com trans">

<!--****************************************************************************

	root wrap

********************************************************************************-->
<main class="root-wrap nowloading"><article>
<!--****************************************************************************

	ABOUT

********************************************************************************-->
<section class="about-wrap"><div class="p768">

	<h2 class="section-title">
		FLEXBOX MANUAL
		<p>flex-box.cssの使い方</p>
	</h2>

	<div class="text-area">
		<p>
			このページでは<span class="line">flex-box.cssを使うとどのようなレイアウトが作成できるのか</span>を解説していきます。
			flex-box.css は cssプロパティである display:flex; を使いやすくまとめた自作cssです。LAUNCH CRAFTの制作物ではどの案件でも使用されています。<br>
			これを習得できれば、<span class="line">ある程度どのようなレイアウトでも組めるようになり、かつレスポンシブデザインに向いたコーディング</span>が出来るようになります。
		</p>
	</div>

</div></section>


<!--****************************************************************************

	STEP 1

********************************************************************************-->
<section class="step-wrap odd"><div class="p768">

	<h3 class="step-title">
		<p>STEP 1</p>
		<p>基本的な使い方</p>
	</h3>

	<div class="group">
		<p>まずは横並びにしたい要素全体を梱包する親要素（wrap）を作ります。ここではclass名 item-wrap にしました。</p>
		<div class="code-wrap">
			<h4>css</h4>
			<script src="https://gist.github.com/lc-haruhara/755e755755fa2ae978b57a21f7521faf.js"></script>
		</div>
		<div class="code-wrap">
			<h4>html</h4>
			<script src="https://gist.github.com/lc-haruhara/0d531a458ffb894fc5b5f6ea9691c70c.js"></script>
		</div>
		<div class="code-wrap">
			<h4>成型物</h4>
			<div class="item-wrap">class="item-wrap"</div>
		</div>
	</div>

	<div class="group">
		<p>次はこのwrapの中に並べたい要素を作ってみましょう。3つ並べたいので 横幅100%を3頭分したら 33.333% です。33.333%にすると、隙間なく並んでしまうので、今回は31%にしておきます。class名は item にしておきます。</p>
		<div class="code-wrap">
			<h4>css</h4>
			<script src="https://gist.github.com/lc-haruhara/72a3f3ee8b9f7e6ad3ce1770ade33f16.js"></script>
		</div>
		<div class="code-wrap">
			<h4>html</h4>
			<p>では先程作ったitem-wrap の中に item を並べてみます。</p>
			<script src="https://gist.github.com/lc-haruhara/7347f6d8e130e83f8523921bb5f01063.js"></script>
		</div>
		<div class="code-wrap">
			<h4>成型物</h4>
			<p>floatも何もしていないので、当然結果はこうなります。</p>
			<div class="item-wrap">
				<p style="margin-bottom: 2rem;">class="item-wrap"</p>
				<div class="item">
					1個めのアイテム
				</div>
				<div class="item">
					2個めのアイテム
				</div>
				<div class="item">
					3個めのアイテム
				</div>
			</div>
		</div>
	</div>


	<div class="group" style="margin-bottom: 0rem;">
		<p>ここでflex-box.cssの出番です。梱包要素の item-wrap に class名 flex を追加します</p>
		<div class="code-wrap">
			<h4>html</h4>
			<script src="https://gist.github.com/lc-haruhara/a872fa6e25715baeab11a06c194c0897.js"></script>
		</div>
		<div class="code-wrap" style="margin-bottom: 0rem;">
			<h4>成型物</h4>
			<p>これだけで横並びになります。</p>
			<div class="item-wrap flex">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap <span class="line">flex</span>"</p>
				<div class="item">
					1個めのアイテム
				</div>
				<div class="item">
					2個めのアイテム
				</div>
				<div class="item">
					3個めのアイテム
				</div>
			</div>
		</div>
	</div>

</div></section>


<!--****************************************************************************

	STEP 2

********************************************************************************-->

<section class="step-wrap "><div class="p768">

	<h3 class="step-title">
		<p>STEP 2</p>
		<p>特徴</p>
	</h3>

	<div class="group">
		<p>前述の通り、class flex を加えると要素は横並びになります。その他にも様々な特徴があります。STEP 2はその解説です。</p>

		<div id="002"></div>
		<div class="code-wrap">
			<h4>横並びなった要素の高さが揃う</h4>
			<p>表題の通りですが、<span class="line">横並びになった要素の高さが一番高い要素に合って揃います。</span>昔は皆こういうのはJSでやっていたのですが、flex-box.cssを使えばたった4文字 f l e x と付け加えるだけで実現可能です。</p>
			<h4>均等に自動配列される</h4>
			<p>flex に梱包された item は、<span class="line">特にmarginを設定する事なく梱包要素の中に均等に自動配列されます。</span></p>
			<div class="item-wrap flex">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap <span class="line">flex</span>"</p>
				<div class="item">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>

			<div id="003"></div>
			<p style="padding-top: 4rem;">ためしにitemを2個にしてみます。</p>
			<div class="item-wrap flex">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap <span class="line">flex</span>"</p>
				<div class="item">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
			</div>

			<p style="padding-top: 2rem;">均等に自動配列されました。</p>

		</div>
	</div>


</div></section>


<!--****************************************************************************

	STEP 3

********************************************************************************-->

<section class="step-wrap odd"><div class="p768">
	<h3 class="step-title">
		<p>STEP 3</p>
		<p>様々なオプション</p>
	</h3>

<!--GROUP-->
	<div class="group">
		<p>flex-box.cssには様々なオプションがあります。といえば大げさですが、基本的に用途に応じてclassを付け加えていくだけです。複数同時使用もできます。上手く組み合わせて解決していきましょう。</p>

		<ul class="flex ">
			<li>
				<a href="#03-01">class="flex left-light"</a>
			</li>
			<li>
				<a href="#03-02">class="flex left"</a>
			</li>
			<li>
				<a href="#03-03">class="flex right"</a>
			</li>
			<li>
				<a href="#03-04">class="flex top"</a>
			</li>
			<li>
				<a href="#03-05">class="flex bottom"</a>
			</li>
			<li>
				<a href="#03-06">class="flex center"</a>
			</li>
			<li>
				<a href="#03-07">class="flex reve"</a>
			</li>
		</ul>

		<div id="03-01"></div>
		<div class="code-wrap">
			<h4>class="flex <span class="line">left-right</span>"</h4>
			<p>
				最も使うclassです。left-right を付け加えると、
				<span class="line">最初の要素は一番左に、最後の要素は一番右に、間の要素は自動的に均等配置されます。</span>
				flex のみの自動配列のままだと、梱包要素の左右余白はCSSで指定してない数値なので、気持ち悪く見える場面があります。というかほぼ毎回そうです。
				そういった際に左右ピッタリ揃えるために<span class="line">left-right</span>を付け加えます。<br>
				flex とほぼワンセットと考えて良いです。
			</p>

			<div class="item-wrap flex left-right">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex <span class="line">left-right</span>"</p>
				<div class="item">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>

			<p style="padding-top: 4rem;">
				試しにこのまま item-wrap の左右にpaddingを加えてみましょう。
			</p>

			<div class="item-wrap flex left-right" style="padding-left: 2rem;padding-right: 2rem;">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex <span class="line">left-right</span>"</p>
				<div class="item">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>

			<p style="padding-top: 2rem;">
				<a href="#002">flex のみ振った時</a>と見比べてみてください。間隔が等しく開いて綺麗に見えませんか？
			</p>

		</div>
	</div><!--GROUP-->

<!--GROUP-->
	<div id="03-02"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">left</span>"</h4>
			<p>
				読んで時の如く。ただ左詰めになるだけです。<span class="line">ブログ一覧などの動的要素で、均等配置ではなく左側から順番に並べたい時</span>に使用します。
				ブログなどは、要素が1個の時があったり3個の時があったりと動的ですので、<a href="#003">こういった均等配列</a>では困るケースがあります。<span class="line">左に詰めながら出てきて欲しい。</span>そんな時に使います。使用頻度は低いです。<br>
				<br>
				左詰めになるのでmarginを設定しないとこうなります。
			</p>
			<div class="item-wrap flex left">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex <span class="line">left</span>"</p>
				<div class="item">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
			</div>

			<p style="padding-top: 2rem;">適切なmarginを与えてやります。</p>
			<div class="item-wrap flex left">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex <span class="line">left</span>"</p>
				<div class="item" style="margin-right: 2rem;">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
			</div>
		</div><!--CODE-->
	</div><!--GROUP-->

<!--GROUP-->
	<div id="03-03"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">right</span>"</h4>
			<p>
				読んで時の如く。こちらもただ右詰めになるだけです。
			</p>
		</div>
	</div><!--GROUP-->

<!--GROUP-->
	<div id="03-04"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">top</span>"</h4>
			<p>
				<a href="#002">ここで解説した</a><span class="line">横並びになった要素の高さが一番高い要素に合って揃う</span>を捨てる形になります。上方に揃います。
			</p>
			<div class="item-wrap flex left-right top">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex left-right <span class="line">top</span>"</p>
				<div class="item" ">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>
		</div>
	</div><!--GROUP-->

<!--GROUP-->
	<div id="03-05"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">bottom</span>"</h4>
			<p>
				下揃えになります。自分で作っといてなんだけどこれつかったことない。
			</p>
			<div class="item-wrap flex left-right bottom">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex left-right <span class="line">bottom</span>"</p>
				<div class="item" ">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>
		</div>
	</div><!--GROUP-->

<!--GROUP-->
	<div id="03-06"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">center</span>"</h4>
			<p>
				中央揃えになります。<span class="line">これよく使います。</span>便利。
			</p>
			<div class="item-wrap flex left-right center">
				<p style="margin-bottom: 2rem; width: 100%;">class="item-wrap flex left-right <span class="line">center</span>"</p>
				<div class="item" ">
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
					1個めのアイテム<br>
				</div>
				<div class="item">
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
					2個めのアイテム<br>
				</div>
				<div class="item">
					3個めのアイテム<br>
					3個めのアイテム<br>
					3個めのアイテム<br>
				</div>
			</div>
		</div>
	</div><!--GROUP-->


<!--GROUP-->
	<div id="03-07"></div>
	<div class="group">
		<div class="code-wrap">
			<h4>class="flex <span class="line">reve</span>"</h4>
			<p style="padding-bottom: 2rem;">
				<span class="line">SP表示などでワンカラムになった際に、順番を入れ替えられるclassです。</span>
				割と特殊なclassになります。ですが<span class="line">強力であり強烈です。</span>サイトで使わなかった事は恐らく無いです。
				<br><br>
				コードの掲載は省きますが例えばこんなレイアウト見たことありませんか？
			</p>

			<div class="card no01 flex left-right">
				<div class="img"></div>
				<div class="text">
					<h4>これはclass="card no01"です</h4>
					<p>テキストグループ 01 テキストグループ 01 テキストグループ 01 テキストグループ 01 テキストグループ 01 テキストグループ 01 テキストグループ 01 テキストグループ 01</p>
				</div>
			</div>

			<div class="card no02 flex left-right reve">
				<div class="text">
					<h4>これはclass="card no02"です</h4>
					<p>テキストグループ 02 テキストグループ 02 テキストグループ 02 テキストグループ 02 テキストグループ 02 テキストグループ 02 テキストグループ 02 テキストグループ 02</p>
				</div>
				<div class="img"></div>
			</div>


			<p style="padding-bottom: 2rem;">
				よく使われるレイアウトですね。ですが殆どの場合、これはスマートフォン表示だとワンカラムにしないといけません。<br>
				ワンカラムになった際、このレイアウトは順番的に<br><br>
				<span style="font-weight: 700">
				画像<br>
				↓<br>
				<span class="line">テキストグループ 01</span><br>
				↓<br>
				<span class="line">テキストグループ 02</span><br>
				↓<br>
				画像<br>
				</span><br>
				のように、テキストが2つ連続で並んでしまいます。理想としては、ワンカラムになったらテキストグループ 02の上にキャンディの画像を出して、<br><br>
				<span style="font-weight: 700">
				画像<br>
				↓<br>
				テキストグループ 01<br>
				↓<br>
				画像<br>
				↓<br>
				テキストグループ 02<br><br>
				</span>
				といった順序良い感じにしたいですね...<br>
				そんな時に reve を加えると、<span class="line">ワンカラムになった際にカラムの順序を入れ替える事ができます。</span><br>
				<span class="line">百聞は一見にしかず。ここを検証モードのiPhoneなどにして見てみてください。</span>
			</p>

	</div><!--GROUP-->

</div></section>



<!--****************************************************************************

	root wrap - end

********************************************************************************-->
</article></main>
<?php get_footer(); ?>
