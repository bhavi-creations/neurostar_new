<?php include 'header.php' ; ?>
<!-- ============================================================
     BLOGS SECTION - HERO, CATEGORIES, GRID, SIDEBAR & NEWSLETTER
============================================================ -->
<section class="blogs_section_wrapper">

    <!-- 1. HERO SECTION -->
    <div class="blogs_section_hero py-5">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb blogs_section_breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>

            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <h1 class="blogs_section_hero_title fw-bold">Health Insights & Articles</h1>
                    <p class="blogs_section_hero_text text-muted mb-4 fs-6">
                        Expert advice and tips to help you and your family live a healthier life.
                    </p>

                    <!-- Stats Badges -->
                    <div class="row g-3 blogs_section_hero_stats">
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">100+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Health Articles</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">20+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Medical Experts</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="blogs_section_stat_card d-flex align-items-center p-2 rounded border bg-white shadow-sm">
                                <div class="blogs_section_stat_icon me-2 text-primary fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">50,000+</h6>
                                    <small class="text-muted" style="font-size: 11px;">Readers Every Month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Hero Image -->
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="assets/images/blog-hero-stethoscope.png" alt="Health Insights Hero" class="img-fluid blogs_section_hero_img">
                </div>
            </div>
        </div>
    </div>

    <!-- 2. CATEGORY PILLS FILTER BAR -->
    <div class="container my-4">
        <div class="blogs_section_category_filter d-flex flex-wrap gap-2 justify-content-start justify-content-lg-between bg-white p-3 rounded-3 shadow-sm border">
            <button class="btn blogs_section_cat_btn active"><i class="bi bi-grid-fill me-1"></i> All Categories</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-heart-pulse me-1"></i> Heart Health</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-gender-female me-1"></i> Women's Health</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-emoji-smile me-1"></i> Children's Health</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-capsule me-1"></i> Dental Care</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-body-text me-1"></i> Bone & Joints</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-brain me-1"></i> Mental Health</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-egg-fried me-1"></i> Nutrition</button>
            <button class="btn blogs_section_cat_btn"><i class="bi bi-eye me-1"></i> Eye Care</button>
        </div>
    </div>

    <!-- 3. MAIN CONTENT (BLOG GRID + SIDEBAR) -->
    <div class="container py-3">
        <div class="row g-4">
            
            <!-- LEFT COLUMN: BLOG GRID (3x3 Layout) -->
            <div class="col-lg-8 col-md-12">
                <div class="row g-4">
                    
                    <!-- Blog Card 1 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog1.png" alt="Heart Health" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Heart Health</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 20, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">How to Keep Your Heart Healthy at Every Age</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Simple daily habits that can help you maintain a strong and healthy heart.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb1.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Ramesh Babu</h7>
                                        <small class="text-muted" style="font-size: 10px;">Cardiologist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog2.png" alt="Women's Health" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Women's Health</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 18, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Planning a Pregnancy? Why a Preconception Checkup Matters</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Important health checks and lifestyle tips before you start your journey.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb2.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Anitha Reddy</h7>
                                        <small class="text-muted" style="font-size: 10px;">Gynecologist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog3.png" alt="Neurology" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Neurology</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 15, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Warning Signs of a Stroke — Don't Ignore Them</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Learn the signs, risk factors and the importance of timely treatment.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb3.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Sandeep Kumar</h7>
                                        <small class="text-muted" style="font-size: 10px;">Neurologist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 4 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog4.png" alt="Bone & Joints" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Bone & Joints</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 12, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Knee Pain in Young Adults: Causes & Treatment</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Why young people experience knee pain and how to find right treatment.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb4.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Venkatesh P.</h7>
                                        <small class="text-muted" style="font-size: 10px;">Orthopedic Surgeon</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 5 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog5.png" alt="Children's Health" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Children's Health</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 10, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Boost Your Child's Immunity Naturally</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Diet, lifestyle and hygiene tips to keep your child healthy and active.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb5.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Kavya Rani</h7>
                                        <small class="text-muted" style="font-size: 10px;">Pediatrician</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 6 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog6.png" alt="Dental Care" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Dental Care</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 8, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">How Often Should You Visit the Dentist?</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Regular dental checkups can prevent major dental problems.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb6.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Mohan Rao</h7>
                                        <small class="text-muted" style="font-size: 10px;">Dental Surgeon</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 7 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog7.png" alt="Nutrition" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Nutrition</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 5, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Top 10 Superfoods for a Stronger You</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Add these nutrient-rich superfoods to your daily diet for better health.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb7.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Sunitha</h7>
                                        <small class="text-muted" style="font-size: 10px;">Dietitian</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 8 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog8.png" alt="Mental Health" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Mental Health</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 3, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Stress Management Tips for a Peaceful Mind</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">Effective stress relief techniques you can practice every day.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb8.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Pradeep</h7>
                                        <small class="text-muted" style="font-size: 10px;">Psychiatrist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 9 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="blogs_section_card card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                            <img src="assets/images/blog9.png" alt="Eye Care" class="card-img-top blogs_section_card_img">
                            <div class="card-body d-flex flex-column p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-teal-subtle text-teal fw-semibold">Eye Care</span>
                                    <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 5, 2026</small>
                                </div>
                                <h6 class="blogs_section_card_title fw-bold mb-2">Digital Eye Strain: Causes, Symptoms & Relief</h6>
                                <p class="blogs_section_card_text text-muted small mb-3">How to protect your eyes from screens and reduce digital eye strain.</p>
                                <a href="#" class="blogs_section_readmore text-primary fw-semibold small text-decoration-none mt-auto">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                                <hr class="my-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/doc-thumb9.png" alt="Author" class="rounded-circle me-2" width="30" height="30">
                                    <div>
                                        <h7 class="fw-bold d-block mb-0" style="font-size: 12px;">Dr. Arjun Varma</h7>
                                        <small class="text-muted" style="font-size: 10px;">Ophthalmologist</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <nav class="mt-4 d-flex justify-content-center">
                    <ul class="pagination blogs_section_pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR -->
            <div class="col-lg-4 col-md-12">
                
                <!-- Search Box Card -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Search Articles</h6>
                    <form class="input-group">
                        <input type="text" class="form-control bg-light" placeholder="Search for articles...">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>

                <!-- Popular Articles Card -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Popular Articles</h6>
                    <div class="d-flex flex-column gap-3">
                        
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/pop1.png" alt="Popular Article" class="rounded-3 object-fit-cover" width="60" height="60">
                            <div>
                                <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">Diabetes: Early Signs You Shouldn't Ignore</h7>
                                <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 14, 2026</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/pop2.png" alt="Popular Article" class="rounded-3 object-fit-cover" width="60" height="60">
                            <div>
                                <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">High Blood Pressure: Causes and Prevention</h7>
                                <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 11, 2026</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/pop3.png" alt="Popular Article" class="rounded-3 object-fit-cover" width="60" height="60">
                            <div>
                                <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">Healthy Diet Plan for Weight Management</h7>
                                <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 7, 2026</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/pop4.png" alt="Popular Article" class="rounded-3 object-fit-cover" width="60" height="60">
                            <div>
                                <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">Monsoon Health Tips for Your Family</h7>
                                <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 4, 2026</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/pop5.png" alt="Popular Article" class="rounded-3 object-fit-cover" width="60" height="60">
                            <div>
                                <h7 class="fw-bold mb-1 d-block blogs_section_pop_title">Understanding Thyroid Disorders</h7>
                                <small class="text-muted" style="font-size: 11px;"><i class="bi bi-calendar3 me-1"></i> May 2, 2026</small>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Categories Count Card -->
                <div class="blogs_section_sidebar_card p-4 rounded-3 bg-white border shadow-sm mb-4">
                    <h6 class="fw-bold mb-3">Categories</h6>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Heart Health</span>
                            <span class="badge bg-light text-dark border rounded-pill">18</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Women's Health</span>
                            <span class="badge bg-light text-dark border rounded-pill">16</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Children's Health</span>
                            <span class="badge bg-light text-dark border rounded-pill">14</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Dental Care</span>
                            <span class="badge bg-light text-dark border rounded-pill">12</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Bone & Joints</span>
                            <span class="badge bg-light text-dark border rounded-pill">11</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Mental Health</span>
                            <span class="badge bg-light text-dark border rounded-pill">10</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Nutrition</span>
                            <span class="badge bg-light text-dark border rounded-pill">9</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center small">
                            <span>Eye Care</span>
                            <span class="badge bg-light text-dark border rounded-pill">8</span>
                        </li>
                    </ul>
                    <a href="#" class="text-primary fw-semibold small text-decoration-none d-inline-block mt-3">View All Categories <i class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Need Expert Advice CTA Card -->
                <div class="blogs_section_cta_card p-4 rounded-3 text-white overflow-hidden position-relative">
                    <div class="row align-items-center">
                        <div class="col-7 position-relative z-1">
                            <h6 class="fw-bold text-dark mb-1">Need Expert Advice?</h6>
                            <p class="text-muted small mb-3">Talk to our specialists for personalized guidance.</p>
                            <a href="#" class="btn btn-primary btn-sm px-3 fw-semibold">Book an Appointment</a>
                        </div>
                        <div class="col-5 position-relative">
                            <img src="assets/images/doctor-cta-side.png" alt="Doctor Consultation" class="img-fluid position-absolute bottom-0 end-0" style="max-height: 130px;">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- 4. NEWSLETTER SUBSCRIPTION BANNER -->
    <div class="container my-5">
        <div class="blogs_section_newsletter_banner p-4 rounded-4 shadow-sm">
            <div class="row align-items-center g-3">
                <div class="col-lg-6 col-md-12 d-flex align-items-center">
                    <div class="blogs_section_newsletter_icon text-white bg-primary p-3 rounded-circle me-3 flex-shrink-0 d-flex align-items-center justify-content-center">
                        <i class="bi bi-envelope-open-fill fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Stay Updated with Our Health Insights</h5>
                        <p class="mb-0 text-muted small">Subscribe to our newsletter and get the latest health tips and updates.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="input-group">
                        <input type="email" class="form-control bg-white py-2" placeholder="Enter your email address" required>
                        <button class="btn blogs_section_subscribe_btn text-white fw-bold px-4" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php' ; ?>