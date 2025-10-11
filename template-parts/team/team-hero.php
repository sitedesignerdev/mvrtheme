<section class="relative py-20 bg-gray-900 flex items-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img 
            src="<?php echo get_template_directory_uri(); ?>/src/images/Team-Banner.jpg" 
            alt="MVR Attorneys Team" 
            class="w-full h-full object-cover"
        >
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center text-white font-sans">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Legal Team</h1>
            <p class="text-xl md:text-2xl mb-8 leading-relaxed">
                Experienced attorneys dedicated to delivering exceptional legal solutions with a client-focused approach.
            </p>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">15+</div>
                    <div class="text-sm md:text-base uppercase tracking-wide">Attorneys</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">25+</div>
                    <div class="text-sm md:text-base uppercase tracking-wide">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">2</div>
                    <div class="text-sm md:text-base uppercase tracking-wide">Offices</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">100+</div>
                    <div class="text-sm md:text-base uppercase tracking-wide">Clients Served</div>
                </div>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#team-members" class="bg-accent text-primary font-bold px-8 py-4 rounded-lg text-lg hover:bg-yellow-400 transition duration-300">
                    Meet Our Team
                </a>
                <a href="#contact" class="border-2 border-white text-white font-bold px-8 py-4 rounded-lg text-lg hover:bg-white hover:text-primary transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>