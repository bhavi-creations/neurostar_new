<?php include  'header.php'; ?>





<!-- ===================================================
         SPECIALITY FIRST SECTION (Hero Banner)
         =================================================== -->
<section class="speciality-first-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">

                <!-- Breadcrumb Navigation -->
                <div class="breadcrumb-nav">
                    <a href="#">Home</a> <i class="fa-solid fa-chevron-right mx-1 fs-10"></i> <span>Specialities</span>
                </div>

                <!-- Main Titles -->
                <h1 class="main-title">Our Specialities</h1>
                <h4 class="sub-tagline">Comprehensive Care. Every Step of the Way.</h4>

                <!-- Description -->
                <p class="hero-desc">
                    We strive to provide exceptional treatment for brain and spine conditions through collaborative teamwork, ensuring top-quality services at an affordable cost, all while upholding the highest standards of medical practice for your optimal recovery.
                </p>

                <!-- Bottom Key Stats Bar -->
                <div class="stats-wrapper">
                    <div class="row g-4 align-items-center">

                        <!-- Stat 1: 25+ Departments -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-item">
                                <i class="fa-solid fa-hospital-user stat-icon"></i>
                                <div>
                                    <div class="stat-number">25+</div>
                                    <div class="stat-label">Departments</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stat 2: 120+ Expert Doctors -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-item">
                                <i class="fa-solid fa-user-doctor stat-icon"></i>
                                <div>
                                    <div class="stat-number">120+</div>
                                    <div class="stat-label">Expert Doctors</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stat 3: Advanced Technology -->
                        <div class="col-6 col-sm-3">
                            <div class="stat-item">
                                <i class="fa-solid fa-microscope stat-icon"></i>
                                <div>
                                    <div class="stat-number" style="font-size: 17px;">Advanced</div>
                                    <div class="stat-label">Technology</div>
                                </div>
                            </div>
                        </div>

                        <!-- Stat 4: Patient First Priority -->
                        <!-- <div class="col-6 col-sm-3">
                                <div class="stat-item">
                                    <i class="fa-solid fa-heart-pulse stat-icon"></i>
                                    <div>
                                        <div class="stat-number" style="font-size: 17px;">Patient First</div>
                                        <div class="stat-label">Always Our Priority</div>
                                    </div>
                                </div>
                            </div> -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ===================================================
         SPECIALITY SECOND SECTION
         =================================================== -->
