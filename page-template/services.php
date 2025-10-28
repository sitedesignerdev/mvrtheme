<?php



/*Template Name: Services Page
*/

?>
<?php get_header(); ?>

<!-- Services Page Hero -->
<section class="relative py-20 bg-primary">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative container mx-auto px-4 text-center text-white">
  <h1 class="text-4xl md:text-5xl font-sans font-bold mb-6">Our Legal Services</h1>
    <p class="text-xl max-w-3xl mx-auto mb-8">
      Comprehensive corporate and commercial legal solutions tailored to your business needs
    </p>
    <a href="#consultation" class="bg-accent text-primary font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 inline-flex items-center">
      Schedule a Consultation
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </a>
  </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center max-w-3xl mx-auto mb-12">
  <h2 class="text-3xl font-sans font-bold text-primary mb-4">Expert Legal Counsel</h2>
      <p class="text-gray-700 text-lg">
        With over 25 years of combined experience, MVR Attorneys provides strategic legal solutions 
        for businesses of all sizes. Our expertise spans the full spectrum of corporate and commercial law.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Competition Law -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Corporate Commercial Law</h3>
        <p class="text-gray-700 mb-6">
          Comprehensive corporate legal services including entity formation, governance, compliance, and corporate restructuring.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Company formation & structuring
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Corporate governance
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Shareholder agreements
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/corporate-commercial/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <!-- Commercial Law -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Competition Law</h3>
        <p class="text-gray-700 mb-6">
          Expert guidance on commercial transactions, contracts, and business operations to protect your interests.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Contract drafting & negotiation
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Commercial agreements
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Regulatory compliance
          </li>
        </ul>
         <a href="<?php echo esc_url( home_url( '/competition-law/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <!-- Public and Regulatory -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Public and Regulatory</h3>
        <p class="text-gray-700 mb-6">
          Strategic guidance through complex M&A transactions to maximize value and minimize risk.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Due diligence
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Transaction structuring
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Negotiation & documentation
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/public-regulatory/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <!-- Contract Law -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Labour and Employment</h3>
        <p class="text-gray-700 mb-6">
          Comprehensive contract services from drafting to enforcement, ensuring your agreements protect your interests.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Contract drafting & review
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Negotiation support
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Dispute resolution
          </li>
        </ul>
       <a href="<?php echo esc_url( home_url( '/labour-and-employment/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <!-- Dispute Resolution -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Dispute Resolution</h3>
        <p class="text-gray-700 mb-6">
          Effective strategies for resolving commercial disputes through negotiation, mediation, or litigation when necessary.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Commercial litigation
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Mediation & arbitration
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Settlement negotiations
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/dispute-resolution/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <!-- Regulatory Compliance -->
      <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border-l-4 border-accent">
        <div class="w-14 h-14 bg-primary rounded-lg flex items-center justify-center mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-primary mb-4">Regulatory Compliance</h3>
        <p class="text-gray-700 mb-6">
          Ensuring your business meets all legal requirements and stays ahead of regulatory changes.
        </p>
        <ul class="space-y-2 text-gray-700 mb-6">
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Compliance audits
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Regulatory guidance
          </li>
          <li class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Policy development
          </li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/public-regulatory/' ) ); ?>" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center">
          Learn more
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-serif font-bold mb-6">Ready to Discuss Your Legal Needs?</h2>
    <p class="text-xl max-w-2xl mx-auto mb-8">
      Contact us today for a confidential consultation to discuss how we can support your business.
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
<?php get_footer(); ?>