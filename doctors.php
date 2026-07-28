<?php include 'header.php'; ?>
<!-- ============================================================
     DOCTORS SECTION - HERO & SEARCH & GRID & FEATURES
============================================================ -->
<section class="doctors_section_wrapper">

    <!-- 1. HERO SECTION -->
    <div class="doctors_section_hero py-5">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb doctors_section_breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <h1 class="doctors_section_hero_title fw-bold">Our Expert Doctors</h1>
                    <h5 class="doctors_section_hero_subtitle text-success fw-semibold mb-3">
                        Experienced. Dedicated. Compassionate.
                    </h5>
                    <p class="doctors_section_hero_text text-muted mb-4">
                        Our team of highly qualified and experienced doctors is committed to providing world-class healthcare with compassion and excellence.
                    </p>

                    <!-- Top Counter Badges -->
                    <div class="row g-3 doctors_section_hero_stats">
                        <div class="col-6 col-sm-3">
                            <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                                <div class="doctors_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">120+</h6>
                                    <small class="text-muted">Expert Doctors</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                                <div class="doctors_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">25+</h6>
                                    <small class="text-muted">Specialities</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                                <div class="doctors_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">20+</h6>
                                    <small class="text-muted">Years of Excellence</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                                <div class="doctors_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">75,000+</h6>
                                    <small class="text-muted">Happy Patients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Hero Banner Image -->
                <div class="col-lg-5 col-md-12 text-center position-relative">
                    <img src="assets/img/Home_doctors_bg.png" alt="Neurostar Doctors Team" class="img-fluid doctors_section_hero_img">
                </div>
            </div>
        </div>
    </div>

    <!-- 2. SEARCH & FILTER BAR -->
    <div class="container my-4">
        <div class="doctors_section_filter_card p-3 p-md-4 rounded shadow-sm bg-white border">
            <form class="row g-3 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control bg-light border-start-0" placeholder="Search doctors by name, specialty...">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select class="form-select bg-light">
                        <option selected>All Specialities</option>
                        <option value="1">Cardiology</option>
                        <option value="2">Neurology</option>
                        <option value="3">Orthopedics</option>
                        <option value="4">Gynecology</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select class="form-select bg-light">
                        <option selected>All Qualifications</option>
                        <option value="1">MD</option>
                        <option value="2">MS</option>
                        <option value="3">DM</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select class="form-select bg-light">
                        <option selected>All Experience</option>
                        <option value="1">5+ Years</option>
                        <option value="2">10+ Years</option>
                        <option value="3">15+ Years</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-6 d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                    <button type="reset" class="btn btn-outline-secondary text-nowrap"><i class="bi bi-arrow-counterclockwise"></i></button>
                </div>
            </form>
        </div>
    </div>

    <!-- 3. DOCTORS GRID SECTION -->
    <div class="container py-3">
        <div class="row g-4">
            
            <!-- Doctor Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/ashokkumar.png" alt="Dr. M. Ashok Kumar" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. M. Ashok Kumar</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Brain & Spine Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., D.A., M.S. (Gen)</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.Ch. (Neuro Surgery)</p>


                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 15+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/sasthrulu.png" alt="Dr. G.V.N.B.R. Sasthrulu" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. G.V.N.B.R. Sasthrulu</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Oral & Maxillofacial Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>B.D.S.</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.D.S.(Implantologist)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 12+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/ratnabushan.png" alt="Dr. Ratna Bhushan" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Ratna Bhushan</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Plastic & Cosmetic Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., M.S.</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.Ch.</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 14+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/ramakrishna.png" alt="Dr. Rama Krishna" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Rama Krishna</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Consultant Orthopedic Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> M.S.(Ortho)</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>Joint Replacement Specialist</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 10+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/laxmanprasad.png" alt="Dr.G.Laxman Prasad" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr.G.Laxman Prasad</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">E.N.T Specialist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> M.S.(E.N.T)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 13+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/praveenrevu.png" alt="Dr. Praveen Revu" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Praveen Revu</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Nephrologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>MD (Gen medicine),DM (Nephrology)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 9+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/dani.png" alt="Dr. G. Dani" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. G. Dani</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Intensivist & Anesthetist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> MBBS DA (FIICM)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 11+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="assets/img/akhila.png" alt="Dr. Akhila .S" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Akhila .S</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Psychiatrist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>MD (Psychiatrist)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 8+ Years Exp.</p>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50">View Profile</a>
                            <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- View All Button -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary px-4 py-2 doctors_section_view_all_btn">View All Doctors</a>
        </div>
    </div>

    <!-- 4. BOTTOM STATS BAR -->
    <div class="container my-5">
        <div class="doctors_section_bottom_stats p-4 bg-light rounded-4 border shadow-sm">
            <div class="row text-center g-3">
                <div class="col-6 col-md-2-4 col-lg">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="doctors_section_counter_icon fs-2 text-primary me-2"><i class="bi bi-person-badge"></i></div>
                        <div class="text-start">
                            <h5 class="fw-bold mb-0">120+</h5>
                            <small class="text-muted">Expert Doctors</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2-4 col-lg">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="doctors_section_counter_icon fs-2 text-info me-2"><i class="bi bi-gear-wide-connected"></i></div>
                        <div class="text-start">
                            <h5 class="fw-bold mb-0">25+</h5>
                            <small class="text-muted">Specialities</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2-4 col-lg">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="doctors_section_counter_icon fs-2 text-primary me-2"><i class="bi bi-emoji-smile"></i></div>
                        <div class="text-start">
                            <h5 class="fw-bold mb-0">75,000+</h5>
                            <small class="text-muted">Happy Patients</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-2-4 col-lg">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="doctors_section_counter_icon fs-2 text-success me-2"><i class="bi bi-stethoscope"></i></div>
                        <div class="text-start">
                            <h5 class="fw-bold mb-0">2,50,000+</h5>
                            <small class="text-muted">OP Consultations</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2-4 col-lg">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="doctors_section_counter_icon fs-2 text-primary me-2"><i class="bi bi-heart-pulse"></i></div>
                        <div class="text-start">
                            <h5 class="fw-bold mb-0">15,000+</h5>
                            <small class="text-muted">Successful Surgeries</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. WHY OUR DOCTORS ARE TRUSTED SECTION -->
    <div class="container py-4">
        <h3 class="text-center fw-bold mb-4 doctors_section_title_underline">Why Our Doctors Are Trusted</h3>
        <div class="row g-4 text-center">
            
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-patch-check"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Highly Qualified</h6>
                    <small class="text-muted d-block">Trained in top institutes across India and abroad</small>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-people"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Experienced Team</h6>
                    <small class="text-muted d-block">Years of hands-on experience in specialized care</small>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Patient First</h6>
                    <small class="text-muted d-block">Compassionate care with personalized treatment</small>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Advanced Treatment</h6>
                    <small class="text-muted d-block">Latest technology and evidence-based protocols</small>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Ethical Practices</h6>
                    <small class="text-muted d-block">Transparent, honest & ethical medical practices</small>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Continuous Support</h6>
                    <small class="text-muted d-block">Follow-up care and continuous health monitoring</small>
                </div>
            </div>

        </div>
    </div>

    <!-- ============================================================
     6. BOOK AN APPOINTMENT CTA BANNER
