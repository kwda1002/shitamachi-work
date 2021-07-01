<!doctype html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?date=20190724">

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
<header class="header">
    <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="" width="118"></a></h1>
    <nav>
        <ul>
            <li><a href="<?php echo home_url(); ?>/#messege">代表紹介</a></li>
            <li><a href="<?php echo home_url(); ?>/#company">事業内容・会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/column">コラム</a></li>
            <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
        </ul>
    </nav>
</header>

