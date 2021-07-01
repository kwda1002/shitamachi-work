<?php get_header(); ?>
<div id="main">
<div class="topBnrFront">
  <div class="linkBox fl mr15">
    <div class="linkBoxImg"><a href="<?php echo home_url(); ?>/yorozu-soudan"><img width="195" height="150" src="<?php bloginfo('template_url'); ?>/images/home/02.jpg" alt="採用・人事よろず相談"></a></div>
    <p class="boxInner">人が集まらない、すぐに辞めてしまう。下町ならではの働きたくなる職場を考えます。</p>
  </div>
  <div class="linkBox fl mr15">
    <div class="linkBoxImg"><a href="<?php echo home_url(); ?>/hataraku-workshop"><img width="195" height="150" src="<?php bloginfo('template_url'); ?>/images/home/03.jpg" alt="働くことを考えるワークショップ"></a></div>
    <p class="boxInner">クリエイター、クラフトマン、地域密着型企業。色々な方々と語り合い、働き方を考えます。</p>
  </div>
  <div class="linkBox fl">
    <div class="linkBoxImg"><a href="<?php echo home_url(); ?>/omise-advice"><img width="195" height="150" src="<?php bloginfo('template_url'); ?>/images/home/04.jpg" alt="お店づくりアドバイス"></a></div>
    <p class="boxInner">夢だった小さなショップを持ったけど売上が…見せ方、売り方、人材活用方法を考えます。</p>
  </div>
</div>

<h2><a href="<?php echo home_url(); ?>/column">人と地域に役立つ新着コラム</a></h2>
<div class="news">
  <?php if(have_posts()): ?>
  <?php query_posts('showposts=5&cat=-2'); ?>
  <?php while(have_posts()): the_post(); ?>
  <div class="postBox">
    <div class="postThumbnail"><a href="<?php the_permalink(); ?>">
    <?php
      if ( has_post_thumbnail()) {
      the_post_thumbnail('thumbnail');
      } else {
      echo '<img src="' . get_bloginfo('template_url') .'/images/no_image.gif" alt="" title="">';
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
</div>

<h2>人が集まる、会社やお店が元気になる、街が元気になる。そんな循環を創り出します。</h2>
<div class="mb30 clear">
  <img width="180" height="180" class="pic_right round" src="<?php bloginfo('template_url'); ?>/images/home/09.jpg" alt="">
  <p>モノづくり企業や、下町に根ざした企業の人手不足や後継者不足が課題となっています。会社の存在価値や、仕事の大切さ、楽しさがきちんと伝わっていないことも原因の一つです。一方で働き方改革ということが言われています。業務効率化や残業しないだけの働き方改革ではなく、「何のために」働くのかを考える機会としてみましょう。仕事の価値に共感する、地域の活性化に貢献する、いろいろな「理由」があると思います。下町で働く場と、下町で働きたい人を結びつける。「雇う、育てる、見守る」都市の地域コミュニティづくりを応援していきます。</p>
</div>

<h2>下町育ち、お祭り大好き。モノに触れ、人に関わってきた私がキャリアをデザインします。</h2>
<div class="mb30 clear">
  <img width="180" height="180" class="pic_left round" src="<?php bloginfo('template_url'); ?>/images/home/10.jpg" alt="">
  <p>台東区在住。1993年高島屋入社、建装事業の担当となり、家具や木工事などの職人さんの高い技術力を目の当たりにする。その後、婦人雑貨売場に配属となり幼少期に身近に存在した製造業や問屋の方々と一緒にお仕事をさせていただく機会を得る。2007年より人事部門を担当、採用から配属、異動、昇進など社員の方々のキャリア形成に深く関わる。「土日をきちんと休んでお祭りにどっぷり浸かりたい」という不純な動機と、「自分を育ててくれた地元の困りごとを解決したい」という高尚な理由から、高島屋を卒業、地元×人事でオリジナルビジネスを構築。</p>
</div>


<h2>「雇う・育てる・見守る」人と地域をつなぐ仕事を創っていきます。</h2>
<div class="topBnr">
  <div class="linkBox fl mr15">
    <div class="linkBoxImg"><img width="195" height="100" src="<?php bloginfo('template_url'); ?>/images/home/11.jpg" alt="地域・職種を限定した仕事探し"></div>
    <p class="boxInner">地域メディアや人材紹介会社と連携。職場のストーリーを伝え、新しい担い手につないで行きます。</p>
    <p><a style="font-size:11.5px;" class="button" href="<?php echo home_url(); ?>/chiikisyokusyu-sigotosagasi">地域・職種を限定した仕事探し</a></p>
  </div>
  <div class="linkBox fl mr15">
    <div class="linkBoxImg"><img width="195" height="100" src="<?php bloginfo('template_url'); ?>/images/home/12.jpg" alt="学校様向けワークショップ"></div>
    <p class="boxInner">どこで？何のため？誰のため？働く目的をきちんと意識した就活生のキャリアプランを考えます。</p>
    <p><a class="button" href="<?php echo home_url(); ?>/gakko-workshop">学校様向けワークショップ</a></p>
  </div>
  <div class="linkBox fl">
    <div class="linkBoxImg"><img width="195" height="100" src="<?php bloginfo('template_url'); ?>/images/home/13.jpg" alt="地域との関わり方コンサル"></div>
    <p class="boxInner">地域に根ざす企業活動によって、人財確保や企業価値の向上につながります。その方策を考えます。</p>
    <p><a class="button" href="<?php echo home_url(); ?>/chiiki-consul">地域との関わり方コンサル</a></p>
  </div>
</div>


<div class="news">
<h2><a href="<?php echo home_url(); ?>/news">お知らせ</a></h2>
  <?php if(have_posts()): ?>
  <?php query_posts('showposts=3&cat=2'); ?>
  <?php while(have_posts()): the_post(); ?>
  <dl><dt><?php the_time('Y.m.d (D)'); ?></dt>
  <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

  <!-- /[#mainarea] -->
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>