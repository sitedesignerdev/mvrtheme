<?php

/*
Template Name: News Page
*/  

?>
<?php get_header(); ?>

<!-- News & Articles Page Hero -->
<section class="relative py-20 bg-primary">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative container mx-auto px-4 text-center text-white">
    <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">News & Insights</h1>
    <p class="text-xl max-w-3xl mx-auto mb-8">
      Expert analysis, legal updates, and insights from MVR Attorneys' corporate and commercial law specialists
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#featured" class="bg-accent text-primary font-bold px-6 py-2 rounded-lg hover:bg-yellow-400 transition duration-300">
        Featured Articles
      </a>
      <a href="#all-articles" class="border-2 border-white text-white font-bold px-6 py-2 rounded-lg hover:bg-white hover:text-primary transition duration-300">
        All Articles
      </a>
    </div>
  </div>
</section>

<!-- Categories Filter -->
<section class="py-8 bg-white border-b border-gray-200">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <h2 class="text-lg font-semibold text-gray-700 mb-4 md:mb-0">Filter by Category:</h2>
      <div class="flex flex-wrap gap-2">
        <button class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium">All Articles</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300">Corporate Law</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300">Commercial Law</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300">M&A</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300">Compliance</button>
        <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-gray-300">Industry News</button>
      </div>
    </div>
  </div>
</section>

<!-- Featured Articles -->
<section id="featured" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-3xl font-serif font-bold text-primary mb-4">Featured Insights</h2>
      <p class="text-gray-700">In-depth analysis and expert commentary on current legal developments</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
      <!-- Main Featured Article -->
      <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
        <div class="h-64 bg-gradient-to-r from-primary to-primary-dark flex items-center justify-center">
          <span class="text-white text-2xl font-bold">Featured</span>
        </div>
        <div class="p-8">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>March 20, 2024</span>
            <span class="mx-2">•</span>
            <span>8 min read</span>
            <span class="mx-2">•</span>
            <span class="bg-accent text-primary px-2 py-1 rounded-full text-xs font-semibold">Corporate Law</span>
          </div>
          <h3 class="text-2xl font-bold text-primary mb-4 hover:text-primary-dark transition duration-300">
            <a href="/article/south-africa-company-act-updates">Major Updates to South Africa's Companies Act: What Businesses Need to Know</a>
          </h3>
          <p class="text-gray-700 mb-6">
            Comprehensive analysis of the recent amendments to the Companies Act and their implications for corporate governance, director responsibilities, and compliance requirements for businesses operating in South Africa.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
              <div>
                <p class="text-sm font-semibold">Michael van Rensburg</p>
                <p class="text-xs text-gray-500">Senior Partner</p>
              </div>
            </div>
            <a href="/article/south-africa-company-act-updates" class="text-accent font-semibold hover:text-yellow-600 transition duration-300 inline-flex items-center">
              Read Full Analysis
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </article>

      <!-- Secondary Featured Articles -->
      <div class="space-y-6">
        <article class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
          <div class="flex items-start">
            <div class="w-20 h-20 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
              <span class="text-white font-bold text-sm">M&A</span>
            </div>
            <div>
              <div class="flex items-center text-xs text-gray-500 mb-2">
                <span>March 18, 2024</span>
                <span class="mx-2">•</span>
                <span>5 min read</span>
              </div>
              <h4 class="font-bold text-primary mb-2 hover:text-primary-dark transition duration-300">
                <a href="/article/cross-border-mergers">Cross-Border Merger Strategies for South African Companies</a>
              </h4>
              <p class="text-sm text-gray-700 mb-3">Navigating regulatory requirements and strategic considerations for international expansion.</p>
              <a href="/article/cross-border-mergers" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
            </div>
          </div>
        </article>

        <article class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
          <div class="flex items-start">
            <div class="w-20 h-20 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
              <span class="text-white font-bold text-sm">Compliance</span>
            </div>
            <div>
              <div class="flex items-center text-xs text-gray-500 mb-2">
                <span>March 15, 2024</span>
                <span class="mx-2">•</span>
                <span>6 min read</span>
              </div>
              <h4 class="font-bold text-primary mb-2 hover:text-primary-dark transition duration-300">
                <a href="/article/bbbee-updates">B-BBEE Compliance: Recent Changes and Strategic Implications</a>
              </h4>
              <p class="text-sm text-gray-700 mb-3">Understanding the latest amendments to Broad-Based Black Economic Empowerment codes.</p>
              <a href="/article/bbbee-updates" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
            </div>
          </div>
        </article>

        <article class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
          <div class="flex items-start">
            <div class="w-20 h-20 bg-primary rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
              <span class="text-white font-bold text-sm">Commercial</span>
            </div>
            <div>
              <div class="flex items-center text-xs text-gray-500 mb-2">
                <span>March 12, 2024</span>
                <span class="mx-2">•</span>
                <span>4 min read</span>
              </div>
              <h4 class="font-bold text-primary mb-2 hover:text-primary-dark transition duration-300">
                <a href="/article/digital-contracts">The Rise of Digital Contracts: Legal Validity and Best Practices</a>
              </h4>
              <p class="text-sm text-gray-700 mb-3">Ensuring electronic agreements are legally binding and enforceable in South African law.</p>
              <a href="/article/digital-contracts" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- All Articles Grid -->
