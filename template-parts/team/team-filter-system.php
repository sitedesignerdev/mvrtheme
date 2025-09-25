<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
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
            <!-- Team members will be populated here via JavaScript -->
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
        
        // Simulate loading (in real implementation, this would filter actual data)
        setTimeout(() => {
            updateActiveFilters();
            // In a real implementation, you would filter your team data here
            // and update the teamGrid.innerHTML with the filtered results
            
            loadingIndicator.classList.add('hidden');
            
            // For demonstration - show no results if search term is "none"
            if (filters.search === 'none') {
                noResults.classList.remove('hidden');
            } else {
                teamGrid.classList.remove('hidden');
                // Update results count
                resultsCount.innerHTML = `Showing <span class="font-semibold">${Math.floor(Math.random() * 5) + 12}</span> attorneys`;
            }
        }, 500);
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