============================================================ -->
<div class="container my-5">
    <div class="doctors_section_cta_banner p-4 p-lg-4 p-md-4 rounded-4 text-white">
        <div class="row align-items-center g-3">
            
            <!-- Left Side: Calendar Icon + Main Text -->
            <div class="col-xl-4 col-lg-4 col-md-12 d-flex align-items-center">
                <div class="doctors_section_cta_calendar_icon bg-white rounded-circle me-3 flex-shrink-0 d-flex align-items-center justify-content-center">
                    <i class="bi bi-calendar-check text-teal fs-3"></i>
                </div>
                <div>
                    <h4 class="fw-bold text-white mb-1 doctors_section_cta_heading">Book an Appointment</h4>
                    <h5 class="doctors_section_cta_subheading fw-bold mb-1">with Our Expert Today!</h5>
                    <p class="mb-0 text-white-50 small">We are here to help you with the best medical care.</p>
                </div>
            </div>

            <!-- Middle Side: Action Buttons (Book Appointment & Find a Doctor) -->
            <div class="col-xl-5 col-lg-5 col-md-8 col-12">
                <div class="d-flex flex-sm-row flex-column gap-2 justify-content-lg-center">
                    <a href="#" class="btn doctors_section_btn_teal text-white fw-semibold px-3 py-2 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-calendar-event"></i> Book Appointment
                    </a>
                    <a href="#" class="btn doctors_section_btn_outline_white text-white fw-semibold px-3 py-2 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-person"></i> Find a Doctor
                    </a>
                </div>
            </div>

            <!-- Right Side: Emergency Contact with Divider Line -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                <div class="doctors_section_cta_emergency_box d-flex align-items-center justify-content-lg-end ps-lg-3">
                    <div class="doctors_section_phone_circle rounded-circle me-2 d-flex align-items-center justify-content-center flex-shrink-0">
                        <i class="bi bi-telephone-fill text-white fs-5"></i>
                    </div>
                    <div class="text-start">
                        <span class="d-block text-white-50 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">24x7 Emergency</span>
                        <span class="fw-bold fs-5 text-white text-nowrap">+91 98765 43210</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</section>

<div class="modal fade doctor_profile_modal" id="doctorProfileModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header position-relative">
                <div>
                    <h5 class="modal-title fw-bold mb-0" id="doctorProfileName">Doctor Profile</h5>
                    <p class="text-muted mb-0 small" id="doctorProfileDesignation">Designation</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body position-relative">
                <button type="button" class="doctor_profile_nav prev" id="doctorProfilePrev" aria-label="Previous doctor">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="doctor_profile_nav next" id="doctorProfileNext" aria-label="Next doctor">
                    <i class="bi bi-chevron-right"></i>
                </button>

                <div class="doctor_profile_panel">
                    <img id="doctorProfileImage" src="" alt="Doctor image">
                    <div class="text-start">
                        <h4 class="fw-bold mb-1" id="doctorProfileTitle">Doctor Name</h4>
                        <p class="text-primary fw-semibold mb-2" id="doctorProfileSpecialty">Specialty</p>
                        <p class="text-muted mb-1" id="doctorProfileQualification">Qualification</p>
                        <p class="text-muted mb-1" id="doctorProfileExperience">Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
