<?php
// template-parts/archive-content.php
if (have_posts()) : ?>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <?php while (have_posts()) : the_post(); ?>
          <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
            <!-- Article card content (same as above) -->
            <?php if (has_post_thumbnail()) : ?>
              <div class="h-48 bg-gray-300">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
              </div>
            <?php else : ?>
              <div class="h-48 bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center">
                <span class="text-white font-bold">
                  <?php 
                  $categories = get_the_category();
                  echo !empty($categories) ? esc_html($categories[0]->name) : 'Article';
                  ?>
                </span>
              </div>
            <?php endif; ?>
            
            <div class="p-6">
              <!-- Rest of article card content -->
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center">
        <?php
        the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => __('&larr; Previous'),
          'next_text' => __('Next &rarr;'),
        ));
        ?>
      </div>
    </div>
  </section>
<?php else : ?>
  <div class="text-center py-12">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">No articles found</h2>
    <p class="text-gray-600">No articles found in this archive.</p>
    <a href="<?php echo home_url(); ?>" class="inline-block bg-accent text-primary font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 mt-4">
      Return Home
    </a>
  </div>
<?php endif; ?>