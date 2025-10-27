<!-- Latest Articles Section -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-3xl font-serif font-bold text-primary mb-4">Latest Insights & Articles</h2>
      <p class="text-gray-700 text-lg">
        Stay informed with our latest legal insights, industry updates, and expert analysis on corporate and commercial law matters.
      </p>
    </div>

    <?php
    // Query for latest posts
    $latest_posts = new WP_Query(array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true
    ));

    // Query for featured post (you can set this with ACF or use most recent)
    $featured_post = new WP_Query(array(
        'posts_per_page' => 1,
        'post_status' => 'publish',
        // If using ACF for featured posts, add meta_query here
    ));

    if ($latest_posts->have_posts()) :
    ?>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      
      <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); 
        $categories = get_the_category();
        $primary_category = !empty($categories) ? $categories[0]->name : 'Article';
        $reading_time = calculate_reading_time();
        $post_views = get_post_meta(get_the_ID(), 'post_views', true) ?: '0';
      ?>
      
      <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
  <!-- Thumbnail Section - UPDATED -->
  <div class="h-48 bg-gray-200 overflow-hidden">
    <?php if (has_post_thumbnail()) : ?>
      <img 
        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" 
        alt="<?php the_title_attribute(); ?>" 
        class="w-full h-full object-cover"
      />
    <?php else : ?>
      <div class="w-full h-full bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center">
        <span class="text-white font-bold text-lg"><?php echo esc_html($primary_category); ?></span>
      </div>
    <?php endif; ?>
  </div>
  
  <div class="p-6">
    <div class="flex items-center text-sm text-gray-500 mb-3">
      <span><?php echo get_the_date('F j, Y'); ?></span>
      <span class="mx-2">•</span>
      <span><?php echo esc_html($reading_time); ?> min read</span>
    </div>
    <h3 class="text-xl font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <p class="text-gray-700 mb-4">
      <?php 
      $excerpt = get_the_excerpt();
      if (empty($excerpt)) {
          $excerpt = wp_trim_words(get_the_content(), 20);
      }
      echo esc_html($excerpt);
      ?>
    </p>
    <div class="flex items-center justify-between">
      <a href="<?php the_permalink(); ?>" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
        Read More
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <span class="text-sm text-gray-500"><?php echo esc_html($post_views); ?></span>
      </div>
    </div>
  </div>
</article>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php endif; ?>

    <!-- Featured Article -->
    <?php if ($featured_post->have_posts()) : while ($featured_post->have_posts()) : $featured_post->the_post(); 
        $reading_time = calculate_reading_time();
        $author_name = get_the_author_meta('display_name');
    ?>
    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="p-8 lg:p-12">
          <div class="inline-block bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold mb-4">
            Featured Insight
          </div>
          <h3 class="text-2xl font-serif font-bold text-primary mb-4">
            <a href="<?php the_permalink(); ?>" class="hover:text-primary-dark transition duration-300">
              <?php the_title(); ?>
            </a>
          </h3>
          <p class="text-gray-700 mb-6">
            <?php 
            $excerpt = get_the_excerpt();
            if (empty($excerpt)) {
                $excerpt = wp_trim_words(get_the_content(), 30);
            }
            echo esc_html($excerpt);
            ?>
          </p>
          <div class="flex items-center text-sm text-gray-500 mb-6">
            <span>By <?php echo esc_html($author_name); ?></span>
            <span class="mx-2">•</span>
            <span><?php echo get_the_date('F j, Y'); ?></span>
            <span class="mx-2">•</span>
            <span><?php echo esc_html($reading_time); ?> min read</span>
          </div>
          <a href="<?php the_permalink(); ?>" class="bg-primary text-white font-semibold px-6 py-3 rounded-lg hover:bg-primary-dark transition duration-300 inline-flex items-center">
            Read Featured Article
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        <div class="bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center p-8">
          <div class="text-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <p class="text-xl font-semibold">Expert Legal Analysis</p>
            <p class="opacity-90 mt-2">In-depth insights from our experienced attorneys</p>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>

    <!-- Newsletter & CTA -->
    <div class="text-center">
      <div class="bg-primary text-white rounded-2xl p-8 md:p-12 max-w-4xl mx-auto">
        <h3 class="text-2xl font-serif font-bold mb-4">Stay Informed with Our Legal Insights</h3>
        <p class="text-lg mb-6 opacity-90">
          Subscribe to our newsletter for regular updates on legal developments that impact your business.
        </p>
        <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
          <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-accent">
          <button type="submit" class="bg-accent text-primary font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 whitespace-nowrap">
            Subscribe
          </button>
        </form>
        <p class="text-sm opacity-75 mt-4">No spam. Unsubscribe at any time.</p>
      </div>
      
      <div class="mt-8">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          View All Articles & Insights
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>