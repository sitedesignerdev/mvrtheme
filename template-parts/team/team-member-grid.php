<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-12 ">
        <!-- Practice Filter Dropdown -->
        <div class="mb-8 flex justify-end">
            <label for="practice-filter" class="mr-2 font-sans font-semibold text-primary">Filter by Practice:</label>
            <select id="practice-filter" class="border border-gray-300 rounded px-3 py-2">
                <option value="all">All</option>
                <option value="corporate">Corporate</option>
                <option value="banking">Banking</option>
                <option value="dispute">Dispute</option>
                <option value="energy">Energy</option>
                <option value="competition">Competition</option>
                <option value="labour">Labour</option>
            </select>
        </div>
        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="team-member bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1" data-practice="corporate" data-office="sandton" data-seniority="partner">
                <div class="relative">
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Matodzi.png" 
                            alt="James Mitchell" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div>
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
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Eduan.png" 
                            alt="Sarah Johnson" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div>
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
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Robyn.png" 
                            alt="Robert Williams" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div>
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
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Maphanga.png" 
                            alt="Michael Chen" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-semibold">Associate</span>
                    </div>
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
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Mashudu.png" 
                            alt="Priya Patel" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-100 text-primary px-3 py-1 rounded-full text-sm font-semibold">Senior Counsel</span>
                    </div>
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
                    <div class="h-80 overflow-hidden">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/tana.png" 
                            alt="David Brown" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-accent text-primary px-3 py-1 rounded-full text-sm font-semibold">Partner</span>
                    </div>
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

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="load-more" class="bg-primary text-white font-bold px-8 py-4 rounded-lg hover:bg-blue-800 transition duration-300">
                Load More Attorneys
            </button>
        </div>
    </div>
</section>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<script>
// Practice filter system
document.addEventListener('DOMContentLoaded', function() {
    const practiceFilter = document.getElementById('practice-filter');
    const teamMembers = document.querySelectorAll('.team-member');

    practiceFilter.addEventListener('change', function() {
        const selected = this.value;
        teamMembers.forEach(function(member) {
            if (selected === 'all' || member.dataset.practice === selected) {
                member.style.display = '';
            } else {
                member.style.display = 'none';
            }
        });
    });

    // Load More button (unchanged)
    const loadMoreBtn = document.getElementById('load-more');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            alert('Loading more attorneys...');
        });
    }
});
</script>