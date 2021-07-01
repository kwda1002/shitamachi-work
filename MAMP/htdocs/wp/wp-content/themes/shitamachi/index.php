<?php get_header();?>

<div class="columList">
    <h2 class="heading_02">コラム一覧</h2>
    <section class="columList__list">
	<ul>
	<?php
		// if ( have_posts() ) {
			while ( have_posts() ){
				the_post();
	?>
		<li>
			<a href="<?php the_permalink(); ?>">
			<div class="columList__list__thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
			<div class="columList__list__discription">
				<h3 class="heading_03">
					<?php
						if(mb_strlen($post->post_title, 'UTF-8')>40){
							$title= mb_substr($post->post_title, 0, 40, 'UTF-8');
							echo $title.'…';
						}else{
							echo $post->post_title;
						}
					?>
				</h3>
				<p>
					<?php
						if(mb_strlen($post->post_content,'UTF-8')>120){
							$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 120,'UTF-8'));
							echo $content.'…';
						}else{
							echo str_replace('\n', '', strip_tags($post->post_content));
						}
					?>
				</p>
			</div>
			</a>
		</li>
	<?php
			// }
		}
	?>
	</ul>
	<?php the_posts_pagination(array(
		'prev_text' => '&lt;',
		'next_text' => '&gt;',
	)); ?>
	</section>
    <aside class="columList__aside">
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer();?>