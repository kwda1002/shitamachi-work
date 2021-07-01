</div>

<div id="pagetop"><a class="pagetopBtn" href="#header">&uArr; PAGE TOP</a></div>

<div id="footer">
	<div class="inner">
		<div class="company"><h5>お問い合わせ</h5>
				<p><a href="<?php echo home_url(); ?>/company">会社概要・プロフィール</a></p><br>

			<p>メールでのお問い合わせはこちら<br>
				<span style="font-size:17px;"><a class="button" href="<?php echo home_url(); ?>/contact">お問い合わせフォーム &raquo;</a></span><br>
				<!--お電話でのお問い合わせはこちら<br>
				<span style="font-size:28px;">xx-xxxx-xxxx</span></p>-->
		</div>
	<div class="sitemap"><h5>サイトマップ</h5>
		<div class="sitemap_list01">
			<ul>
				<li><a href="<?php echo home_url(); ?>/">トップページ</a></li>
				<li><a href="<?php echo home_url(); ?>/privacy">プライバシーポリシー</a></li>
				<li><a href="<?php echo home_url(); ?>/tokusho">特商法に基づく表示</a></li>
			</ul>
		</div>
		<div class="sitemap_list02">
		</div>
	</div>
	<p id="copy">Copyright&copy; <a href="<?php echo home_url( '/' ); ?>">したまち仕事舎</a></p>
	<!-- /[.inner] --></div>
<!-- /[#footer] --></div>
<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/lib.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.flexslider-min.js"></script>
<script>
$(window).load(function() {
$('.flexslider').flexslider({animation: "fade",animationLoop: true,pauseonhover: false,slideshowSpeed: 5000,animationDuration: 50000});
});
</script>
<!-- Social Button Scripts -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script>
  window.___gcfg = {lang: 'ja'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- /Social Button Scripts -->
</body>
</html>