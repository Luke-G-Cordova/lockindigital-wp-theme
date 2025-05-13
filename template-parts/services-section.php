<section class="py-20 bg-primaryGrey">
  <?php
  $servicesHeading = ucwords(lid_global_field('services_heading'));
  $servicesCard1Heading = ucwords(lid_global_field('services_card_1_heading'));
  $servicesCard1Text = lid_global_field('services_card_1_text');
  $servicesCard2Heading = ucwords(lid_global_field('services_card_2_heading'));
  $servicesCard2Text = lid_global_field('services_card_2_text');
  $servicesCTAButton = ucwords(lid_global_field('services_cta_button_text'));

  $city = ucwords(lid_field('city_name'));
  ?>

  <div class="container mx-auto px-6 max-w-6xl">
    <h2 class="text-3xl font-bold text-center mb-12 text-white" data-sr>
      <?php if ($city != ''): echo _t('What We Offer In ' . $city);
      else: echo _t($servicesHeading);
      endif; ?>
    </h2>
    <div class="grid gap-8 md:grid-cols-2">
      <!-- Card 1 -->
      <?php
      // Split the string into an array by comma
      $card1Items = array_map('trim', explode(',', $servicesCard1Text));
      $half = ceil(count($card1Items) / 2);
      $list1 = array_slice($card1Items, 0, $half);
      $list2 = array_slice($card1Items, $half);
      ?>
      <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
        <h3 class="text-xl font-semibold mb-4"><?php echo _t($servicesCard1Heading); ?></h3>

        <div class="grid grid-cols-2 gap-4 mb-4">
          <ul class="list-disc list-inside space-y-1">
            <?php foreach ($list1 as $item): ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <ul class="list-disc list-inside space-y-1">
            <?php foreach ($list2 as $item): ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="flex justify-center">
          <a href="#contact" class="inline-block bg-primaryYellow text-black font-semibold px-4 py-2 rounded hover:bg-yellow-400 transition">
            <?php echo _t($servicesCTAButton); ?>
          </a>
        </div>

      </div>

      <!-- Card 2 -->
      <div class="bg-[#F9F9F9] p-6 rounded-lg shadow" data-sr>
        <h3 class="text-xl font-semibold mb-2"><?php echo _t($servicesCard2Heading); ?></h3>
        <p class="mb-4"><?php echo _t($servicesCard2Text); ?></p>
        <div class="flex justify-center">
          <a href="#contact" class="inline-block mt-auto bg-primaryYellow text-black font-semibold px-4 py-2 rounded hover:bg-yellow-400 transition">
            <?php echo _t($servicesCTAButton); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>