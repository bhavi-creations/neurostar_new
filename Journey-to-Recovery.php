<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Section Recovery</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; /* Dummy Font */
            color: #333;
            background-color: #f4f7f9;
        }

        .journey_section_wrapper {
            width: 100%;
            max-width: 1200px; /* Full container width as in image */
            margin: 0 auto;
            padding: 50px 0;
        }

        /* Hero / Stat Bar Section */
        .journey_section_stat_bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 50px;
        }

        .journey_section_stat_item {
            text-align: center;
        }

        .journey_section_stat_icon {
            font-size: 32px;
            color: #0d47a1; /* Carewell Blue */
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .journey_section_stat_number {
            font-size: 28px;
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 5px;
        }

        .journey_section_stat_label {
            font-size: 14px;
            color: #666;
        }

        /* Section Headings */
        .journey_section_heading_part {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .journey_section_main_heading {
            font-size: 32px;
            font-weight: 700;
            color: #0d47a1;
        }

        .journey_section_heading_part span {
            color: #00897b; /* Teal color */
        }

        .journey_section_sub_info {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        /* Buttons matching image */
        .journey_section_btn_primary {
            background-color: #00c0a5; /* Bright Teal */
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }
        .journey_section_btn_primary:hover { background-color: #00a08a; }

        .journey_section_btn_outline {
            background-color: transparent;
            color: #0d47a1;
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }
        .journey_section_btn_outline:hover { background-color: #f0f0f0; border-color: #0d47a1; }

        /* Patient Stories Grid */
        .journey_section_stories_grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .journey_section_story_card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
            border: 1px solid #f0f0f0;
        }

        .journey_section_story_card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .journey_section_video_thumbnail {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 180px;
            cursor: pointer;
        }
        
        .journey_section_play_icon {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            color: #fff;
            opacity: 0.9;
        }

        .journey_section_video_duration {
            position: absolute;
            bottom: 10px; right: 10px;
            background-color: rgba(0,0,0,0.7);
            color: #fff;
            font-size: 10px;
            padding: 3px 8px;
            border-radius: 3px;
        }

        .journey_section_story_content {
            padding: 20px;
        }

        .journey_section_patient_name {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .journey_section_surgery_label {
            font-size: 12px;
            color: #999;
            margin-bottom: 15px;
        }

        .journey_section_patient_quote {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
            font-style: italic;
        }

        /* Dummy background images for story cards */
        .story_dummy_bg1 { background-image: url('https://via.placeholder.com/300x180/E0E0E0/333?text=Dummy+Story+1'); }
        .story_dummy_bg2 { background-image: url('https://via.placeholder.com/300x180/E0E0E0/333?text=Dummy+Story+2'); }
        .story_dummy_bg3 { background-image: url('https://via.placeholder.com/300x180/E0E0E0/333?text=Dummy+Story+3'); }
        .story_dummy_bg4 { background-image: url('https://via.placeholder.com/300x180/E0E0E0/333?text=Dummy+Story+4'); }

        /* Google Reviews Section */
        .journey_section_reviews_block {
            padding: 40px 0;
            margin-bottom: 50px;
        }

        .journey_section_reviews_heading_part {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .journey_section_review_rating_big {
            font-size: 48px;
            font-weight: 700;
            color: #333;
            margin-right: 15px;
        }
        
        .journey_section_star_rating {
            font-size: 20px;
            color: #fbc02d; /* Yellow for stars */
            margin-bottom: 10px;
        }

        .journey_section_reviews_grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 25px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
        }

        /* Left-side score panel */
        .journey_section_reviews_score_wrap {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .journey_section_google_logo_dummy {
            width: 100px;
            opacity: 0.7;
            margin-bottom: 20px;
        }
        
        /* Review cards */
        .journey_section_google_card {
            padding: 10px 0;
        }

        .journey_section_google_card_header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .journey_section_reviewer_avatar {
            width: 40px; height: 40px;
            background-color: #eee;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px; color: #777;
        }

        .journey_section_reviewer_name {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        
        .journey_section_review_meta {
            font-size: 11px;
            color: #999;
        }

        .journey_section_review_card_rating {
            font-size: 12px;
            color: #fbc02d;
            margin-bottom: 10px;
        }
        
        .journey_section_review_card_text {
            font-size: 12px;
            color: #666;
            line-height: 1.6;
        }

        .journey_section_all_reviews_link {
            text-align: center;
            font-size: 13px;
            font-weight: 600;
            color: #0d47a1;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Doctors Images Grid */
        .journey_section_doctors_part {
            margin-bottom: 50px;
        }

        .journey_section_doctors_grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .journey_section_doctor_img_item {
            border-radius: 8px;
            height: 180px;
            background-size: cover;
            background-position: center;
            background-color: #eee;
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
            border: 1px solid #f0f0f0;
        }
        
        /* Dummy images for doctors grid */
        .doc_dummy_bg1 { background-image: url('https://via.placeholder.com/200x180/E0E0E0/333?text=Dummy+Doc+1'); }
        .doc_dummy_bg2 { background-image: url('https://via.placeholder.com/200x180/E0E0E0/333?text=Dummy+Doc+2'); }
        .doc_dummy_bg3 { background-image: url('https://via.placeholder.com/200x180/E0E0E0/333?text=Dummy+Doc+3'); }
        .doc_dummy_bg4 { background-image: url('https://via.placeholder.com/200x180/E0E0E0/333?text=Dummy+Doc+4'); }
        .doc_dummy_bg5 { background-image: url('https://via.placeholder.com/200x180/E0E0E0/333?text=Dummy+Doc+5'); }

        /* Trust Callout Section */
        .journey_section_trust_callout {
            background-color: #0d47a1;
            border-radius: 10px;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .journey_section_trust_content {
            display: flex;
            gap: 20px;
            align-items: center;
            color: #fff;
        }

        .journey_section_trust_icon {
            font-size: 32px;
            color: #fff;
            opacity: 0.9;
        }
        
        .journey_section_trust_callout h4 {
            font-size: 20px;
            margin: 0 0 5px;
            color: #fff;
        }
        .journey_section_trust_callout p {
            font-size: 14px;
            margin: 0;
            color: rgba(255,255,255,0.8);
        }

    </style>
    <!-- Dummy icons link - Placeholder for FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="journey_section_wrapper">

    <!-- Top Stat Bar (Dummies Image 2) -->
    <section class="journey_section_stat_bar">
        <div class="journey_section_stat_item">
            <i class="fas fa-users journey_section_stat_icon"></i>
            <div class="journey_section_stat_number">75,000+</div>
            <div class="journey_section_stat_label">Happy Patients</div>
        </div>
        <div class="journey_section_stat_item">
            <i class="fas fa-notes-medical journey_section_stat_icon"></i>
            <div class="journey_section_stat_number">2,50,000+</div>
            <div class="journey_section_stat_label">OP Consultations</div>
        </div>
        <div class="journey_section_stat_item">
            <i class="fas fa-check-circle journey_section_stat_icon"></i>
            <div class="journey_section_stat_number">15,000+</div>
            <div class="journey_section_stat_label">Successful Surgeries</div>
        </div>
        <div class="journey_section_stat_item">
            <i class="fas fa-thumbs-up journey_section_stat_icon"></i>
            <div class="journey_section_stat_number">98%</div>
            <div class="journey_section_stat_label">Patient Satisfaction</div>
        </div>
    </section>

    <!-- Patient Stories Section (Dummies Image 3) -->
    <section class="journey_section_stories">
        <div class="journey_section_heading_part">
            <h2 class="journey_section_main_heading">Patient Stories – <span>In Their Own Words</span></h2>
            <button class="journey_section_btn_outline"><i class="fas fa-video"></i> View All Videos</button>
        </div>
        <p class="journey_section_sub_info">Moments of gratitude and trust from patients we have served.</p>

        <div class="journey_section_stories_grid">
            <!-- Story 1 -->
            <div class="journey_section_story_card">
                <div class="journey_section_video_thumbnail story_dummy_bg1">
                    <i class="fas fa-play-circle journey_section_play_icon"></i>
                    <span class="journey_section_video_duration">02:45</span>
                </div>
                <div class="journey_section_story_content">
                    <div class="journey_section_patient_name">Ramesh Babu</div>
                    <div class="journey_section_surgery_label">Knee Replacement Surgery</div>
                    <p class="journey_section_patient_quote">"I am able to walk pain-free now. The care and support I received was excellent."</p>
                </div>
            </div>
            <!-- Story 2 -->
            <div class="journey_section_story_card">
                <div class="journey_section_video_thumbnail story_dummy_bg2">
                    <i class="fas fa-play-circle journey_section_play_icon"></i>
                    <span class="journey_section_video_duration">03:12</span>
                </div>
                <div class="journey_section_story_content">
                    <div class="journey_section_patient_name">Lakshmi Devi</div>
                    <div class="journey_section_surgery_label">Gallbladder Surgery</div>
                    <p class="journey_section_patient_quote">"From consultation to recovery, every step was smooth and comfortable."</p>
                </div>
            </div>
            <!-- Story 3 -->
            <div class="journey_section_story_card">
                <div class="journey_section_video_thumbnail story_dummy_bg3">
                    <i class="fas fa-play-circle journey_section_play_icon"></i>
                    <span class="journey_section_video_duration">02:30</span>
                </div>
                <div class="journey_section_story_content">
                    <div class="journey_section_patient_name">Venkatesh</div>
                    <div class="journey_section_surgery_label">Hernia Surgery</div>
                    <p class="journey_section_patient_quote">"Thanks to the expert team, I recovered quickly and got back to my routine."</p>
                </div>
            </div>
            <!-- Story 4 -->
            <div class="journey_section_story_card">
                <div class="journey_section_video_thumbnail story_dummy_bg4">
                    <i class="fas fa-play-circle journey_section_play_icon"></i>
                    <span class="journey_section_video_duration">02:18</span>
                </div>
                <div class="journey_section_story_content">
                    <div class="journey_section_patient_name">Anitha Kumari</div>
                    <div class="journey_section_surgery_label">Gynecology Treatment</div>
                    <p class="journey_section_patient_quote">"Very friendly staff and doctors. I felt safe and well taken care of throughout."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Reviews (Dummies Image 4) -->
    <section class="journey_section_reviews_block">
        <div class="journey_section_reviews_grid">
            <div class="journey_section_reviews_score_wrap">
                <div class="journey_section_reviewer_name">Google Reviews</div>
                <div style="display:flex; align-items:flex-end;">
                    <span class="journey_section_review_rating_big">4.9</span>
                    <div>
                        <div class="journey_section_star_rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="journey_section_review_meta">Based on 1,245 reviews</div>
                    </div>
                </div>
                <div class="journey_section_google_logo_dummy">G o o g l e</div> <!-- Dummy Google Logo Text -->
                <button class="journey_section_btn_primary"><i class="fas fa-edit"></i> Write a Review</button>
            </div>
            <!-- Review 1 -->
            <div class="journey_section_google_card">
                <div class="journey_section_google_card_header">
                    <div class="journey_section_reviewer_avatar">S R</div>
                    <div>
                        <div class="journey_section_reviewer_name">Sowmya Reddy</div>
                        <div class="journey_section_review_meta">2 days ago</div>
                    </div>
                </div>
                <div class="journey_section_review_card_rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="journey_section_review_card_text">Excellent hospital with well experienced doctors and caring staff. Highly recommended!</p>
            </div>
            <!-- Review 2 -->
            <div class="journey_section_google_card">
                <div class="journey_section_google_card_header">
                    <div class="journey_section_reviewer_avatar">P K</div>
                    <div>
                        <div class="journey_section_reviewer_name">Praveen Kumar</div>
                        <div class="journey_section_review_meta">1 week ago</div>
                    </div>
                </div>
                <div class="journey_section_review_card_rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="journey_section_review_card_text">Had a great experience with the treatment and facilities. The staff took good care of me.</p>
            </div>
            <!-- Review 3 -->
            <div class="journey_section_google_card">
                <div class="journey_section_google_card_header">
                    <div class="journey_section_reviewer_avatar">G P</div>
                    <div>
                        <div class="journey_section_reviewer_name">Gayathri P.</div>
                        <div class="journey_section_review_meta">2 weeks ago</div>
                    </div>
                </div>
                <div class="journey_section_review_card_rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="journey_section_review_card_text">Very clean and well maintained hospital. Doctors explain everything clearly.</p>
            </div>
        </div>
        <div class="journey_section_all_reviews_link">View All Reviews on Google <i class="fas fa-long-arrow-alt-right"></i></div>
    </section>

    <!-- Doctors Section (Dummies Image 5) -->
    <section class="journey_section_doctors_part">
        <div class="journey_section_heading_part">
            <h2 class="journey_section_main_heading">Doctors Who <span>Care</span></h2>
            <button class="journey_section_btn_outline"><i class="fas fa-images"></i> View All Photos</button>
        </div>
        <p class="journey_section_sub_info">Moments of trust, gratitude and care shared by our patients.</p>

        <div class="journey_section_doctors_grid">
            <div class="journey_section_doctor_img_item doc_dummy_bg1"></div>
            <div class="journey_section_doctor_img_item doc_dummy_bg2"></div>
            <div class="journey_section_doctor_img_item doc_dummy_bg3"></div>
            <div class="journey_section_doctor_img_item doc_dummy_bg4"></div>
            <div class="journey_section_doctor_img_item doc_dummy_bg5"></div>
        </div>
    </section>

    <!-- Bottom Trust Callout (Dummies Image 6) -->
    <section class="journey_section_trust_callout">
        <div class="journey_section_trust_content">
            <i class="far fa-heart journey_section_trust_icon"></i>
            <div>
                <h4>Your Trust Inspires Us Every Day</h4>
                <p>We are committed to delivering the best possible care and creating more happy tomorrows.</p>
            </div>
        </div>
        <button class="journey_section_btn_primary"><i class="far fa-calendar-alt"></i> Book an Appointment</button>
    </section>

</div>

</body>
</html>