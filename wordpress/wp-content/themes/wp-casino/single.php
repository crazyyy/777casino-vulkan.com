<?php get_header(); ?>
  <div class="layout-content layout-content-light_top">

    <div class="rate-games">
      <h3 class="rate-h3">Топ</h3>

      <?php query_posts( array( 'meta_key' => 'ratings_average', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <a rel="nofollow" class="rate-game" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img class="feature-img" src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>


          <div class="rate-stars">
            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
          </div>
          <div class="title-rate-game"><?php the_title(); ?></div>
        </a>

      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    </div><!-- rate-games -->

    <h1 class="header-h1"><?php the_title(); ?></h1>

    <div class="games single">
      <noindex>
        <?php the_field('iframe'); ?>
      </noindex>
      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
      <noindex><a href="<?php the_field('link'); ?>" class="playb">Играть на деньги</a></noindex>
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