<section class="speciality-second-section">
    <div class="container">

        <!-- Mobile Department Dropdown -->
        <div class="speciality-mobile-filter d-lg-none">
            <label for="mobileDepartmentFilter" class="speciality-mobile-filter-label">All Departments</label>
            <select id="mobileDepartmentFilter" class="form-select speciality-mobile-filter-select">
                <option value="all">All Departments</option>
                <option value="cardiac">Cardiac Sciences</option>
                <option value="neuro">Neurosciences</option>
                <option value="ortho">Orthopedics</option>
                <option value="women">Women & Child</option>
                <option value="internal">Internal Medicine</option>
                <option value="surgical">Surgical Care</option>
                <option value="other">Other Specialities</option>
            </select>
        </div>

        <!-- Top Filter Nav Tabs Bar -->
        <div class="filter-nav-bar" id="filterNav">
            <button class="filter-btn active" data-filter="all">
                <i class="fa-solid fa-border-all"></i> All Departments
            </button>
            <button class="filter-btn" data-filter="cardiac">
                <i class="fa-solid fa-heart-pulse"></i> Cardiac Sciences
            </button>
            <button class="filter-btn" data-filter="neuro">
                <i class="fa-solid fa-brain"></i> Neurosciences
            </button>
            <button class="filter-btn" data-filter="ortho">
                <i class="fa-solid fa-bone"></i> Orthopedics
            </button>
            <button class="filter-btn" data-filter="women">
                <i class="fa-solid fa-venus"></i> Women & Child
            </button>
            <button class="filter-btn" data-filter="internal">
                <i class="fa-solid fa-capsules"></i> Internal Medicine
            </button>
            <button class="filter-btn" data-filter="surgical">
                <i class="fa-solid fa-user-nurse"></i> Surgical Care
            </button>
            <button class="filter-btn" data-filter="other">
                <i class="fa-solid fa-cubes"></i> Other Specialities
            </button>
        </div>

        <!-- Department Cards Grid (4 Columns) -->
        <div class="row g-4" id="departmentGrid">

            <!-- 1. Neuro Surgery -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="neuro">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #ede9fe; color: #7c3aed;">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h5 class="card-title">Neuro Surgery</h5>
                    <p class="card-desc">Advanced brain and spine surgery for trauma, tumors, nerve compression and complex neurological conditions.</p>
                    <a href="neuro-surgery.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 2. Neurology -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="neuro">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #f3e8ff; color: #9333ea;">
                        <!-- <i class="fa-solid fa-head-side-virus"></i> -->
                        <img src="./assets/img/Neurology.png" alt="Neurology" style="width: 40px;">
                    </div>
                    <h5 class="card-title">Neurology</h5>
                    <p class="card-desc">Diagnosis and medical treatment for stroke, seizures, headaches, nerve disorders and movement problems.</p>
                    <a href="neurology.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>


            <!-- 17. Cardiology -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="medical">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fee2e2; color: #dc2626;">
                        <!-- <i class="fa-solid fa-heart-pulse"></i> -->
                        <img src="./assets/img/Cardiology.png" alt="cardiology" style="width: 40px;">
                        <!-- <img src="./a" alt=""> -->
                    </div>
                    <h5 class="card-title">Cardiology</h5>
                    <p class="card-desc">Specialized diagnosis and treatment of heart and cardiovascular conditions through advanced medical care and procedures.</p>
                    <a href="cardiology.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 17. vascuklar -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fff1f2; color: #e11d48;"> <i class="fa-solid fa-heart-pulse"></i> </div>
                    <h5 class="card-title">Vascular Surgery</h5>
                    <p class="card-desc"> Specialized care for diseases and conditions affecting blood vessels, including arteries and veins. </p> <a href="Vascular-surgery.php" class="card-view-link"> View Details <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
            </div>

            <!-- 9. Dental -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fff7ed; color: #f97316;">
                        <i class="fa-solid fa-tooth"></i>
                    </div>
                    <h5 class="card-title">Dental Surgery</h5>
                    <p class="card-desc">Oral health services including cleaning, fillings, extractions, root canal treatment and preventive care.</p>
                    <a href="dental.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 10. Maxillo facial Surgery -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="surgical">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fefce8; color: #ca8a04;">
                        <i class="fa-solid fa-face-smile"></i>
                    </div>
                    <h5 class="card-title">Maxillo facial Surgery</h5>
                    <p class="card-desc">Surgical management of facial trauma, jaw deformities, oral pathology and reconstructive procedures.</p>
                    <a href="maxillo-facial-surgery.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>


            <!-- 3. Accidents & Trauma Care -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fef2f2; color: #ef4444;">
                        <i class="fa-solid fa-truck-medical"></i>
                    </div>
                    <h5 class="card-title">All Accidents Cases</h5>
                    <p class="card-desc">Emergency stabilization and treatment for fractures, road accidents, head injuries and critical trauma cases.</p>
                    <a href="accidents-and-trauma-care.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 4. Orthopaedic Surgery -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="ortho">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #eff6ff; color: #2563eb;">
                        <i class="fa-solid fa-bone"></i>
                    </div>
                    <h5 class="card-title">Orthopaedic Surgery</h5>
                    <p class="card-desc">Specialized care for bones, joints, ligaments, spine problems and sports injuries with surgical support.</p>
                    <a href="orthopaedic-surgery.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 5. General Medicine -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="internal">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #ecfeff; color: #0891b2;">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h5 class="card-title">General Medicine</h5>
                    <p class="card-desc">Primary medical care for fever, infections, diabetes, hypertension and long-term internal medicine conditions.</p>
                    <a href="general-medicine.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 6. Gynecology -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="women">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fdf2f8; color: #db2777;">
                        <i class="fa-solid fa-venus"></i>
                    </div>
                    <h5 class="card-title">Gynecology</h5>
                    <p class="card-desc">Complete women’s health care including pregnancy support, menstrual disorders, infertility and laparoscopic care.</p>
                    <a href="gynecology.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 7. Critical Care -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #f0f9ff; color: #0284c7;">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <h5 class="card-title">Critical Care</h5>
                    <p class="card-desc">24x7 intensive monitoring and life support for seriously ill patients with ventilator and ICU care.</p>
                    <a href="critical-care.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 8. Neuro Psychiatric -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="neuro">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #f5f3ff; color: #8b5cf6;">
                        <i class="fa-solid fa-user-pen"></i>
                    </div>
                    <h5 class="card-title">Neuro Psychiatric</h5>
                    <p class="card-desc">Care for anxiety, depression, behavioral changes, sleep disorders and neuropsychiatric conditions.</p>
                    <a href="neuro-psychiatric.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>





            <!-- 11. Plastic & Cosmetic surgery -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="surgical">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #fdf2f8; color: #c026d3;">
                        <!-- <i class="fa-solid fa-sparkles"></i> -->
                        <img src="./assets/img/plastic-cosmetic-surgery.png" alt="">
                    </div>
                    <h5 class="card-title">Plastic & Cosmetic surgery</h5>
                    <p class="card-desc">Aesthetic and reconstructive surgery for appearance enhancement, burns, scars and injury correction.</p>
                    <a href="plastic-cosmetic-surgery.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 12. Pediatrics -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="women">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #f0fdf4; color: #16a34a;">
                        <i class="fa-solid fa-baby"></i>

                    </div>
                    <h5 class="card-title">Pediatrics</h5>
                    <p class="card-desc">Growth, vaccination and illness care for infants, children and adolescents with child-friendly support.</p>
                    <a href="pediatrics.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 13. Physiotherapy -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #ecfccb; color: #65a30d;">
                        <i class="fa-solid fa-person-walking"></i>
                    </div>
                    <h5 class="card-title">Physiotherapy</h5>
                    <p class="card-desc">Rehabilitation programs for pain relief, mobility recovery, posture correction and functional improvement.</p>
                    <a href="physiotherapy.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 14. Radiology -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="other">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #eff6ff; color: #1d4ed8;">
                        <i class="fa-solid fa-x-ray"></i>
                    </div>
                    <h5 class="card-title">Radiology</h5>
                    <p class="card-desc">Diagnostic imaging including X-ray, CT and other scans for fast, accurate clinical evaluation.</p>
                    <a href="radiology.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 15. Neuro rehabilitation -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="neuro">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #e0f2fe; color: #0369a1;">
                        <i class="fa-solid fa-wheelchair"></i>
                    </div>
                    <h5 class="card-title">Neuro rehabilitation</h5>
                    <p class="card-desc">Recovery support for stroke, spinal injury and neurological disability to improve independence and movement.</p>
                    <a href="neuro-rehabilitation.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- 16. General & Laproscopic Surgery -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 department-item" data-category="surgical">
                <div class="speciality-card">
                    <div class="card-icon-box" style="background-color: #e0f2fe; color: #2563eb;">
                        <i class="fa-solid fa-scissors"></i>
                    </div>
                    <h5 class="card-title">General & Laproscopic Surgery</h5>
                    <p class="card-desc">Minimally invasive and open surgical procedures for abdominal, hernia, gallbladder and soft tissue conditions.</p>
                    <a href="general-and-laproscopic-surgery.php" class="card-view-link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>




        </div>

        <!-- Bottom Action Button -->
        <!-- <div class="text-center mt-5">
                <button class="btn btn-view-all-dept" id="btnResetFilter">
                    View All Departments
                </button>
            </div> -->

    </div>
