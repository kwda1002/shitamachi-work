<?php get_header(); ?>
<div id="main">
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p class="breadcrumbs">','</p>');
} ?>

<h2><?php
$date = single_month_title('',false);
$pos  = strpos($date, '月');
echo mb_substr($date,$pos+1).'年'.mb_substr($date,0,$pos+1);
?>の投稿一覧</h2>
<?php get_template_part('tpl','loop'); ?>

<?php get_template_part('tpl','tablenav'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>