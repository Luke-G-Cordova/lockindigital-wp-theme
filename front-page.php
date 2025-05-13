<?php

/**
 * Front Page Template
 */
get_header(); ?>

<?php get_template_part('template-parts/social-widget'); ?>

<main class="homepage">

  <!-- Hero Section -->
  <?php get_template_part("template-parts/hero-section"); ?>

  <!-- Services Section -->
  <?php get_template_part("template-parts/services-section"); ?>

  <!-- Trust Section -->
  <?php get_template_part("template-parts/trust-section"); ?>

  <!-- How It Works -->
  <?php get_template_part("template-parts/steps-section"); ?>

  <!-- CTA Section -->
  <?php get_template_part("template-parts/cta-section"); ?>

</main>

<?php get_footer(); ?>