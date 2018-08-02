<?php

////////////////////////////////////////
////////////////////////////////////////
////////////////  全般  ////////////////
///////////////////////////////////////
////////////////////////////////////////

//アイキャッチ画像の使用
add_theme_support('post-thumbnails');

//文字数の制限
function new_excerpt_mblength($length) {
	return 400;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

//管理バー非表示
function my_function_admin_bar(){
	return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//SVG画像の使用
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
		return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Android Chromeで&nbsp;が・に表示される不具合対策
function replace_nbsp_to_ensp($the_content) {
	global $post;
		$the_content = str_replace('&nbsp;', '&ensp;', $the_content);
	return $the_content;
}
add_filter('the_content','replace_nbsp_to_ensp');

//カテゴリ別アーカイブ
function extend_date_archives_add_rewrite_rules($wp_rewrite) {
$rules = array();
$structures = array(
	$wp_rewrite->get_category_permastruct() . $wp_rewrite->get_date_permastruct(),
	$wp_rewrite->get_category_permastruct() . $wp_rewrite->get_month_permastruct(),
	$wp_rewrite->get_category_permastruct() . $wp_rewrite->get_year_permastruct(),
);
foreach( $structures as $s ){
	$rules += $wp_rewrite->generate_rewrite_rules($s);
}
	$wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'extend_date_archives_add_rewrite_rules');


////////////////////////////////////////////
////////////////////////////////////////////
////////////////  管理画面  ////////////////
////////////////////////////////////////////
////////////////////////////////////////////

//ビジュアルエディタのCSS
add_editor_style();

//ビジュアルエディタのCSSをキャッシュさせない
function extend_tiny_mce_before_init( $mce_init ) {
    $mce_init['cache_suffix'] = 'v='.time();
    return $mce_init;
}
add_filter( 'tiny_mce_before_init', 'extend_tiny_mce_before_init' );

// 専用CSSを読み込ませてログイン画面をカスタマイズ
function custom_login() {
$files = '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/login.css" />';
	echo $files;
}
add_action( 'login_enqueue_scripts', 'custom_login' );

//テキストエディタの選択を不可にする
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = ture;
		return $init;
});

// ユーザー権限別管理画面CSS
function wp_custom_admin_js() {
	if ( current_user_can('editor') ) {
		echo "\n" . '<link rel="stylesheet" href="' . get_template_directory_uri() . '/admin-editor.css" type="text/css" />' . "\n";
	} else if ( current_user_can('administrator') ) {
		echo "\n" . '<link rel="stylesheet" href="' . get_template_directory_uri() . '/admin-master.css" type="text/css" />' . "\n";
	} else if ( current_user_can('author') ) {
		echo "\n" . '<link rel="stylesheet" href="' . get_template_directory_uri() . '/admin-author.css" type="text/css" />' . "\n";
	}
}
add_action('admin_head', 'wp_custom_admin_js', 100);


//tinyMCE 不要なh削除
function custom_editor_settings( $initArray ){
	$initArray['block_formats'] = "見出しh2=h2;見出しh3=h3;";
		return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );


////////////////////////////////////////////
////////////////////////////////////////////
////////////////	投稿		////////////////
////////////////////////////////////////////
////////////////////////////////////////////

//自動生成されるタグを制御する
add_action('init', function() {
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_content', 'wpautop');
});

//記事に出力される画像まわりのみ<p>削除
function remove_p_on_images($content){
	return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

//画像のタイトル削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );

function remove_image_attribute( $html ){
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
	$html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
	return $html;
}
return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';


///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////////    ページネーション    ////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
$showitems = ($range * 2)+1;

global $paged;
if(empty($paged)) $paged = 1;

//ページ情報の取得
if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
		$pages = 1;
	}
}

if(1 != $pages) {
echo '<ul class="pagination" role="menubar" aria-label="Pagination">';

//先頭へ
echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';

//1つ戻る
echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';

//番号つきページ送りボタン
for ($i=1; $i <= $pages; $i++)     {
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
		echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
	}
}

//1つ進む
echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';

//最後尾へ
echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
echo '</ul>';
}
}

function get_page_slug($page_id) {
		$page = get_page($page_id);
		return $page->post_name;
	}
?>