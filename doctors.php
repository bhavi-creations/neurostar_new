<?php include 'header.php'; ?>
<!-- ============================================================
     DOCTORS SECTION - HERO & SEARCH & GRID & FEATURES
============================================================ -->
<section class="doctors_section_wrapper">


    <!-- ===================================================
         DOCTOR FIRST SECTION (Hero Banner)
         =================================================== -->
    <section class="doctor-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">

                    <!-- Breadcrumb -->
                    <div class="breadcrumb-nav">
                        <a href="#">Home</a> <i class="fa-solid fa-chevron-right mx-1 fs-10"></i> <span>Doctors</span>
                    </div>

                    <!-- Titles -->
                    <h1 class="main-title">Our Expert Doctors</h1>
                    <h4 class="sub-tagline">Experienced. Dedicated. Compassionate.</h4>

                    <!-- Description -->
                    <p class="hero-desc">
                        Our team of highly qualified and experienced doctors is committed to providing world-class healthcare with compassion and excellence.
                    </p>

                    <!-- Key Metrics -->
                    <div class="stats-container">

                        <div class="stat-item">
                            <i class="fa-solid fa-user-doctor stat-icon"></i>
                            <div>
                                <div class="stat-number">120+</div>
                                <div class="stat-label">Expert Doctors</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <i class="fa-solid fa-heart-pulse stat-icon"></i>
                            <div>
                                <div class="stat-number">25+</div>
                                <div class="stat-label">Specialities</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <i class="fa-solid fa-shield-halved stat-icon"></i>
                            <div>
                                <div class="stat-number">20+</div>
                                <div class="stat-label">Years of Excellence</div>
                            </div>
                        </div>

                        <div class="stat-item">
                            <i class="fa-solid fa-users stat-icon"></i>
                            <div>
                                <div class="stat-number">75,000+</div>
                                <div class="stat-label">Happy Patients</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- 1. HERO SECTION -->
    <!-- <div class="doctors_section_hero py-5">
    <div class="container">
       
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb doctors_section_breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
            </ol>
        </nav>

        <div class="row align-items-center">
            
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <h1 class="doctors_section_hero_title fw-bold">Our Expert Doctors</h1>
                <h5 class="doctors_section_hero_subtitle text-success fw-semibold mb-3">
                    Experienced. Dedicated. Compassionate.
                </h5>
                <p class="doctors_section_hero_text text-black mb-4">
                    Our team of highly qualified and experienced doctors is committed to providing world-class healthcare with compassion and excellence.
                </p>

             
                <div class="row g-3 doctors_section_hero_stats">
                    <div class="col-6 col-sm-3">
                        <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                            <div class="doctors_stat_icon_box me-2">
                                <img src="assets/img/Neuro_doctor.png" alt="Expert Doctors">
                            </div>
                            <div>
                                <h6 class=" mb-0">120+</h6>
                                <small class="text-black">Expert Doctors</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3">
                        <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                            <div class="doctors_stat_icon_box me-2">
                                <img src="assets/img/Department.png" alt="Specialities">
                            </div>
                            <div>
                                <h6 class=" mb-0">25+</h6>
                                <small class="text-black">Medical Departments</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3">
                        <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                            <div class="doctors_stat_icon_box me-2">
                                <img src="assets/img/Experience.png" alt="Years of Excellence">
                            </div>
                            <div>
                                <h6 class=" mb-0">20+</h6>
                                <small class="text-black">Years of Excellence</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3">
                        <div class="doctors_section_stat_card d-flex align-items-center p-2 rounded border bg-white">
                            <div class="doctors_stat_icon_box me-2">
                                <img src="assets/img/happy-clients-01.png" alt="Happy Patients">
                            </div>
                            <div>
                                <h6 class=" mb-0">75,000+</h6>
                                <small class="text-black">Happy Patients</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-5 col-md-12 text-center position-relative">
                <img src="assets/img/Home_doctors_bg.png" alt="Neurostar Doctors Team" class="img-fluid doctors_section_hero_img">
            </div>
        </div>
    </div>
