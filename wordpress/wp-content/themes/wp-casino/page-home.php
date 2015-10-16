<?php /* Template Name: Home Page */ get_header(); ?>

      <div class="layout-content layout-content-light_top">

        <?php get_sidebar(); ?>

        <h3 class="header-h1">Наши игры</h3>

        <div class="games">
          <?php query_posts("showposts=50"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="newlister">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <div class="title-game"><?php the_title(); ?></div>
            <a rel="nofollow" class="play-game" href="<?php the_field('link'); ?>" title="Играть <?php the_title(); ?>">Играть</a>
            <a rel="nofollow" class="view-demo" href="<?php the_permalink(); ?>" title="Демо <?php the_title(); ?>">Демо</a>
          </li>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

        </div><!-- games -->

        <div class="clear_fix"></div>

        <div class="game-desc">
          <div class="footer_pre clear_fix">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>

      </div><!-- layout-content layout-content-light_top -->

<?php get_footer(); ?>