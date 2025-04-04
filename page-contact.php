<?php
/* Template Name: Contact Page */
get_header(); ?>

<main>
  <h1>Contact Us</h1>
  <?php while (have_posts()) : the_post();
    the_content();
  endwhile; ?>

  <!-- Optional: Embed a form plugin or contact form manually -->
</main>

<?php get_footer(); ?>