</section>



<!-- ===================================================
         SPECIALITY THIRD SECTION (Infrastructure)
         =================================================== -->
<section class="speciality-third-section">
    <div class="container">
        <div class="infra-card-wrapper">
            <div class="row g-4 align-items-center">

                <!-- Left: Video Image Thumbnail -->
                <div class="col-12 col-lg-4">
                    <div class="infra-img-box">
                        <img src="./assets/img/index-hospital-1.png" alt="Operation Theatre">
                        <a href="#" class="play-btn-overlay" title="Watch Video">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>

                <!-- Middle: Infrastructure Details -->
                <div class="col-12 col-lg-5">
                    <div class="badge-sub-title">ADVANCED CARE</div>
                    <h3 class="infra-title">State-of-the-Art Infrastructure</h3>
                    <p class="infra-desc">
                        NEUROSTAR Hospital is Equipped with the latest advancements in medical technology and supported by state-of-the-art diagnostic and surgical facilities, we are committed to ensuring not only prompt and effective recovery but also a compassionate and patient-centered approach. "
                    </p>

                    <!-- 2-Column Features Grid -->
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-layer-group"></i></div>
                                <span>Modular Operation Theatres</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-bed-pulse"></i></div>
                                <span>Advanced ICUs & HDUs</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-truck-medical"></i></div>
                                <span>24x7 Emergency Services</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-flask"></i></div>
                                <span>Advanced Diagnostic Labs</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-x-ray"></i></div>
                                <span>Digital Imaging & Radiology</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon-badge"><i class="fa-solid fa-robot"></i></div>
                                <span>Robotic & Minimally Invasive</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Accreditation Badge -->
                <div class="col-12 col-lg-3 text-center nabh-border-left">
                    <div class="nabh-badge">
                        <!-- Laurel Wreath Badge Graphic -->
                        <div class="nabh-icon-wrapper">
                            <i class="fa-solid fa-award" style="font-size: 42px; color: #d97706;"></i>
                            <div class="nabh-text-main mt-1">NABH</div>
                            <div class="nabh-text-sub">ACCREDITED</div>
                        </div>
                        <p class="nabh-slogan">
                            Committed to Quality, Safety & Patient Satisfaction
                        </p>
                        <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ===================================================
         SPECIALITY FOURTH SECTION (Need Help CTA)
         =================================================== -->
