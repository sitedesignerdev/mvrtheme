<?php



/*Template Name: Labour and Employment Page
*/

?>
<?php get_header(); ?>
 
<!-- Service Hero Section -->
<section class="relative py-20 bg-primary text-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black opacity-50"></div>
            <img 
                src="<?php echo get_template_directory_uri(); ?>/src/images/services_bg_four.jpg" 
                alt="Labour and Employment" 
                class="w-full h-full object-cover object-[center_5%]"
        >
    </div>
    
    <div class="relative container mx-auto px-12 z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-accent rounded-full text-primary mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">Labour and Employment</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">
                Comprehensive legal solutions for businesses, from formation to complex transactions and governance.
            </p>
        </div>
    </div>
</section>

<!-- Service Overview & Team -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <!-- Service Description -->
            <div>
                <h2 class="text-3xl font-serif font-bold text-primary mb-8">Department Overview</h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-gray-700 mb-6">
                        The Labour and Employment practice is led by <strong>Fair Manikai</strong>.
                    </p>
                    <p class="text-gray-700 mb-6">
                       Fair is highly skilled and specialises in all areas of labour law. Fair has more than 21 years of experience. His experience includes advising and representing clients in disputes involving unfair dismissal, unfair labour practice, unfair discrimination, collective bargaining and strike interdicts.
                    </p>
                    <p>
                        Fair has practiced as a senior employment and labour lawyer with some of South Africa’s leading law firms, namely, Edward Nathan Sonnenbergs Inc. and Brink Cohen Le Roux Inc for many years. Fair also acted as a senior in-house counsel focusing on employment and labour law for namely, Barrick Africa (Pty) Limited and Anglogold Ashanti Limited.
                    </p>
                </div>

                <!-- Key Team Members -->
                <div class="mt-8 space-y-6">
                    <!-- Team Member 1 -->
                    <div class="flex items-start gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 border-2 border-accent">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/src/images/Fair.png" 
                                alt="Fair Manikai"
                                class="w-full h-full object-cover"
                                onerror="this.src='<?php echo get_template_directory_uri(); ?>/src/images/team/placeholder.jpg'"
                            >
                        </div>
                        <div>
                            <h4 class="font-bold text-primary">Fair Manikai</h4>
                            <p class="text-accent font-semibold text-sm">Executive – Labour Law</p>
                            <p class="text-gray-600 text-sm mt-1">21+ years of experience</p>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <!-- <div class="flex items-start gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 border-2 border-accent">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/src/images/Eduan.png" 
                                alt="Eduan Kapp"
                                class="w-full h-full object-cover"
                                onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/team/placeholder.jpg'"
                            >
                        </div>
                        <div>
                            <h4 class="font-bold text-primary">Eduan Kapp</h4>
                            <p class="text-accent font-semibold text-sm">Executive</p>
                            <p class="text-gray-600 text-sm mt-1">30 years experience in finance and mergers & acquisitions</p>
                        </div>
                    </div> -->

                    <!-- Team Member 3 -->
                    <!-- <div class="flex items-start gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 border-2 border-accent">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/src/images/Tana.png" 
                                alt="Tana Patsa"
                                class="w-full h-full object-cover"
                                onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/team/placeholder.jpg'"
                            >
                        </div>
                        <div>
                            <h4 class="font-bold text-primary">Tana Patsa</h4>
                            <p class="text-accent font-semibold text-sm">Associate</p>
                            <p class="text-gray-600 text-sm mt-1">2 years post-admission experience, specializing in state-owned entities</p>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Practice Areas -->
            <div class="bg-gray-50 rounded-xl p-8">
                <h3 class="text-2xl font-serif font-bold text-primary mb-6">Practice Areas</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Labour law
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Dispute resolution and arbitration
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            HR Management
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Chair disciplinary hearings
                        </li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            HR Plans and Reports
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Transformation Implementation
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            General labour law advice
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Clients Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-12">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-bold text-primary mb-4">Recent Clients</h2>
                <p class="text-gray-700 text-lg">
                    In the recent past, the Corporate Commercial team has advised blue chip clients and state-owned entities on complex corporate commercial matters.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Client 1 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/mtn-logo.png" 
                        alt="MTN"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">ArcelorMittal South Africa Limited</p>
                </div>

                <!-- Client 2 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/bidvest-logo.png" 
                        alt="Bidvest"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">PIC</p>
                </div>

                <!-- Client 3 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/saipa-logo.png" 
                        alt="SAIPA"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">MTN</p>
                </div>

                <!-- Client 4 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/exxaro-logo.png" 
                        alt="Exxaro"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Ekuzeni Supplies</p>
                </div>

                <!-- Client 5 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/african-bank-logo.png" 
                        alt="African Bank"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Onderstepoort Biological Products</p>
                </div>

                <!-- Client 6 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/arcelormittal-logo.png" 
                        alt="ArcelorMittal"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">RMA</p>
                </div>

                <!-- Client 7 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/rma-logo.png" 
                        alt="RMA"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Bombela Operating Company</p>
                </div>

                <!-- Client 8 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/siyanda-logo.png" 
                        alt="Siyanda Resources"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Mukwevho Group</p>
                </div>

                <!-- Client 9 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/umk-logo.png" 
                        alt="United Manganese Kalahari"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Johnson Crane Hire</p>
                </div>

                <!-- Client 10 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/africa-polo-logo.png" 
                        alt="Africa Polo Network"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Sena Financial Services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-serif font-bold mb-6">Ready to Discuss Your Corporate Commercial Needs?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Contact our Corporate Commercial team for expert legal guidance on your business matters.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-accent text-primary font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                Schedule a Consultation
            </a>
            <a href="/team" class="border-2 border-white text-white font-bold px-8 py-3 rounded-lg hover:bg-white hover:text-primary transition duration-300">
                Meet Our Team
            </a>
        </div>
    </div>
</section>

<?php get_footer();