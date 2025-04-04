<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
  $phone = get_theme_mod('lockin_phone_number');
  $email = get_theme_mod('lockin_email');
?>
  
<header class="bg-graydark text-white shadow-md">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">

    <!-- Logo -->
    <div class="flex-shrink-0 order-2 sm:order-1">
      <?php if (has_custom_logo()) : ?>
        <a href="<?= esc_url(home_url('/')); ?>" class="block max-w-[200px]">
          <?= get_custom_logo(); ?>
        </a>
      <?php else : ?>
        <a href="<?= esc_url(home_url('/')); ?>" class="text-xl font-bold text-yellow">
          <?= get_bloginfo('name'); ?>
        </a>
      <?php endif; ?>
    </div>

    <!-- Phone Button -->
    <?php if ($phone): ?>
      <a href="tel:<?= preg_replace('/[^0-9]/', '', $phone); ?>"
         class="sm:text-base bg-yellow text-graydark font-semibold px-3 sm:px-4 py-2 rounded hover:bg-yellow-400 transition sm:order-3 whitespace-nowrap">
        <?= esc_html($phone); ?>
      </a>
    <?php endif; ?>

    <!-- Hamburger Toggle -->
    <button id="menu-toggle"
            class="sm:hidden text-white focus:outline-none ml-2 order-3"
            aria-label="Toggle navigation"
            aria-expanded="false"
            aria-controls="mobile-menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Desktop Menu -->
    <nav class="hidden sm:flex flex-1 sm:order-2 justify-end">
      <?php
      wp_nav_menu([
        'theme_location' => 'main_menu',
        'container' => false,
        'menu_class' => 'flex space-x-6 items-center',
        'fallback_cb' => false,
        'depth' => 2,
      ]);
      ?>
    </nav>

  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="sm:hidden hidden px-4 pb-4 bg-graydark">
    <?php
    wp_nav_menu([
      'theme_location' => 'main_menu',
      'container' => false,
      'menu_class' => 'flex flex-col space-y-3 text-sm',
      'fallback_cb' => false,
      'depth' => 1,
    ]);
    ?>
  </div>
</header>