<section id="all-articles" class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-serif font-bold text-primary">All Articles</h2>
      <div class="flex items-center">
        <span class="text-gray-700 mr-3">Sort by:</span>
        <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
          <option>Newest First</option>
          <option>Oldest First</option>
          <option>Most Popular</option>
          <option>By Category</option>
        </select>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Article 1 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">Contract Law</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>March 10, 2024</span>
            <span class="mx-2">•</span>
            <span>7 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/force-majeure-clauses">Force Majeure Clauses in a Post-Pandemic World</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">Revisiting contractual protection mechanisms in light of recent global disruptions and supply chain challenges.</p>
          <a href="/article/force-majeure-clauses" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">Corporate Governance</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>March 5, 2024</span>
            <span class="mx-2">•</span>
            <span>5 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/director-liability">Understanding Director Liability in South African Corporate Law</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">Key responsibilities and potential liabilities facing company directors under current legislation.</p>
          <a href="/article/director-liability" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">M&A</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>February 28, 2024</span>
            <span class="mx-2">•</span>
            <span>6 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/due-diligence-checklist">The Comprehensive Due Diligence Checklist for Acquisitions</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">Essential steps and considerations for thorough due diligence in merger and acquisition transactions.</p>
          <a href="/article/due-diligence-checklist" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>

      <!-- Article 4 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">Commercial Law</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>February 22, 2024</span>
            <span class="mx-2">•</span>
            <span>4 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/supplier-agreements">Negotiating Favorable Supplier Agreements: Key Considerations</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">Strategic approaches to supplier contract negotiations that protect your business interests.</p>
          <a href="/article/supplier-agreements" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>

      <!-- Article 5 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">Compliance</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>February 18, 2024</span>
            <span class="mx-2">•</span>
            <span>8 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/anti-money-laundering">Anti-Money Laundering Compliance for Financial Institutions</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">Understanding FICA requirements and implementing effective AML compliance programs.</p>
          <a href="/article/anti-money-laundering" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>

      <!-- Article 6 -->
      <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
        <div class="h-48 bg-primary flex items-center justify-center">
          <span class="text-white font-bold">Industry News</span>
        </div>
        <div class="p-6">
          <div class="flex items-center text-sm text-gray-500 mb-3">
            <span>February 15, 2024</span>
            <span class="mx-2">•</span>
            <span>3 min read</span>
          </div>
          <h3 class="text-lg font-bold text-primary mb-3 hover:text-primary-dark transition duration-300">
            <a href="/article/legal-tech-trends">Emerging Legal Technology Trends in South Africa</a>
          </h3>
          <p class="text-gray-700 mb-4 text-sm">How technology is transforming legal practice and client service delivery.</p>
          <a href="/article/legal-tech-trends" class="text-accent text-sm font-semibold hover:text-yellow-600 transition duration-300">Read Article</a>
        </div>
      </article>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-12">
      <nav class="flex items-center space-x-2">
        <a href="#" class="px-3 py-2 rounded-lg bg-primary text-white font-semibold">1</a>
        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 font-semibold hover:bg-gray-300">2</a>
        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 font-semibold hover:bg-gray-300">3</a>
        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 font-semibold hover:bg-gray-300">Next</a>
      </nav>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 max-w-4xl mx-auto text-center">
      <h3 class="text-2xl font-serif font-bold text-primary mb-4">Stay Updated with Legal Insights</h3>
      <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
        Subscribe to our newsletter and receive expert analysis, legal updates, and insights directly to your inbox.
      </p>
      <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
        <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
        <button type="submit" class="bg-accent text-primary font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition duration-300 whitespace-nowrap">
          Subscribe
        </button>
      </form>
      <p class="text-sm text-gray-500 mt-4">We respect your privacy. Unsubscribe at any time.</p>
    </div>
  </div>
</section>
<?php get_footer(); ?>
