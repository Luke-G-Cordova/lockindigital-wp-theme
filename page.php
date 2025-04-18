<?php

/**
 * The template for displaying all pages
 */

get_header(); ?>

<main class="bg-white py-16 text-gray-800">
  <div class="container mx-auto px-6 max-w-4xl" data-sr>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>
        <div class="prose max-w-none">
          <?php the_content(); ?>
        </div>
    <?php endwhile;
    endif; ?>

  </div>
</main>

<?php get_footer(); ?>