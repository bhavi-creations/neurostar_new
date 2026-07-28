<?php include  'header.php'; ?>
<!-- ============================================================
     SPECIALITIES SECTION - HERO, CATEGORIES, GRID, INFRASTRUCTURE & CTA
============================================================ -->
<section class="Specilities_section_wrapper py-4">

    <!-- 1. HERO BANNER SECTION -->
    <div class="Specilities_section_hero position-relative mb-5 py-5 text-white overflow-hidden rounded-4">
        <div class="Specilities_section_hero_overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative z-1">
            
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb Specilities_section_breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="#" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Specialities</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="Specilities_section_hero_title fw-bold mb-2">Our Specialities</h1>
                    <h5 class="Specilities_section_hero_subtitle text-info fw-semibold mb-3">Comprehensive Care. Every Step of the Way.</h5>
                    <p class="Specilities_section_hero_desc text-white-50 mb-4 me-lg-4">
                        We offer a wide range of medical specialities and advanced treatments under one roof with a team of expert doctors and state-of-the-art facilities to ensure the best outcomes for our patients.
                    </p>

                    <!-- Stat Badges -->
                    <div class="row g-3 Specilities_section_hero_stats">
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <i class="bi bi-hospital fs-3 text-info me-2"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">25+</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Departments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <i class="bi bi-person-badge fs-3 text-info me-2"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">120+</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Expert Doctors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <i class="bi bi-gear-wide-connected fs-3 text-info me-2"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">Advanced</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Technology</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center p-2 rounded border border-white border-opacity-25 bg-white bg-opacity-10">
                                <i class="bi bi-heart-pulse fs-3 text-info me-2"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">Patient First</h6>
                                    <span class="text-white-50" style="font-size: 11px;">Always Our Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 2. CATEGORY TABS / FILTER BAR -->
    <div class="container mb-4">
        <div class="Specilities_section_filter_bar d-flex flex-wrap gap-2 justify-content-start justify-content-lg-between bg-white p-3 rounded-3 shadow-sm border">
            <button class="btn Specilities_section_filter_btn active"><i class="bi bi-grid-fill me-1"></i> Departments</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-heart-pulse me-1"></i> Cardiac Sciences</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-brain me-1"></i> Neurosciences</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-body-text me-1"></i> Orthopedics</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-gender-female me-1"></i> Women & Child</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-prescription2 me-1"></i> Internal Medicine</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-scissors me-1"></i> Surgical Care</button>
            <button class="btn Specilities_section_filter_btn"><i class="bi bi-plus-square me-1"></i> Other Specialities</button>
        </div>
    </div>

    <!-- 3. SPECIALITIES GRID (12 Cards) -->
    <div class="container mb-5">
        <div class="row g-4">
            
            <!-- Card 1: Cardiology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-heart-fill fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Cardiology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Comprehensive heart care including interventional cardiology, cardiac surgeries and rehabilitation.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 2: Neurology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-brain fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Neurology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Advanced diagnosis and treatment for brain, spine and nervous system disorders.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 3: Orthopedics -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-person-arms-up fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Orthopedics</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Expert care for bone, joint, spine problems and trauma with advanced surgical techniques.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 4: Pediatrics -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-emoji-smile fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Pediatrics</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Complete healthcare for infants, children and adolescents with compassion and expertise.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 5: Gynecology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-gender-female fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Gynecology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Total women's healthcare including high-risk pregnancy, minimal access surgeries and fertility care.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 6: Oncology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-ribbon fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Oncology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Advanced cancer care with early detection, medical oncology, radiation and surgical oncology.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 7: Gastroenterology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-capsule-drop fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Gastroenterology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Treatment for digestive system disorders including liver, pancreas and endoscopy procedures.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 8: Nephrology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-node-plus fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Nephrology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Comprehensive kidney care including dialysis, transplant and treatment of kidney disorders.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 9: Pulmonology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-lungs fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Pulmonology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Diagnosis and treatment of lung and respiratory diseases with advanced pulmonary care.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 10: Urology -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-shield-plus fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Urology</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Expert care for urinary tract, prostate, kidney stones and men's health issues.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 11: ENT -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-teal-subtle text-teal rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-ear fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">ENT</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Treatment for ear, nose, throat, head and neck disorders with advanced endoscopic procedures.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <!-- Card 12: General Surgery -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="Specilities_section_card bg-white p-4 rounded-4 border shadow-sm h-100 d-flex flex-column">
                    <div class="Specilities_section_card_icon bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <i class="bi bi-bandaid fs-4"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">General Surgery</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Advanced laparoscopic and open surgical procedures with faster recovery and minimal pain.</p>
                    <a href="#" class="Specilities_section_link text-primary fw-semibold small text-decoration-none mt-auto">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

        </div>

        <!-- View All Departments Button -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary px-4 py-2 fw-semibold rounded-3">View All Departments</a>
        </div>
    </div>

    <!-- 4. INFRASTRUCTURE SECTION -->
    <div class="container mb-5">
        <div class="Specilities_section_infra_box p-4 p-md-5 rounded-4 border shadow-sm">
            <div class="row align-items-center g-4">
                
                <!-- Left Image with Play Button -->
                <div class="col-lg-5 col-md-12">
                    <div class="position-relative rounded-4 overflow-hidden Specilities_section_video_wrapper">
                        <img src="assets/images/operation-theater.png" alt="State-of-the-Art Infrastructure" class="img-fluid w-100 object-fit-cover">
                        <a href="#" class="position-absolute top-50 start-50 translate-middle bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 60px; height: 60px;">
                            <i class="bi bi-play-fill fs-2 ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Middle Content & Highlights -->
                <div class="col-lg-4 col-md-12">
                    <span class="badge bg-primary-subtle text-primary text-uppercase fw-semibold mb-2" style="font-size: 11px;">Advanced Care</span>
                    <h4 class="fw-bold text-dark mb-2">State-of-the-Art Infrastructure</h4>
                    <p class="text-muted small mb-4">
                        Our hospital is equipped with cutting-edge technology, modular operation theatres, advanced ICUs and world-class diagnostic facilities for accurate diagnosis and effective treatment.
                    </p>

                    <div class="row g-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Modular Operation Theatres</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Advanced Diagnostic Labs</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Advanced ICUs & HDUs</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Digital Imaging & Radiology</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>24x7 Emergency Services</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2 small">
                                <i class="bi bi-check-circle-fill text-teal"></i>
                                <span>Robotic & Minimally Invasive Surgery</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right NABH Accreditation Box -->
                <div class="col-lg-3 col-md-12 text-center">
                    <div class="p-4 rounded-4 bg-white border shadow-sm">
                        <div class="mb-2">
                            <i class="bi bi-award-fill fs-1 text-warning"></i>
                        </div>
                        <h6 class="fw-bold text-dark mb-1">NABH ACCREDITED</h6>
                        <p class="text-muted small mb-3" style="font-size: 12px;">Committed to Quality, Safety & Patient Satisfaction</p>
                        <a href="#" class="btn btn-outline-primary btn-sm px-3 fw-semibold w-100">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 5. BOTTOM CTA BANNER -->
    <div class="container mb-4">
        <div class="Specilities_section_cta_banner p-4 rounded-4 text-white">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 col-md-12">
                    <h5 class="fw-bold mb-1 text-white">Need Help Finding the Right Department?</h5>
                    <p class="mb-0 text-white-50 small">Our care team is here to guide you to the right specialist.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="d-flex flex-sm-row flex-column gap-2 justify-content-lg-end">
                        <a href="#" class="btn btn-white bg-white text-primary fw-bold px-4 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-person-search"></i> Find a Doctor
                        </a>
                        <a href="#" class="btn Specilities_section_teal_btn text-white fw-bold px-4 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>