<?php get_header(); ?>
  <div class="layout-content layout-content-light_top">
    <!--?php include ('sidebar-login.php'); ?-->

    <div class="widget">
      <div class="textwidget"></div>
    </div>

    <h1 class="header-h1"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>

    <?php get_template_part('loop'); ?>

    <div class="clear_fix"></div>

    <?php get_template_part('pagination'); ?>

  </div>
<?php get_footer(); ?>
