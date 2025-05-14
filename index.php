<?php get_header(); ?>

<section class="py-24 bg-primaryGrey text-white">
  <div class="container mx-auto px-4 max-w-5xl">
    <h1 class="text-4xl sm:text-5xl font-bold tracking-tight mb-16 text-primaryYellow">Latest Insights</h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="group mb-14 border-b border-white/10 pb-10 transition-transform duration-300 hover:scale-[1.01]">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" class="block mb-4 overflow-hidden rounded-2xl">
              <?php the_post_thumbnail('large', ['class' => 'w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105']); ?>
            </a>
          <?php endif; ?>

          <h2 class="text-2xl sm:text-3xl font-semibold mb-2">
            <a href="<?php the_permalink(); ?>" class="text-white hover:text-primaryBlue transition-colors">
              <?php the_title(); ?>
            </a>
          </h2>
          <p class="text-sm text-white/60 mb-3"><?php the_time('F j, Y'); ?></p>
          <p class="text-white/90 leading-relaxed">
            <?php echo wp_trim_words(get_the_excerpt(), 28); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-sm font-medium text-primaryYellow hover:underline">
            Read More →
          </a>
        </article>
      <?php endwhile;
    else : ?>
      <p class="text-white/80">No posts found. Check back soon!</p>
    <?php endif; ?>
    <div class="pagination mt-12">
      <?php
      the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '← Prev',
        'next_text' => 'Next →',
        'screen_reader_text' => 'Posts navigation',
      ));
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>