<div class="relative z-50">
  <section class="social-widget fixed bottom-6 right-6 bg-white dark:bg-gray-900 p-3 rounded-full shadow-lg flex flex-col items-center space-y-3 text-xl text-gray-600 dark:text-gray-300">

    <?php
    if (!isset($fbLink)) $fbLink = get_theme_mod('lockin_facebook_url');
    if (!isset($igLink)) $igLink = get_theme_mod('lockin_instagram_url');
    if (!isset($twLink)) $twLink = get_theme_mod('lockin_twitter_url');
    if (!isset($liLink)) $liLink = get_theme_mod('lockin_linkedin_url');
    ?>

    <?php if ($fbLink): ?>
      <a href="<?= esc_url($fbLink); ?>" class="hover:text-blue-500" target="_blank" rel="noopener" aria-label="Facebook">
        <i class="fab fa-facebook-square"></i>
      </a>
    <?php endif; ?>

    <?php if ($igLink): ?>
      <a href="<?= esc_url($igLink); ?>" class="hover:text-pink-500" target="_blank" rel="noopener" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
    <?php endif; ?>

    <?php if ($twLink): ?>
      <a href="<?= esc_url($twLink); ?>" class="hover:text-blue-400" target="_blank" rel="noopener" aria-label="Twitter">
        <i class="fab fa-twitter-square"></i>
      </a>
    <?php endif; ?>

    <?php if ($liLink): ?>
      <a href="<?= esc_url($liLink); ?>" class="hover:text-blue-700" target="_blank" rel="noopener" aria-label="LinkedIn">
        <i class="fab fa-linkedin"></i>
      </a>
    <?php endif; ?>
  </section>
</div>