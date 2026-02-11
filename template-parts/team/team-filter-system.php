<section class="py-12 bg-white">
    <div class="container mx-auto px-12 font-sans">
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
                        <?php
                        // Get all practice areas that have team members
                        $practice_areas = get_terms(array(
                            'taxonomy' => 'practice_area',
                            'hide_empty' => true, // Only show categories with team members
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ));
                        
                        if (!empty($practice_areas) && !is_wp_error($practice_areas)) {
                            foreach ($practice_areas as $area) {
                                $selected = (isset($_GET['practice']) && $_GET['practice'] === $area->slug) ? 'selected' : '';
                                echo '<option value="' . esc_attr($area->slug) . '" ' . $selected . '>' . 
                                    esc_html($area->name) . ' (' . $area->count . ')' . 
                                    '</option>';
                            }
                        }
                        ?>
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
                            <!-- optional icon -->
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

        
        
        <div class="flex justify-between items-center mb-6">
            <p id="results-count" class="text-gray-600">Showing <span class="font-semibold">0</span> attorneys</p>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 mr-2">Sort by:</span>
                <select id="sort-by" class="text-sm rounded-md border border-gray-300 bg-white py-1 px-2 shadow-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
                    <option value="seniority" selected>Seniority</option> <!-- Added 'selected' -->
                    <option value="name">Name (A-Z)</option>
                    <option value="practice">Practice Area</option>
                </select>
            </div>
        </div>

        <!-- Team Grid will be loaded here -->
