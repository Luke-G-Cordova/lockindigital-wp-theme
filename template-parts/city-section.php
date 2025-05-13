<section class="bg-white py-20">
  <?php
  if (!isset($city))
    $city = ucwords(lid_field('city_name', 'Your City'));
  $heading = ucwords(lid_field('city_section_heading'));
  $body = lid_field('city_section_body', '', 'raw');
  ?>
  <div class="container mx-auto px-6 max-w-5xl text-primaryGrey">
    <?php if ($heading): ?>
      <h2 class="text-3xl md:text-4xl font-bold mb-6" data-sr>
        <?php echo esc_html(str_replace('{{city_name}}', $city, $heading)); ?>
      </h2>
    <?php endif; ?>

    <?php if ($body): ?>
      <div class="text-lg space-y-4" data-sr>
        <?php
        // Replace {{city_name}} with dynamic city name
        $processed_body = str_replace('{{city_name}}', $city, $body);
        echo wp_kses_post(wpautop($processed_body));
        ?>
      </div>
    <?php endif; ?>
  </div>
</section>