
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mvrtheme
 */

get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    $author_id = get_the_author_meta('ID');
    $author_name = get_the_author_meta('display_name');
    $author_avatar = get_avatar_url($author_id, array('size' => 96));
    $post_date = get_the_date('F j, Y');
    $categories = get_the_category();
    $primary_category = !empty($categories) ? $categories[0]->name : 'Uncategorized';
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $author_description = get_the_author_meta('description');
?>

	<!-- Single Post Hero Section -->
	<section class="relative py-20 bg-primary">
		<!-- Background Image with Overlay -->
		<div class="absolute inset-0 z-0">
			<div class="absolute inset-0 bg-primary opacity-90"></div>
			<?php if ($featured_image): ?>
				<img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
			<?php endif; ?>
		</div>

		<!-- Content -->
		<div class="relative container mx-auto px-4 z-10">
			<div class="max-w-4xl mx-auto text-center text-white">
      
				<!-- Category Badge -->
				<div class="inline-block bg-accent text-primary px-4 py-2 rounded-full text-sm font-semibold mb-6">
					<?php echo esc_html($primary_category); ?>
				</div>
      
				<!-- Title -->
				<h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold mb-8 leading-tight">
					<?php the_title(); ?>
				</h1>
      
				<!-- Author & Date Info -->
				<div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-8">
					<!-- Author Profile -->
					<div class="flex items-center gap-3">
						<div class="w-12 h-12 bg-white rounded-full overflow-hidden">
							<img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-full h-full object-cover">
						</div>
						<div class="text-left">
							<p class="font-semibold"><?php echo esc_html($author_name); ?></p>
							<?php if ($author_description): ?>
								<p class="text-gray-300 text-sm"><?php echo esc_html(wp_trim_words($author_description, 5)); ?></p>
							<?php endif; ?>
						</div>
					</div>
        
					<!-- Date -->
					<div class="flex items-center gap-4 text-gray-300">
						<div class="flex items-center gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							<span><?php echo esc_html($post_date); ?></span>
						</div>
					</div>
					<!-- Reading Time -->
					<div class="flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<span><?php echo display_reading_time(); ?></span>
					</div>
				</div>
      
				<!-- Social Sharing -->
				<div class="flex justify-center items-center gap-4">
					<span class="text-gray-300">Share this article:</span>
					<div class="flex gap-3">
						<!-- Social sharing buttons -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Content Section -->
    <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          
          <!-- Article Content -->
          <article class="prose prose-lg max-w-none">
            <?php the_content(); ?>
            
            <?php
            // Pagination for multi-page posts
            wp_link_pages(array(
              'before' => '<div class="page-links"><span class="text-gray-700 font-semibold">Pages:</span>',
              'after'  => '</div>',
            ));
            ?>
          </article>
          
          <!-- Article Tags -->
          <div class="border-t border-gray-200 pt-8 mt-12">
            <?php if (has_tag()) : ?>
              <div class="flex flex-wrap gap-2">
                <span class="text-gray-700 font-semibold">Tags:</span>
                <?php the_tags('', '', ''); ?>
              </div>
            <?php endif; ?>
          </div>
          
          <!-- Author Bio -->
          <div class="bg-gray-50 rounded-xl p-8 mt-12">
            <div class="flex flex-col md:flex-row items-start gap-6">
              <div class="w-20 h-20 bg-primary rounded-full overflow-hidden flex-shrink-0">
                <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'w-full h-full object-cover')); ?>
              </div>
              <div>
                <h3 class="text-xl font-bold text-primary mb-2">About the Author</h3>
                <p class="text-gray-700 mb-4">
                  <?php 
                  $author_description = get_the_author_meta('description');
                  if ($author_description) {
                    echo esc_html($author_description);
                  } else {
                    echo 'Read more articles by ' . get_the_author();
                  }
                  ?>
                </p>
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
                  View All Articles by <?php echo get_the_author(); ?>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>

          
          <!-- Related Articles -->
          <div class="mt-16">
            <h3 class="text-2xl font-serif font-bold text-primary mb-8">Related Articles</h3>
            <?php
            $related_args = array(
              'posts_per_page' => 2,
              'post__not_in'   => array(get_the_ID()),
              'category__in'   => wp_get_post_categories(get_the_ID()),
            );
            $related_query = new WP_Query($related_args);
            
            if ($related_query->have_posts()) {
            ?>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php while ($related_query->have_posts()) { $related_query->the_post(); ?>
                  <article class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition duration-300">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                      <span><?php echo get_the_date(); ?></span>
                      <span class="mx-2">•</span>
                      <span><?php echo display_reading_time(); ?></span>
                    </div>
                    <h4 class="font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p class="text-gray-700 text-sm mb-4"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    <a href="<?php the_permalink(); ?>" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
                  </article>
                <?php } ?>
              </div>
            <?php 
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
    endwhile;
endif;
?>
</main>

<?php get_footer(); ?>
