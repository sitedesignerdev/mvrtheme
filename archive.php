<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mvrtheme
 */

get_header();
?>

<main class="min-h-screen">
  <!-- Hero Section -->
  <section class="relative py-20 bg-primary">
    <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative container mx-auto px-12 text-center text-white">
      <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">
        <?php
        if (is_tag()) {
          single_tag_title('Articles Tagged: ');
        } elseif (is_category()) {
          single_cat_title('Articles in: ');
        } elseif (is_author()) {
          echo 'Articles by: ' . get_the_author();
        } elseif (is_date()) {
          if (is_year()) {
            echo 'Articles from: ' . get_the_date('Y');
          } elseif (is_month()) {
            echo 'Articles from: ' . get_the_date('F Y');
          } else {
            echo 'Articles from: ' . get_the_date('F j, Y');
          }
        } else {
          the_archive_title();
        }
        ?>
      </h1>
      <?php if (get_the_archive_description()) : ?>
        <p class="text-xl max-w-2xl mx-auto"><?php the_archive_description(); ?></p>
      <?php endif; ?>
    </div>
  </section>

  <!-- Articles Grid -->
  <section class="py-16 bg-white">
  <div class="container mx-auto px-12">
      <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          <?php while (have_posts()) : the_post(); ?>
            <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
              <?php if (has_post_thumbnail()) : ?>
                <div class="h-48 bg-gray-300">
                  <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                </div>
              <?php else : ?>
                <div class="h-48 bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center">
                  <span class="text-white font-bold">
                    <?php 
                    $categories = get_the_category();
                    if (!empty($categories)) {
                      echo esc_html($categories[0]->name);
                    } else {
                      echo 'Article';
                    }
                    ?>
                  </span>
                </div>
              <?php endif; ?>
              
              <div class="p-6">
                <!-- Category -->
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                  <div class="inline-block bg-gray-100 text-primary px-3 py-1 rounded-full text-xs font-semibold mb-3">
                    <?php echo esc_html($categories[0]->name); ?>
                  </div>
                <?php endif; ?>
                
                <div class="flex items-center text-sm text-gray-500 mb-3">
                  <span><?php echo get_the_date(); ?></span>
                  <span class="mx-2">•</span>
                  <span><?php echo function_exists('display_reading_time') ? display_reading_time() : ''; ?></span>
                </div>
                
                <h2 class="text-xl font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                
                <p class="text-gray-700 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                
                <div class="flex items-center justify-between">
                  <a href="<?php the_permalink(); ?>" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </a>
                  
                  <!-- Author -->
                  <div class="flex items-center text-sm text-gray-500">
                    <span>By <?php the_author(); ?></span>
                  </div>
                </div>
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
            'class'     => 'pagination',
          ));
          ?>
        </div>
        
      <?php else : ?>
        <div class="text-center py-12">
          <h2 class="text-2xl font-bold text-gray-700 mb-4">No articles found</h2>
          <p class="text-gray-600">No articles found in this archive.</p>
          <a href="<?php echo home_url(); ?>" class="inline-block bg-accent text-primary font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 mt-4">
            Return Home
          </a>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
// Remove sidebar for consistent layout
get_footer();