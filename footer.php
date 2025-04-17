<!-- <footer>
  <p>&copy; <?php echo date('Y'); ?> Lock In Digital</p>
</footer> -->
<!-- Footer Section -->
<footer class="bg-graydark text-white py-12 mt-20">
  <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Company Info -->
    <div>
      <h3 class="text-xl font-bold mb-4">Lock In Digital</h3>
      <p class="text-sm leading-relaxed text-gray-300">
        Helping contractors grow their business through honest, data-driven marketing.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-lg font-semibold mb-3">Quick Links</h4>
      <ul class="space-y-2 text-sm text-gray-300">
        <?php
        wp_nav_menu([
          'theme_location' => 'main_menu',
          'container' => false,
          'menu_class' => 'flex flex-col space-y-3 text-sm',
          'fallback_cb' => false,
          'depth' => 1,
        ]);
        ?>
      </ul>
    </div>

    <?php
    $phone = get_theme_mod('lockin_phone_number');
    $email = get_theme_mod('lockin_email');
    $fbLink = get_theme_mod('lockin_facebook_url');
    $igLink = get_theme_mod('lockin_instagram_url');
    $liLink = get_theme_mod('lockin_linkedin_url');
    ?>
    <!-- Contact Info -->
    <div>
      <h4 class="text-lg font-semibold mb-3">Contact</h4>
      <ul class="space-y-2 text-sm text-gray-300">
        <?php if ($email): ?>
          <li><strong>Email:</strong> <a href="mailto:<?= esc_attr($email); ?>" class="hover:text-yellow"><?= esc_html($email); ?></a></li>
        <?php endif; ?>
        <?php if ($phone): ?>
          <li><strong>Phone:</strong> <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone); ?>" class="hover:text-yellow"><?= esc_html($phone); ?></a></li>
        <?php endif; ?>
        <li><strong>Location:</strong> Roseville, CA</li>
      </ul>
    </div>

    <!-- Newsletter / Social -->
    <div>
      <h4 class="text-lg font-semibold mb-3">Stay Connected</h4>
      <form action="#" method="post" class="mb-4">
        <input type="email" name="email" placeholder="Your email" class="w-full px-3 py-2 rounded bg-white text-gray-800 mb-2">
        <button type="submit" class="w-full bg-yellow text-graydark px-3 py-2 rounded font-semibold hover:bg-yellow-400 transition">Subscribe</button>
      </form>
      <div class="flex space-x-4">
        <?php if ($fbLink): ?>
          <a href="<?= esc_url($fbLink); ?>" target="_blank" class="hover:text-yellow">Facebook</a>
        <?php endif; ?>
        <?php if ($igLink): ?>
          <a href="<?= esc_url($igLink); ?>" target="_blank" class="hover:text-yellow">Instagram</a>
        <?php endif; ?>
        <?php if ($liLink): ?>
          <a href="<?= esc_url($liLink); ?>" target="_blank" class="hover:text-yellow">LinkedIn</a>
        <?php endif; ?>
      </div>
    </div>

  </div>

  <!-- Bottom Line -->
  <div class="text-center text-sm text-gray-500 mt-10">
    &copy; <?= date('Y'); ?> Lock In Digital. All rights reserved.
  </div>
</footer>
<?php wp_footer(); ?>


<script>
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
</body>

</html>