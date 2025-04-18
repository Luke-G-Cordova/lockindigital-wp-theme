<?php
/* Template Name: City Marketing Page */
get_header(); ?>

<main class="bg-white text-gray-800">

  <!-- Hero Section -->
  <?php get_template_part("template-parts/hero-section"); ?>

  <!-- Services Section -->
  <section class="py-20 bg-primaryGrey">
    <div class="container mx-auto px-6 max-w-6xl">
      <h2 class="text-3xl font-bold text-center mb-12 text-white" data-sr>What We Offer in <?php echo ucwords(lid_field('city_name', 'Your City') . " " . lid_field('state_prefix', 'Your State')) ?></h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- SEO -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2"><?php echo ucwords(lid_field('city_name', 'Your City')) ?> SEO Services</h3>
          <p class="mb-4">Climb the local rankings with our proven <?php echo ucwords(lid_field('city_name', 'Your City')) ?> search engine optimization strategies. Get found for “seo <?php echo ucwords(lid_field('city_name', 'Your City')) ?>,” “<?php echo ucwords(lid_field('city_name', 'Your City')) ?> SEO company,” and more.</p>
        </div>

        <!-- PPC -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">PPC & Google Ads</h3>
          <p class="mb-4">As a trusted <?php echo ucwords(lid_field('city_name', 'Your City')) ?> PPC agency, we manage Google Ads campaigns that actually convert. From search to retargeting, we’re your go-to Adwords company in <?php echo ucwords(lid_field('city_name', 'Your City')) ?>.</p>
        </div>

        <!-- Web Design -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2"><?php echo ucwords(lid_field('city_name', 'Your City')) ?> Web Design</h3>
          <p class="mb-4">Your website should work as hard as you do. Our <?php echo ucwords(lid_field('city_name', 'Your City')) ?> web design company builds fast, modern, WordPress websites optimized for SEO and conversions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Work With Us -->
  <section class="bg-primaryYellow text-gray-900 py-20">
    <div class="container mx-auto px-6 max-w-5xl text-center" data-sr>
      <h2 class="text-3xl font-bold mb-6">A Local Marketing Company That Gets It</h2>
      <p class="text-lg leading-relaxed">Lock In Digital isn’t a giant agency out of touch with small business needs. We’re a <?php echo ucwords(lid_field('city_name', 'Your City')) ?>-based team that understands the hustle and values of family-run companies.</p>
      <p class="text-lg mt-4">Whether you're searching for the <strong>best SEO companies in <?php echo ucwords(lid_field('city_name', 'Your City')) ?></strong> or need a <strong>WordPress web designer near Rocklin or Rancho Cordova</strong>, we’ve got your back.</p>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-20">
    <div class="container mx-auto px-6 text-center max-w-3xl" data-sr>
      <h2 class="text-3xl font-bold mb-4">Ready to Grow in <?php echo ucwords(lid_field('city_name', 'Your City')) ?>?</h2>
      <p class="text-lg mb-6">Let’s build a marketing system that works for your business — not just another cookie-cutter campaign.</p>
      <a href="/contact" class="inline-block bg-primaryBlue text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">Get a Free Strategy Session</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>