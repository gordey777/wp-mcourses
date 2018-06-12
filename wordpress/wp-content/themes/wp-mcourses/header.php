<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container inner">

      <div class="logo">
        <?php if ( !is_front_page() && !is_home() ){ ?>
          <a href="<?php echo home_url(); ?>">
        <?php } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
        <?php if ( !is_front_page() && !is_home() ){ ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

      <nav class="lang-nav" role="navigation">
        <?php //wpeLangNav(); ?>
      </nav><!-- /nav -->
      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
      </nav><!-- /nav -->
      <div class="head-tel"><button class="callback"></button><a href="tel:" class="tel">+38 <span>97</span>3331489</a></div>
    </div><!-- /.inner -->
  </header><!-- /header -->

