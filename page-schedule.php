<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="title schedule-title">- <?php the_title(); ?> -</div>
    <div class="calendar-container"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
