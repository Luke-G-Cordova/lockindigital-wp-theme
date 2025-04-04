<?php
/* Template Name: About Page */
get_header(); ?>

<main>
  <h1>About Lock In Digital</h1>
  <?php while (have_posts()) : the_post();
    the_content();
  endwhile; ?>
</main>

<?php get_footer(); ?>
