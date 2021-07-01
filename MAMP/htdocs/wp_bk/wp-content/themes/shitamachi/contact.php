<?php
/*
Template Name: コンタクトページ用テンプレート
*/
get_header(); ?>

<section class="info">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>

            <h2 class="heading_02"><?php the_title(); ?></h2>
            <p class="info__discription">メールによるお問い合わせは随時受付けておりますのでお気軽にお問い合わせください。以下のフォームに必要事項をご入力の上、内容を確認して送信してください。</p>
            <div class="info__form">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
</section>

<footer class="footer">
    <p class="copyright">Copyright © したまち仕事舎</p>
</footer>