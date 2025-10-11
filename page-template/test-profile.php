<?php


/*Template Name: Test Profile Page
*/
?>
<?php get_header(); ?>


 <!-- Profile Header -->
    <section class="bg-primary text-white py-8">
        <div class="container mx-auto px-4">
            <a href="/team" class="inline-flex items-center text-white hover:text-accent transition duration-300 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Team
            </a>
        </div>
    </section>

    <!-- Main Profile Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-xl p-8 sticky top-8">
                        <!-- Profile Image -->
                        <div class="mb-6">
                             <img 
                            src="<?php echo get_template_directory_uri(); ?>/src/images/Matodzi.png" 
                            alt="James Mitchell" 
                            class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                        >
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-4">
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Position</h3>
                                <p class="text-gray-700">Managing Director</p>
                            </div>

                            <div>
                                <h3 class="font-semibold text-primary mb-1">Email</h3>
                                <a href="mailto:michael@mvrattorneys.co.za" class="text-gray-700 hover:text-primary transition duration-300">
                                    matodzi@mvrattorneys.co.za
                                </a>
                            </div>

                            <div>
                                <h3 class="font-semibold text-primary mb-1">Phone</h3>
                                <a href="tel:+27112345678" class="text-gray-700 hover:text-primary transition duration-300">
                                    +27 11 234 5678
                                </a>
                            </div>

                            <div>
                                <h3 class="font-semibold text-primary mb-1">Office</h3>
                                <p class="text-gray-700">Sandton, Johannesburg</p>
                            </div>

                            <div>
                                <h3 class="font-semibold text-primary mb-1">Languages</h3>
                                <p class="text-gray-700">English</p>
                            </div>

                            <div class="pt-4">
                                <a href="https://linkedin.com/in/michaelvanrensburg" target="_blank" class="inline-flex items-center text-primary hover:text-primary-dark transition duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                    Connect on LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <header class="mb-8">
                        <h1 class="text-4xl font-serif font-bold text-primary mb-2">Matodzi Ratshimbilani</h1>
                        <p class="text-xl text-gray-700">Managing Director</p>
                    </header>

                    <!-- Bio -->
                    <div class="prose max-w-none mb-12">
                        <p class="text-lg text-gray-700 mb-4">
                            Matodzi Ratshimbilani commenced legal practice in 1995 and has 25 years’ experience as a legal practitioner. He focuses on Corporate Commercial Law including Mergers and Acquisitions, Corporate Governance, Commercial Contracts and Company Law.
                        </p>
                        <p class="text-lg text-gray-700 mb-4">
                            Matodzi also has vast Experience in Public and Administrative Law as well as Litigation and Dispute Resolution.
                        </p>
                        <p class="text-lg text-gray-700">
                            Matodzi’s client base over the years has included some of South Africa’s blue chip companies and major state-owned entities including Mobile Technology Network (Pty) Limited, Vodacom, Telkom, African Bank Limited, Bidvest Corporate Services (Pty) Limited, ArcelorMittal South Africa Limited, Imperial Logistics Group of Companies, and major state-owned companies including Eskom SOC Limited, Transnet SOC Limited, South African Airways SOC Limited, Industrial Development Corporation of South Africa Limited, Public Investment Corporation SOC Limited, Development Bank of Southern Africa, South African National Parks, and others.
                        </p>
                        <p>
                            Matodzi has published several commentary articles on corporate commercial law including state-owned companies’ governance. He has provided commentary on television and radio on various legal subjects.
                        </p>
                        <p>
                            Matodzi has served and currently serves as a director, board member and trustee of various private, non-profit entities and state-owned entities. These include Kouga Wind Farm Project Company, Kouga Windfarm Community Development Trust, Mvula Trust, Denel, State Information Technology Agency, Railway Safety Regulator, and others.
                        </p>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-8">
                        <!-- Education -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Education</h2>
                            <div class="prose max-w-none">
                                <ul class="list-disc list-inside space-y-2 text-gray-700">
                                    <li><strong>LLB Law Degree</strong> - University of Pretoria (1995)</li>
                                    <li><strong>BCom Business Management</strong> - University of Johannesburg (1992)</li>
                                    <li><strong>Advanced Corporate Law Certificate</strong> - Law Society of South Africa (2001)</li>
                                    <li><strong>Mergers & Acquisitions Specialization</strong> - Harvard Law School Executive Education (2005)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Areas of Expertise -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Areas of Expertise</h2>
                            <div class="prose max-w-none">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Mergers & Acquisitions</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Corporate Governance</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Commercial Contracts</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Corporate Restructuring</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Business Advisory</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-accent mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            <span>Regulatory Compliance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bar Admissions -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Bar Admissions</h2>
                            <div class="prose max-w-none">
                                <ul class="list-disc list-inside space-y-2 text-gray-700">
                                    <li>High Court of South Africa (1998)</li>
                                    <li>Supreme Court of Appeal of South Africa (2002)</li>
                                    <li>Constitutional Court of South Africa (2005)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Professional Memberships -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Professional Memberships</h2>
                            <div class="prose max-w-none">
                                <ul class="list-disc list-inside space-y-2 text-gray-700">
                                    <li>Law Society of South Africa</li>
                                    <li>Johannesburg Attorneys Association</li>
                                    <li>International Bar Association</li>
                                    <li>South African Corporate Lawyers Association</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Experience -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Experience</h2>
                            <p class="text-gray-700 text-lg mb-4">28+ years of legal experience</p>
                            <div class="space-y-4">
                                <div class="border-l-4 border-accent pl-4">
                                    <h4 class="font-semibold text-primary">Founder & Senior Partner</h4>
                                    <p class="text-gray-600">MVR Attorneys | 2022 - Present</p>
                                    <p class="text-gray-700 mt-1">Leading the firm's corporate practice and overseeing major M&A transactions.</p>
                                </div>
                                <div class="border-l-4 border-accent pl-4">
                                    <h4 class="font-semibold text-primary">Partner - Corporate Law</h4>
                                    <p class="text-gray-600">Prestigious Law Firm Johannesburg | 2005 - 2022</p>
                                    <p class="text-gray-700 mt-1">Headed the corporate law division and managed high-value commercial transactions.</p>
                                </div>
                                <div class="border-l-4 border-accent pl-4">
                                    <h4 class="font-semibold text-primary">Senior Associate</h4>
                                    <p class="text-gray-600">Leading Corporate Law Practice | 1998 - 2005</p>
                                    <p class="text-gray-700 mt-1">Specialized in corporate governance and commercial contract law.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Notable Cases -->
                        <div>
                            <h2 class="text-2xl font-serif font-bold text-primary mb-4">Notable Achievements</h2>
                            <div class="prose max-w-none">
                                <ul class="list-disc list-inside space-y-2 text-gray-700">
                                    <li>Led the R2.5 billion acquisition of a major retail chain (2023)</li>
                                    <li>Advised on the merger of two leading financial services companies (2021)</li>
                                    <li>Successfully navigated complex cross-border transaction involving 3 jurisdictions (2019)</li>
                                    <li>Recognized in "Best Lawyers in South Africa" since 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-serif font-bold mb-6">Schedule a Consultation</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">
                Contact Matodzi Ratshimbilani for expert legal advice on corporate and commercial matters.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-accent text-primary font-bold px-8 py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                    Schedule Consultation
                </a>
                <a href="mailto:michael@mvrattorneys.co.za" class="border-2 border-white text-white font-bold px-8 py-3 rounded-lg hover:bg-white hover:text-primary transition duration-300">
                    Send Email
                </a>
            </div>
        </div>
    </section>