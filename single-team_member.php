<?php
// single-team_member.php
get_header();

while (have_posts()) : the_post();
    // Get ACF fields
    $position = get_field('position');
    $email = get_field('email');
    $phone = get_field('phone');
    $linkedin = get_field('linkedin');
    $education = get_field('education');
    $specializations = get_field('specializations');
    $bio = get_field('bio');
    $office = get_field('office'); // New field for office location
    $languages = get_field('languages'); // New field for languages
    $bar_admissions = get_field('bar_admissions'); // New field
    $professional_memberships = get_field('professional_memberships'); // New field
    $experience = get_field('experience'); // New field
    $notable_achievements = get_field('notable_achievements'); // New field
?>

<!-- Profile Header -->
<section class="bg-primary text-white py-8">
    <div class="container mx-auto px-4">
        <a href="/team" class="inline-flex items-center text-white hover:text-accent transition duration-300 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Team
        </a>
    </div>
</section>

<!-- Main Profile Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-xl p-8 sticky top-8">
                    <!-- Profile Image -->
                    <div class="mb-6">
                        <?php if (has_post_thumbnail()): ?>
                            <img 
                                src="<?php the_post_thumbnail_url('large'); ?>" 
                                alt="<?php the_title_attribute(); ?>" 
                                class="w-full h-auto object-cover rounded-lg transition-transform duration-300 hover:scale-105"
                            >
                        <?php else: ?>
                            <div class="w-full h-64 bg-gray-300 rounded-lg flex items-center justify-center">
                                <span class="text-gray-500">Profile Image</span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-4">
                        <?php if ($position): ?>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Position</h3>
                                <p class="text-gray-700"><?php echo esc_html($position); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ($email): ?>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Email</h3>
                                <a href="mailto:<?php echo esc_attr($email); ?>" class="text-gray-700 hover:text-primary transition duration-300">
                                    <?php echo esc_html($email); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($phone): ?>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Phone</h3>
                                <a href="tel:<?php echo esc_attr($phone); ?>" class="text-gray-700 hover:text-primary transition duration-300">
                                    <?php echo esc_html($phone); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($office): ?>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Office</h3>
                                <p class="text-gray-700"><?php echo esc_html($office); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ($languages): ?>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Languages</h3>
                                <p class="text-gray-700"><?php echo esc_html($languages); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if ($linkedin): ?>
                            <div class="pt-4">
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="inline-flex items-center text-primary hover:text-primary-dark transition duration-300">
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
                    <h1 class="text-4xl font-serif font-bold text-primary mb-2"><?php the_title(); ?></h1>
                    <?php if ($position): ?>
                        <p class="text-xl text-gray-700"><?php echo esc_html($position); ?></p>
                    <?php endif; ?>
                </header>

                <!-- Bio -->
                <?php if ($bio): ?>
                    <div class="prose max-w-none mb-12">
                        <?php echo wpautop($bio); ?>
                    </div>
                <?php endif; ?>

                <!-- Additional Information -->
                <div class="space-y-8">
                    <!-- Education -->
                    <?php if ($education): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Education</h2>
                            <div class="prose max-w-none">
                                <?php echo wpautop($education); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Areas of Expertise -->
                    <?php if ($specializations): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Areas of Expertise</h2>
                            <div class="prose max-w-none">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <?php 
                                    // Handle both array and string formats
                                    if (is_array($specializations)):
                                        $half = ceil(count($specializations) / 2);
                                        $first_half = array_slice($specializations, 0, $half);
                                        $second_half = array_slice($specializations, $half);
                                    ?>
                                        <div class="space-y-2">
                                            <?php foreach ($first_half as $specialization): ?>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span><?php echo esc_html($specialization); ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="space-y-2">
                                            <?php foreach ($second_half as $specialization): ?>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span><?php echo esc_html($specialization); ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <?php echo wpautop($specializations); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Bar Admissions -->
                    <?php if ($bar_admissions): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Bar Admissions</h2>
                            <div class="prose max-w-none">
                                <?php echo wpautop($bar_admissions); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Professional Memberships -->
                    <?php if ($professional_memberships): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Professional Memberships</h2>
                            <div class="prose max-w-none">
                                <?php echo wpautop($professional_memberships); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Experience -->
                    <?php if ($experience): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Experience</h2>
                            <div class="prose max-w-none">
                                <?php echo wpautop($experience); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Notable Achievements -->
                    <?php if ($notable_achievements): ?>
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Notable Achievements</h2>
                            <div class="prose max-w-none">
                                <?php echo wpautop($notable_achievements); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-serif font-bold mb-6">Schedule a Consultation</h2>
        <p class="text-xl max-w-2xl mx-auto mb-8">
            Contact <?php the_title(); ?> for expert legal advice on corporate and commercial matters.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-accent text-primary font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                Schedule Consultation
            </a>
            <?php if ($email): ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="border-2 border-white text-white font-bold px-8 py-3 rounded-lg hover:bg-white hover:text-primary transition duration-300">
                    Send Email
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 
endwhile;
get_footer();
?>