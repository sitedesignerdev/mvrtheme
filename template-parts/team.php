<section class="py-16 bg-white">
    <div class="container mx-auto px-12">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl font-bold text-primary mb-4">Our Legal Team</h2>
            <p class="text-xl text-gray-600">Experienced attorneys dedicated to your success</p>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php
            // Replace these IDs with the actual post IDs of the team members you want to display
            $selected_team_ids = array(120, 123, 94); // Example IDs
            
            $team_args = array(
                'post_type' => 'team_member',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post__in' => $selected_team_ids, // This selects specific posts by ID
                'orderby' => 'post__in', // This maintains the order you specify in the array
            );

            $team_loop = new WP_Query($team_args);
            if ($team_loop->have_posts()):
                while ($team_loop->have_posts()): $team_loop->the_post();
                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $position = function_exists('get_field') ? get_field('position') : get_post_meta(get_the_ID(), 'position', true);
                    $office = function_exists('get_field') ? get_field('office') : get_post_meta(get_the_ID(), 'office', true);
                    $excerpt = wp_trim_words( get_the_excerpt(), 20, '...' );
                    $member_link = get_permalink();
                    $linkedin = function_exists('get_field') ? get_field('linkedin') : '';
            ?>
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="<?php echo esc_attr(implode(' ', wp_get_post_terms(get_the_ID(), 'practice_area', array('fields' => 'slugs')))); ?>" data-office="<?php echo esc_attr($office); ?>">
                <div class="h-90 overflow-hidden">
                    <?php if ($thumb): ?>
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No image</div>
                    <?php endif; ?>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1"><?php the_title(); ?></h3>
                    <?php if ($position): ?><p class="text-accent font-semibold mb-3"><?php echo esc_html($position); ?></p><?php endif; ?>
                    <?php if ($office): ?><p class="text-gray-600 mb-4"><?php echo esc_html($office); ?> Office</p><?php endif; ?>
                    <p class="text-gray-600 mb-4"><?php echo esc_html($excerpt); ?></p>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <?php if ($linkedin): ?>
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="text-primary hover:text-accent transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($member_link); ?>" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">View Profile</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
                <div class="col-span-1">
                    <p class="text-gray-600">No team members found. Add some <code>team_member</code> posts in the admin.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- CTA Button -->
        <div class="text-center">
            <a href="<?php echo esc_url( home_url( '/our-team/' ) ); ?>" class="inline-block bg-primary text-white font-bold px-8 py-4 rounded-lg hover:bg-blue-800 transition duration-300">
                Meet Our Full Team
            </a>
        </div>
    </div>
</section>