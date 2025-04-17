<?php
/* Template Name: About Page */
get_header(); ?>

<main>
  <section class="bg-white text-gray-800 py-16">
    <div class="container mx-auto px-6 max-w-5xl">
      <!-- Heading -->
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="text-lg text-gray-600">A small team with a big vision.</p>
      </div>

      <!-- Mission Statement -->
      <div class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
        <p class="text-gray-700 leading-relaxed">
          At Lock In Digital, we’re dedicated to helping businesses grow through honest, data-driven digital marketing. We understand that navigating the digital landscape can be confusing—so we guide our clients every step of the way with transparency, education, and strategy.
        </p>
      </div>

      <!-- Who We Are -->
      <div class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Who We Are</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          We’re a mother-son duo combining experience, technical know-how, and a passion for helping others. Whether you’re a small business owner looking to boost your online presence or a local contractor ready to scale up, we’re here to partner with you on your journey.
        </p>
        <div class="grid gap-10 md:grid-cols-2">
          <!-- Luke -->
          <div class="flex flex-col items-center text-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/Lock-In-Digital-Owner-Luke-Cordova.webp" alt="Luke Cordova" class="w-32 h-32 rounded-full object-cover mb-4">
            <h3 class="text-xl font-bold">Luke Cordova</h3>
            <p class="text-gray-600">Co-Founder & Digital Strategist</p>
          </div>

          <!-- Stacey -->
          <div class="flex flex-col items-center text-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/Lock-In-Digital-Owner-Stacey-Cordova.webp" alt="Stacey Cordova" class="w-32 h-32 rounded-full object-cover mb-4">
            <h3 class="text-xl font-bold">Stacey Cordova</h3>
            <p class="text-gray-600">Co-Founder & Client Experience Lead</p>
          </div>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Why Choose Us?</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
          <li>We take the time to understand your business inside and out.</li>
          <li>We provide clear, actionable insights—not just buzzwords.</li>
          <li>We treat your business like it’s our own.</li>
          <li>We’re not a big agency—we’re your personal digital partner.</li>
        </ul>
      </div>

      <!-- Closing -->
      <div class="text-center">
        <h2 class="text-2xl font-semibold mb-2">Let’s grow together.</h2>
        <p class="text-gray-700 mb-6">If you're ready to take the next step in growing your business online, we're ready to help.</p>
        <a href="/contact" class="inline-block px-6 py-3 bg-yellow-400 text-gray-900 font-semibold rounded hover:bg-yellow-300 transition">Get in Touch</a>
      </div>
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