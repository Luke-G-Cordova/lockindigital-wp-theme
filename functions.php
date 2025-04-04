<?php
function lockin_enqueue_scripts() {
  wp_enqueue_style('lockin-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap', false);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'lockin_enqueue_scripts');

function lockin_theme_setup() {
  register_nav_menus([
    'main_menu' => 'Main Menu',
  ]);
}
add_action('after_setup_theme', 'lockin_theme_setup');

function lockin_register_menus() {
  register_nav_menus([
    'main_menu' => 'Main Navigation',
  ]);
}
add_action('after_setup_theme', 'lockin_register_menus');


add_theme_support('custom-logo', [
  'height'      => 60,
  'width'       => 200,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => ['site-title', 'site-description'],
]);

function lockin_customize_register($wp_customize) {
  $wp_customize->add_section('lockin_theme_settings', [
    'title'    => __('Theme Settings', 'lockin'),
    'priority' => 30,
  ]);

  // === Phone ===
  $wp_customize->add_setting('lockin_phone_number', ['default'   => '','transport' => 'refresh']);
  $wp_customize->add_control('lockin_phone_number_control', [
    'label'    => __('Phone Number', 'lockin'),
    'section'  => 'lockin_theme_settings',
    'settings' => 'lockin_phone_number',
    'type'     => 'text',
  ]);

  // === Email ===
  $wp_customize->add_setting('lockin_email', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_email_control', [
    'label'   => __('Email Address', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_email',
    'type'    => 'email',
  ]);

  // === CTA Headline ===
  $wp_customize->add_setting('lockin_cta_headline', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_cta_headline_control', [
    'label'   => __('Homepage CTA Headline', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_cta_headline',
    'type'    => 'text',
  ]);

  // === Facebook Link ===
  $wp_customize->add_setting('lockin_facebook_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_facebook_url_control', [
    'label'   => __('Facebook Page URL', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_facebook_url',
    'type'    => 'url',
  ]);

  // === Footer Business Address ===
  $wp_customize->add_setting('lockin_address', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_address_control', [
    'label'   => __('Business Address (Footer)', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_address',
    'type'    => 'textarea',
  ]);
}
add_action('customize_register', 'lockin_customize_register');