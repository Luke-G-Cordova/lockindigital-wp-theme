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
  <section class="py-20 bg-primaryGrey">
    <div class="container mx-auto px-6 max-w-6xl">
      <h2 class="text-3xl font-bold text-center mb-12 text-white" data-sr>What We Offer</h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- SEO -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">SEO Services</h3>
          <p class="mb-4">Climb the local rankings with our proven search engine optimization strategies. Get found for “seo near me,” “SEO company,” and more.</p>
        </div>

        <!-- PPC -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">PPC & Google Ads</h3>
          <p class="mb-4">As a trusted PPC agency, we manage Google Ads campaigns that actually convert. From search to retargeting, we’re your go-to Adwords company.</p>
        </div>

        <!-- Web Design -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">Web Design</h3>
          <p class="mb-4">Your website should work as hard as you do. Our web design company builds fast, modern, WordPress websites optimized for SEO and conversions.</p>
        </div>
      </div>
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
  <section class="how-it-works bg-primaryYellow text-gray-900 py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-primaryGrey mb-8" data-sr>How It Works</h2>
      <ol class="space-y-6 text-lg max-w-xl mx-auto" data-sr>
        <li><strong>Step 1:</strong> Call Us</li>
        <li><strong>Step 2:</strong> Get a Custom Plan</li>
        <li><strong>Step 3:</strong> Lock In More Work</li>
      </ol>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20">
    <div class="container mx-auto px-6 text-center max-w-3xl" data-sr>
      <h2 class="text-3xl font-bold mb-4">Ready to Grow?</h2>
      <p class="text-lg mb-6">Let’s build a marketing system that works for your business — not just another cookie-cutter campaign.</p>
      <a href="/contact" class="inline-block bg-primaryBlue text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">Get a Free Strategy Session</a>
    </div>
  </section>
</main>

<?php get_footer(); ?>