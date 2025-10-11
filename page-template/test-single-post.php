<?php

// Template Name: Test Single Post
get_header();
?>


<!-- Single Post Hero Section -->
<section class="relative py-20 bg-primary">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-primary opacity-90"></div>
    <img 
      src="<?php echo get_template_directory_uri(); ?>/assets/images/article-hero-bg.jpg" 
      alt="Article Background" 
      class="w-full h-full object-cover"
    />
  </div>

  <!-- Content -->
  <div class="relative container mx-auto px-4 z-10">
    <div class="max-w-4xl mx-auto text-center text-white">
      
      <!-- Category Badge -->
      <div class="inline-block bg-accent text-primary px-4 py-2 rounded-full text-sm font-semibold mb-6">
        Corporate Law
      </div>
      
      <!-- Title -->
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold mb-8 leading-tight">
        Major Updates to South Africa's Companies Act: What Businesses Need to Know
      </h1>
      
      <!-- Author & Date Info -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-8">
        <!-- Author Profile -->
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-white rounded-full overflow-hidden">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/michael-van-rensburg.jpg" 
              alt="Michael van Rensburg" 
              class="w-full h-full object-cover"
            />
          </div>
          <div class="text-left">
            <p class="font-semibold">Michael van Rensburg</p>
            <p class="text-gray-300 text-sm">Senior Partner</p>
          </div>
        </div>
        
        <!-- Date & Reading Time -->
        <div class="flex items-center gap-4 text-gray-300">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span>March 20, 2024</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>8 min read</span>
          </div>
        </div>
      </div>
      
      <!-- Social Sharing -->
      <div class="flex justify-center items-center gap-4">
        <span class="text-gray-300">Share this article:</span>
        <div class="flex gap-3">
          <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition duration-300">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg>
          </a>
          <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition duration-300">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
          <a href="#" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-30 transition duration-300">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Article Content Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      
      <!-- Article Content -->
      <article class="prose prose-lg max-w-none">
        <p class="lead text-xl text-gray-700 mb-8 font-semibold">
          The recent amendments to South Africa's Companies Act represent the most significant changes to corporate governance in over a decade. This comprehensive analysis examines the key updates and their practical implications for businesses operating in South Africa.
        </p>
        
        <h2 class="text-2xl font-serif font-bold text-primary mb-4">Key Changes to Director Responsibilities</h2>
        
        <p class="mb-6">
          One of the most substantial changes involves the expanded duties and liabilities of company directors. The amendments introduce clearer guidelines on fiduciary responsibilities, with particular emphasis on environmental, social, and governance (ESG) considerations.
        </p>
        
        <div class="bg-gray-50 border-l-4 border-accent p-6 my-8">
          <p class="text-lg font-semibold text-primary mb-2">Important Note:</p>
          <p class="text-gray-700">
            Directors must now demonstrate enhanced due diligence in decision-making processes, with specific requirements for documenting risk assessments and considering long-term sustainability impacts.
          </p>
        </div>
        
        <h2 class="text-2xl font-serif font-bold text-primary mb-4">Enhanced Shareholder Rights</h2>
        
        <p class="mb-6">
          The amendments strengthen shareholder protections, particularly for minority shareholders. Key changes include:
        </p>
        
        <ul class="mb-6 space-y-2">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span>Enhanced rights to information and company records</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span>Streamlined processes for derivative actions</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span>Improved mechanisms for challenging related-party transactions</span>
          </li>
        </ul>
        
        <!-- Additional content would continue here -->
        
      </article>
      
      <!-- Article Tags -->
      <div class="border-t border-gray-200 pt-8 mt-12">
        <div class="flex flex-wrap gap-2">
          <span class="text-gray-700 font-semibold">Tags:</span>
          <a href="#" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition duration-300">Companies Act</a>
          <a href="#" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition duration-300">Corporate Governance</a>
          <a href="#" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition duration-300">Compliance</a>
          <a href="#" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-200 transition duration-300">Director Duties</a>
        </div>
      </div>
      
      <!-- Author Bio -->
      <div class="bg-gray-50 rounded-xl p-8 mt-12">
        <div class="flex flex-col md:flex-row items-start gap-6">
          <div class="w-20 h-20 bg-primary rounded-full overflow-hidden flex-shrink-0">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/michael-van-rensburg.jpg" 
              alt="Michael van Rensburg" 
              class="w-full h-full object-cover"
            />
          </div>
          <div>
            <h3 class="text-xl font-bold text-primary mb-2">About the Author</h3>
            <p class="text-gray-700 mb-4">
              Michael van Rensburg is a Senior Partner at MVR Attorneys, specializing in corporate law and governance. With over 15 years of experience, he has advised numerous listed companies and private enterprises on compliance, mergers and acquisitions, and corporate restructuring.
            </p>
            <a href="/team/michael-van-rensburg" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
              View Full Profile
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Related Article 1 -->
          <article class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition duration-300">
            <div class="flex items-center text-sm text-gray-500 mb-3">
              <span>March 15, 2024</span>
              <span class="mx-2">•</span>
              <span>5 min read</span>
            </div>
            <h4 class="font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
              <a href="/article/director-liability-updates">Understanding Enhanced Director Liability Under New Regulations</a>
            </h4>
            <p class="text-gray-700 text-sm mb-4">Analysis of personal liability risks for directors in the current regulatory environment.</p>
            <a href="/article/director-liability-updates" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
          </article>
          
          <!-- Related Article 2 -->
          <article class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition duration-300">
            <div class="flex items-center text-sm text-gray-500 mb-3">
              <span>March 10, 2024</span>
              <span class="mx-2">•</span>
              <span>6 min read</span>
            </div>
            <h4 class="font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
              <a href="/article/corporate-compliance-checklist">2024 Corporate Compliance Checklist for South African Businesses</a>
            </h4>
            <p class="text-gray-700 text-sm mb-4">Essential compliance requirements and deadlines for the coming year.</p>
            <a href="/article/corporate-compliance-checklist" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>