<section class="speciality-fourth-section">
    <div class="container">
        <div class="cta-banner-wrapper">
            <div class="row align-items-center g-3">

                <!-- Left text info -->
                <div class="col-12 col-lg-7">
                    <h4 class="cta-title">Need Help Finding the Right Department?</h4>
                    <p class="cta-desc">Our care team is here to guide you to the right specialist.</p>
                </div>

                <!-- Right Action Buttons -->
                <div class="col-12 col-lg-5 text-lg-end">
                    <div class="d-inline-flex flex-wrap gap-2">
                        <a href="doctors.php" class="btn-cta-white">
                            <i class="fa-regular fa-user"></i> Find a Doctor
                        </a>
                        <a href="appointment.php" class="btn-cta-teal">
                            <i class="fa-regular fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ===================================================
         FLOATING ACTION BUTTONS (WhatsApp & Phone)
         =================================================== -->
<!-- <div class="floating-actions">
        <a href="https://wa.me/" target="_blank" class="floating-btn whatsapp" title="Chat on WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="tel:+1234567890" class="floating-btn phone" title="Call Us">
            <i class="fa-solid fa-phone"></i>
        </a>
    </div> -->

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Filter JS Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const deptItems = document.querySelectorAll('.department-item');
        const resetBtn = document.getElementById('btnResetFilter');
        const mobileFilter = document.getElementById('mobileDepartmentFilter');

        // Function to filter departments
        function filterCategory(category) {
            // Update button active state
            filterBtns.forEach(btn => {
                if (btn.getAttribute('data-filter') === category) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Show / Hide items
            deptItems.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                if (category === 'all' || itemCat === category) {
                    item.classList.remove('hide');
                } else {
                    item.classList.add('hide');
                }
            });
        }

        // Click event listener for filter buttons
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                filterCategory(filterValue);
            });
        });

        // Reset button click
        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                filterCategory('all');
            });
        }

        if (mobileFilter) {
            mobileFilter.addEventListener('change', function() {
                filterCategory(this.value);
            });
        }
    });
</script>
<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



















































<!-- ============================================================
     SPECIALITIES SECTION - HERO, CATEGORIES, GRID, INFRASTRUCTURE & CTA
============================================================ -->
<!--<section class="Specilities_section_wrapper py-4">

     1. HERO BANNER SECTION -->
<!-- <div class="Specilities_section_hero position-relative mb-5 py-5 text-white overflow-hidden rounded-4">
        <div class="Specilities_section_hero_overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative z-1">

           
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb Specilities_section_breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="Home.php" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Specialities</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="Specilities_section_hero_title fw-bold mb-2">Our Specialities</h1>
                    <h5 class="Specilities_section_hero_subtitle text-info fw-semibold mb-3">Comprehensive Care. Every Step of the Way.</h5>
                    <p class="Specilities_section_hero_desc text-white mb-4 me-lg-4">
                        We offer a wide range of medical specialities and advanced treatments under one roof with a team of expert doctors and state-of-the-art facilities to ensure the best outcomes for our patients.
                    </p>

                   
                    <div class="row g-3 Specilities_section_hero_stats">
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <img src="assets/img/Hospital-bg-removed.png" alt="Departments" style="width:50px; height:50px">
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">25+</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Departments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <img src="assets/img/Expert-doctor-gold.png" alt="" style="width:50px; height:50px">
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">120+</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Expert Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <img src="assets/img/happy-patients.png" alt="" style="width:50px; height:50px">
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">75,000+</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Happy patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <img src="assets/img/patient-satisfaction1.png" alt="Departments" style="width:50px; height:50px">
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">98%</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Patient Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->



