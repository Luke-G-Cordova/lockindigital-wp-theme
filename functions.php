<?php

require_once get_template_directory() . '/inc/autoload.php'; // Make sure this autoloader is always called first
require_once get_template_directory() . '/inc/helpers.php';

function lockin_enqueue_scripts()
{
  wp_enqueue_style('lockin-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans&display=swap', false);
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Anton&family=Baskervville:ital@0;1&family=Oswald:wght@200..700&display=swap', false);
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

function lid_enqueue_toc_script()
{
  if (is_single()) {
?>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const toc = document.getElementById("toc");
        if (!toc) return;

        const headers = document.querySelectorAll(".prose h2, .prose h3");
        headers.forEach((header, i) => {
          const id = header.innerText.toLowerCase().replace(/\s+/g, '-');
          header.setAttribute("id", id);
          header.classList.add("scroll-mt-24");
          let insert = '';
          if (header.tagName.toLowerCase() === 'h3') {
            insert = 'indent-me'
          }
          const link = document.createElement("a");
          link.href = `#${id}`;
          link.textContent = header.innerText;
          link.className = `block text-sm text-gray-700 hover:text-primaryBlue transition-all ${insert}`;
          toc.appendChild(link);
        });
      });
    </script>
<?php
  }
}
add_action('wp_footer', 'lid_enqueue_toc_script');

function lockin_customize_register($wp_customize)
{
  $wp_customize->add_section('lockin_theme_settings', [
    'title'    => _t('Theme Settings'),
    'priority' => 30,
  ]);

  // === Phone ===
  $wp_customize->add_setting('lockin_phone_number', ['default'   => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_phone_number_control', [
    'label'    => _t('Phone Number'),
    'section'  => 'lockin_theme_settings',
    'settings' => 'lockin_phone_number',
    'type'     => 'text',
  ]);

  // === Email ===
  $wp_customize->add_setting('lockin_email', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_email_control', [
    'label'   => _t('Email Address'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_email',
    'type'    => 'email',
  ]);

  // === Facebook Link ===
  $wp_customize->add_setting('lockin_facebook_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_facebook_url_control', [
    'label'   => _t('Facebook Page URL'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_facebook_url',
    'type'    => 'url',
  ]);


  // === Instagram Link ===
  $wp_customize->add_setting('lockin_instagram_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_instagram_url_control', [
    'label'   => _t('Instagram Page URL'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_instagram_url',
    'type'    => 'url',
  ]);


  // === Linkedin Link ===
  $wp_customize->add_setting('lockin_linkedin_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_linkedin_url_control', [
    'label'   => _t('Linkedin Page URL'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_linkedin_url',
    'type'    => 'url',
  ]);

  // === X (Twitter) Link ===
  $wp_customize->add_setting('lockin_x_url', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_x_url_control', [
    'label'   => _t('X (Twitter) Page URL'),
    'section' => 'lockin_theme_settings',
    'settings' => 'lockin_x_url',
    'type'    => 'url',
  ]);

  // === Footer Business Address ===
  $wp_customize->add_setting('lockin_address', ['default' => '', 'transport' => 'refresh']);
  $wp_customize->add_control('lockin_address_control', [
    'label'   => _t('Business Address (Footer)'),
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


// Tell ACF to save field groups to a JSON folder in your theme
add_filter('acf/settings/save_json', function ($path) {
  return get_stylesheet_directory() . '/acf-json';
});
// Tell ACF to load field groups from that same folder
add_filter('acf/settings/load_json', function ($paths) {
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
});
