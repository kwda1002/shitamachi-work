<!-- <p class="columList__aside__title">テーマ一覧</p>
<ul>
<?php wp_list_categories('orderby=count&order=desc&show_count=1&title_li='); ?>
</ul> -->
<p class="columList__aside__title">コラムテーマ一覧</p>
<ul>
<?php
  $posttags = get_tags();
  if ($posttags) {
    foreach($posttags as $tag) {
      echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> ('. $tag->count .')</li>';
    }
  }
?>
</ul>
<p class="columList__aside__title">アーカイブ</p>
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>