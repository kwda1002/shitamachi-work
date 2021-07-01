<?php get_header(); ?>
<div id="main">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p class="breadcrumbs">','</p>');
} ?>

<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<?php the_content();?>
<?php endwhile; ?>

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

<?php get_template_part('tpl','cvbox'); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>