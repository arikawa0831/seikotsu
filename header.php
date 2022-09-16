<!doctype html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="no">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:type" content="article">
  <meta property="og:locale" content="jp_JP">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/public/img/favicon.ico">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/style.min.css?001">
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__logo">
      <a href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_template_directory_uri(); ?>/public/img/logo.png" alt="">
      </a>
    </div>
    <div class="l-header__menu pc-only">
      <ul>
        <li>
          <?php if(is_front_page()) { ?>
          <a href="#area"></a>
          <?php }else{ ?>
          <a href="<?php echo home_url(); ?>#area"></a>
          <?php } ?>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/price"></a>
        </li>
      </ul>
      <div class="l-header__menu__studio">
        <a href="" target="_blank" rel="noopener noreferrer"></a>
      </div>
    </div>
    <nav class="l-header-sp sp-only" id="l-header-sp">
      <div class="l-header-sp__menu">
        <ul>
          <li>
            <?php if(is_front_page()) { ?>
            <a href="#area"></a>
            <?php }else{ ?>
            <a href="<?php echo home_url(); ?>#area"></a>
            <?php } ?>
          </li>
          <li>
            <a href="" target="_blank" rel="noopener noreferrer"></a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/studio"></a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/woman"></a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/dance"></a>
          </li>
          <li>
            <a href="" target="_blank" rel="noopener noreferrer"></a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/martial"></a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/price"></a>
          </li>
          <li>
            <a href=""></a>
          </li>
          <li>
            <a href=""></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hamburger_btn sp-only" id="js-hamburger">
      <span class="hamburger_line hamburger_line_1"></span>
      <span class="hamburger_line hamburger_line_2"></span>
      <span class="hamburger_line hamburger_line_3"></span>
    </div>
  </header>
