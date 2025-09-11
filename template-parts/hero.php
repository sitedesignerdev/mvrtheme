<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center justify-center py-16 px-4">
  <!-- Background with overlay -->
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <img 
      src="<?php echo get_template_directory_uri(); ?>/src/images/hero.jpg" 
      alt="MVR Law Office" 
      class="w-full h-full object-cover"
    />
  </div>

  <!-- Content -->
  <div class="container mx-auto max-w-6xl relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left Column - Text Content -->
      <div class="text-white text-center lg:text-left">
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
          Corporate & Commercial Legal Solutions You Can Trust
        </h1>
        <p class="text-xl mb-8 opacity-90">
          MVR Attorneys is a dynamic corporate and commercial law firm based in Sandton and Claremont, Cape Town providing services in various areas of commercial law.
        </p>
        
        <!-- Stats -->
        <div class="flex flex-wrap justify-center lg:justify-start gap-6 mb-10">
          <div class="text-center">
            <div class="text-3xl font-bold">25+</div>
            <div class="text-accent font-medium">Years Experience</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold">Top</div>
            <div class="text-accent font-medium">Ranked Firm</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold">2</div>
            <div class="text-accent font-medium">Locations</div>
          </div>
        </div>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <a href="#consultation" class="bg-accent text-primary font-bold px-8 py-4 rounded-lg text-lg hover:bg-yellow-400 transition duration-300 shadow-lg hover:shadow-xl">
            Schedule a Consultation
          </a>
          <a href="#services" class="border-2 border-white text-white font-bold px-8 py-4 rounded-lg text-lg hover:bg-white hover:text-primary transition duration-300">
            Our Services
          </a>
        </div>
      </div>
      
      <!-- Right Column - Award Badge -->
      <div class="flex justify-center">
        <div class="bg-white rounded-xl p-8 max-w-md w-full shadow-2xl">
          <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-accent rounded-full mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-primary mb-2">Recognized Excellence</h3>
            <p class="text-gray-700 mb-4">Ranked Among South Africa's Top Legal Advisers</p>
            <div class="bg-primary text-white py-2 px-4 rounded-full inline-flex items-center">
              <span>2025 Best Lawyers™</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Trust Indicators -->
<div class="bg-gray-100 py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-serif font-bold text-center text-primary mb-12">Trusted By Industry Leaders</h2>
    <div class="flex flex-wrap justify-center gap-8 md:gap-16 items-center">
      <!-- Replace these divs with actual client logos -->
      <div class="h-12 w-32 bg-gray-300 rounded opacity-70"></div>
      <div class="h-12 w-32 bg-gray-300 rounded opacity-70"></div>
      <div class="h-12 w-32 bg-gray-300 rounded opacity-70"></div>
      <div class="h-12 w-32 bg-gray-300 rounded opacity-70"></div>
      <div class="h-12 w-32 bg-gray-300 rounded opacity-70"></div>
    </div>
  </div>
</div>