<?php
/*
Template Name: News Page
*/  
get_header();

// Get featured posts (sticky posts or manually selected)
$featured_args = array(
    'posts_per_page' => 4,
    'meta_query' => array(
        array(
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '='
        )
    ),
    'post_status' => 'publish'
);

$featured_posts = get_posts($featured_args);

// If no manually featured posts, get sticky posts
if (empty($featured_posts)) {
    $sticky = get_option('sticky_posts');
    if (!empty($sticky)) {
        $featured_args = array(
            'posts_per_page' => 4,
            'post__in' => $sticky,
            'ignore_sticky_posts' => 1
        );
        $featured_posts = get_posts($featured_args);
    }
}

// Get all categories for filter
$categories = get_categories(array(
    'hide_empty' => true,
));
?>

<!-- News & Articles Page Hero -->
<section class="relative py-20 bg-primary">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative container mx-auto px-12 text-center text-white">
  <h1 class="text-4xl md:text-5xl font-sans font-bold mb-6">News & Insights</h1>
    <p class="text-xl max-w-3xl mx-auto mb-8">
      Expert analysis, legal updates, and insights from MVR Attorneys' corporate and commercial law specialists
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#featured" class="bg-accent text-primary font-bold px-8 py-4 rounded-lg text-lg hover:bg-yellow-400 transition duration-300">
        Featured Articles
      </a>
      <a href="#all-articles" class="border-2 border-white text-white font-bold px-6 py-2 rounded-lg hover:bg-white hover:text-primary transition duration-300">
        All Articles
      </a>
    </div>
  </div>
</section>

<!-- Categories Filter -->
<section class="py-8 bg-white border-b border-gray-200">
  <div class="container mx-auto px-12">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <h2 class="text-lg font-semibold text-gray-700 mb-4 md:mb-0">Filter by Category:</h2>
      <div class="flex flex-wrap gap-2">
        <button class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium category-filter" data-category="all">
          All Articles
        </button>
        <?php foreach ($categories as $category) : ?>
          <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300 category-filter" data-category="<?php echo $category->slug; ?>">
            <?php echo $category->name; ?>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Featured Articles -->
<section id="featured" class="py-16 bg-gray-50">
  <div class="container mx-auto px-12">
    <div class="text-center max-w-3xl mx-auto mb-12">
  <h2 class="text-3xl font-sans font-bold text-primary mb-4">Featured Insights</h2>
      <p class="text-gray-700">In-depth analysis and expert commentary on current legal developments</p>
    </div>

    <?php if (!empty($featured_posts)) : ?>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
        <!-- Main Featured Article -->
        <?php 
        $main_featured = $featured_posts[0];
        setup_postdata($main_featured);
        $categories = get_the_category($main_featured->ID);
        $primary_category = !empty($categories) ? $categories[0]->name : 'Article';
        ?>
        <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
          <?php if (has_post_thumbnail($main_featured->ID)) : ?>
            <div class="h-64 bg-gray-300">
              <img src="<?php echo get_the_post_thumbnail_url($main_featured->ID, 'large'); ?>" alt="<?php echo get_the_title($main_featured->ID); ?>" class="w-full h-full object-cover">
            </div>
          <?php else : ?>
            <div class="h-64 bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center">
              <span class="text-white text-2xl font-bold">Featured</span>
            </div>
          <?php endif; ?>
          <div class="p-8">
            <div class="flex items-center text-sm text-gray-500 mb-3">
              <span><?php echo get_the_date('', $main_featured->ID); ?></span>
              <span class="mx-2">•</span>
              <span><?php echo function_exists('display_reading_time') ? display_reading_time($main_featured->ID) : ''; ?></span>
              <span class="mx-2">•</span>
              <span class="bg-accent text-primary px-2 py-1 rounded-full text-xs font-semibold"><?php echo $primary_category; ?></span>
            </div>
            <h3 class="text-2xl font-bold text-primary mb-4 hover:text-primary-dark transition duration-300">
              <a href="<?php echo get_permalink($main_featured->ID); ?>"><?php echo get_the_title($main_featured->ID); ?></a>
            </h3>
            <p class="text-gray-700 mb-6">
              <?php echo wp_trim_words(get_the_excerpt($main_featured->ID), 20); ?>
            </p>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-gray-300 rounded-full mr-3 overflow-hidden">
                  <?php echo get_avatar(get_the_author_meta('ID', $main_featured->post_author), 40, '', '', array('class' => 'w-full h-full object-cover')); ?>
                </div>
                <div>
                  <p class="text-sm font-semibold"><?php echo get_the_author_meta('display_name', $main_featured->post_author); ?></p>
                  <p class="text-xs text-gray-500"><?php echo get_the_author_meta('description', $main_featured->post_author) ? wp_trim_words(get_the_author_meta('description', $main_featured->post_author), 3) : 'Author'; ?></p>
                </div>
              </div>
              <a href="<?php echo get_permalink($main_featured->ID); ?>" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
                Read Full Analysis
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </article>
        <?php wp_reset_postdata(); ?>

        <!-- Secondary Featured Articles -->
        <div class="space-y-6">
          <?php for ($i = 1; $i < min(4, count($featured_posts)); $i++) : ?>
            <?php 
            $featured_post = $featured_posts[$i];
            setup_postdata($featured_post);
            $categories = get_the_category($featured_post->ID);
            $primary_category = !empty($categories) ? $categories[0]->name : 'Article';
            ?>
            <article class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
              <div class="flex items-start">
                <div class="w-20 h-20 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                  <span class="text-white font-bold text-sm"><?php echo substr($primary_category, 0, 10); ?></span>
                </div>
                <div>
                  <div class="flex items-center text-xs text-gray-500 mb-2">
                    <span><?php echo get_the_date('', $featured_post->ID); ?></span>
                    <span class="mx-2">•</span>
                    <span><?php echo function_exists('display_reading_time') ? display_reading_time($featured_post->ID) : ''; ?></span>
                  </div>
                  <h4 class="font-bold text-primary mb-2 hover:text-primary-dark transition duration-300">
                    <a href="<?php echo get_permalink($featured_post->ID); ?>"><?php echo get_the_title($featured_post->ID); ?></a>
                  </h4>
                  <p class="text-sm text-gray-700 mb-3"><?php echo wp_trim_words(get_the_excerpt($featured_post->ID), 20); ?></p>
                  <a href="<?php echo get_permalink($featured_post->ID); ?>" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
                </div>
              </div>
            </article>
            <?php wp_reset_postdata(); ?>
          <?php endfor; ?>
        </div>
      </div>
    <?php else : ?>
      <div class="text-center py-12">
        <p class="text-gray-600">No featured articles found.</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- All Articles Grid -->
