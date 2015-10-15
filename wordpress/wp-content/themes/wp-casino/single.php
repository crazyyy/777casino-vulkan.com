<?php get_header(); ?>
  <div class="layout-content layout-content-light_top">

    <div class="rate-games">
      <h3 class="rate-h3">Топ</h3>


      <a class="rate-game" href="http://777casino-vulkan.com/igrovye-avtomaty/rock-climber.html">
        <img width="188" height="125" src="./single_files/rock-climber-logo.jpg" class="attachment-post-thumbnail wp-post-image" alt="Игровой автомат Rock Climber">
        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
        <div class="title-rate-game">Rock Climber</div>
      </a>


      <a class="rate-game" href="http://777casino-vulkan.com/igrovye-avtomaty/rock-climber.html">
        <img width="188" height="125" src="./single_files/rock-climber-logo.jpg" class="attachment-post-thumbnail wp-post-image" alt="Игровой автомат Rock Climber">
        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
        <div class="title-rate-game">Rock Climber</div>
      </a>


      <a class="rate-game" href="http://777casino-vulkan.com/igrovye-avtomaty/rock-climber.html">
        <img width="188" height="125" src="./single_files/rock-climber-logo.jpg" class="attachment-post-thumbnail wp-post-image" alt="Игровой автомат Rock Climber">
        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
        <div class="title-rate-game">Rock Climber</div>
      </a>


    </div><!-- rate-games -->



    <h1 class="header-h1"><?php the_title(); ?></h1>

    <div class="games single">
      <noindex>
        <iframe scrolling="no" src="./single_files/hall-of-gods.html"></iframe>
      </noindex>
      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
      <noindex><a href="http://777casino-vulkan.com/go/reg" onclick="yaCounter27715089.reachGoal(&#39;ia-reg&#39;); return true;" class="playb">Играть на деньги</a></noindex>
    </div>

    <div class="clear_fix"></div>

    <div class="game-desc">
      <div class="footer_pre clear_fix">
        <?php the_content(); ?>

        <?php get_template_part('include-nowplayng'); ?>
      </div>
    </div><!-- game-desc -->

  </div><!-- layout-content layout-content-light_top -->
<?php get_footer(); ?>
