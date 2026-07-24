<!DOCTYPE html>
<html lang="te">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Specialities - Carewell Hospital</title>
    <!-- Dummy Fontawesome link for icons - actual implementation might differ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* CSS reset to match image margins/padding better */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif; /* Dummy font */
        }

        body {
            background-color: #fff;
        }

        .specilities_section_main_wrapper {
            width: 100%;
        }

        /* --- 1. Top Section (Images & Title) --- */
        .specilities_section_hero_part {
            position: relative;
            background-image: url('https://via.placeholder.com/1920x600/E3F2FD/90CAF9?text=Carewell+Hospital+Interior'); /* Placeholder for main hero image */
            background-size: cover;
            background-position: center;
            padding: 80px 10%;
            color: #fff;
        }
        
        /* Dark overlay as in image */
        .specilities_section_hero_part::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0, 0, 100, 0.4);
            z-index: 1;
        }

        .specilities_section_hero_content {
            position: relative;
            z-index: 2;
        }

        .specilities_section_breadcrumbs {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .specilities_section_breadcrumbs a { color: #fff; text-decoration: none; }
        .specilities_section_breadcrumbs span { color: #fff; }

        .specilities_section_hero_title {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .specilities_section_hero_subtitle {
            font-size: 20px;
            color: #fff;
            margin-bottom: 25px;
        }

        .specilities_section_hero_desc {
            max-width: 600px;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 40px;
        }

        .specilities_section_stats_bar {
            display: flex;
            gap: 30px;
        }

        .specilities_section_stat_item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .specilities_section_stat_icon_wrap {
            font-size: 28px;
            opacity: 0.8;
        }

        .specilities_section_stat_details h3 { font-size: 20px; }
        .specilities_section_stat_details p { font-size: 14px; opacity: 0.8; }

        /* --- 2. Middle Section (Icons & Grid) --- */
        .specilities_section_middle_part {
            padding: 60px 10%;
            background-color: #fff;
        }

        /* Filter Icons Bar */
        .specilities_section_filter_bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            margin-bottom: 40px;
        }

        .specilities_section_filter_item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px 5px;
            color: #666;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            font-size: 14px;
        }

        .specilities_section_filter_item i {
            font-size: 18px;
        }

        .specilities_section_filter_item.specilities_section_active {
            color: #0d47a1; /* Primary Blue */
            border-bottom-color: #0d47a1;
            font-weight: bold;
        }

        /* Specialities Grid */
        .specilities_section_specialties_grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .specilities_section_card_link { text-decoration: none; color: inherit; }

        .specilities_section_spec_card {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid #f0f0f0;
        }

        .specilities_section_spec_card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .specilities_section_spec_card_header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .specilities_section_spec_icon_wrap {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        /* Card Icon Background Colors to match image */
        .specilities_section_color_red { background-color: #ffebee; color: #d32f2f; }
        .specilities_section_color_purple { background-color: #f3e5f5; color: #7b1fa2; }
        .specilities_section_color_blue { background-color: #e3f2fd; color: #1976d2; }
        .specilities_section_color_green { background-color: #e8f5e9; color: #388e3c; }
        .specilities_section_color_pink { background-color: #fce4ec; color: #c2185b; }
        .specilities_section_color_orange { background-color: #fff3e0; color: #f57c00; }

        .specilities_section_spec_card h4 {
            font-size: 16px;
            color: #333;
        }

        .specilities_section_spec_card p {
            font-size: 13px;
            color: #777;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .specilities_section_view_details_link {
            color: #1976d2;
            font-size: 13px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* View All Button */
        .specilities_section_btn_center_wrap {
            text-align: center;
        }

        .specilities_section_btn_outline {
            padding: 12px 24px;
            border: 1px solid #ddd;
            background: transparent;
            color: #0d47a1;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .specilities_section_btn_outline:hover {
            background-color: #f0f0f0;
        }

        /* --- 3. Bottom Infrastructure Section --- */
        .specilities_section_infrastructure_part {
            padding: 60px 10%;
            background-color: #f9f9f9;
            margin-bottom: 40px;
        }

        .specilities_section_infra_wrapper {
            display: flex;
            align-items: center;
            gap: 50px;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .specilities_section_infra_image_block {
            position: relative;
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .specilities_section_infra_img {
            width: 100%;
            display: block;
        }

        .specilities_section_video_play_btn {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            color: #0d47a1;
            width: 60px; height: 60px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            cursor: pointer;
        }

        .specilities_section_infra_content_block {
            flex: 1.5;
        }

        .specilities_section_infra_label {
            color: #1976d2;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .specilities_section_infra_content_block h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .specilities_section_infra_desc {
            font-size: 14px;
            color: #777;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        .specilities_section_infra_features_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        .specilities_section_infra_feat_item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: #555;
        }
        .specilities_section_infra_feat_item i { color: #8bc34a; } /* Green color */

        .specilities_section_btn_outline_blue {
            padding: 10px 20px;
            border: 1px solid #1976d2;
            color: #1976d2;
            background: transparent;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        /* NABH Emblem dummy placeholder */
        .specilities_section_emblem_placeholder {
            text-align: center;
            margin-top: 30px;
            opacity: 0.6;
        }
        .specilities_section_emblem_placeholder img {
            width: 80px;
            margin-bottom: 10px;
        }
        .specilities_section_emblem_placeholder p {
            font-size: 12px;
            color: #555;
        }

        /* Final Need Help Bar */
        .specilities_section_need_help_bar {
            padding: 30px 10%;
            background-color: #0d47a1; /* Primary Blue */
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            border-radius: 10px;
            margin: 0 10% 40px 10%;
        }

        .specilities_section_help_text h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }
        .specilities_section_help_text p {
            font-size: 14px;
            opacity: 0.8;
        }

        .specilities_section_help_btns_group {
            display: flex;
            gap: 15px;
        }

        .specilities_section_btn_help {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            border: none;
        }

        .specilities_section_btn_help_light {
            background-color: #fff;
            color: #0d47a1;
        }
        .specilities_section_btn_help_teal {
            background-color: #00897b;
            color: #fff;
        }

    </style>
</head>
<body>

    <div class="specilities_section_main_wrapper">

        <!-- --- 1. Top Section --- -->
        <section class="specilities_section_hero_part">
            <div class="specilities_section_hero_content">
                <div class="specilities_section_breadcrumbs">
                    <a href="#">Home</a> <span>></span> <span>Specilities</span>
                </div>
                <h1 class="specilities_section_hero_title">Our Specialities</h1>
                <p class="specilities_section_hero_subtitle">Comprehensive Care. Every Step of the Way.</p>
                <p class="specilities_section_hero_desc">
                    We offer a wide range of medical specialities and advanced treatments under one roof with a team of expert doctors and state-of-the-art facilities to ensure the best outcomes for our patients.
                </p>
                <div class="specilities_section_stats_bar">
                    <div class="specilities_section_stat_item">
                        <div class="specilities_section_stat_icon_wrap"><i class="fas fa-hospital-alt"></i></div>
                        <div class="specilities_section_stat_details"><h3>25+</h3><p>Departments</p></div>
                    </div>
                    <div class="specilities_section_stat_item">
                        <div class="specilities_section_stat_icon_wrap"><i class="fas fa-user-md"></i></div>
                        <div class="specilities_section_stat_details"><h3>120+</h3><p>Expert Doctors</p></div>
                    </div>
                    <div class="specilities_section_stat_item">
                        <div class="specilities_section_stat_icon_wrap"><i class="fas fa-microscope"></i></div>
                        <div class="specilities_section_stat_details"><h3>Advanced</h3><p>Technology</p></div>
                    </div>
                    <div class="specilities_section_stat_item">
                        <div class="specilities_section_stat_icon_wrap"><i class="far fa-heart"></i></div>
                        <div class="specilities_section_stat_details"><h3>Patient First</h3><p>Always Our Priority</p></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- --- 2. Middle Section --- -->
        <section class="specilities_section_middle_part">
            <!-- Filter Icons -->
            <div class="specilities_section_filter_bar">
                <div class="specilities_section_filter_item specilities_section_active"><i class="fas fa-building"></i>Departments</div>
                <div class="specilities_section_filter_item"><i class="fas fa-heartbeat"></i>Cardiac Sciences</div>
                <div class="specilities_section_filter_item"><i class="fas fa-brain"></i>Neurosciences</div>
                <div class="specilities_section_filter_item"><i class="fas fa-bone"></i>Orthopedics</div>
                <div class="specilities_section_filter_item"><i class="fas fa-female"></i>Women & Child</div>
                <div class="specilities_section_filter_item"><i class="fas fa-capsules"></i>Internal Medicine</div>
                <div class="specilities_section_filter_item"><i class="fas fa-scalpel"></i>Surgical Care</div>
                <div class="specilities_section_filter_item"><i class="fas fa-ellipsis-h"></i>Other Specialities</div>
            </div>

            <!-- Grid of Cards -->
            <div class="specilities_section_specialties_grid">
                
                <!-- Cardiology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_red"><i class="fas fa-heartbeat"></i></div>
                            <h4>Cardiology</h4>
                        </div>
                        <p>Comprehensive heart care including interventional cardiology, cardiac surgeries and rehabilitation.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Neurology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_purple"><i class="fas fa-brain"></i></div>
                            <h4>Neurology</h4>
                        </div>
                        <p>Advanced diagnosis and treatment for brain, spine and nervous system disorders.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Orthopedics -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_blue"><i class="fas fa-bone"></i></div>
                            <h4>Orthopedics</h4>
                        </div>
                        <p>Expert care for bone, joint, spine problems and trauma with advanced surgical techniques.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Pediatrics -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_green"><i class="fas fa-child"></i></div>
                            <h4>Pediatrics</h4>
                        </div>
                        <p>Complete healthcare for infants, children and adolescents with compassion and expertise.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Gynaecology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_pink"><i class="fas fa-female"></i></div>
                            <h4>Gynecology</h4>
                        </div>
                        <p>Total women's healthcare including high-risk pregnancy, minimal access surgeries and fertility care.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Oncology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_purple"><i class="fas fa-ribbon"></i></div>
                            <h4>Oncology</h4>
                        </div>
                        <p>Advanced cancer care with early detection, medical oncology, radiation and surgical oncology.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Gastroenterology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_orange"><i class="fas fa-tooth"></i></div>
                            <h4>Gastroenterology</h4>
                        </div>
                        <p>Treatment for digestive system disorders including liver, pancreas and endoscopy procedures.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Nephrology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_red"><i class="fas fa-kidney"></i></div>
                            <h4>Nephrology</h4>
                        </div>
                        <p>Comprehensive kidney care including dialysis, transplant and treatment of kidney disorders.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Pulmonology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_green"><i class="fas fa-lungs"></i></div>
                            <h4>Pulmonology</h4>
                        </div>
                        <p>Diagnosis and treatment of lung and respiratory diseases with advanced pulmonary care.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Urology -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_blue"><i class="fas fa-restroom"></i></div>
                            <h4>Urology</h4>
                        </div>
                        <p>Expert care for urinary tract, prostate, kidney stones and men's health issues.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- ENT -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_green"><i class="fas fa-ear"></i></div>
                            <h4>ENT</h4>
                        </div>
                        <p>Treatment for ear, nose, throat, head and neck disorders with advanced endoscopic procedures.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

                <!-- General Surgery -->
                <a href="#" class="specilities_section_card_link">
                    <div class="specilities_section_spec_card">
                        <div class="specilities_section_spec_card_header">
                            <div class="specilities_section_spec_icon_wrap specilities_section_color_blue"><i class="fas fa-scalpel"></i></div>
                            <h4>General Surgery</h4>
                        </div>
                        <p>Advanced laparoscopic and open surgical procedures with faster recovery and minimal pain.</p>
                        <span class="specilities_section_view_details_link">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>

            </div>

            <!-- View All Button -->
            <div class="specilities_section_btn_center_wrap">
                <button class="specilities_section_btn_outline">View All Departments</button>
            </div>

        </section>

        <!-- --- 3. Bottom Section --- -->
        <section class="specilities_section_infrastructure_part">
            <div class="specilities_section_infra_wrapper">
                <div class="specilities_section_infra_image_block">
                    <img src="https://via.placeholder.com/600x350/BDBDBD/424242?text=Operating+Theatre" alt="Operating Theatre" class="specilities_section_infra_img"> <!-- Placeholder for image -->
                    <div class="specilities_section_video_play_btn"><i class="fas fa-play"></i></div>
                </div>
                <div class="specilities_section_infra_content_block">
                    <span class="specilities_section_infra_label">ADVANCED CARE</span>
                    <h3>State-of-the-Art Infrastructure</h3>
                    <p class="specilities_section_infra_desc">
                        Our hospital is equipped with cutting-edge technology, modular operation theatres, advanced ICUs and world-class diagnostic facilities for accurate diagnosis and effective treatment.
                    </p>
                    <div class="specilities_section_infra_features_grid">
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> Modular Operation Theatres</div>
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> Advanced Diagnostic Labs</div>
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> Advanced ICUs & HDUs</div>
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> Digital Imaging & Radiology</div>
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> 24x7 Emergency Services</div>
                        <div class="specilities_section_infra_feat_item"><i class="fas fa-check-circle"></i> Robotic & Minimally Invasive Surgery</div>
                    </div>
                    <button class="specilities_section_btn_outline_blue">Learn More</button>
                    
                    <div class="specilities_section_emblem_placeholder">
                        <img src="https://via.placeholder.com/80/E0E0E0/333?text=NABH" alt="NABH Accredited"> <!-- Placeholder emblem -->
                        <p>Committed to Quality, Safety & Patient Satisfaction</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final Help Bar -->
        <div class="specilities_section_need_help_bar">
            <div class="specilities_section_help_text">
                <h3>Need Help Finding the Right Department?</h3>
                <p>Our care team is here to guide you to the right specialist.</p>
            </div>
            <div class="specilities_section_help_btns_group">
                <button class="specilities_section_btn_help specilities_section_btn_help_light"><i class="fas fa-user-md"></i> Find a Doctor</button>
                <button class="specilities_section_btn_help specilities_section_btn_help_teal"><i class="fas fa-calendar-check"></i> Book Appointment</button>
            </div>
        </div>

    </div>

</body>
</html>