<div id="team-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
    // Query published team_member posts
    $args = array(
        'post_type' => 'team_member',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
        // Add taxonomy query if filter is set
        'tax_query' => array(),
    );

    // If practice area filter is set via URL
    if (isset($_GET['practice']) && $_GET['practice'] !== 'all') {
        $args['tax_query'][] = array(
            'taxonomy' => 'practice_area',
            'field' => 'slug',
            'terms' => sanitize_text_field($_GET['practice'])
        );
    }

    $team_query = new WP_Query($args);
    if ($team_query->have_posts()):
        while ($team_query->have_posts()): $team_query->the_post();
            // Prepare member variables used in the template
            $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $position = get_field('position');
            $office = get_field('office');
            $seniority_level = function_exists('get_field') ? get_field('seniority_level') : 'associate';
            $excerpt = get_the_excerpt();
            // Ensure excerpts are trimmed to 20 words for consistent display
            $excerpt = wp_trim_words( $excerpt, 20, '...' );
            $member_practice = '';
            $terms = get_the_terms(get_the_ID(), 'practice_area');
            if (!empty($terms) && !is_wp_error($terms)) {
                // Use first term slug for data attribute (adjust if multiple needed)
                $member_practice = $terms[0]->slug;
            }
            $member_link = get_permalink();
    ?>
    <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" 
        data-practice="<?php 
            $practice_areas = wp_get_post_terms(get_the_ID(), 'practice_area', array('fields' => 'slugs'));
            echo esc_attr(implode(' ', $practice_areas));
        ?>" 
        data-office="<?php echo esc_attr($office); ?>" 
        data-seniority="<?php echo esc_attr($seniority_level ?: 'associate'); ?>"> <!-- FIXED: Use the variable, don't redefine it -->
        <div class="relative">
            <div class="h-90 overflow-hidden">
                <?php if ($thumb): ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                <?php else: ?>
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No image</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold text-primary mb-1"><?php the_title(); ?></h3>
            <?php if ($position): ?><p class="text-accent font-semibold mb-2"><?php echo esc_html($position); ?></p><?php endif; ?>
            <?php if ($office): ?><p class="text-gray-600 text-sm mb-4"><?php echo esc_html($office); ?> Office</p><?php endif; ?>
            <p class="text-gray-600 mb-6 line-clamp-3"><?php echo esc_html($excerpt); ?></p>
            <div class="flex justify-between items-center">
                <div class="flex space-x-3">
                    <?php  $linkedin = function_exists('get_field') ? get_field('linkedin') : ''; if ( $linkedin): ?>
                        <a href="<?php echo esc_url( $linkedin); ?>" target="_blank" class="text-gray-500 hover:text-primary transition duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    <?php endif; ?>
                </div>
                <a href="<?php echo esc_url($member_link); ?>" class="bg-primary text-white px-4 py-2 rounded text-sm font-semibold hover:bg-blue-800 transition duration-300">View Profile</a>
            </div>
        </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else:
    ?>
    <div class="col-span-1">
        <p class="text-gray-600">No team members found. Add some <code>team_member</code> posts in the admin.</p>
    </div>
    <?php endif; ?>
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
                    sort: 'seniority'
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
                        
                        // Get all team members as an array for sorting
                        const members = Array.from(teamGrid.querySelectorAll('.team-member'));
                        let visibleCount = 0;
                        
                        // First filter the members
                        const filteredMembers = members.filter(member => {
                            const practiceAreas = member.getAttribute('data-practice').split(' ');
                            const office = member.getAttribute('data-office');
                            const name = member.querySelector('h3')?.textContent?.toLowerCase() || '';

                            let show = true;
                            
                            // Practice area filter
                            if (filters.practice !== 'all' && !practiceAreas.includes(filters.practice)) {
                                show = false;
                            }
                            
                            // Office filter
                            if (filters.office !== 'all' && office !== filters.office) {
                                show = false;
                            }
                            
                            // Search filter
                            if (filters.search && !name.includes(filters.search)) {
                                show = false;
                            }

                            return show;
                        });

                        // Then sort the filtered members
                        filteredMembers.sort((a, b) => {
                            const aName = a.querySelector('h3')?.textContent || '';
                            const bName = b.querySelector('h3')?.textContent || '';
                            const aPractice = a.getAttribute('data-practice') || '';
                            const bPractice = b.getAttribute('data-practice') || '';
                            const aSeniority = a.getAttribute('data-seniority') || 'associate';
                            const bSeniority = b.getAttribute('data-seniority') || 'associate';
                            
                            switch (filters.sort) {
                                case 'name':
                                    return aName.localeCompare(bName);
                                
                                case 'seniority':
                    // Define seniority hierarchy (lower number = higher seniority)
                    const seniorityOrder = {
                        'managing-director': 1,
                        'executive': 2,
                        'consultant': 3,
                        'associate': 4,
                        'associate-designate': 5,
                        'candidate-attorney-2': 6,
                        'candidate-attorney-1': 7
                    };
                    
                    const aOrder = seniorityOrder[aSeniority] || 99;
                    const bOrder = seniorityOrder[bSeniority] || 99;
                    
                    // If same seniority level, apply custom ordering
                    if (aOrder === bOrder && aSeniority === 'executive') {
                        // Custom order for executives
                        const executiveOrder = {
                            'Robyn Adams': 1,      // Robyn - Executive (Dispute Resolution)
                            'Eduan Kapp': 2,      // Eduan - Executive (banking and Finance)
                            'Fair Manikai': 3,       // Fair - Executive (labour law)
                            'Mashudu Mundalamo': 4,    // Mashudu - Executive (labour)
                            'Tiyiselani Sono': 5  // Tiyiselani - Executive (public law and Administrative law)
                        };
                        
                        const aExecOrder = executiveOrder[aName] || 99;
                        const bExecOrder = executiveOrder[bName] || 99;
                        
                        if (aExecOrder === bExecOrder) {
                            return aName.localeCompare(bName);
                        }
                        return aExecOrder - bExecOrder;
                    }
                    
                    // Sort by seniority first, then by name within same seniority level
                    if (aOrder === bOrder) {
                        return aName.localeCompare(bName);
                    }
                    return aOrder - bOrder;
                
                case 'practice':
                    return aPractice.localeCompare(bPractice);
                
                default:
                    return 0; // No sorting
            }
        });


                        // Hide all members first
                        members.forEach(member => {
                            member.style.display = 'none';
                            teamGrid.appendChild(member); // Reset order by re-appending
                        });

                        // Show and position filtered members IN THE SORTED ORDER
                        filteredMembers.forEach((member) => {
                            member.style.display = '';
                            teamGrid.appendChild(member); // Re-append in sorted order
                            visibleCount++;
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
                    sortSelect.value = 'seniority';
                    
                    filters.practice = 'all';
                    filters.office = 'all';
                    filters.search = '';
                    filters.sort = 'seniority';
                    
                    applyFilters();
                }
                
                // Initial load
                applyFilters();
            });
</script>