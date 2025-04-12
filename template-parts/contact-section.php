<!-- Contact Page Section -->
<section class="bg-gray-100 text-gray-900 py-20">
  <div class="container mx-auto px-4 max-w-4xl">
    <h2 class="text-3xl font-bold mb-6 text-center">Contact Us</h2>
    <p class="text-center text-lg mb-12">We'd love to hear from you. Reach out with any questions or to get started with your digital strategy.</p>

    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" class="space-y-6 bg-white p-8 rounded-lg shadow-md">
      <input type="hidden" name="lid_contact_form_submitted" value="1">
      <?php wp_nonce_field('lid_contact_form', 'lid_contact_nonce'); ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="name" class="block text-sm font-semibold mb-2">Full Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow" required>
        </div>
        <div>
          <label for="email" class="block text-sm font-semibold mb-2">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow" required>
        </div>
      </div>
      <div>
        <label for="message" class="block text-sm font-semibold mb-2">Message</label>
        <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="bg-yellow text-graydark font-semibold px-6 py-3 rounded-lg hover:bg-yellow-400 transition">Send Message</button>
      </div>
    </form>
  </div>
  <?php if (isset($_SESSION['lid_contact_success'])): ?>
    <div class="mb-6 text-center font-semibold text-sm">
      <?php if ($_SESSION['lid_contact_success']): ?>
        <p class="text-green-600">✅ Message sent successfully!</p>
      <?php else: ?>
        <p class="text-red-600">❌ Please fill out all fields correctly.</p>
      <?php endif; ?>
      <?php unset($_SESSION['lid_contact_success']); ?>
    </div>
  <?php endif; ?>
</section>