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
  <?php wp_head(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Common.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/Index.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet" type="text/css">
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="inner">

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

    </div><!-- /.inner -->

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "#">
<!-- saved from url=(0040)http://www.cnruss.com/Russian/index.aspx -->
<html xmlns="#">


  <form name="aspnetForm" method="post" action="#" id="aspnetForm">

    <div class="head">
      <div class="top">
        <div class="area">
          <h1 class="fl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          </h1>
          <div class="lang fr fw">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cn.png">
            </a>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ru.png">
            </a>
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
    <div class="content">
      <div class="search">
        <div class="ss1 fl">
          <input class="k2 lf" value="поиск по сайту:" onfocus="this.value=&#39;&#39;;" type="text" id="ShearText">
          <a href="javascript:;" onclick="ShearcKey()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/soso.gif" border="0"></a>
        </div>
        <div class="ss2 fr">
          <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/sun.jpg" width="113" height="41" border="0"></a>
        </div>
      </div>
      <div class="clear"></div>
      <!-- main slider -->
      <div id="kinMaxShow" class="mb10">
        <div>
          <a href="#" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/201606281429579921.jpg" width="1020" height="270"></a>
        </div>
        <div>
          <a href="#" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/201606281428282006.jpg" width="1020" height="270"></a>
        </div>
        <div>
          <a href="#" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/20160628142249964.jpg" width="1020" height="270"></a>
        </div>
        <div>
          <a href="#" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/201606281345452842.jpg" width="1020" height="270"></a>
        </div>

      </div>
  </header><!-- /header -->

  <section role="main">
    <div class="inner">
