<?php get_header(); ?>

<section class="page">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <h2 class="heading_02"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>