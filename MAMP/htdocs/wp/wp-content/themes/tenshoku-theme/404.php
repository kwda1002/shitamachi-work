<?php get_header(); ?>
<div id="main">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p class="breadcrumbs">','</p>');
} ?>

<h2>ページが見つかりません</h2>
<p>ただ今ページの準備中です</p>

<?php get_template_part('tpl','cvbox'); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>