<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php
global $page, $paged;
if(is_front_page()):
wp_title('|',true,'right');
elseif(is_single()):
wp_title('|',true,'right');
elseif(is_page()):
wp_title('|',true,'right');
elseif(is_archive()):
wp_title('|',true,'right');
elseif(is_search()):
wp_title('|',true,'right');
elseif(is_404()):
echo'404 |';
endif;
if($paged >= 2 || $page >= 2):
echo'-'.sprintf('%sページ',
max($paged,$page));
endif;
?>
</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="all">
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138243087-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138243087-1');
</script>
</head>
<body>
	<div id="header">
		<div id="lead"><h1>人と地域をつなぐ仕事さがし</h1></div>
		<p class="logo"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri() ?>/images/common/header/logo.jpg" alt="logo"></a></p>
		<div class="tel"><a href="<?php echo home_url(); ?>/contact"><img src="<?php echo get_template_directory_uri() ?>/images/common/header/tel.jpg" alt="お問い合わせ"></a></div>

		<div id="gnavi">
		<ul>
			<li><a class="gNav" href="<?php echo home_url(); ?>/">トップページ</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/sitamachi-sigotosya">したまち仕事舎</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/yatoikata">やといかた</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/hatarakikata">はたらきかた</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/kigyo-chiiki">企業と地域</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/menu-ryokin">メニュー料金</a></li>
			<li><a class="gNav" href="<?php echo home_url(); ?>/voices">お客さまの声</a></li>
			<li><a style="font-size:10.5px; class="gNav" href="<?php echo home_url(); ?>/company">会社概要・プロフィール</a></li>
		</ul>
		<!-- /[#gnavi] --></div>
	<!-- /[#header] --></div>

	<div id="contents">

<?php if ( is_home() || is_front_page() ) : ?>
	<div class="flexslider" id="keyVisual">
	    <ul class="slides">
			<li><img src="<?php echo get_template_directory_uri() ?>/images//common/header/01.jpg" alt=""></li>
		</ul>
	</div>
<?php endif; ?>