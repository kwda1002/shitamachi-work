<div id="side">
				<ul class="sideBnr">
					<li><a href="<?php echo home_url(); ?>/report"><img width="265" height="150" src="<?php bloginfo('template_url'); ?>/images/common/side/05.jpg" alt="小冊子 お祭り好きが教える「お神輿の力学に学ぶ人材活用」" /></a></li>
				</ul>
				<ul class="sideBnr">
					<li><a href="<?php echo home_url(); ?>/yorozu-soudan"><img width="265" height="120" src="<?php bloginfo('template_url'); ?>/images/common/side/06.jpg" alt="採用・人事よろず相談" /></a></li>
					<li><a href="<?php echo home_url(); ?>/hataraku-workshop"><img width="265" height="120" src="<?php bloginfo('template_url'); ?>/images/common/side/07.jpg" alt="働くことを考えるワークショップ" /></a></li>
					<li><a href="<?php echo home_url(); ?>/omise-advice"><img width="265" height="120" src="<?php bloginfo('template_url'); ?>/images/common/side/08.jpg" alt="お店づくりアドバイス" /></a></li>

				</ul>

				<h4>コラムテーマ一覧</h4>
				<ul class="sideList">
				<?php
				  $tags = get_terms('post_tag', 'hide_empty=1');
				  foreach($tags as $value):
				?>
				<li><a href="<?php echo get_tag_link($value->term_id); ?>" rel="nofollow"><?php echo $value->name; ?></a> (<?php echo $value->count; ?>)</li>
				<?php
				  endforeach;
				?>
				</ul>

				<h4>過去のコラム</h4>
<!-- 				<ul class="sideList"><?php wp_get_archives('type=monthly&show_post_count=1&limit=12'); ?></ul>
 -->
				<div class="sideList"><select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
					<option value=""><?php echo attribute_escape(__('Select Month')); ?></option> 
					<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
				</select></div>

 				<h4>主なコラム</h4>
				<ul class="sideList">
 				</ul>

</div>