<!-- ========================================= -->
<!-- Medical Specialities -->
<!-- ========================================= -->

<!-- <section class="index_section_specialities py-5">

        <div class="container">
           
            <div class="container mb-4">
                <div class="Specilities_section_filter_bar d-flex flex-wrap gap-2 justify-content-start justify-content-lg-between bg-white p-3 rounded-3 shadow-sm border">

                    <a href="specilities.php" class="btn Specilities_section_filter_btn active">
                        <i class="bi bi-grid-fill me-1"></i> All Departments
                    </a>

                    <a href="cardiology.php" class="btn Specilities_section_filter_btn">
                        <i class="bi bi-heart-pulse me-1"></i> Cardiology
                    </a>

                    <a href="neurology.php" class="btn Specilities_section_filter_btn">
                        <i class="bi bi-brain me-1"></i> Neurology
                    </a>

                    <a href="orthopaedic-surgery.php" class="btn Specilities_section_filter_btn">
                        <i class="bi bi-body-text me-1"></i> Orthopaedics
                    </a>

                    <a href="gynecology.php" class="btn Specilities_section_filter_btn">
                        <i class="bi bi-gender-female me-1"></i>Gynaecology
                    </a>

                    <a href="general-and-laproscopic-surgery.php" class="btn Specilities_section_filter_btn">
                        <i class="bi bi-scissors me-1"></i> General Surgery
                    </a>

                </div>
            </div>
            <div class="row mb-5 align-items-center">

                <div class="col-lg-8">

                    <span class="index_section_subtitle">
                        OUR SPECIALITIES
                    </span>

                    <h2 class="index_section_title mt-3">
                        Comprehensive Medical Specialities Under One Roof
                    </h2>

                    <p class="index_section_description mt-3">

                        Our experienced specialists provide advanced diagnosis,
                        treatment, and personalised care using modern medical
                        technology for better patient outcomes.

                    </p>

                </div>



            </div>

            <div class="row g-4">

              

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">01</h1>
                          

                        </div>

                        <h4>Cardiology</h4>

                        <p>

                            Specialized treatment for heart problems.

                        </p>

                        <a href="cardiology.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

               

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">02</h1>
                            

                        </div>

                        <h4>Neurology</h4>

                        <p>

                            Expert care for brain,
                            nerves and neurological disorders.

                        </p>

                        <a href="neurology.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

             
                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">03</h1>
                          

                        </div>

                        <h4>Orthopaedics</h4>

                        <p>

                            Complete bone, joint, muscle and trauma treatments.

                        </p>

                        <a href="orthopaedic-surgery.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

                

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">04</h1>
                            

                        </div>

                        <h4>Radiology</h4>

                        <p>

                            Specialised treatment for
                            lungs and respiratory diseases.

                        </p>

                        <a href="radiology.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

            

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">05</h1>
                           

                        </div>

                        <h4>cosmetic surgery</h4>

                        <p>

                            Safe surgical care for beauty and reconstruction.

                        </p>

                        <a href="plastic-cosmetic-surgery.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

              

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">06</h1>
                         

                        </div>

                        <h4>Pediatrics</h4>

                        <p>

                            Specialized treatment for newly born child, and Teen ages.

                        </p>

                        <a href="pediatrics.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>
  

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">07</h1>
                            >

                        </div>

                        <h4>Gynecology</h4>

                        <p>

                            Specialized treatment provides services for women of all ages.

                        </p>

                        <a href="gynecology.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>

                

                <div class="col-lg-3 col-md-6">

                    <div class="index_section_speciality_card">

                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">08</h1>
                           

                        </div>

                        <h4>Dental</h4>

                        <p>

                            Dental treatments for oral health, hygiene and cosmetic.

                        </p>

                        <a href="dental.php">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                </div>




                <div class="col-lg-3 col-md-6 ">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">09</h1>

                        </div>
                        <h4>Critical Care</h4>
                        <p>Advanced critical care services for emergency and intensive medical conditions.</p>
                        <a href="critical-care.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">10</h1>

                        </div>
                        <h4>Neuropsychiatric</h4>
                        <p>Comprehensive neuropsychiatric care for brain and mental health disorders.</p>
                        <a href="neuro-psychiatric.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">11</h1>

                        </div>
                        <h4>Physiotherapy</h4>
                        <p>Expert physiotherapy for rehabilitation, pain relief and mobility improvement.</p>
                        <a href="physiotherapy.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">12</h1>

                        </div>
                        <h4>Accidents & Trauma Care</h4>
                        <p>24/7 emergency trauma care and accident treatment services.</p>
                        <a href="accidents-and-trauma-care.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">13</h1>

                        </div>
                        <h4>Maxillo Facial Surgery</h4>
                        <p>Specialized maxillofacial surgeries for face, jaw and oral conditions.</p>
                        <a href="maxillo-facial-surgery.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">14</h1>

                        </div>
                        <h4>Neurorehabilitation</h4>
                        <p>Comprehensive neurorehabilitation for recovery from neurological conditions.</p>
                        <a href="neuro-rehabilitation.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">15</h1>

                        </div>
                        <h4>General Medicine</h4>
                        <p>Comprehensive general medicine for diagnosis and treatment of various diseases.</p>
                        <a href="general-medicine.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="index_section_speciality_card">
                        <div class="index_section_speciality_icon">
                            <h1 class=" mt-2">16</h1>

                        </div>
                        <h4>General & Laproscopic Surgery</h4>
                        <p>Advanced general and laparoscopic surgeries with minimal invasion.</p>
                        <a href="general-and-laproscopic-surgery.php">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->



