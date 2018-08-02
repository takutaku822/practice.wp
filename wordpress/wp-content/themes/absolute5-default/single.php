
<?php
	if ( in_category('blog') ) { //特定のカテゴリの場合
		get_template_part( '/03-single-page/single-blog' , false );
	} elseif ( in_category('news') ) { //特定のカテゴリ2の場合
		get_template_part( '/03-single-page/single-news' , false );
	} else { //それ以外の場合
		get_template_part( '/03-single-page/single-blog' , 'normal');
	}
?>