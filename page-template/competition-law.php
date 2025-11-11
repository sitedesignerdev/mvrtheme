<?php



/*Template Name: Competition Law Page
*/

?>
<?php get_header(); ?>

<!-- Service Hero Section -->
<section class="relative py-20 bg-primary text-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img 
            src="<?php echo get_template_directory_uri(); ?>/src/images/Team-Banner.jpg" 
            alt="Corporate Commercial Law" 
            class="w-full h-full object-cover object-[center_10%]"
        >
    </div>
    
    <div class="relative container mx-auto px-12 z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-accent rounded-full text-primary mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">Competition Law</h1>
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
                       The Competition Law Department is led by <strong>Maphanga Maseko</strong> who has more than 10 years experience in Competition Law. Maphanga is a results-driven professional and has proven knowledge of, inter alia, competition law, commercial law, mergers and acquisition law, in various fields including telecommunications, National Credit Regulator, corporate governance and energy.
                    </p>
                    
                </div>

                <!-- Key Team Members -->
                <div class="mt-8 space-y-6">
                    <!-- Team Member 1 -->
                    <div class="flex items-start gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden flex-shrink-0 border-2 border-accent">
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/src/images/Maphanga.png" 
                                alt="Maphanga Maseko"
                                class="w-full h-full object-cover"
                                onerror="this.src='<?php echo get_template_directory_uri(); ?>/src/images/team/placeholder.jpg'"
                            >
                        </div>
                        <div>
                            <h4 class="font-bold text-primary">Maphanga Maseko</h4>
                            <p class="text-accent font-semibold text-sm">Executive – Competition Practice and Regulatory Law and Compliance</p>
                            <p class="text-gray-600 text-sm mt-1">10+ years experience in Competition Law</p>
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
                            Competition law
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Due Diligence Investigations
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Special tribunal proceedings
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Review and Appeals
                        </li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Training on Competition law
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                           Competition Commission litigation.
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
                    <p class="text-sm font-semibold text-gray-800">African Bank Limited</p>
                </div>

                <!-- Client 2 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/bidvest-logo.png" 
                        alt="Bidvest"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Bidvest Corporate Services</p>
                </div>

                <!-- Client 3 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/saipa-logo.png" 
                        alt="SAIPA"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Exxaro</p>
                </div>

                <!-- Client 4 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/exxaro-logo.png" 
                        alt="Exxaro"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">NEF</p>
                </div>

                <!-- Client 5 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/african-bank-logo.png" 
                        alt="African Bank"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">CellSaf Proprietary Limited</p>
                </div>

                <!-- Client 6 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/arcelormittal-logo.png" 
                        alt="ArcelorMittal"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Telkom SOC Limited</p>
                </div>

                <!-- Client 7 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/rma-logo.png" 
                        alt="RMA"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Liberty Health Proprietary Limited</p>
                </div>

                <!-- Client 8 -->
                <div class="bg-white rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300 flex flex-col items-center justify-center h-32">
                    <!-- <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/siyanda-logo.png" 
                        alt="Siyanda Resources"
                        class="h-12 w-auto object-contain mb-3"
                        onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/clients/placeholder-logo.png'"
                    > -->
                    <p class="text-sm font-semibold text-gray-800">Sasol Limited</p>
                </div>  

               
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-12 text-center">
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