<!-- <div class="container mb-5">
        <div class="Specilities_section_infra_box p-4 p-md-5 rounded-4 border shadow-sm">
            <div class="row align-items-center g-4">

               
                <div class="col-lg-5 col-md-12">
                    <div class="position-relative rounded-4 overflow-hidden Specilities_section_video_wrapper">
                        <img src="assets/img/Neurosurgery-bg.png" alt="State-of-the-Art Infrastructure" class="img-fluid w-100 object-fit-cover">
                        <a href="#" class="position-absolute top-50 start-50 translate-middle bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 60px; height: 60px;">
                            <i class="bi bi-play-fill fs-2 ms-1"></i>
                        </a>
                    </div>
                </div>

              
                <div class="col-lg-4 col-md-12">
                    <span class="badge bg-primary-subtle text-primary text-uppercase fw-semibold mb-2" style="font-size: 11px;">Advanced Care</span>
                    <h4 class="fw-bold text-dark mb-2">Advanced Treatment Infrastructure</h4>
                    <p class="text-black fs-14px mb-4">
                        Our hospital is equipped with cutting-edge technology, modular operation theatres, advanced ICUs and world-class diagnostic facilities for accurate diagnosis and effective treatment.
                    </p>

                    <div class="row g-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Modular Operation Theatres</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Advanced Diagnostic Labs</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Advanced ICUs & HDUs</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Digital Imaging & Radiology</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>24x7 Emergency Services</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small text-black">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Robotic & Minimally Invasive Surgery</span>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-3 col-md-12 text-center">
                    <div class="p-4 rounded-4 bg-white border shadow-sm">
                        <div class="mb-2">
                            <i class="bi bi-award-fill fs-1 text-warning"></i>
                        </div>
                        <h6 class="fw-bold text-dark mb-1">NABH ACCREDITED</h6>
                        <p class="text-black small mb-3" style="font-size: 12px;">Committed to Quality, Safety & Patient Satisfaction</p>
                        
                    </div>
                </div>

            </div>
        </div>
    </div> -->


<!-- <div class="container mb-4">
        <div class="Specilities_section_cta_banner p-4 rounded-4 text-white">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 col-md-12">
                    <h5 class="fw-bold mb-1 text-white">Need Help Finding the Right Department?</h5>
                    <p class="mb-0 text-white-50 small">Our care team is here to guide you to the right specialist.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="d-flex flex-sm-row flex-column gap-2 justify-content-lg-end">
                        <a href="doctors.php" class="btn btn-white bg-white text-primary fw-bold px-4 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-person-search"></i> Find a Doctor
                        </a>
                        <a href="appointment.php" class="btn Specilities_section_teal_btn text-white fw-bold px-4 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

</section>-->

<?php include 'footer.php'; ?>