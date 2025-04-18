<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>

<main class="min-h-screen flex items-center justify-center bg-gray-100 text-gray-800 py-20 px-4">
  <div class="max-w-xl text-center" data-sr>
    <h1 class="text-6xl font-extrabold mb-4">404</h1>
    <h2 class="text-2xl font-bold mb-4">Well this is awkward...</h2>
    <p class="text-gray-600 mb-8 text-lg">Like a contractor showing up to the wrong job site, you've landed on a page that doesn't exist.</p>

    <!-- <div class="mb-8">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/404-worker-confused.webp" alt="Confused Construction Worker" class="w-64 mx-auto rounded shadow-md">
    </div> -->

    <a href="<?= esc_url(home_url('/')); ?>" class="inline-block px-6 py-3 bg-yellow-400 text-gray-900 font-semibold rounded hover:bg-yellow-300 transition">
      Let’s get you back on site
    </a>
  </div>
</main>

<?php get_footer(); ?>