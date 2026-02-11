
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
    // Helper to normalize ACF image field (array | ID | URL) into a URL string
    $resolve_image_url = function($raw) {
      if (empty($raw)) {
        return '';
      }
      if (is_array($raw) && !empty($raw['url'])) {
        return $raw['url'];
      }
      if (is_numeric($raw)) {
        // Use 'medium' for slightly larger images when ACF returns an attachment ID
        return wp_get_attachment_image_url(intval($raw), 'medium') ?: '';
      }
      if (is_string($raw) && filter_var($raw, FILTER_VALIDATE_URL)) {
        return $raw;
      }
      return '';
    };

    // 1) Try to read image_profile from the current post (if present)
    $image_profile = $resolve_image_url(get_field('image_profile'));

    // 2) If not found, check for a user-level ACF field (image stored on the WP user)
    if (empty($image_profile) && function_exists('get_field') && $author_id) {
      $user_field = get_field('image_profile', 'user_' . $author_id);
      $image_profile = $resolve_image_url($user_field);
    }

    // 3) If still not found, try to find a team_member CPT authored by this WP user
    if (empty($image_profile) && post_type_exists('team_member') && $author_id) {
      $team_q = new WP_Query(array(
        'post_type' => 'team_member',
        'posts_per_page' => 1,
        'author' => $author_id,
        'post_status' => 'publish',
        'fields' => 'ids',
      ));
      if ($team_q->have_posts()) {
        $team_id = $team_q->posts[0];
        $team_field = get_field('image_profile', $team_id);
        $image_profile = $resolve_image_url($team_field);
      }
      wp_reset_postdata();
    }

    // If still empty, try other heuristics to find a matching team_member post
    if (empty($image_profile) && post_type_exists('team_member')) {
      // Prefer matching by the author's email (common ACF field on team_member)
      $author_email = get_the_author_meta('user_email', $author_id);
      $found = false;

      if ($author_email) {
        $q = new WP_Query(array(
          'post_type' => 'team_member',
          'posts_per_page' => 10,
          'post_status' => 'publish',
          'fields' => 'ids',
        ));
        if ($q->have_posts()) {
          foreach ($q->posts as $tid) {
            $t_email = get_field('email', $tid);
            if ($t_email && strtolower(trim($t_email)) === strtolower(trim($author_email))) {
              $team_field = get_field('image_profile', $tid);
              $image_profile = $resolve_image_url($team_field);
              $found = true;
              break;
            }
          }
        }
        wp_reset_postdata();
      }

      // Last resort: try matching by team_member post title == author name (sanitized)
      if (!$found) {
        $author_slug = sanitize_title($author_name);
        $q2 = new WP_Query(array(
          'post_type' => 'team_member',
          'posts_per_page' => 20,
          'post_status' => 'publish',
          'fields' => 'ids',
        ));
        if ($q2->have_posts()) {
          foreach ($q2->posts as $tid) {
            if (sanitize_title(get_the_title($tid)) === $author_slug) {
              $team_field = get_field('image_profile', $tid);
              $image_profile = $resolve_image_url($team_field);
              $found = true;
              break;
            }
          }
        }
        wp_reset_postdata();
      }
    }

    // 4) Final fallbacks: author avatar, then a theme placeholder
    if (empty($image_profile)) {
      if (function_exists('get_avatar_url')) {
        // Slightly larger fallback avatar
        $image_profile = get_avatar_url($author_id, array('size' => 112));
      } else {
        $image_profile = get_template_directory_uri() . '/assets/images/avatar-placeholder.png';
      }
    }
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
			<div class="absolute inset-0 bg-black opacity-60"></div>
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
            <div class="w-14 h-14 bg-white rounded-full overflow-hidden">
              <img src="<?php echo esc_url($image_profile); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-full h-full object-cover">
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
          <article class="prose prose-lg max-w-none 
                prose-headings:font-serif 
                prose-headings:text-primary
                prose-headings:font-bold
                prose-h1:text-4xl
                prose-h2:text-3xl
                prose-h3:text-2xl
                prose-h4:text-xl
                prose-p:text-gray-700
                prose-p:leading-relaxed
                prose-p:mb-6
                prose-a:text-accent
                prose-a:no-underline
                prose-a:hover:text-yellow-600
                prose-a:font-semibold
                prose-strong:text-primary
                prose-strong:font-semibold
                prose-blockquote:border-l-4
                prose-blockquote:border-accent
                prose-blockquote:bg-gray-50
                prose-blockquote:py-4
                prose-blockquote:px-6
                prose-blockquote:rounded-r-lg
                prose-blockquote:italic
                prose-ul:list-disc
                prose-ul:pl-6
                prose-ol:list-decimal
                prose-ol:pl-6
                prose-li:marker:text-primary
                prose-li:mb-2
                prose-table:w-full
                prose-table:shadow-md
                prose-table:rounded-lg
                prose-table:overflow-hidden
                prose-th:bg-primary
                prose-th:text-white
                prose-th:px-4
                prose-th:py-3
                prose-td:border-b
                prose-td:border-gray-200
                prose-td:px-4
                prose-td:py-3
                prose-img:rounded-lg
                prose-img:shadow-md
                prose-pre:bg-gray-800
                prose-pre:text-white
                prose-pre:p-4
                prose-pre:rounded-lg
                prose-code:text-gray-800
                prose-code:bg-gray-100
                prose-code:px-2
                prose-code:py-1
                prose-code:rounded
                prose-lead:text-xl
                prose-lead:text-gray-600
                prose-lead:font-semibold">
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
                <div class="w-24 h-24 bg-primary rounded-full overflow-hidden flex-shrink-0">
                    <?php if ($image_profile): ?>
                        <img src="<?php echo esc_url($image_profile); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                        <?php echo get_avatar(get_the_author_meta('ID'), 112, '', '', array('class' => 'w-full h-full object-cover')); ?>
                    <?php endif; ?>
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
