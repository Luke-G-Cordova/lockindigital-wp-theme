<section class="relative bg-primaryBlue text-white overflow-hidden">

  <div class="container mx-auto px-4 py-20 grid grid-cols-1 md:grid-cols-2 items-center gap-10 relative z-10">
    <!-- Hero Text Content -->
    <div>
      <h1 class="text-4xl font-bold mb-4 text-white" data-sr>
        <?php echo lid_field('hero_heading', "You Built The Business With Your Hands. We'll Make Sure People See It."); ?>
      </h1>
      <p class="text-lg mb-6" data-sr>
        <?php echo lid_field('hero_subheading', "We help contractors attract more local leads with digital marketing that works."); ?>
      </p>

      <a href="/contact" class=" btn bg-primaryYellow text-primaryGrey px-6 py-3 no-underline rounded-lg font-semibold" data-sr>
        <?php echo lid_field('hero_button_text', "Let's Talk"); ?>
      </a>
    </div>
  </div>

  <!-- Hero Image Transition -->
  <div class="relative h-[300px] bottom-[13px] w-full z-10">
    <img id="store-closed" src="<?= get_template_directory_uri(); ?>/assets/images/lead-generation-roseville.png" class="absolute h-full right-[-30rem] opacity-0 animate-slideInStore" alt="Closed Business" />
    <img id="store-open" src="<?= get_template_directory_uri(); ?>/assets/images/local-business-generating-clients.png" class="absolute h-full right-[30px] opacity-0 animate-showOpenStore" alt="Open Business" />


    <!-- Weeble Wobble Customer Animation -->
    <div class="absolute bottom-0 left-0 right-0 weebleWobbleWrapper z-10">
      <div class="weebleWobble absolute a-delay-1">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 1" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-2">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 2" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-3">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 3" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-4">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 4" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-5">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 5" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-6">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 6" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-7">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 7" />
        </div>
      </div>
      <div class="weebleWobble absolute a-delay-8">
        <div>
          <img src="<?= get_template_directory_uri(); ?>/assets/images/valuable-lead.png" class="weeble-character" alt="Customer 8" />
        </div>
      </div>
    </div>
  </div>

  <div class="custom-shape-divider-bottom-1743813601">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
  </div>

  <style>
    @keyframes slideInStore {
      0% {
        right: -30rem;
        opacity: 0;
      }

      100% {
        right: 30px;
        opacity: 1;
      }
    }

    @keyframes showOpenStore {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes weebleWalkIn {
      0% {
        right: 100vw;
        top: 0px;
      }

      25% {
        top: -10px;
      }

      75% {
        top: 3px;
      }

      100% {
        right: 110px;
        top: 0px;
      }
    }

    .animate-slideInStore {
      animation: slideInStore 1s ease-out 1s forwards;
    }

    .animate-showOpenStore {
      animation: showOpenStore 0s linear 2s forwards;
      animation-fill-mode: forwards;
    }

    .weebleWobbleWrapper {
      min-height: 180px;
    }

    .weebleWobble {
      top: 0;
      animation: weebleWalkIn 8s linear infinite;
      transform: scale(1);
      transition: transform 0.2s;
      width: 4.75rem;
      right: 100vw;
    }

    .weebleWobble:hover {
      transform: rotate(10deg);
      transition: transform 1s;
    }

    .weebleWobble>div {
      transition: transform .4s;
    }

    .weebleWobble>div:hover {
      transform: rotate(-20deg);
      transition: transform 0.5s;
    }

    .weeble-character {
      transition: transform 0.2s;
    }

    .weeble-character:hover {
      transform: rotate(10deg) scale(1.4) translate(0, -30px);
      transition: transform .2s
    }

    .a-delay-1 {
      animation-delay: 1.5s;
    }

    .a-delay-2 {
      animation-delay: 2.5s;
    }

    .a-delay-3 {
      animation-delay: 3.5s;
    }

    .a-delay-4 {
      animation-delay: 4.5s;
    }

    .a-delay-5 {
      animation-delay: 5.5s;
    }

    .a-delay-6 {
      animation-delay: 6.5s;
    }

    .a-delay-7 {
      animation-delay: 7.5s;
    }

    .a-delay-8 {
      animation-delay: 8.5s;
    }

    .custom-shape-divider-bottom-1743813601 {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
      transform: rotate(180deg);
      z-index: 0;
    }

    .custom-shape-divider-bottom-1743813601 svg {
      position: relative;
      display: block;
      width: calc(100% + 1.3px);
      height: 500px;
      transform: rotateY(180deg);
    }

    .custom-shape-divider-bottom-1743813601 .shape-fill {
      fill: var(--primary-dark);
    }
  </style>


</section>