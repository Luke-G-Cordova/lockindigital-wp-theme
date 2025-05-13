<section class="py-20">
  <?php
  $ctaSectionHeading = ucwords(lid_global_field('cta_section_heading'));
  $ctaSectionSubHeading = lid_global_field('cta_section_sub_heading');
  $ctaSectionButtonText = ucwords(lid_global_field('cta_section_button_text'));
  $ctaSectionButtonLink = ucwords(lid_global_field('cta_section_button_link', '', 'url'));
  ?>
  <div class="container mx-auto px-6 text-center max-w-3xl" data-sr>
    <h2 class="text-3xl font-bold mb-4"><?php echo _t($ctaSectionHeading); ?></h2>
    <p class="text-lg mb-6"><?php echo _t($ctaSectionSubHeading); ?></p>
    <a href="<?php echo $ctaSectionButtonLink; ?>" class="inline-block bg-primaryBlue text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
      <?php echo _t($ctaSectionButtonText); ?>
    </a>
  </div>
</section>