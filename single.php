<?php get_header(); ?>

<main class="pt-24 pb-16 bg-white text-gray-900">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <!-- Hero Title + Meta -->
      <section class="px-6">
        <div class="max-w-3xl mx-auto text-center">
          <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4 scroll-mt-24"><?php the_title(); ?></h1>
        </div>
      </section>

      <!-- Featured Image -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="max-w-5xl mx-auto px-6 mb-12">
          <div class="overflow-hidden rounded-2xl shadow-xl">
            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-cover']); ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Post Content + TOC -->
      <section class="px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_minmax(0,_3fr)] gap-12">

          <!-- Table of Contents -->
          <aside class="hidden lg:block sticky top-24 h-fit">
            <div class="px-4 py-6 bg-gray-50 rounded-lg border border-gray-200 shadow-sm w-64">
              <h2 class="text-lg font-semibold mb-4 text-gray-800">On This Page</h2>
              <nav id="toc" class="flex flex-col gap-2 text-sm text-gray-700"></nav>
              <style>
                .indent-me {
                  text-indent: .5rem;
                }
              </style>
            </div>
          </aside>

          <!-- Main Content -->
          <div class="prose prose-lg sm:prose-xl max-w-none
            prose-headings:text-primaryGrey
            prose-h1:font-extrabold prose-h1:tracking-tight
            prose-h2:font-bold prose-h2:border-b-2 prose-h2:border-primaryBlue prose-h2:pb-1
            prose-p:text-gray-800 prose-p:leading-relaxed
            prose-a:text-primaryBlue hover:prose-a:underline
            prose-strong:text-black
            prose-li:marker:text-primaryYellow
            prose-blockquote:pl-4 prose-blockquote:border-l-4 prose-blockquote:border-primaryYellow prose-blockquote:text-gray-700 prose-blockquote:italic
            prose-img:rounded-lg prose-img:shadow-md
            prose-code:bg-gray-100 prose-code:px-1 prose-code:rounded">
            <?php the_content(); ?>
          </div>

        </div>
      </section>

      <!-- Categories -->
      <div class="max-w-3xl mx-auto px-6 mt-12 text-sm text-gray-500">
        <p>Filed under: <?php the_category(', '); ?></p>
      </div>

      <!-- Back to Blog -->
      <div class="max-w-3xl mx-auto px-6 mt-8">
        <a href="<?php echo get_post_type_archive_link('post'); ?>" class="inline-block text-primaryBlue text-sm hover:underline">
          ← Back to Blog
        </a>
      </div>

      <!-- Newsletter CTA -->
      <section class="mt-16 bg-primaryYellow text-black py-12 px-6 rounded-2xl shadow-inner max-w-3xl mx-auto text-center">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4">Don’t Miss Out on Local Marketing Tips</h2>
        <p class="mb-6 text-lg">Subscribe to our newsletter for insights designed for contractors and small business owners.</p>
        <form action="#" method="POST" class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <input type="email" name="email" placeholder="Your email" required class="px-4 py-2 rounded-lg w-full sm:w-auto text-black" />
          <button type="submit" class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition-all">
            Subscribe
          </button>
        </form>
      </section>

      <!-- Related Posts -->
      <?php
      $categories = wp_get_post_categories(get_the_ID());
      $related_query = new WP_Query([
        'category__in' => $categories,
        'post__not_in' => [get_the_ID()],
        'posts_per_page' => 3
      ]);
      ?>

      <?php if ($related_query->have_posts()) : ?>
        <section class="mt-20 max-w-5xl mx-auto px-6">
          <h2 class="text-2xl font-bold mb-8">Related Posts</h2>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="block border rounded-xl p-4 hover:shadow-lg transition-all bg-white">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium', ['class' => 'rounded-lg mb-4']); ?>
                <?php endif; ?>
                <h3 class="text-lg font-semibold text-primaryBlue"><?php the_title(); ?></h3>
                <p class="text-sm text-gray-600"><?php echo get_the_date(); ?></p>
              </a>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </section>
      <?php endif; ?>

    <?php endwhile;
  else : ?>
    <p class="text-center text-gray-500">Sorry, this post doesn’t exist.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>