<div class="games">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <li>
    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
      <div class="title-game"><?php the_title(); ?></div>
    </a>
  </li>
  <?php endwhile; else: ?>
  <?php endif; ?>
</div>
