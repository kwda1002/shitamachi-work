<?php get_header(); ?>
<div id="main">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p class="breadcrumbs">','</p>');
} ?>

<h2>テーマ「<?php single_tag_title( ); ?>」の投稿一覧</h2>
<?php get_template_part('tpl','loop'); ?>

<?php get_template_part('tpl','tablenav'); ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>