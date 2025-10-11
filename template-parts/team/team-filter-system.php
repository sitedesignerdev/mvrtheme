<section class="py-12 bg-white">
    <div class="container mx-auto px-4 font-sans">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-10">
            <h2 class="text-3xl font-bold text-primary mb-4">Find the Right Legal Expert</h2>
            <p class="text-xl text-gray-600">Filter our team by practice area, location, or search by name</p>
        </div>

        <!-- Filter Controls -->
        <div class="bg-gray-50 rounded-lg p-6 mb-8 shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Practice Area Filter -->
                <div>
                    <label for="practice-area" class="block text-sm font-medium text-gray-700 mb-2">Practice Area</label>
                    <select id="practice-area" class="team-filter w-full rounded-md border border-gray-300 bg-white py-3 px-4 shadow-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                        <option value="all">All Practice Areas</option>
                        <option value="corporate">Corporate Commercial</option>
                        <option value="banking">Banking and Finance</option>
                        <option value="dispute">Dispute Resolution</option>
                        <option value="energy">Energy Practice</option>
                        <option value="competition">Competition Law</option>
                        <option value="public">Public Regulatory</option>
                        <option value="labour">Labour and Employment</option>
                    </select>
                </div>
                
                <!-- Office Location Filter -->
                <div>
                    <label for="office-location" class="block text-sm font-medium text-gray-700 mb-2">Office Location</label>
                    <select id="office-location" class="team-filter w-full rounded-md border border-gray-300 bg-white py-3 px-4 shadow-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                        <option value="all">All Locations</option>
                        <option value="sandton">Sandton</option>
                        <option value="claremont">Claremont, Cape Town</option>
                    </select>
                </div>
                
                <!-- Search by Name -->
                <div>
                    <label for="search-name" class="block text-sm font-medium text-gray-700 mb-2">Search by Name</label>
                    <div class="relative">
                        <input type="text" id="search-name" placeholder="Enter attorney name" class="w-full rounded-md border border-gray-300 bg-white py-3 px-4 shadow-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 极 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Active Filters Display -->
            <div id="active-filters" class="flex flex-wrap gap-2 mt-4 hidden">
                <span class="text-sm text-gray-600 mr-2">Active filters:</span>
                <!-- Filters will be added here dynamically -->
            </div>
        </div>

        <!-- Filter Results Count -->
        <div class="flex justify-between items-center mb-6">
            <p id="results-count" class="text-gray-600">Showing <span class="font-semibold">15</span> attorneys</p>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 mr-2">Sort by:</span>
                <select id="sort-by" class="text-sm rounded-md border border-gray-300 bg-white py-1 px-2 shadow-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                    <option value="name">Name (A-Z)</option>
                    <option value="seniority">Seniority</option>
                    <option value="practice">Practice Area</option>
                </select>
            </div>
        </div>

        <!-- Team Grid will be loaded here -->
        <div id="team-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
           <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="corporate" data-office="sandton" data-seniority="partner">
                <div class="relative">
                    <div class="h-100 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Matodzi.png" 
                            alt="Matodzi Ratshimbilani" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Matodzi Ratshimbilani</h3>
                    <p class="text-accent font-semibold mb-2">Managing Director</p>
                    <p class="text-gray-600 text-sm mb-4">Sandton Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Matodzi Ratshimbilani focuses on Corporate Commercial Law including Mergers and Acquisitions, Corporate Governance, Commercial Contracts and Company Law.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:james@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email James">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-accent transition-colors duration-300" title="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                        <a href="/team/james-mitchell" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="banking" data-office="sandton" data-seniority="partner">
                <div class="relative">
                    <div class="h-100  overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Eduan.png" 
                            alt="Sarah Johnson" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Eduan Kapp</h3>
                    <p class="text-accent font-semibold mb-2">Executive – Banking & Finance</p>
                    <p class="text-gray-600 text-sm mb-4">Sandton Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Eduan is a seasoned lawyer and ex-investment banker with extensive transactional experience throughout Sub-Sahara Africa and other emerging markets.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:sarah@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email Sarah">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-accent transition-colors duration-300" title="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                        <a href="/team/sarah-johnson" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="dispute" data-office="claremont" data-seniority="partner">
                <div class="relative">
                    <div class="h-100  overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Robyn.png" 
                            alt="Robert Williams" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Robert Williams</h3>
                    <p class="text-accent font-semibold mb-2">Executive – Dispute Resolution</p>
                    <p class="text-gray-600 text-sm mb-4">Claremont Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Robyn Adams is a results-orientated with a proven knowledge of, inter alia, alternative dispute resolution, complex civil litigation, and trial law in various fields including construction law, commercial law, and property law.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:robert@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email Robert">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-accent transition-colors duration-300" title="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                        <a href="/team/robert-williams" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="energy" data-office="sandton" data-seniority="associate">
                <div class="relative">
                    <div class="h-100  overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Maphanga.png" 
                            alt="Michael Chen" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-semibold">Associate</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Maphanga Maseko</h3>
                    <p class="text-accent font-semibold mb-2">Competition Law</p>
                    <p class="text-gray-600 text-sm mb-4">Sandton Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Maphanga is a results-driven professional and has proven knowledge of, inter alia, competition law, commercial law, mergers and acquisition law, in various fields including telecommunications, National Credit Regulator, corporate governance and energy.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:michael@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email Michael">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                        </div>
                        <a href="/team/michael-chen" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="competition" data-office="claremont" data-seniority="counsel">
                <div class="relative">
                    <div class="h-100  overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Mashudu.png" 
                            alt="Priya Patel" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-blue-100 text-primary px-3 py-1 rounded-full text-sm font-semibold">Senior Counsel</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Mashudu Mundalamo</h3>
                    <p class="text-accent font-semibold mb-2">Competition Law</p>
                    <p class="text-gray-600 text-sm mb-4">Claremont Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Expert in antitrust matters, merger control, and competition compliance with extensive experience in regulatory investigations.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:priya@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email Priya">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                            <a href="#" class="text-primary hover:text-accent transition-colors duration-300" title="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                        </div>
                        <a href="/team/priya-patel" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>

             <!-- Team Member 6 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="labour" data-office="sandton" data-seniority="partner">
                <div class="relative">
                    <div class="h-100  overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/tana.png" 
                            alt="David Brown" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <!-- <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div> -->
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-1">Mashudu Mundalamo</h3>
                    <p class="text-accent font-semibold mb-2">Labour & Employment Law</p>
                    <p class="text-gray-600 text-sm mb-4">Sandton Office</p>
                    <p class="text-gray-600 mb-6 line-clamp-3">Mashudu is an accomplished Human Resource (HR) Manager and Employee Relations (ER) Manager with 19 years’ worth of experience in South Africa’s leading companies and organisations. Mashudu is a focused, problem-solver, mediator, professional and dedicated leader who is dedicated to harmonising
                   employee relations and promoting social justice.</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="mailto:david@mvrattorneys.co.za" class="text-primary hover:text-accent transition-colors duration-300" title="Email David">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </a>
                        </div>
                        <a href="/team/david-brown" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loading State -->
        <div id="loading-indicator" class="hidden py-12 text-center">
            <div class="inline-flex items-center">
                <svg class="animate-spin -ml-1 mr-3 h-8 w-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span class="text-lg text-gray-600">Loading attorneys...</span>
            </div>
        </div>

        <!-- No Results Message -->
        <div id="no-results" class="hidden py-12 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No attorneys found</h3>
            <p class="text-gray-600 mb-4">Try adjusting your filters or search term</p>
            <button id="reset-filters" class="bg-primary text-white font-medium px-6 py-2 rounded-md hover:bg-blue-800 transition duration-300">
                Reset All Filters
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filters = {
        practice: 'all',
        office: 'all',
        search: '',
        sort: 'name'
    };
    
    // Filter elements
    const practiceFilter = document.getElementById('practice-area');
    const officeFilter = document.getElementById('office-location');
    const searchInput = document.getElementById('search-name');
    const sortSelect = document.getElementById('sort-by');
    const activeFiltersContainer = document.getElementById('active-filters');
    const resultsCount = document.getElementById('results-count');
    const teamGrid = document.getElementById('team-grid');
    const loadingIndicator = document.getElementById('loading-indicator');
    const noResults = document.getElementById('no-results');
    const resetButton = document.getElementById('reset-filters');
    
    // Event listeners
    practiceFilter.addEventListener('change', () => {
        filters.practice = practiceFilter.value;
        applyFilters();
    });
    
    officeFilter.addEventListener('change', () => {
        filters.office = officeFilter.value;
        applyFilters();
    });
    
    searchInput.addEventListener('input', () => {
        filters.search = searchInput.value.toLowerCase();
        applyFilters();
    });
    
    sortSelect.addEventListener('change', () => {
        filters.sort = sortSelect.value;
        applyFilters();
    });
    
    resetButton.addEventListener('click', resetFilters);
    
    function applyFilters() {
        // Show loading state
        loadingIndicator.classList.remove('hidden');
        teamGrid.classList.add('hidden');
        noResults.classList.add('hidden');

        setTimeout(() => {
            updateActiveFilters();
            // Actual filtering logic
            const members = teamGrid.querySelectorAll('.team-member');
            let visibleCount = 0;
            members.forEach(member => {
                const practice = member.getAttribute('data-practice');
                const office = member.getAttribute('data-office');
                const name = member.querySelector('h3')?.textContent?.toLowerCase() || '';

                let show = true;
                if (filters.practice !== 'all' && practice !== filters.practice) {
                    show = false;
                }
                if (filters.office !== 'all' && office !== filters.office) {
                    show = false;
                }
                if (filters.search && !name.includes(filters.search)) {
                    show = false;
                }

                member.style.display = show ? '' : 'none';
                if (show) visibleCount++;
            });

            loadingIndicator.classList.add('hidden');
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
                resultsCount.innerHTML = 'Showing <span class="font-semibold">0</span> attorneys';
            } else {
                teamGrid.classList.remove('hidden');
                resultsCount.innerHTML = `Showing <span class="font-semibold">${visibleCount}</span> attorney${visibleCount > 1 ? 's' : ''}`;
            }
        }, 200);
    }
    
    function updateActiveFilters() {
        // Clear active filters
        activeFiltersContainer.innerHTML = '<span class="text-sm text-gray-600 mr-2">Active filters:</span>';
        
        // Add practice area filter if not "all"
        if (filters.practice !== 'all') {
            const practiceText = practiceFilter.options[practiceFilter.selectedIndex].text;
            addActiveFilter('practice', practiceText);
        }
        
        // Add office filter if not "all"
        if (filters.office !== 'all') {
            const officeText = officeFilter.options[officeFilter.selectedIndex].text;
            addActiveFilter('office', officeText);
        }
        
        // Add search filter if not empty
        if (filters.search !== '') {
            addActiveFilter('search', `Name: "${filters.search}"`);
        }
        
        // Show/hide active filters container
        if (activeFiltersContainer.children.length > 1) {
            activeFiltersContainer.classList.remove('hidden');
        } else {
            activeFiltersContainer.classList.add('hidden');
        }
    }
    
    function addActiveFilter(type, text) {
        const filterPill = document.createElement('div');
        filterPill.className = 'inline-flex items-center bg-primary bg-opacity-10 text-primary rounded-full px-3 py-1 text-sm';
        filterPill.innerHTML = `
            ${text}
            <button type="button" class="ml-1 text-primary hover:text-blue-800" data-filter-type="${type}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        
        // Add event listener to remove button
        const removeBtn = filterPill.querySelector('button');
        removeBtn.addEventListener('click', () => {
            if (type === 'practice') {
                practiceFilter.value = 'all';
                filters.practice = 'all';
            } else if (type === 'office') {
                officeFilter.value = 'all';
                filters.office = 'all';
            } else if (type === 'search') {
                searchInput.value = '';
                filters.search = '';
            }
            applyFilters();
        });
        
        activeFiltersContainer.appendChild(filterPill);
    }
    
    function resetFilters() {
        practiceFilter.value = 'all';
        officeFilter.value = 'all';
        searchInput.value = '';
        sortSelect.value = 'name';
        
        filters.practice = 'all';
        filters.office = 'all';
        filters.search = '';
        filters.sort = 'name';
        
        applyFilters();
    }
    
    // Initial load
    applyFilters();
});
</script>