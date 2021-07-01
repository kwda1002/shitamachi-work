<?php get_header();?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
<section class="columns">
    <article>
        <div class="columns__heading">
            <h2 class="heading_04"><?php the_title(); ?></h2>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <!-- <p><?php the_category(', '); ?></p> -->
        </div>
        <div class="columns__detail">
            <div class="columns__detail__image">
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
            </div>
            <p><?php the_content('Read more'); ?></p>
        </div>
    </article>
    <div class="columns__pager">
        <ul>
            <li class="prev"><?php previous_post_link('%link','%title'); ?></li>
            <li class="next"><?php next_post_link('%link','%title'); ?></li>
        </ul>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
