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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->

  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Common.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Index.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->

<div class="wrapper">
  <header role="banner">
    <div class="head">
      <div class="top">
        <div class="area">
          <h1 class="fl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          </h1>
          <div class="lang fr fw">
<!--             <a href="#">
  <img src="<?php echo get_template_directory_uri(); ?>/img/cn.png">
</a>
<a href="#">
  <img src="<?php echo get_template_directory_uri(); ?>/img/ru.png">
</a> -->
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="menu">
        <div class="area" id="AreaNav">
                <?php wpeHeadNav(); ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </header><!-- /header -->


  <div class="content">

      <div class="search">

        <?php get_search_form(); ?>
        <div class="ss2 fr">
          <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/sun.jpg" width="113" height="41" border="0"></a>


        </div>
      </div>


      <div class="clear"></div>
      <!-- main slider -->


      <div id="kinMaxShow" class="mb10">
      <?php if( have_rows('header_slider', 15) ): ?>
        <?php while ( have_rows('header_slider', 15) ) : the_row(); ?>
          <div>
            <a href="<?php the_sub_field('link'); ?>" target="_blank">
            <?php $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1020" height="270">
            <?php endif; ?>
            </a>
          </div>
        <?php  endwhile;
        else : ?>
      <?php endif; ?>

      </div>


      <div class="clear"></div>

