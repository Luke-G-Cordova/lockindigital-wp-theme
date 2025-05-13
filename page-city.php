<?php
/* Template Name: City Marketing Page */
get_header(); ?>

<main class="bg-white text-gray-800">
  <!-- Hero Section -->
  <?php get_template_part("template-parts/hero-city-section"); ?>

  <!-- City Section -->
  <?php get_template_part("template-parts/city-section"); ?>

  <!-- Services Section -->
  <?php get_template_part("template-parts/services-section"); ?>

  <!-- Why Work With Us -->
  <?php get_template_part("template-parts/trust-section"); ?>

  <!-- Steps Section -->
  <?php get_template_part("template-parts/steps-section"); ?>

  <!-- Call to Action -->
  <?php get_template_part("template-parts/cta-section"); ?>
</main>

<?php get_footer(); ?>