</div> -->

    <!-- ============================================================
  POPUP (doctor_popup_section) — hidden by default
  ============================================================ -->
    <div class="doctor_popup_section" id="doctorPopup">
        <div class="popup_container position-relative">

            <!-- close button (X) — top right corner -->
            <button class="popup_close_btn" id="popupCloseBtn">
                <i class="bi bi-x-lg"></i>
            </button>

            <!-- left / right navigation arrows -->
            <button class="nav_arrow prev" id="popupPrevBtn">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="nav_arrow next" id="popupNextBtn">
                <i class="bi bi-chevron-right"></i>
            </button>

            <!-- dynamic content injected via JS -->
            <div class="popup_inner" id="popupInner">
                <!-- left: image -->
                <div class="popup_image_wrap">
                    <img id="popupDocImg" src="" alt="Doctor" />
                </div>
                <!-- right: details -->
                <div class="popup_details">
                    <h3 class="doc_name" id="popupDocName">Dr. Name</h3>
                    <div class="doc_specialty" id="popupDocSpecialty">Specialty</div>
                    <div class="doc_meta"><i class="bi bi-mortarboard-fill"></i> <span id="popupDocQual">Qualification</span></div>
                    <div class="doc_meta"><i class="bi bi-briefcase-fill"></i> <span id="popupDocExp">Experience</span></div>
                    <div class="doc_bio" id="popupDocBio">
                        Dedicated specialist with a patient-first approach. Committed to excellence in care.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================
  DOCTORS SECTION (your existing code, slightly tweaked for popup)
  ============================================================ -->

    <!-- 2. SEARCH & FILTER BAR -->
    <div class="container my-4">
        <div class="doctors_section_filter_card p-3 p-md-4 rounded shadow-sm bg-white border">
            <form class="row g-3 align-items-center" id="doctorFilterForm">
                <div class="col-lg-4 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" id="doctorSearch" class="form-control bg-light border-start-0" placeholder="Search doctors by name, specialty...">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select id="specialtyFilter" class="form-select bg-light">
                        <option value="" selected>All Specialities</option>

                        <option value="neuro">Neuro Surgery</option>

                        <option value="oral">Oral & Maxillofacial Surgery</option>

                        <option value="plastic">Plastic & Cosmetic Surgery</option>

                        <option value="orthopedic">Orthopedics</option>

                        <option value="ent">E.N.T</option>

                        <option value="nephrology">Nephrology</option>

                        <option value="critical">Critical Care & Anesthesia</option>

                        <option value="psychiatry">Psychiatry</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select id="qualificationFilter" class="form-select bg-light">
                        <option selected>All Qualifications</option>
                        <option>MD</option>
                        <option>M.B.B.S.</option>
                        <option>DM</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <select id="experienceFilter" class="form-select bg-light">
                        <option selected>All Experience</option>
                        <option>5+ Years</option>
                        <option>10+ Years</option>
                        <option>15+ Years</option>
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
        <div class="row g-4" id="doctorGrid">

            <!-- Doctor Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="neuro" data-doctor='{"name":"Dr. M. Ashok Kumar","specialty":"Brain &amp; Spine Surgeon","qual":"M.B.B.S., D.A., M.S. (Gen), M.Ch. (Neuro Surgery)","exp":"15+ Years Exp.","bio":"Expert neurosurgeon with 15+ years of experience in complex brain and spine procedures.","img":"./assets/img/ashokkumar.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/ashokkumar.png" alt="Dr. M. Ashok Kumar" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. M. Ashok Kumar</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Brain & Spine Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., D.A., M.S. (Gen)</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.Ch. (Neuro Surgery)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 15+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="oral" data-doctor='{"name":"Dr. G.V.N.B.R. Sasthrulu","specialty":"Oral &amp; Maxillofacial Surgeon","qual":"B.D.S., M.D.S.(Implantologist)","exp":"12+ Years Exp.","bio":"Renowned oral surgeon specializing in implants and maxillofacial reconstruction.","img":"./assets/img/sasthrulu.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/sasthrulu.png" alt="Dr. G.V.N.B.R. Sasthrulu" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. G.V.N.B.R. Sasthrulu</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Oral & Maxillofacial Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>B.D.S.</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.D.S.(Implantologist)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 12+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="plastic" data-doctor='{"name":"Dr. Ratna Bhushan","specialty":"Plastic &amp; Cosmetic Surgeon","qual":"M.B.B.S., M.S., M.Ch.","exp":"14+ Years Exp.","bio":"Leading plastic surgeon with a focus on aesthetic and reconstructive surgery.","img":"./assets/img/ratnabushan.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/ratnabushan.png" alt="Dr. Ratna Bhushan" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Ratna Bhushan</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Plastic & Cosmetic Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., M.S.</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.Ch.</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 14+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="orthopedic" data-doctor='{"name":"Dr. Rama Krishna","specialty":"Consultant Orthopedic Surgeon","qual":"M.S.(Ortho), Joint Replacement Specialist","exp":"10+ Years Exp.","bio":"Expert in joint replacements and sports medicine.","img":"./assets/img/ramakrishna.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/ramakrishna.png" alt="Dr. Rama Krishna" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Rama Krishna</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Consultant Orthopedic Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> M.S.(Ortho)</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>Joint Replacement Specialist</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 10+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="ent" data-doctor='{"name":"Dr.G.Laxman Prasad","specialty":"E.N.T Specialist","qual":"M.S.(E.N.T)","exp":"13+ Years Exp.","bio":"Specialist in ENT disorders with advanced surgical training.","img":"./assets/img/laxmanprasad.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/laxmanprasad.png" alt="Dr.G.Laxman Prasad" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr.G.Laxman Prasad</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">E.N.T Specialist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> M.S.(E.N.T)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 13+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="nephrology" data-doctor='{"name":"Dr. Praveen Revu","specialty":"Nephrologist","qual":"MD (Gen medicine), DM (Nephrology)","exp":"9+ Years Exp.","bio":"Dedicated nephrologist with expertise in kidney disorders and dialysis.","img":"./assets/img/praveenrevu.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/praveenrevu.png" alt="Dr. Praveen Revu" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Praveen Revu</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Nephrologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>MD (Gen medicine),DM (Nephrology)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 9+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="critical" data-doctor='{"name":"Dr. G. Dani","specialty":"Intensivist &amp; Anesthetist","qual":"M.B.B.S., D.A. (FIICM)","exp":"11+ Years Exp.","bio":"Critical care expert with experience in ICU management and anesthesia.","img":"./assets/img/dani.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/dani.png" alt="Dr. G. Dani" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. G. Dani</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Intensivist & Anesthetist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i> M.B.B.S., D.A. (FIICM)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 11+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="psychiatry" data-doctor='{"name":"Dr. Akhila .S","specialty":"Psychiatrist","qual":"MD (Psychiatrist)","exp":"8+ Years Exp.","bio":"Compassionate psychiatrist with focus on mental wellness and therapy.","img":"./assets/img/akhila.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/akhila.png" alt="Dr. Akhila .S" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Akhila .S</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Psychiatrist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>MD (Psychiatrist)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 8+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 9 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr. Siva Sai Kumar Malla","specialty":"Gen Consultant Surgeon","qual":"M.B.B.S. (AMC Vizag), MS (Gen.Surgery, LHMC New Delhi)","exp":"11+ Years Exp.","bio":"Compassionate Gen Consultant Surgeon with focus on patient care.","img":"./assets/img/siva-sai-kumar.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/siva-sai-kumar.png" alt="Dr. Siva Sai Kumar Malla" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Siva Sai Kumar Malla</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Gen Consultant Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S. (AMC Vizag), MS (Gen.Surgery, LHMC New Delhi)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 11+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 10 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="neuro" data-doctor='{"name":"Dr. PJR Pavan Kumar","specialty":"Gen & Neuro Surgeon","qual":"M.B.B.S., M.S (GEN), M.Ch (NEURO SURGERY), Gold Medalist.","exp":"11+ Years Exp.","bio":"Compassionate Gen & Neuro Surgeon with focus on minimally invasive techniques.","img":"./assets/img/pavan_kumar.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/pavan_kumar.png" alt="Dr. PJR Pavan Kumar" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. PJR Pavan Kumar</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Gen & Neuro Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., M.S (GEN), M.Ch (NEURO SURGERY), Gold Medalist.</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 11+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 11 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr.Vijay Babu","specialty":"Consultant Physician Diabetologist","qual":"M.B.B.S., MD (General Medicine)","exp":"10+ Years Exp.","bio":"Compassionate Diabetologist with focus on diabetes management and patient care.","img":"./assets/img/Vijay.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/Vijay.png" alt="Dr.Vijay Babu" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr.Vijay Babu</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Consultant Physician Diabetologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., MD (General Medicine)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 10+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 12 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr.Sabbera","specialty":"Gynecologist & Gold Medalist","qual":"M.B.B.S., DGO, DNB.","exp":"12+ Years Exp.","bio":"Compassionate Gynecologist with focus on maternal care.","img":"./assets/img/Sabbera.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/Sabbera.png" alt="Dr.Sabbera" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr.Sabbera</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Gynecologist & Gold Medalist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., DGO, DNB.</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 12+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 13 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr. G. Praveennath","specialty":"Pulmonologist","qual":"M.B.B.S., DNB(NITRD, NEW DELHI).","exp":"11+ Years Exp.","bio":"Compassionate pulmonologist with focus on respiratory care and treatment.","img":"./assets/img/praveenath.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/praveenath.png" alt="Dr. G. Praveennath" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. G. Praveennath</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Pulmonologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., DNB(NITRD, NEW DELHI).</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 11+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 14 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr. N. Sunil Kumar","specialty":"Consultant Radiologist","qual":"M.B.B.S., MD(Radiodiagnosis)","exp":"13+ Years Exp.","bio":"Compassionate radiologist with a focus on diagnostic imaging and patient care.","img":"./assets/img/sunilkumar.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/sunilkumar.png" alt="Dr. N. Sunil Kumar" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. N. Sunil Kumar</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Consultant Radiologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., MD(Radiodiagnosis)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 13+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 15 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr. Sridhar","specialty":"consultant children & Newborn specialist","qual":"M.B.B.S, DCH (Gold medalist)","exp":"12+ Years Exp.","bio":"consultant children & Newborn specialist All type of pediatric problems","img":"./assets/img/sridhar.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/sridhar.png" alt="" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Sridhar</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">consultant & Newborn specialist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S, DCH (Gold medalist)</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 12+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 16 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-specialty-category="orthopedic" data-doctor='{"name":"Dr. Madhav Reddy","specialty":"Spine & Ortho Surgeon","qual":"M.B.B.S., MS (Ortho),DNB (ortho) FISS, FESS","exp":"13+ Years Exp.","bio":"compassionate Spine and endoscopic surgeon","img":"./assets/img/madhavreddy.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/madhavreddy.png" alt="" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Madhav Reddy</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Spine & Ortho Surgeon</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., MS, DNB (ortho) FISS, FESS</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 13+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Card 17 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-doctor='{"name":"Dr. Bezwada satish","specialty":"Urologist","qual":"M.B.B.S., MS","exp":"12+ Years Exp.","bio":"compassionate Urologist","img":"./assets/img/bezawadasathish.png"}'>
                <div class="doctors_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="doctors_section_card_img_wrapper position-relative text-center pt-3 bg-light">
                        <button class="doctors_section_wishlist_btn position-absolute top-0 end-0 m-2 btn btn-sm btn-light rounded-circle shadow-sm">
                            <i class="bi bi-heart"></i>
                        </button>
                        <img src="./assets/img/bezawadasathish.png" alt="" class="img-fluid doctors_section_card_img">
                    </div>
                    <div class="card-body d-flex flex-column p-3">
                        <h5 class="doctors_section_card_title fw-bold mb-1">Dr. Bezwada satish</h5>
                        <p class="doctors_section_card_specialty text-primary fw-semibold mb-2">Urologist</p>
                        <p class="doctors_section_card_meta text-muted small mb-1"><i class="bi bi-mortarboard-fill me-1"></i>M.B.B.S., MS,</p>
                        <p class="doctors_section_card_meta text-muted small mb-3"><i class="bi bi-briefcase-fill me-1"></i> 12+ Years Exp.</p>
                        <div class="mt-auto d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm w-50 view-profile-btn">View Profile</a>
                            <!-- <a href="#" class="btn btn-primary btn-sm w-50"><i class="bi bi-calendar-check me-1"></i> Book</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- View All Button -->
        <!-- <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary px-4 py-2 doctors_section_view_all_btn">View All Doctors</a>
        </div> -->
    </div>

    <!-- 4. BOTTOM STATS BAR -->
    <div class="container my-4 my-md-5">
        <div class="doctors_section_bottom_stats p-3 p-sm-4 bg-light rounded-4 border shadow-sm">
            <div class="row align-items-center justify-content-center g-3 g-md-4">

                <!-- Item 1 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="d-flex align-items-start justify-content-start justify-content-sm-center">
                        <div class="doctors_section_counter_icon me-2 me-sm-3">
                            <img src="assets/img/Neuro_doctor.png" alt="Expert Doctors">
                        </div>
                        <div class="text-start">
                            <h5 class="stats_number mb-0">120+</h5>
                            <small class="stats_title text-black d-block">Expert Doctors</small>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="d-flex align-items-start justify-content-start justify-content-sm-center">
                        <div class="doctors_section_counter_icon me-2 me-sm-3">
                            <img src="assets/img/Department.png" alt="Specialities">
                        </div>
                        <div class="text-start">
                            <h5 class="stats_number mb-0">25+</h5>
                            <small class="stats_title text-black d-block">Specialities</small>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="d-flex align-items-start justify-content-start justify-content-sm-center">
                        <div class="doctors_section_counter_icon me-2 me-sm-3">
                            <img src="assets/img/happy-clients-01.png" alt="Happy Patients">
                        </div>
                        <div class="text-start">
                            <h5 class="stats_number mb-0">75,000+</h5>
                            <small class="stats_title text-black d-block">Happy Patients</small>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-6 col-md-4 col-lg">
                    <div class="d-flex align-items-start justify-content-start justify-content-sm-center">
                        <div class="doctors_section_counter_icon me-2 me-sm-3">
                            <img src="assets/img/outpatient-consultations.png" alt="OP Consultations">
                        </div>
                        <div class="text-start">
                            <h5 class="stats_number mb-0">2,50,000+</h5>
                            <small class="stats_title text-black d-block">OP Consultations</small>
                        </div>
                    </div>
                </div>

                <!-- Item 5 (Centered on Mobile Grid) -->
                <div class="col-12 col-md-4 col-lg">
                    <div class="d-flex align-items-start justify-content-center">
                        <div class="doctors_section_counter_icon me-2 me-sm-3">
                            <img src="assets/img/Surgical-weapons.png" alt="Successful Surgeries">
                        </div>
                        <div class="text-start">
                            <h5 class="stats_number mb-0">15,000+</h5>
                            <small class="stats_title text-black d-block">Success Surgeries</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 5. WHY OUR DOCTORS ARE TRUSTED SECTION -->
    <div class="container py-4">
        <h3 class="d-flex justify-content-center text-center fw-bold mb-4 doctors_section_title_underline ">Why Our Doctors Are Trusted</h3>
        <div class="row g-4 text-center">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><img src="assets/img/Neuro_doctor.png" alt="Expert Doctors"></div>
                    <h6 class="fw-bold mb-1">Expert Doctors</h6>
                    <small class="text-black d-block">Trained in top institutes across India and abroad</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><img src="assets/img/Experience.png" alt="Expert Doctors"></div>
                    <h6 class="fw-bold mb-1">Experience</h6>
                    <small class="text-black d-block">Years of hands-on experience in specialized care</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><img src="assets/img/patient-sevices.png" alt="Expert Doctors"></div>
                    <h6 class="fw-bold mb-1">Specialised Services</h6>
                    <small class="text-black d-block">Best services with personalized treatment</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><i class="bi bi-laptop"></i></div>
                    <h6 class="fw-bold mb-1">Advanced Treatment</h6>
                    <small class="text-black d-block">latest technology for better health checkups.</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><img src="assets/img/Department.png" alt="Expert Doctors"></div>
                    <h6 class="fw-bold mb-1">Departments</h6>
                    <small class="text-black d-block">Fully equipped medical and surgical departments</small>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="doctors_section_feature_card p-3 h-100 rounded bg-white shadow-sm border">
                    <div class="doctors_section_feature_icon mb-2 text-primary fs-2"><i class="bi bi-clock-history"></i></div>
                    <h6 class="fw-bold mb-1">Continuous Support</h6>
                    <small class="text-black d-block">Follow-up care and continuous health monitoring</small>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. BOOK AN APPOINTMENT CTA BANNER -->
    <div class="container my-5">
        <div class="doctors_section_cta_banner p-4 p-lg-4 p-md-4 rounded-4 text-white">
            <div class="row align-items-center g-3">
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
                <div class="col-xl-5 col-lg-5 col-md-8 col-12">
                    <div class="d-flex flex-sm-row flex-column gap-2 justify-content-lg-center">
                        <a href="appointment.php" class="btn doctors_section_btn_teal text-white fw-semibold px-3 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-calendar-event"></i> Book Appointment
                        </a>
                        <a href="doctors.php" class="btn doctors_section_btn_outline_white text-white fw-semibold px-3 py-2 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-person"></i> Find a Doctor
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                    <div class="doctors_section_cta_emergency_box d-flex align-items-center justify-content-lg-end ps-lg-3">
                        <div class="doctors_section_phone_circle rounded-circle me-2 d-flex align-items-center justify-content-center flex-shrink-0">
                            <i class="bi bi-telephone-fill text-white fs-5"></i>
                        </div>
                        <div class="text-start">
                            <span class="d-block text-white-50 fw-semibold" style="font-size: 11px; letter-spacing: 0.5px;">24x7 Emergency</span>
                            <span class="fw-bold fs-5 text-white text-nowrap">+91 9121476777</span>
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
                    <p class="text-black mb-0 small" id="doctorProfileDesignation">Designation</p>
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
                        <p class="text-black mb-1" id="doctorProfileQualification">Qualification</p>
                        <p class="text-black mb-1" id="doctorProfileExperience">Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    (function() {
        const popup = document.getElementById('doctorPopup');
        const popupInner = document.getElementById('popupInner');

        // DOM elements inside popup
        const docImg = document.getElementById('popupDocImg');
        const docName = document.getElementById('popupDocName');
        const docSpecialty = document.getElementById('popupDocSpecialty');
        const docQual = document.getElementById('popupDocQual');
        const docExp = document.getElementById('popupDocExp');
        const docBio = document.getElementById('popupDocBio');

        const closeBtn = document.getElementById('popupCloseBtn');
        const prevBtn = document.getElementById('popupPrevBtn');
        const nextBtn = document.getElementById('popupNextBtn');

        // Get all doctor cards (with data-doctor attribute)
        const cards = Array.from(document.querySelectorAll('[data-doctor]'));
        let currentIndex = 0;

        // Function to open popup with a given card index
        function openPopup(index) {
            if (index < 0 || index >= cards.length) return;
            currentIndex = index;
            const card = cards[currentIndex];
            const data = card.dataset.doctor ? JSON.parse(card.dataset.doctor) : null;
            if (!data) return;

            // populate fields
            docImg.src = data.img || 'https://via.placeholder.com/300';
            docImg.alt = data.name || 'Doctor';
            docName.textContent = data.name || 'Dr. Name';
            docSpecialty.textContent = data.specialty || 'Specialist';
            docQual.textContent = data.qual || 'Qualification';
            docExp.textContent = data.exp || 'Experience';
            docBio.textContent = data.bio || 'Dedicated specialist with a patient-first approach.';

            // show popup
            popup.classList.add('show');
            document.body.style.overflow = 'hidden'; // prevent scroll
        }

        // Close popup
        function closePopup() {
            popup.classList.remove('show');
            document.body.style.overflow = '';
        }

        // Navigation
        function prevDoctor() {
            if (cards.length === 0) return;
            const newIndex = (currentIndex - 1 + cards.length) % cards.length;
            openPopup(newIndex);
        }

        function nextDoctor() {
            if (cards.length === 0) return;
            const newIndex = (currentIndex + 1) % cards.length;
            openPopup(newIndex);
        }

        // Event listeners for "View Profile" buttons
        document.querySelectorAll('.view-profile-btn').forEach((btn, idx) => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                // find parent card
                const card = this.closest('[data-doctor]');
                if (!card) return;
                const index = cards.indexOf(card);
                if (index !== -1) {
                    openPopup(index);
                }
            });
        });

        // Close button
        closeBtn.addEventListener('click', closePopup);

        // Click outside popup (on backdrop) to close
        popup.addEventListener('click', function(e) {
            if (e.target === popup) {
                closePopup();
            }
        });

        // Keyboard events: ESC to close, arrows to navigate
        document.addEventListener('keydown', function(e) {
            if (!popup.classList.contains('show')) return;
            if (e.key === 'Escape') {
                closePopup();
            } else if (e.key === 'ArrowLeft') {
                e.preventDefault();
                prevDoctor();
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                nextDoctor();
            }
        });

        // Prev / Next buttons
        prevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            prevDoctor();
        });
        nextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            nextDoctor();
        });

        // (Optional) if there are zero cards, hide arrows
        if (cards.length <= 1) {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        }
    })();
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const filterForm = document.getElementById("doctorFilterForm");
        const searchInput = document.getElementById("doctorSearch");
        const specialtyFilter = document.getElementById("specialtyFilter");
        const qualificationFilter = document.getElementById("qualificationFilter");
        const experienceFilter = document.getElementById("experienceFilter");
        const doctorGrid = document.getElementById("doctorGrid");

        // Get all doctor cards
        const doctorCards = Array.from(
            doctorGrid.children
        );

        // Create "No doctors found" message
        const noResultsMessage = document.createElement("div");

        noResultsMessage.className = "col-12 text-center py-5";
        noResultsMessage.innerHTML = `
        <div class="py-4">
            <i class="bi bi-person-x fs-1 text-muted"></i>
            <h5 class="mt-3 text-muted">No doctors found</h5>
            <p class="text-muted mb-0">
                Try a different name, specialty, qualification or experience.
            </p>
        </div>
    `;

        function filterDoctors() {

            // Get search value
            const searchValue = searchInput.value
                .trim()
                .toLowerCase();

            // Get selected filters
            const specialtyValue = specialtyFilter.value
                .trim()
                .toLowerCase();

            const qualificationValue = qualificationFilter.value
                .trim()
                .toLowerCase();

            const experienceValue = experienceFilter.value
                .trim()
                .toLowerCase();

            let visibleDoctors = 0;

            doctorCards.forEach(function(card) {

                const doctorDataString = card.getAttribute("data-doctor");

                if (!doctorDataString) {
                    return;
                }

                let doctor;

                try {
                    doctor = JSON.parse(doctorDataString);
                } catch (error) {
                    console.error("Invalid doctor data:", error);
                    return;
                }

                // Doctor information
                const name = (doctor.name || "").toLowerCase();
                const specialty = (doctor.specialty || "").toLowerCase();
                const qualification = (doctor.qual || "").toLowerCase();
                const experience = (doctor.exp || "").toLowerCase();
                const bio = (doctor.bio || "").toLowerCase();

                /*
                 * SEARCH
                 *
                 * Search works across:
                 * - Doctor name
                 * - Specialty
                 * - Qualification
                 * - Experience
                 * - Bio
                 */
                const searchMatch =
                    searchValue === "" ||
                    name.includes(searchValue) ||
                    specialty.includes(searchValue) ||
                    qualification.includes(searchValue) ||
                    experience.includes(searchValue) ||
                    bio.includes(searchValue);

                /*
                 * SPECIALTY FILTER
                 */
                const doctorSpecialtyCategory =
                    (card.getAttribute("data-specialty-category") || "")
                    .toLowerCase();

                const specialtyMatch =
                    specialtyValue === "" ||
                    specialtyValue === "all specialities" ||
                    doctorSpecialtyCategory === specialtyValue;

                /*
                 * QUALIFICATION FILTER
                 */
                const qualificationMatch =
                    qualificationValue === "" ||
                    qualificationValue === "all qualifications" ||
                    qualification.includes(qualificationValue);

                /*
                 * EXPERIENCE FILTER
                 */
                let experienceMatch = true;

                if (
                    experienceValue !== "" &&
                    experienceValue !== "all experience"
                ) {

                    const doctorExperience =
                        parseInt(experience.match(/\d+/)?.[0] || "0");

                    const selectedExperience =
                        parseInt(experienceValue.match(/\d+/)?.[0] || "0");

                    experienceMatch =
                        doctorExperience >= selectedExperience;
                }

                /*
                 * FINAL RESULT
                 *
                 * All selected conditions must match.
                 */
                const shouldShow =
                    searchMatch &&
                    specialtyMatch &&
                    qualificationMatch &&
                    experienceMatch;

                if (shouldShow) {
                    card.style.display = "";
                    visibleDoctors++;
                } else {
                    card.style.display = "none";
                }

            });

            // Show / hide no-result message
            if (visibleDoctors === 0) {

                if (!doctorGrid.contains(noResultsMessage)) {
                    doctorGrid.appendChild(noResultsMessage);
                }

            } else {

                if (doctorGrid.contains(noResultsMessage)) {
                    noResultsMessage.remove();
                }
            }
        }


        /*
         * SEARCH BUTTON
         */
        filterForm.addEventListener("submit", function(event) {

            event.preventDefault();

            filterDoctors();

        });


        /*
         * LIVE SEARCH
         *
         * This makes results appear while typing.
         *
         * Example:
         * "D" → matching doctors
         * "Dr." → matching doctors
         * "Dr. M" → Ashok
         * "Ashok" → Ashok
         */
        searchInput.addEventListener("input", function() {

            filterDoctors();

        });


        /*
         * SPECIALTY FILTER
         */
        specialtyFilter.addEventListener("change", function() {

            filterDoctors();

        });


        /*
         * QUALIFICATION FILTER
         */
        qualificationFilter.addEventListener("change", function() {

            filterDoctors();

        });


        /*
         * EXPERIENCE FILTER
         */
        experienceFilter.addEventListener("change", function() {

            filterDoctors();

        });


        /*
         * RESET BUTTON
         */
        filterForm.addEventListener("reset", function() {

            // Wait until browser resets the form values
            setTimeout(function() {

                doctorCards.forEach(function(card) {
                    card.style.display = "";
                });

                if (doctorGrid.contains(noResultsMessage)) {
                    noResultsMessage.remove();
                }

            }, 0);

        });

    });
</script>

<?php include 'footer.php'; ?>