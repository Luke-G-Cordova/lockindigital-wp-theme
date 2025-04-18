<?php

/**
 * The template for displaying single blog posts
 */
get_header(); ?>

<main class="bg-white text-gray-800 py-20">
  <div class="container mx-auto px-6 max-w-3xl" data-sr>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="prose max-w-none">
          <!-- Title -->
          <h1 class="text-4xl font-extrabold mb-4 leading-tight tracking-tight text-gray-900">
            <?php the_title(); ?>
          </h1>

          <!-- Meta -->
          <div class="text-sm text-gray-500 mb-6">
            Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?>
          </div>

          <!-- Featured Image -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="mb-8">
              <?php the_post_thumbnail('large', ['class' => 'w-full rounded-xl shadow-md']); ?>
            </div>
          <?php endif; ?>

          <!-- Post Content -->
          <div class="text-gray-700 leading-relaxed">
            <?php the_content(); ?>
          </div>

          <!-- Categories & Tags -->
          <div class="mt-8 text-sm text-gray-600">
            <p><strong>Categories:</strong> <?php the_category(', '); ?></p>
            <p><strong>Tags:</strong> <?php the_tags('', ', '); ?></p>
          </div>
        </article>

        <!-- Comments Section -->
        <div class="mt-16" data-sr>
          <?php if (comments_open() || get_comments_number()) {
            comments_template();
          } ?>
        </div>

    <?php endwhile;
    endif; ?>

  </div>
</main>

<?php get_footer(); ?>