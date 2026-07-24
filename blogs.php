<!DOCTYPE html>
<html lang="te">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carewell Hospital Blogs Recreated</title>
    <!-- Basic font reset for similarity -->
    <style>
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f9fbff; }
        * { box-sizing: border-box; }
        a { text-decoration: none; color: inherit; transition: 0.3s; }
        
        .blogs_section_main_wrapper { width: 100%; padding-bottom: 50px; }
        .blogs_section_container { width: 1200px; max-width: 90%; margin: 0 auto; }

        /* --- Hero Section --- */
        .blogs_section_hero {
            background-color: #e3f2fd; /* Placeholder color for background image */
            background-image: url('https://via.placeholder.com/1920x400/E3F2FD/90CAF9?text=Carewell+Hospital+Hero+Image'); /* Replace with actual background image */
            background-size: cover; background-position: center;
            color: #0d47a1; padding: 80px 0;
        }
        .blogs_section_hero_content { max-width: 600px; }
        .blogs_section_breadcrumb { font-size: 14px; margin-bottom: 15px; color: #555;}
        .blogs_section_main_title { font-size: 42px; margin: 0 0 10px; font-weight: bold;}
        .blogs_section_hero_subtitle { font-size: 16px; margin: 0 0 40px; color: #555; }
        .blogs_section_stats_grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .blogs_section_stat_item { display: flex; align-items: center; gap: 15px;}
        .blogs_section_stat_icon { width: 30px; height: 30px; opacity: 0.7; } /* placeholder icons */
        .blogs_section_stat_info h3 { font-size: 22px; margin: 0; font-weight: bold; }
        .blogs_section_stat_info p { font-size: 12px; margin: 0; color: #777; }

        /* --- Category Filter --- */
        .blogs_section_filters_wrap { background-color: #fff; padding: 20px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.03); border-bottom: 1px solid #eee; }
        .blogs_section_filters_inner { display: flex; align-items: center; justify-content: center; gap: 20px;}
        .blogs_section_filter_item { display: flex; align-items: center; gap: 10px; font-size: 13px; color: #666; cursor: pointer; padding: 10px 15px; border-radius: 5px; }
        .blogs_section_filter_item.active { background-color: #0d47a1; color: #fff; font-weight: bold;}
        .blogs_section_filter_item i { font-size: 16px; }

        /* --- Main Content Layout --- */
        .blogs_section_content_layout { display: grid; grid-template-columns: 2fr 1fr; gap: 40px; margin-top: 50px; }

        /* Left: Blog Grid */
        .blogs_section_grid_wrapper { display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px; }
        .blogs_section_card { background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; display: flex; flex-direction: column;}
        .blogs_section_card_link:hover .blogs_section_card { box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: translateY(-3px); }
        .blogs_section_card_img img { width: 100%; height: 200px; object-fit: cover; display: block;}
        .blogs_section_card_body { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
        .blogs_section_card_meta { display: flex; justify-content: space-between; align-items: center; font-size: 12px; color: #999; margin-bottom: 15px; }
        .blogs_section_card_cat { font-weight: bold; padding: 3px 8px; border-radius: 4px; }
        /* Category specific colors (placeholder colors) */
        .blogs_section_cat_heart { background-color: #ffebee; color: #d32f2f; }
        .blogs_section_cat_women { background-color: #f3e5f5; color: #7b1fa2; }
        .blogs_section_cat_children { background-color: #e8f5e9; color: #388e3c; }
        .blogs_section_card_title { font-size: 18px; font-weight: 700; color: #333; margin: 0 0 10px; line-height: 1.4; }
        .blogs_section_card_exerpt { font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 15px; flex-grow: 1;}
        .blogs_section_readmore { font-size: 13px; font-weight: bold; color: #1976d2; display: flex; align-items: center; gap: 5px; margin-bottom: 15px;}
        .blogs_section_card_author { display: flex; align-items: center; gap: 10px; border-top: 1px solid #eee; padding-top: 15px; }
        .blogs_section_author_img img { width: 35px; height: 35px; border-radius: 50%; object-fit: cover; }
        .blogs_section_author_info h4 { font-size: 13px; margin: 0; font-weight: 600; color: #333; }
        .blogs_section_author_info p { font-size: 11px; margin: 0; color: #777; }

        /* Right: Sidebar */
        .blogs_section_sidebar_item { margin-bottom: 40px; }
        .blogs_section_sidebar_title { font-size: 18px; color: #0d47a1; margin-bottom: 20px; font-weight: 700; }
        
        /* Search */
        .blogs_section_search_form { display: flex; border: 1px solid #ddd; border-radius: 5px; overflow: hidden; background: #fff; }
        .blogs_section_search_input { flex-grow: 1; border: none; padding: 10px 15px; font-size: 13px; outline: none; }
        .blogs_section_search_btn { background-color: #0d47a1; color: #fff; border: none; padding: 10px 15px; cursor: pointer; }

        /* Popular Articles */
        .blogs_section_popular_item { display: flex; gap: 15px; margin-bottom: 15px; align-items: center;}
        .blogs_section_popular_img img { width: 60px; height: 60px; border-radius: 5px; object-fit: cover;}
        .blogs_section_popular_info h4 { font-size: 13px; margin: 0 0 3px; font-weight: 600; line-height: 1.4;}
        .blogs_section_popular_info p { font-size: 11px; color: #999; margin: 0; }

        /* Categories */
        .blogs_section_cat_list li { border-bottom: 1px solid #eee; padding: 10px 0; }
        .blogs_section_cat_list a { display: flex; justify-content: space-between; font-size: 13px; color: #666; }
        .blogs_section_cat_count { background-color: #e3f2fd; color: #1976d2; font-weight: bold; padding: 2px 8px; border-radius: 10px; font-size: 11px;}
        .blogs_section_view_all { display: block; text-align: center; color: #1976d2; font-size: 13px; font-weight: bold; margin-top: 15px;}

        /* Expert Advice CTA */
        .blogs_section_cta_box { background-color: #e3f2fd; padding: 25px; border-radius: 10px; text-align: center; }
        .blogs_section_cta_box h3 { font-size: 18px; color: #0d47a1; margin: 0 0 10px; }
        .blogs_section_cta_box p { font-size: 13px; color: #555; margin-bottom: 20px; }
        .blogs_section_cta_btn { background-color: #0d47a1; color: #fff; padding: 10px 20px; border-radius: 5px; font-weight: bold; display: inline-block; font-size: 14px; }
        .blogs_section_doctor_placeholder { margin-top: -30px; text-align: right; } /* Adjust as needed for alignment */
        .blogs_section_doctor_placeholder img { width: 100px; }

        /* --- Pagination --- */
        .blogs_section_pagination { text-align: center; margin-top: 50px; }
        .blogs_section_pagination span, .blogs_section_pagination a { display: inline-block; width: 35px; height: 35px; line-height: 35px; border-radius: 50%; border: 1px solid #eee; background-color: #fff; color: #666; font-size: 13px; margin: 0 5px; cursor: pointer; }
        .blogs_section_pagination .active { background-color: #0d47a1; color: #fff; border-color: #0d47a1; font-weight: bold;}
        .blogs_section_pagination .next_btn { width: auto; padding: 0 15px; border-radius: 5px; font-weight: bold;}

        /* --- Newsletter --- */
        .blogs_section_newsletter { background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee; display: flex; align-items: center; justify-content: space-between; gap: 20px; margin-top: 50px;}
        .blogs_section_newsletter_icon { font-size: 24px; color: #1976d2; }
        .blogs_section_newsletter_text h3 { font-size: 18px; color: #0d47a1; margin: 0 0 5px; }
        .blogs_section_newsletter_text p { font-size: 13px; color: #666; margin: 0; }
        .blogs_section_newsletter_form { display: flex; gap: 10px; flex-grow: 1; max-width: 400px;}
        .blogs_section_newsletter_input { flex-grow: 1; border: 1px solid #ddd; border-radius: 5px; padding: 10px; font-size: 13px; outline: none; }
        .blogs_section_newsletter_btn { background-color: #00897b; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; cursor: pointer;}

    </style>
    <!-- Placeholder for icons - use Fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="blogs_section_main_wrapper">

        <!-- --- Hero Section --- -->
        <section class="blogs_section_hero">
            <div class="blogs_section_container">
                <div class="blogs_section_hero_content">
                    <div class="blogs_section_breadcrumb">Home &nbsp; > &nbsp; Blogs</div>
                    <h1 class="blogs_section_main_title">Health Insights & Articles</h1>
                    <p class="blogs_section_hero_subtitle">Expert advice and tips to help you and your family live a healthier life.</p>
                    <div class="blogs_section_stats_grid">
                        <div class="blogs_section_stat_item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3022/3022204.png" class="blogs_section_stat_icon" alt="Articles Icon"> <!-- placeholder -->
                            <div class="blogs_section_stat_info">
                                <h3>100+</h3>
                                <p>Health Articles</p>
                            </div>
                        </div>
                        <div class="blogs_section_stat_item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3305/3305414.png" class="blogs_section_stat_icon" alt="Experts Icon"> <!-- placeholder -->
                            <div class="blogs_section_stat_info">
                                <h3>20+</h3>
                                <p>Medical Experts</p>
                            </div>
                        </div>
                        <div class="blogs_section_stat_item">
                            <img src="https://cdn-icons-png.flaticon.com/512/3233/3233486.png" class="blogs_section_stat_icon" alt="Readers Icon"> <!-- placeholder -->
                            <div class="blogs_section_stat_info">
                                <h3>50,000+</h3>
                                <p>Readers Every Month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- Category Filters --- -->
        <div class="blogs_section_filters_wrap">
            <div class="blogs_section_container">
                <div class="blogs_section_filters_inner">
                    <div class="blogs_section_filter_item active"><i class="fas fa-th-large"></i> All Categories</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-heartbeat"></i> Heart Health</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-female"></i> Women's Health</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-child"></i> Children's Health</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-tooth"></i> Dental Care</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-bone"></i> Bone & Joints</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-brain"></i> Mental Health</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-apple-alt"></i> Nutrition</div>
                    <div class="blogs_section_filter_item"><i class="fas fa-eye"></i> Eye Care</div>
                </div>
            </div>
        </div>

        <!-- --- Main Content Layout --- -->
        <div class="blogs_section_container">
            <div class="blogs_section_content_layout">

                <!-- Left: Blog Grid -->
                <div class="blogs_section_grid_wrapper">
                    
                    <!-- Card 1 (Heart Health) -->
                    <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img">
                                <img src="https://via.placeholder.com/400x200?text=Heart+Health+Image" alt="Blog 1 Image">
                            </div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta">
                                    <span class="blogs_section_card_cat blogs_section_cat_heart">Heart Health</span>
                                    <span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> May 20, 2026</span>
                                </div>
                                <h3 class="blogs_section_card_title">How to Keep Your Heart Healthy at Every Age</h3>
                                <p class="blogs_section_card_exerpt">Simple daily habits that can help you maintain a strong and healthy heart.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=Author1" alt="Dr. Ramesh Babu"></div>
                                    <div class="blogs_section_author_info">
                                        <h4>Dr. Ramesh Babu</h4>
                                        <p>Cardiologist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 (Women's Health) -->
                    <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img">
                                <img src="https://via.placeholder.com/400x200?text=Pregnancy+Image" alt="Blog 2 Image">
                            </div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta">
                                    <span class="blogs_section_card_cat blogs_section_cat_women">Women's Health</span>
                                    <span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> May 18, 2026</span>
                                </div>
                                <h3 class="blogs_section_card_title">Planning a Pregnancy? Why a Preconception Checkup Matters</h3>
                                <p class="blogs_section_card_exerpt">Important health checks and lifestyle tips before you start your pregnancy journey.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=Author2" alt="Dr. Anitha Reddy"></div>
                                    <div class="blogs_section_author_info">
                                        <h4>Dr. Anitha Reddy</h4>
                                        <p>Gynecologist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Placeholders for Card 3, 4, 5, 6 to match 3 rows -->
                    <!-- Row 2 -->
                     <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img"><img src="https://via.placeholder.com/400x200?text=Placeholder+Image" alt="Blog Image"></div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta"><span class="blogs_section_card_cat">Category</span><span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> Date</span></div>
                                <h3 class="blogs_section_card_title">Blog Post Title Placeholder</h3>
                                <p class="blogs_section_card_exerpt">Short excerpt placeholder for layout consistency.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=A" alt="Author"></div>
                                    <div class="blogs_section_author_info"><h4>Author Name</h4><p>Author Title</p></div>
                                </div>
                            </div>
                        </div>
                    </a>
                     <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img"><img src="https://via.placeholder.com/400x200?text=Placeholder+Image" alt="Blog Image"></div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta"><span class="blogs_section_card_cat blogs_section_cat_children">Children's Health</span><span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> Date</span></div>
                                <h3 class="blogs_section_card_title">Boost Your Child's Immunity Naturally</h3>
                                <p class="blogs_section_card_exerpt">Short excerpt placeholder for layout consistency.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=A" alt="Author"></div>
                                    <div class="blogs_section_author_info"><h4>Author Name</h4><p>Author Title</p></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Row 3 -->
                     <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img"><img src="https://via.placeholder.com/400x200?text=Placeholder+Image" alt="Blog Image"></div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta"><span class="blogs_section_card_cat">Category</span><span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> Date</span></div>
                                <h3 class="blogs_section_card_title">Blog Post Title Placeholder</h3>
                                <p class="blogs_section_card_exerpt">Short excerpt placeholder for layout consistency.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=A" alt="Author"></div>
                                    <div class="blogs_section_author_info"><h4>Author Name</h4><p>Author Title</p></div>
                                </div>
                            </div>
                        </div>
                    </a>
                     <a href="#" class="blogs_section_card_link">
                        <div class="blogs_section_card">
                            <div class="blogs_section_card_img"><img src="https://via.placeholder.com/400x200?text=Placeholder+Image" alt="Blog Image"></div>
                            <div class="blogs_section_card_body">
                                <div class="blogs_section_card_meta"><span class="blogs_section_card_cat">Category</span><span class="blogs_section_card_date"><i class="far fa-calendar-alt"></i> Date</span></div>
                                <h3 class="blogs_section_card_title">Blog Post Title Placeholder</h3>
                                <p class="blogs_section_card_exerpt">Short excerpt placeholder for layout consistency.</p>
                                <span class="blogs_section_readmore">Read More <i class="fas fa-arrow-right"></i></span>
                                <div class="blogs_section_card_author">
                                    <div class="blogs_section_author_img"><img src="https://via.placeholder.com/50x50?text=A" alt="Author"></div>
                                    <div class="blogs_section_author_info"><h4>Author Name</h4><p>Author Title</p></div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Right: Sidebar -->
                <aside class="blogs_section_sidebar">
                    
                    <!-- Search -->
                    <div class="blogs_section_sidebar_item">
                        <h3 class="blogs_section_sidebar_title">Search Articles</h3>
                        <form class="blogs_section_search_form">
                            <input type="text" class="blogs_section_search_input" placeholder="Search for articles...">
                            <button type="submit" class="blogs_section_search_btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <!-- Popular Articles -->
                    <div class="blogs_section_sidebar_item">
                        <h3 class="blogs_section_sidebar_title">Popular Articles</h3>
                        <div class="blogs_section_popular_list">
                            <!-- Article 1 -->
                            <div class="blogs_section_popular_item">
                                <div class="blogs_section_popular_img"><img src="https://via.placeholder.com/60x60?text=P1" alt="Popular 1"></div>
                                <div class="blogs_section_popular_info">
                                    <h4>Diabetes: Early Signs You Shouldn't Ignore</h4>
                                    <p><i class="far fa-calendar-alt"></i> May 14, 2026</p>
                                </div>
                            </div>
                            <!-- Article 2 -->
                            <div class="blogs_section_popular_item">
                                <div class="blogs_section_popular_img"><img src="https://via.placeholder.com/60x60?text=P2" alt="Popular 2"></div>
                                <div class="blogs_section_popular_info">
                                    <h4>High Blood Pressure: Causes and Prevention</h4>
                                    <p><i class="far fa-calendar-alt"></i> May 11, 2026</p>
                                </div>
                            </div>
                            <!-- Placeholders for others to match sidebar height -->
                            <div class="blogs_section_popular_item">
                                <div class="blogs_section_popular_img"><img src="https://via.placeholder.com/60x60?text=P3" alt="Popular 3"></div>
                                <div class="blogs_section_popular_info">
                                    <h4>Healthy Diet Plan for Weight Management</h4>
                                    <p><i class="far fa-calendar-alt"></i> May 7, 2026</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="blogs_section_sidebar_item">
                        <h3 class="blogs_section_sidebar_title">Categories</h3>
                        <ul class="blogs_section_cat_list">
                            <li><a href="#"><span>Heart Health</span> <span class="blogs_section_cat_count">18</span></a></li>
                            <li><a href="#"><span>Women's Health</span> <span class="blogs_section_cat_count">16</span></a></li>
                            <li><a href="#"><span>Children's Health</span> <span class="blogs_section_cat_count">14</span></a></li>
                            <li><a href="#"><span>Dental Care</span> <span class="blogs_section_cat_count">12</span></a></li>
                            <li><a href="#"><span>Bone & Joints</span> <span class="blogs_section_cat_count">11</span></a></li>
                            <li><a href="#"><span>Mental Health</span> <span class="blogs_section_cat_count">10</span></a></li>
                            <li><a href="#"><span>Nutrition</span> <span class="blogs_section_cat_count">9</span></a></li>
                            <li><a href="#"><span>Eye Care</span> <span class="blogs_section_cat_count">8</span></a></li>
                        </ul>
                        <a href="#" class="blogs_section_view_all">View All Categories <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Expert Advice CTA -->
                    <div class="blogs_section_sidebar_item">
                        <div class="blogs_section_cta_box">
                            <h3>Need Expert Advice?</h3>
                            <p>Talk to our specialists for personalized guidance.</p>
                            <a href="#" class="blogs_section_cta_btn">Book an Appointment</a>
                        </div>
                        <div class="blogs_section_doctor_placeholder">
                            <img src="https://via.placeholder.com/100x100?text=Doctor" alt="Doctor Placeholder"> <!-- Placeholder -->
                        </div>
                    </div>

                </aside>

            </div>
        </div>

        <!-- --- Pagination --- -->
        <div class="blogs_section_container">
            <div class="blogs_section_pagination">
                <span class="active">1</span>
                <span>2</span>
                <span>3</span>
                <span>...</span>
                <span>10</span>
                <span class="next_btn">Next <i class="fas fa-angle-right"></i></span>
            </div>
        </div>

        <!-- --- Newsletter --- -->
        <div class="blogs_section_container">
            <section class="blogs_section_newsletter">
                <div class="blogs_section_newsletter_icon"><i class="fas fa-envelope-open-text"></i></div>
                <div class="blogs_section_newsletter_text">
                    <h3>Stay Updated with Our Health Insights</h3>
                    <p>Subscribe to our newsletter and get the latest health tips and updates.</p>
                </div>
                <form class="blogs_section_newsletter_form">
                    <input type="email" class="blogs_section_newsletter_input" placeholder="Enter your email address" required>
                    <button type="submit" class="blogs_section_newsletter_btn">Subscribe</button>
                </form>
            </section>
        </div>

    </div>

</body>
</html>