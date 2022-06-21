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
        <img src="" alt="">
      </a>
    </div>
    <div class="l-header__menu pc-only">
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>/concept">コンセプト</a>
        </li>
      </ul>
    </div>
    <nav class="l-header-sp sp-only" id="l-header-sp">
      <div class="l-header-sp__menu">
        <a href="<?php echo home_url(); ?>/concept/">コンセプト</a>
      </div>
    </nav>
    <div class="hamburger_btn sp-only" id="js-hamburger">
      <span class="hamburger_line hamburger_line_1"></span>
      <span class="hamburger_line hamburger_line_2"></span>
      <span class="hamburger_line hamburger_line_3"></span>
    </div>
  </header>
