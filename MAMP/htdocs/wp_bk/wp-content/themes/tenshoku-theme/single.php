<?php get_header(); ?>
<div id="main">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p class="breadcrumbs">','</p>');
} ?>

<?php if(have_posts()): ?>
<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<div class="blogDate"><?php the_time('Y.m.d (D)'); ?></div>
      <?php
      if ( has_post_thumbnail()) {
      the_post_thumbnail('large');
      } else {
        if ( in_category( $blog ) ):
          echo '<img src="' . get_bloginfo('template_url') .'/images/no_image.gif" alt="">';
        else:
        endif;
      };
      ?>

<div class="socialBlock01">
<div class="social-inner">
<!-- Facebook -->
<div class="socialbox facebook-box">
<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
<!-- /Facebook -->

<!-- Twitter -->
<div class="socialbox twitter-box">
<a href="https://twitter.com/share" class="twitter-share-button twitter-count-vertical" data-lang="ja" data-count="vertical">ツイート</a>
</div>
<!-- /Twitter -->

<!-- はてなブックマーク -->
<div class="socialbox hatena-box">
<a href="http://b.hatena.ne.jp/entry/<?php the_permalink();?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title();?>" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
</div>
<!-- /はてなブックマーク -->

<!-- Google+ -->
<div class="socialbox gplus-box">
<div class="g-plusone" data-size="tall"></div>
</div>
<!-- /Google+ -->
</div>
</div>

<div class="sec">
<?php the_content();?>
</div>

<div class="socialBlock02">
<p class="pb5 alignCenter">▼シェアをお願い致します！▼</p>
<div class="social-inner">
<!-- Facebook -->
<div class="socialbox facebook-box">
<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
<!-- /Facebook -->

<!-- Twitter -->
<div class="socialbox twitter-box">
<a href="https://twitter.com/share" class="twitter-share-button twitter-count-vertical" data-lang="ja" data-count="vertical">ツイート</a>
</div>
<!-- /Twitter -->

<!-- はてなブックマーク -->
<div class="socialbox hatena-box">
<a href="http://b.hatena.ne.jp/entry/<?php the_permalink();?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title();?>" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
</div>
<!-- /はてなブックマーク -->

<!-- Google+ -->
<div class="socialbox gplus-box">
<div class="g-plusone" data-size="tall"></div>
</div>
<!-- /Google+ -->
</div>
</div>

<?php endwhile; ?>
<?php endif; ?>


<?php related_post_list(5); ?>

<p class="pb10">現在の記事： <?php the_title(); ?></p>

<!--▼ページ送り▼-->
<?php
$prevpost = get_adjacent_post(true, '', true); //前の記事
$nextpost = get_adjacent_post(true, '', false); //次の記事
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<ul class="nextBox">
<?php
 if ( $prevpost ) { //前の記事が存在しているとき
  echo '<li class="prev"><p class="thumb"><a href="' . get_permalink($prevpost->ID) . '" rel="nofollow">' . get_the_post_thumbnail($prevpost->ID, 'thumbnail') . '</a></p><p class="title"><a href="' . get_permalink($prevpost->ID) . '" rel="nofollow">&laquo; 前の記事：<br>' . get_the_title($prevpost->ID) . '</a></p></li>';
 } else { //前の記事が存在しないとき
  echo '';
 }
 if ( $nextpost ) { //次の記事が存在しているとき
  echo '<li class="next"><p class="thumb"><a href="' . get_permalink($prevpost->ID) . '" rel="nofollow">' . get_the_post_thumbnail($nextpost->ID, 'thumbnail') . '</a></p><p class="title"><a href="' . get_permalink($nextpost->ID) . '" rel="nofollow">：次の記事 &raquo;<br>' . get_the_title($nextpost->ID) . '</a></p></li>';
 } else { //次の記事が存在しないとき
  echo '';
 }
?>
</ul>
<?php } ?>
<!--▲ページ送り▲-->

<?php get_template_part('tpl','cvbox'); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>