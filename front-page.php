<?php

/**
 * Front Page Template
 */
get_header(); ?>

<main class="homepage">

  <?php get_template_part('template-parts/social-widget'); ?>

  <!-- Hero Section -->
  <?php get_template_part("template-parts/hero-section"); ?>
  <!-- Services Preview -->
  <section class="services-preview bg-primaryGrey py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl text-white font-bold text-center mb-10" data-sr>Our Services</h2>
      <ul class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
        <?php if (have_rows('services')): while (have_rows('services')): the_row(); ?>
            <li class="service-box bg-[#F9F9F9] p-6 rounded-lg shadow hover:shadow-lg transition" data-sr>
              <h3 class="text-xl font-semibold mb-2"><?php the_sub_field('service_title'); ?></h3>
              <p class="mb-4"><?php the_sub_field('service_description'); ?></p>
              <a href="<?php the_sub_field('service_link'); ?>" class="text-[#FFCF3F] font-semibold">Learn More</a>
            </li>
        <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </section>

  <!-- Trust Section -->
  <section class="trust bg-white text-primaryGrey py-20 text-center">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-6" data-sr>Real Results for Real Businesses</h2>
      <p class="mb-8 max-w-2xl mx-auto" data-sr>We’ve helped family-run companies just like yours grow with marketing that works. No fluff, just results.</p>
      <div class="flex flex-wrap justify-center gap-4 text-sm font-semibold" data-sr>
        <span class="bg-[#FFCF3F] text-[#2C3E50] py-2 px-4 rounded">20+ Years Combined Experience</span>
        <span class="bg-[#FFCF3F] text-[#2C3E50] py-2 px-4 rounded">Google Certified</span>
        <span class="bg-[#FFCF3F] text-[#2C3E50] py-2 px-4 rounded">5-Star Client Reviews</span>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="how-it-works bg-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8" data-sr>How It Works</h2>
      <ol class="space-y-6 text-lg max-w-xl mx-auto" data-sr>
        <li><strong>Step 1:</strong> Call Us</li>
        <li><strong>Step 2:</strong> Get a Custom Plan</li>
        <li><strong>Step 3:</strong> Lock In More Work</li>
      </ol>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta bg-[#FFCF3F] text-[#2C3E50] py-20 text-center">
    <div class="container mx-auto px-4">
      <p class="text-2xl font-bold mb-6" data-sr>Feeling Invisible Online? Let’s Fix That.</p>
      <a href="/contact" class="btn bg-[#2C3E50] text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 transition" data-sr>Schedule a Free Strategy Call</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>

<!-- ScrollReveal Animation -->
<script src="https://unpkg.com/scrollreveal"></script>
<script>
  ScrollReveal().reveal('[data-sr]', {
    distance: '20px',
    origin: 'bottom',
    opacity: 0,
    duration: 600,
    interval: 100
  });
</script>