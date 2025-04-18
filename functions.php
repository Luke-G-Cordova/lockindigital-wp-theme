<?php

require_once get_template_directory() . '/inc/autoload.php'; // Make sure this autoloader is always called first
require_once get_template_directory() . '/inc/helpers.php';

function lockin_enqueue_scripts()
{
  wp_enqueue_style('lockin-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap', false);
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
  // TODO: the following loads a main.js file: wp_enqueue_script('lockin-main', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'lockin_enqueue_scripts');

function lockin_theme_setup()
{
  // menu support
  register_nav_menus([
    'main_menu' => 'Main Menu',
    'city_menu' => 'City Menu',
  ]);

  // logo support
  add_theme_support('custom-logo', [
    'height'      => 60,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => ['site-title', 'site-description'],
  ]);

  // Allow wordpress to dynamically handle title tags in head
  add_theme_support('title-tag');

  // add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
  // add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lockin_theme_setup');


function lockin_customize_register($wp_customize)
{
  $wp_customize->add_section('lockin_theme_settings', [
    'title'    => __('Theme Settings', 'lockin'),
    'priority' => 30,
  ]);

  // === Phone ===
  $wp_customize->add_setting('lockin_phone_number', ['default'   => '', 'transport' => 'refresh']);
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

  // === Facebook Link ===
  $wp_customize->add_setting('lockin_facebook_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_facebook_url_control', [
    'label'   => __('Facebook Page URL', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_facebook_url',
    'type'    => 'url',
  ]);


  // === Instagram Link ===
  $wp_customize->add_setting('lockin_instagram_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_instagram_url_control', [
    'label'   => __('Instagram Page URL', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_instagram_url',
    'type'    => 'url',
  ]);


  // === Linkedin Link ===
  $wp_customize->add_setting('lockin_linkedin_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_linkedin_url_control', [
    'label'   => __('Linkedin Page URL', 'lockin'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_linkedin_url',
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

/**
 * Contact form email handling
 * TODO: need to get a smtp server for this to work
 * TODO: add a class for this in /inc/Utils
 */
if (!session_id()) {
  session_start();
}
function lid_handle_contact_form()
{
  if (
    isset($_POST['lid_contact_form_submitted']) &&
    isset($_POST['lid_contact_nonce']) &&
    wp_verify_nonce($_POST['lid_contact_nonce'], 'lid_contact_form')
  ) {
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate fields
    if (!empty($name) && !empty($email) && !empty($message)) {
      $to      = 'luke@lockindigitalpro.com'; // 🔁 Replace with your real email
      $subject = "New Contact Form Submission from $name";
      $headers = ['Content-Type: text/html; charset=UTF-8', "Reply-To: $name <$email>"];
      $body    = "
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
      ";

      wp_mail($to, $subject, $body, $headers);

      // Optional: store a success flag to display later
      $_SESSION['lid_contact_success'] = true;
    } else {
      $_SESSION['lid_contact_success'] = false;
    }

    // Optional: redirect to prevent resubmission
    wp_redirect(home_url($_SERVER['REQUEST_URI']));
    exit;
  }
}
add_action('init', 'lid_handle_contact_form');
