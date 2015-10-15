<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
    <?php wp_head(); ?>
    <!--[if lte IE 8]>
      <script src="js/html5shiv.js"></script>
      <script src="js/old-ie.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>

  <section>
    <header class="my-container">
      <a class="my-logo-link" href="<?php echo home_url(); ?>"></a>
      <div class="logo">
        <div class="logo-fig"></div>
        <i class="logo-pane"></i>
      </div>

      <noindex>
        <form action="" method="post" class="log-form header-log-form">

        </form>
        <a href="http://777casino-vulkan.com/go/reg"  class="header-reg-but-area"><span class="header-reg-but">Регистрация</span></a>
      </noindex>


      <div class="clear"></div>

      <nav class="nav clear_fix">
        <?php wpeHeadNav(); ?>
      </nav>
    </header>

    <div class="my-container">

      <div class="h-gallery h-gallery-wrap">
        <div class="h-gallery-gal"></div>
      </div>
