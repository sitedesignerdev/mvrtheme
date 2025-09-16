<section class="relative min-h-[60vh] flex items-center justify-center py-16 px-4">
    <!-- Background with overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img 
            src="<?php echo get_template_directory_uri(); ?>/src/images/About-Us.png" 
            alt="MVR Attorneys Office" 
            class="w-full h-full object-cover"
        />
    </div>

    <!-- Content -->
    <div class="container mx-auto max-w-4xl relative z-10 text-white text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">Our Story & Values</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Providing exceptional legal counsel with integrity, expertise, and dedication since 2022.
        </p>
        
        <!-- Stats -->
        <div class="flex flex-wrap justify-center gap-8 mb-10">
            <div class="text-center">
                <div class="text-3xl font-bold">25+</div>
                <div class="text-accent font-medium">Years Heritage</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold">2</div>
                <div class="text-accent font-medium">Office Locations</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold">100+</div>
                <div class="text-accent font-medium">Clients Served</div>
            </div>
        </div>
        
        <!-- CTA Button -->
        <a href="#our-story" class="bg-accent text-primary font-bold px-8 py-4 rounded-lg text-lg hover:bg-yellow-400 transition duration-300 inline-block">
            Explore Our Journey
        </a>
    </div>
</section>