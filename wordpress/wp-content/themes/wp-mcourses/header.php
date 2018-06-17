<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<?php $front__id = (int)(get_option( 'page_on_front' )); ?>
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
    <div class="container bottom-shadow">
      <div class="row flex_row">
        <div class="col-lg-3">



            <div class="logo col-3">
              <?php if ( !is_front_page() && !is_home() ){ ?>
                <a href="<?php echo home_url(); ?>">
              <?php } ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( !is_front_page() && !is_home() ){ ?>
                </a>
              <?php } ?>
            </div>
            <div class="header-slogan col-9"><?php the_field('header_slogan', $front__id);?></div>

        </div>
        <nav class="lang-nav col-lg-1" role="navigation">
          <ul class="header--lang">
            <li class="lang-item lang-item-28 lang-item-ru lang-item-first current-lang menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-3802-ru">
              <a href="#" hreflang="ru-RU" lang="ru-RU">Рус</a>
            </li>
            <li class="lang-item lang-item-12 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-3802-en">
              <a href="#" hreflang="en-US" lang="en-US">Укр</a>
            </li>
          </ul>
          <?php //wpeLangNav(); ?>
        </nav>
        <nav class="main-nav  col-lg-5" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav>
        <div class="head-tel col-lg-3">
          <div class="call-wrapp col-3">
            <button title="Callback" class="btn callback"></button>
          </div>
          <a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('header_phone', $front__id)); ?>" class="tel-link col-9"><?php the_field('header_phone', $front__id);?></a>
        </div>



      </div>
    </div>
  </header>

