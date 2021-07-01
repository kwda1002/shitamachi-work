<?php
/************************************************************************************************/
/* アイキャッチ画像 */
/************************************************************************************************/
add_theme_support( 'post-thumbnails' );


/************************************************************************************************/
/* <head>内の不要な記述を削除 */
/************************************************************************************************/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);


/************************************************************************************************/
/* 関連する投稿 */
/************************************************************************************************/
function related_post_list($show_num) {
    global $post;
    $tags = wp_get_post_tags($post->ID);
    $tagIDs = array();
    if ($tags) {
        $tagcount = count($tags);
        for ($i = 0; $i < $tagcount; $i++) {
            $tagIDs[$i] = $tags[$i]->term_id;
        }
        $args=array(
            'tag__in' => $tagIDs,
            'post__not_in' => array($post->ID),
            'showposts'=>$show_num,
            'caller_get_posts'=>1
        );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            echo '<h3>関連する投稿</h3><ul class="sideList sec">';
            while ($my_query->have_posts()) {
                $my_query->the_post();
                echo '<li><a href="';
                the_permalink();
                echo '" title="';
                the_title_attribute();
                echo '" rel="nofollow">';
                the_title();
                echo '</a></li>';
            }
            echo '</ul>';
            wp_reset_query();
        }else {
        }
    }
}

/************************************************************************************************/
/* 固定ページ内 サイトURL呼び出し用ショートコード */
/************************************************************************************************/
function scGetHomeURL() {
  return esc_url( get_home_url() );
}
add_shortcode('home_url', 'scGetHomeURL');

function scGetTempDirURL() {
  return get_template_directory_uri();
}
add_shortcode('template_url', 'scGetTempDirURL');


/************************************************************************************************/
/* コンタクトフォーム　メールアドレス確認用 */
/************************************************************************************************/
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
$tag = new WPCF7_Shortcode( $tag );
$name = $tag->name;
$value = isset( $_POST[$name] )
? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
: '';
if ($name == "your-email"){
$my_email_confirm=$value;
}
if ($name == "your-email_confirm" && $my_email_confirm != $value){
$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
}

return $result;
}

