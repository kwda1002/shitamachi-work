<?php
// titleタグ出力
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// ページャーのタイトル消す
function archive_navi_template($template){
	$template = '
	<nav class="columList__pager %1$s" role="navigation">
		<div class="columList__pager__links">%3$s</div>
	</nav>';
	return $template;
}
add_action('navigation_markup_template', 'archive_navi_template');

function wp_document_title_parts( $title ) {
    if ( is_home() || is_front_page() ) {
        unset( $title['tagline'] ); // キャッチフレーズを出力しない
    } else if ( is_category() ) {
        $title['title'] = '「' . $title['title'] . '」カテゴリーの記事一覧';
    } else if ( is_tag() ) {
        $title['title'] = '「' . $title['title'] . '」タグの記事一覧';
    } else if ( is_archive() ) {
        $title['title'] = $title['title'] . 'の記事一覧';
    }
    return $title;
}
add_filter( 'document_title_parts', 'wp_document_title_parts', 10, 1 );

function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'column'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>