<section id="all-articles" class="py-16 bg-white">
  <div class="container mx-auto px-12">
    <div class="flex justify-between items-center mb-8">
  <h2 class="text-2xl font-sans font-bold text-primary">All Articles</h2>
      <div class="flex items-center">
        <span class="text-gray-700 mr-3">Sort by:</span>
        <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary" id="sort-articles">
          <option value="newest">Newest First</option>
          <option value="oldest">Oldest First</option>
        </select>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="articles-grid">
      <?php
      // Main query for all articles
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
          'posts_per_page' => 9,
          'paged' => $paged,
          'post_status' => 'publish',
          'post__not_in' => !empty($featured_posts) ? wp_list_pluck($featured_posts, 'ID') : array()
      );
      
      $all_posts = new WP_Query($args);
      
      if ($all_posts->have_posts()) :
        while ($all_posts->have_posts()) : $all_posts->the_post();
          $categories = get_the_category();
          $primary_category = !empty($categories) ? $categories[0]->name : 'Article';
          ?>
          <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300 article-item" data-categories="<?php echo !empty($categories) ? implode(' ', wp_list_pluck($categories, 'slug')) : ''; ?>">
            <?php if (has_post_thumbnail()) : ?>
              <div class="h-48 bg-gray-300">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
              </div>
            <?php else : ?>
              <div class="h-48 bg-primary flex items-center justify-center">
                <span class="text-white font-bold"><?php echo $primary_category; ?></span>
              </div>
            <?php endif; ?>
            <div class="p-6">
              <div class="flex items-center text-sm text-gray-500 mb-3">
                <span><?php echo get_the_date(); ?></span>
                <span class="mx-2">•</span>
                <span><?php echo function_exists('display_reading_time') ? display_reading_time() : ''; ?></span>
              </div>
              <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="text-gray-700 mb-4 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <a href="<?php the_permalink(); ?>" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <div class="col-span-full text-center py-12">
          <p class="text-gray-600">No articles found.</p>
        </div>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <!-- Pagination -->
    <?php if ($all_posts->max_num_pages > 1) : ?>
      <div class="flex justify-center mt-12">
        <nav class="flex items-center space-x-2">
          <?php
          echo paginate_links(array(
              'total' => $all_posts->max_num_pages,
              'current' => $paged,
              'prev_text' => '&larr;',
              'next_text' => '&rarr;',
              'type' => 'plain'
          ));
          ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-gray-50">
  <div class="text-center">
      <div class="bg-primary text-white rounded-2xl p-8 md:p-12 max-w-4xl mx-auto">
        <h3 class="text-2xl font-serif font-bold mb-4">Stay Informed with Our Legal Insights</h3>
        <p class="text-lg mb-6 opacity-90">
          Subscribe to our newsletter for regular updates on legal developments that impact your business.
        </p>
        <?php if ( isset( $_GET['mvr_subscribe'] ) && 'success' === $_GET['mvr_subscribe'] ): ?>
          <div class="mb-4 p-2 rounded bg-green-100 text-green-800">Subscription successful — thanks for subscribing.</div>
        <?php elseif ( isset( $_GET['mvr_subscribe'] ) && 'error' === $_GET['mvr_subscribe'] ): ?>
          <div class="mb-4 p-2 rounded bg-red-100 text-red-800">There was an error processing your subscription. Please try again.</div>
        <?php endif; ?>

        <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
          <?php wp_nonce_field( 'mvr_subscribe', 'mvr_subscribe_nonce' ); ?>
          <input type="hidden" name="action" value="mvr_subscribe_form">
          <input type="hidden" name="redirect_to" value="<?php echo esc_url( get_permalink() ); ?>">
          <input type="email" name="subscriber_email" placeholder="Your email address" required class="flex-grow px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-accent">
          <button type="submit" class="bg-accent text-primary font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 whitespace-nowrap">
            Subscribe
          </button>
        </form>
        <p class="text-sm opacity-75 mt-4">No spam. Unsubscribe at any time.</p>
      </div>
      
      <div class="mt-8">
        <a href="<?php echo esc_url( home_url( 'news/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          View All Articles & Insights
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
</section>

<script>
// Simple category filtering
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilters = document.querySelectorAll('.category-filter');
    const articleItems = document.querySelectorAll('.article-item');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active filter
            categoryFilters.forEach(f => f.classList.remove('bg-primary', 'text-white'));
            categoryFilters.forEach(f => f.classList.add('bg-gray-200', 'text-gray-700'));
            this.classList.remove('bg-gray-200', 'text-gray-700');
            this.classList.add('bg-primary', 'text-white');
            
            // Filter articles
            articleItems.forEach(article => {
                if (category === 'all' || article.getAttribute('data-categories').includes(category)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php get_footer(); ?>
