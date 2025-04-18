<?php
/* Template Name: About Page */
get_header(); ?>

<main>
  <section class="bg-white text-gray-800 py-20">
    <div class="container mx-auto px-6 max-w-5xl">

      <!-- Heading -->
      <div class="text-center mb-16" data-sr>
        <h1 class="text-5xl font-extrabold mb-4 tracking-tight">Who We Are</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">We're a family-owned digital marketing agency committed to helping great businesses grow with honest, data-driven strategy and creativity.</p>
      </div>

      <!-- Mission & Vision -->
      <div class="grid md:grid-cols-2 gap-10 mb-20">
        <div data-sr>
          <h2 class="text-2xl font-bold mb-3">Our Mission</h2>
          <p class="text-gray-700 leading-relaxed">
            "Building a legacy of business growth by driving measurable marketing results to empower our partners to reach their highest potential."
          </p>
        </div>
        <div data-sr>
          <h2 class="text-2xl font-bold mb-3">Our Vision</h2>
          <p class="text-gray-700 leading-relaxed">
            "To build lasting relationships that drive growth and inspire excellence, making us the trusted guide customers can’t wait to recommend."
          </p>
        </div>
      </div>

      <!-- Team Section -->
      <div class="mb-20" data-sr>
        <h2 class="text-3xl font-bold text-center mb-12">Meet Our Team</h2>
        <div class="grid md:grid-cols-2 gap-12">

          <!-- Luke -->
          <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center" data-sr>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/Lock-In-Digital-Owner-Luke-Cordova.webp" alt="Luke Cordova" class="w-48 h-48 rounded-full object-cover mx-auto mb-4">
            <h3 class="text-xl font-bold">Luke Cordova</h3>
            <p class="text-gray-600 mb-4">Co-Founder</p>
            <p class="text-sm text-gray-700 leading-relaxed">
              Luke Cordova, co-owner of Lock In Digital, combines a BA in Business Administration with advanced software engineering experience. From browser extensions to physics simulations, Luke’s projects demonstrate technical expertise and creative problem-solving. A former track and field team captain, Luke brings leadership and discipline to every venture. Outside of work, he enjoys storytelling, origami, skiing, and volunteering with youth organizations.
            </p>
          </div>

          <!-- Stacey -->
          <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center" data-sr>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/Lock-In-Digital-Owner-Stacey-Cordova.webp" alt="Stacey Cordova" class="w-48 h-48 rounded-full object-cover mx-auto mb-4">
            <h3 class="text-xl font-bold">Stacey Cordova</h3>
            <p class="text-gray-600 mb-4">Co-Founder</p>
            <p class="text-sm text-gray-700 leading-relaxed">
              Stacey Cordova brings decades of entrepreneurial experience to Lock In Digital. She has led everything from retail shops to major community events, including a world record pumpkin carving event. Stacey’s passion for small businesses and community-building shines through in her marketing expertise. Outside of work, she enjoys cooking, fast cars, chai tea, and family adventures.
            </p>
          </div>

        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="mb-20" data-sr>
        <h2 class="text-3xl font-bold text-center mb-6">Why Choose Us?</h2>
        <ul class="list-disc pl-8 max-w-2xl mx-auto text-gray-700 space-y-3">
          <li>We take the time to understand your business inside and out.</li>
          <li>We provide clear, actionable insights—not just buzzwords.</li>
          <li>We treat your business like it’s our own.</li>
          <li>We’re not a big agency—we’re your personal digital partner.</li>
        </ul>
      </div>

      <!-- CTA -->
      <div class="text-center" data-sr>
        <h2 class="text-3xl font-bold mb-3">Let’s Grow Together</h2>
        <p class="text-gray-700 mb-6 max-w-xl mx-auto">If you're ready to take the next step in growing your business online, we're ready to help you reach your full potential.</p>
        <a href="/contact" class="inline-block px-8 py-3 bg-yellow-400 text-gray-900 font-semibold rounded hover:bg-yellow-300 transition">Get in Touch</a>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>