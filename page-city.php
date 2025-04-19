<?php
/* Template Name: City Marketing Page */
get_header(); ?>

<main class="bg-white text-gray-800">
  <?php
  $city = ucwords(lid_field('city_name', 'Your City'));
  $state = ucwords(lid_field('state_name', 'Your State'));
  $statePrefix = ucwords(lid_field('state_prefix'));
  ?>
  <!-- Hero Section -->
  <?php get_template_part("template-parts/hero-section"); ?>

  <!-- Services Section -->
  <section class="py-20 bg-primaryGrey">
    <div class="container mx-auto px-6 max-w-6xl">
      <h2 class="text-3xl font-bold text-center mb-12 text-white" data-sr>
        <?php echo _t(sprintf("What We Offer in %s %s", $city, $statePrefix)); ?>
      </h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- SEO -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">
            <?php
            echo _t(sprintf(
              '%s SEO Services',
              $city
            ));
            ?>
          </h3>
          <p class="mb-4">
            <?php
            echo _t(sprintf(
              'Climb the local rankings with our proven %s search engine optimization strategies. Get found for “seo %s,” “%s SEO company,” and more.',
              $city,
              $city,
              $city
            ));
            ?>
          </p>
        </div>

        <!-- PPC -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2"><?php echo _t("PPC & Google Ads"); ?></h3>
          <p class="mb-4">
            <?php
            echo _t(sprintf(
              'As a trusted %s PPC agency, we manage Google Ads campaigns that actually convert. From search to retargeting, we’re your go-to Adwords company in %s.',
              $city,
              $city
            ));
            ?>
          </p>
        </div>

        <!-- Web Design -->
        <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
          <h3 class="text-xl font-semibold mb-2">
            <?php echo _t(sprintf('%s Web Design', $city)) ?>

          </h3>
          <p class="mb-4">
            <?php
            echo _t(sprintf(
              'Your website should work as hard as you do. Our %s web design company builds fast, modern, WordPress websites optimized for SEO and conversions.',
              $city
            ));
            ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Work With Us -->
  <section class="bg-primaryYellow text-gray-900 py-20">
    <div class="container mx-auto px-6 max-w-5xl text-center" data-sr>
      <h2 class="text-3xl font-bold mb-6">
        <?php echo _t("A Local Marketing Company That Gets It"); ?>
      </h2>
      <p class="text-lg leading-relaxed">
        <?php
        echo _t(sprintf(
          'Lock In Digital isn’t a giant agency out of touch with small business needs. We’re a %s-based team that understands the hustle and values of family-run companies.',
          $city
        ));
        ?>
      </p>
      <p class="text-lg mt-4">
        <?php
        echo _t(sprintf(
          "Whether you're searching for the <strong>best SEO companies in %s</strong> or need a <strong>WordPress web designer</strong> near the surrounding area, we’ve got your back.",
          $city
        ));
        ?>
      </p>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-20">
    <div class="container mx-auto px-6 text-center max-w-3xl" data-sr>
      <h2 class="text-3xl font-bold mb-4">
        <?php echo _t(sprintf('Ready to Grow in %s?', $city)); ?></h2>
      <p class="text-lg mb-6"><?php echo _t('Let’s build a marketing system that works for your business — not just another cookie-cutter campaign.'); ?></p>
      <a href="/contact" class="inline-block bg-primaryBlue text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
        <?php echo _t('Get a Free Strategy Session'); ?>
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>