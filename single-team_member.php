<?php
/**
 * Template Name: Team Member Profile
 */
get_header();
?>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="<?php echo get_post_type_archive_link('team_member'); ?>" class="text-primary hover:text-primary-dark inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Team
            </a>
        </div>

        <?php while (have_posts()) : the_post(); ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-xl p-8 sticky top-8">
                        <!-- Profile Image -->
                        <div class="mb-6">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-48 h-48 rounded-full mx-auto object-cover')); ?>
                            <?php else : ?>
                                <div class="w-48 h-48 bg-primary rounded-full mx-auto flex items-center justify-center">
                                    <span class="text-white text-2xl font-bold"><?php echo strtoupper(substr(get_the_title(), 0, 2)); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-4">
                            <?php if ($position = get_field('position')) : ?>
                                <div>
                                    <h3 class="font-semibold text-primary mb-1">Position</h3>
                                    <p class="text-gray-700"><?php echo esc_html($position); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ($email = get_field('email')) : ?>
                                <div>
                                    <h3 class="font-semibold text-primary mb-1">Email</h3>
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="text-gray-700 hover:text-primary transition duration-300">
                                        <?php echo esc_html($email); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($phone = get_field('phone')) : ?>
                                <div>
                                    <h3 class="font-semibold text-primary mb-1">Phone</h3>
                                    <a href="tel:<?php echo esc_attr($phone); ?>" class="text-gray-700 hover:text-primary transition duration-300">
                                        <?php echo esc_html($phone); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($languages = get_field('languages')) : ?>
                                <div>
                                    <h3 class="font-semibold text-primary mb-1">Languages</h3>
                                    <p class="text-gray-700"><?php echo esc_html($languages); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if ($linkedin_url = get_field('linkedin_url')) : ?>
                                <div class="pt-4">
                                    <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" class="inline-flex items-center text-primary hover:text-primary-dark transition duration-300">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                        Connect on LinkedIn
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <header class="mb-8">
                        <h1 class="text-4xl font-sans font-bold text-primary mb-2"><?php the_title(); ?></h1>
                        <?php if ($position = get_field('position')) : ?>
                            <p class="text-xl text-gray-700"><?php echo esc_html($position); ?></p>
                        <?php endif; ?>
                    </header>

                    <!-- Bio -->
                    <div class="prose max-w-none mb-12">
                        <?php the_content(); ?>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-8">
                        <?php if ($education = get_field('education')) : ?>
                            <div>
                                <h2 class="text-2xl font-sans font-bold text-primary mb-4">Education</h2>
                                <div class="prose max-w-none">
                                    <?php echo wpautop($education); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($expertise = get_field('expertise')) : ?>
                            <div>
                                <h2 class="text-2xl font-sans font-bold text-primary mb-4">Areas of Expertise</h2>
                                <div class="prose max-w-none">
                                    <?php echo wpautop($expertise); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($bar_admissions = get_field('bar_admissions')) : ?>
                            <div>
                                <h2 class="text-2xl font-sans font-bold text-primary mb-4">Bar Admissions</h2>
                                <div class="prose max-w-none">
                                    <?php echo wpautop($bar_admissions); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($memberships = get_field('memberships')) : ?>
                            <div>
                                <h2 class="text-2xl font-sans font-bold text-primary mb-4">Professional Memberships</h2>
                                <div class="prose max-w-none">
                                    <?php echo wpautop($memberships); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($experience = get_field('experience')) : ?>
                            <div>
                                <h2 class="text-2xl font-sans font-bold text-primary mb-4">Experience</h2>
                                <p class="text-gray-700 text-lg"><?php echo esc_html($experience); ?>+ years of legal experience</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>