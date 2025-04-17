<?php
/* Template Name: Store Page */
get_header(); ?>

<main>
  <iframe id="storePreview" src="https://lock-in-digital.smblogin.com/public/store/52VK/default/?hide=signin"
    width="1200" height="680" frameborder="0" style="max-width:100%;display:block;margin:0 auto;"></iframe>
</main>

<?php get_footer(); ?>


<!-- ScrollReveal Animation -->
<script src="https://unpkg.com/scrollreveal"></script>
<script>
  ScrollReveal().reveal('[data-sr]', {
    distance: '20px',
    origin: 'bottom',
    opacity: 0,
    duration: 600,
    interval: 100
  });
</script>