  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
  <div class="postBox">
    <div class="postThumbnail"><a href="<?php the_permalink(); ?>">
    <?php
      if ( has_post_thumbnail()) {
      the_post_thumbnail('thumbnail');
      } else {
      echo '<img src="' . get_bloginfo('template_url') .'/images/no_image.gif" alt="">';
      };
      ?></a>
    </div>
    <div class="postContent">
    <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <p class="date"><?php the_time('Y.m.d (D)'); ?></p>
    <?php the_excerpt(); ?>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>