<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mvrtheme
 */

get_header();
?>

	<!-- Simple 404 Error Page -->
<section class="min-h-screen flex items-center justify-center py-20 px-4">
    <div class="container mx-auto text-center max-w-2xl">
        <!-- Error Number -->
        <div class="mb-10">
            <div class="text-primary relative">
                <span class="text-9xl font-bold opacity-10 block">404</span>
                <span class="text-7xl font-bold absolute inset-0 flex items-center justify-center">404</span>
            </div>
        </div>
        
        <!-- Error Content -->
        <h1 class="text-4xl font-serif font-bold text-primary mb-4">Page Not Found</h1>
        <p class="text-xl text-gray-700 mb-10">
            The requested page could not be found. It may have been moved or deleted.
        </p>
        
        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-primary text-white font-bold px-8 py-3 rounded-lg hover:bg-blue-800 transition duration-300">
                Return to Homepage
            </a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="border-2 border-primary text-primary font-bold px-8 py-3 rounded-lg hover:bg-primary hover:text-white transition duration-300">
                Contact Us
            </a>
        </div>
        
        <!-- Quick Links -->
        <div class="bg-gray-50 rounded-xl p-6">
            <h3 class="font-semibold text-gray-800 mb-4">Quick Links:</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="text-primary hover:text-blue-800 font-medium">Our Services</a>
                <span class="text-gray-400">•</span>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('team'))); ?>" class="text-primary hover:text-blue-800 font-medium">Our Team</a>
                <span class="text-gray-400">•</span>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('insights'))); ?>" class="text-primary hover:text-blue-800 font-medium">Latest Insights</a>
                <span class="text-gray-400">•</span>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="text-primary hover:text-blue-800 font-medium">About Us</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
