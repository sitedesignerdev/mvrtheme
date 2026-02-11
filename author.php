<?php
/**
 * Author archive template
 */
get_header();

// Setup author data BEFORE any template parts
global $wp_query;
setup_postdata($wp_query->posts[0]); // Setup first post to get author data

// Get author info
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name');

// Get profile image using function from functions.php or same logic
$author_profile_image = function_exists('mvr_get_author_profile_image') ? 
    mvr_get_author_profile_image($author_id) : 
    get_avatar_url($author_id, array('size' => 96));
?>

<main class="min-h-screen">
  <!-- Hero Section -->
  <section class="relative py-20 bg-primary">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto px-12 text-center text-white">
      <div class="max-w-2xl mx-auto">
        <!-- Author Avatar -->
        <div class="w-24 h-24 bg-white rounded-full overflow-hidden mx-auto mb-6">
          <?php if ($author_profile_image) : ?>
            <img src="<?php echo esc_url($author_profile_image); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-full h-full object-cover">
          <?php else : ?>
            <?php echo get_avatar($author_id, 96, '', '', array('class' => 'w-full h-full object-cover')); ?>
          <?php endif; ?>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">
          Articles by: <?php echo esc_html($author_name); ?>
        </h1>
        
        <?php if (get_the_author_meta('description')) : ?>
          <p class="text-xl opacity-90"><?php echo esc_html(get_the_author_meta('description')); ?></p>
        <?php endif; ?>
        
        <!-- Author Stats -->
        <div class="flex justify-center gap-6 mt-6 text-sm">
          <div class="text-center">
            <div class="text-2xl font-bold"><?php echo count_user_posts($author_id); ?></div>
            <div class="opacity-80">Articles</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold">
              <?php echo date('Y', strtotime(get_the_author_meta('user_registered'))); ?>
            </div>
            <div class="opacity-80">Member Since</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Articles Section - INLINE instead of template part -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-12">
      <?php 
      // Reset post data for the loop
      rewind_posts();
      
      if (have_posts()) : ?>
        <!-- Results Count -->
        <div class="mb-8">
          <p class="text-gray-600">
            Showing <?php echo $wp_query->found_posts; ?> article<?php echo $wp_query->found_posts !== 1 ? 's' : ''; ?> by <?php echo get_the_author(); ?>
          </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); 
            $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $categories = get_the_category();
            $primary_category = !empty($categories) ? $categories[0]->name : 'Uncategorized';
            $excerpt = wp_trim_words(get_the_excerpt(), 20, '...');
            $reading_time = function_exists('calculate_reading_time') ? calculate_reading_time() : '5';
          ?>
          <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
            <!-- Featured Image -->
            <?php if ($thumb) : ?>
              <div class="h-48 overflow-hidden">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
            <?php endif; ?>

            <div class="p-6">
              <!-- Category & Date -->
              <div class="flex items-center justify-between text-sm text-gray-500 mb-3">
                <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-semibold">
                  <?php echo esc_html($primary_category); ?>
                </span>
                <span><?php echo get_the_date('M j, Y'); ?></span>
              </div>

              <!-- Title -->
              <h3 class="text-xl font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>

              <!-- Excerpt -->
              <p class="text-gray-600 mb-4"><?php echo esc_html($excerpt); ?></p>

              <!-- Meta Footer -->
              <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                <div class="flex items-center">
                  <!-- Author Avatar -->
                  <div class="w-8 h-8 rounded-full overflow-hidden mr-3">
                    <?php if ($author_profile_image) : ?>
                      <img src="<?php echo esc_url($author_profile_image); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-full h-full object-cover">
                    <?php else : ?>
                      <?php echo get_avatar($author_id, 32, '', '', array('class' => 'w-full h-full object-cover')); ?>
                    <?php endif; ?>
                  </div>
                  <span class="text-sm font-medium text-gray-700"><?php echo esc_html($author_name); ?></span>
                </div>
                <span class="text-sm text-gray-500 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <?php echo esc_html($reading_time); ?> min read
                </span>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('&larr; Previous', 'mvrtheme'),
            'next_text' => __('Next &rarr;', 'mvrtheme'),
          ));
          ?>
        </div>

      <?php else : ?>
        <!-- No Posts Found -->
        <div class="text-center py-16">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 class="text-2xl font-semibold text-gray-700 mb-2">No Articles Found</h3>
          <p class="text-gray-600">This author hasn't published any articles yet.</p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php 
wp_reset_postdata();
get_footer(); 
?>