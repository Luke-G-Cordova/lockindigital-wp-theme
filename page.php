<?php

/**
 * The template for displaying all pages
 */
get_header(); ?>

<main class="bg-white text-gray-800 py-20">
  <div class="container mx-auto px-6 max-w-4xl" data-sr>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="prose max-w-none">
          <h1 class="text-4xl font-extrabold mb-6 leading-tight tracking-tight text-gray-900">
            <?php the_title(); ?>
          </h1>

          <div class="text-gray-700 leading-relaxed">
            <?php the_content(); ?>
          </div>
        </article>
    <?php endwhile;
    endif; ?>

  </div>
</main>

<?php get_footer(); ?>