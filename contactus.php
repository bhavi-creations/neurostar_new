<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carewell Hospital - Contact Us</title>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- General Styles --- */
        :root {
            --primary-blue: #0d47a1;
            --light-blue: #e3f2fd;
            --accent-green: #00c0a5; /* Teal color for button */
            --accent-green-dark: #00a08a;
            --text-dark: #333;
            --text-grey: #666;
            --border-color: #ddd;
            --shadow: 0 4px 15px rgba(0,0,0,0.05);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f9fbfd;
            color: var(--text-dark);
            line-height: 1.6;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; }

        .contactus_section_container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* Generic Title Styles */
        .contactus_section_main_title {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }

        .contactus_section_subtitle {
            font-size: 16px;
            color: var(--text-grey);
            margin-bottom: 30px;
        }

        /* Generic Button Style */
        .contactus_section_btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: var(--accent-green);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }
        .contactus_section_btn:hover { background-color: var(--accent-green-dark); }
        .contactus_section_btn i { margin-right: 8px; }

        /* Generic Card Style */
        .contactus_section_card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            border: 1px solid #f0f0f0;
        }

        /* --- 1. Top Section: We're Here to Help & Icons --- */
        .contactus_section_top_wrap { margin-bottom: 50px; }
        
        .contactus_section_top_info_grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }
        
        .contactus_section_top_icon_box {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contactus_section_top_icon {
            font-size: 28px;
            color: var(--secondary-blue, #1976d2);
            margin-bottom: 15px;
        }
        .contactus_section_top_icon_box h4 { font-size: 14px; color: var(--primary-blue); margin-bottom: 5px; }
        .contactus_section_top_icon_box p { font-size: 12px; color: var(--text-grey); }

        /* --- 2. Middle Section: Get In Touch & Form --- */
        .contactus_section_middle_grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        /* Left: Get In Touch Cards */
        .contactus_section_get_in_touch h3 { font-size: 18px; margin-bottom: 20px; color: var(--primary-blue); }
        
        .contactus_section_contact_item {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        
        .contactus_section_contact_icon_wrap {
            width: 50px; height: 50px;
            background-color: var(--secondary-blue, #1976d2);
            border-radius: 25px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 20px;
        }
        
        .contactus_section_contact_item_details h5 { font-size: 14px; font-weight: 600; color: #333; margin-bottom: 3px; }
        .contactus_section_contact_item_details p, 
        .contactus_section_contact_item_details a { font-size: 13px; color: var(--text-grey); }
        .contactus_section_contact_item_details .contactus_section_emergency_sub { color: #d32f2f; font-weight: 600; font-size: 11px;}
        .contactus_section_contact_item_details a:hover { color: var(--primary-blue); }

        /* Right: Send Us a Message Form */
        .contactus_section_message_form h3 { font-size: 18px; margin-bottom: 20px; color: var(--primary-blue); }
        .contactus_section_message_form p.contactus_section_subtitle { margin-bottom: 25px; }

        .contactus_section_form_row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .contactus_section_input_group {
            display: flex;
            flex-direction: column;
        }
        
        .contactus_section_input_group label {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 5px;
            color: #555;
        }
        .contactus_section_input_group label span { color: #d32f2f; }
        
        .contactus_section_input_group input, 
        .contactus_section_input_group select, 
        .contactus_section_input_group textarea {
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-size: 13px;
            background-color: #fff;
            outline: none;
            transition: var(--transition);
        }
        
        .contactus_section_input_group textarea { resize: vertical; height: 120px; }
        
        .contactus_section_input_group input:focus, 
        .contactus_section_input_group select:focus, 
        .contactus_section_input_group textarea:focus { border-color: var(--accent-green); }

        .contactus_section_message_form .contactus_section_input_group textarea_full { grid-column: span 2; }
        
        .contactus_section_submit_box { margin-top: 25px; }
        .contactus_section_submit_box .contactus_section_btn { width: 100%; justify-content: center; }

        /* --- 3. Bottom Map & Appointment Section --- */
        .contactus_section_bottom_grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        /* Left: Map */
        .contactus_section_map_wrap {
            position: relative;
            padding: 0;
            overflow: hidden;
        }
        
        .contactus_section_map_img {
            width: 100%;
            height: 300px;
            background-image: url('https://via.placeholder.com/800x300/e0f2f1/00c0a5?text=Dummy+Map+Image'); /* Replace with map image */
            background-size: cover;
            background-position: center;
        }
        
        .contactus_section_map_overlay_card {
            position: absolute;
            top: 20px; left: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border: 1px solid #f0f0f0;
            max-width: 250px;
        }
        
        .contactus_section_map_overlay_card h4 { font-size: 13px; color: var(--primary-blue); margin-bottom: 5px; }
        .contactus_section_map_overlay_card p { font-size: 11px; color: var(--text-grey); margin-bottom: 10px; }
        .contactus_section_map_overlay_card a { font-size: 11px; font-weight: 600; color: var(--accent-green); }

        /* Right: Appointment Callout */
        .contactus_section_appointment_wrap { padding: 30px 20px; }
        
        .contactus_section_appointment_wrap h3 { font-size: 18px; margin-bottom: 10px; color: var(--primary-blue); text-align: center; }
        .contactus_section_appointment_wrap p { font-size: 13px; color: var(--text-grey); margin-bottom: 20px; text-align: center; }
        
        .contactus_section_appointment_wrap .contactus_section_btn { width: 100%; margin-bottom: 25px; justify-content: center; }

        .contactus_section_immediate_help_box { border-top: 1px solid var(--border-color); padding-top: 25px; text-align: center;}
        
        .contactus_section_immediate_help_box p.contactus_section_sub_info { font-size: 11px; color: var(--text-grey); margin-bottom: 15px;}
        
        .contactus_section_emergency_call_box {
            border: 1px solid var(--border-color);
            border-radius: 5px;
            padding: 10px 15px;
            display: flex; justify-content: space-between; align-items: center;
            font-size: 14px;
        }
        
        .contactus_section_emergency_call_box .contactus_section_call_emergency_sub { color: #d32f2f; font-weight: 600; }
        .contactus_section_emergency_call_box .contactus_section_call_num { font-weight: 700; color: #333; }

        /* --- 4. Final Footer Icons Section --- */
        .contactus_section_footer_icons_wrap {
            padding: 30px 0;
            background-color: #fff;
            border-top: 1px solid #f0f0f0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .contactus_section_footer_icons_grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            text-align: center;
        }
        
        .contactus_section_footer_icon_box {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contactus_section_footer_icon {
            font-size: 24px;
            color: var(--secondary-blue, #1976d2);
            margin-bottom: 10px;
        }
        .contactus_section_footer_icon_box h4 { font-size: 12px; color: var(--primary-blue); margin-bottom: 3px; }
        .contactus_section_footer_icon_box p { font-size: 10px; color: var(--text-grey); }

        /* --- WhatsApp Floating Button --- */
        .contactus_section_whatsapp_float {
            position: fixed; bottom: 30px; right: 30px;
            width: 50px; height: 50px;
            background-color: #25d366;
            color: #fff; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 28px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 1000;
        }

        /* --- Basic Responsive Queries --- */
        @media (max-width: 992px) {
            .contactus_section_middle_grid, .contactus_section_bottom_grid { grid-template-columns: 1fr; }
            .contactus_section_form_row { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .contactus_section_top_info_grid, .contactus_section_footer_icons_grid { grid-template-columns: repeat(2, 1fr); gap: 15px; }
        }
    </style>
</head>
<body>

    <!-- WhatsApp Float -->
    <a href="#" class="contactus_section_whatsapp_float"><i class="fab fa-whatsapp"></i></a>

    <!-- Top Section -->
    <section class="contactus_section_top_wrap">
        <div class="contactus_section_container">
            <h1 class="contactus_section_main_title">We're Here to Help You</h1>
            <p class="contactus_section_subtitle">Have questions or need assistance? Our team is ready to help you with the best care and support.</p>
            
            <div class="contactus_section_top_info_grid">
                <div class="contactus_section_top_icon_box">
                    <i class="far fa-clock contactus_section_top_icon"></i>
                    <h4>24x7 Support</h4>
                    <p>Always here for you</p>
                </div>
                <div class="contactus_section_top_icon_box">
                    <i class="far fa-hourglass-start contactus_section_top_icon"></i>
                    <h4>Quick Response</h4>
                    <p>We value your time</p>
                </div>
                <div class="contactus_section_top_icon_box">
                    <i class="fas fa-user-md contactus_section_top_icon"></i>
                    <h4>Expert Assistance</h4>
                    <p>From our care team</p>
                </div>
                <div class="contactus_section_top_icon_box">
                    <i class="fas fa-shield-alt contactus_section_top_icon"></i>
                    <h4>Safe & Secure</h4>
                    <p>Your privacy matters</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Middle Section: Get In Touch & Form -->
    <section class="contactus_section_middle_wrap">
        <div class="contactus_section_container contactus_section_middle_grid">
            
            <!-- Left: Get In Touch Cards -->
            <div class="contactus_section_get_in_touch">
                <div class="contactus_section_card">
                    <h3>Get In Touch</h3>
                    
                    <div class="contactus_section_contact_item">
                        <div class="contactus_section_contact_icon_wrap"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contactus_section_contact_item_details">
                            <h5>Hospital Address</h5>
                            <p>123, Main Road, Kakinada, Andhra Pradesh - 533001</p>
                            <a href="#">View on Map <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="contactus_section_contact_item">
                        <div class="contactus_section_contact_icon_wrap"><i class="fas fa-phone-alt"></i></div>
                        <div class="contactus_section_contact_item_details">
                            <h5>Call Us</h5>
                            <p>+91 98765 43210</p>
                            <p class="contactus_section_emergency_sub">(24x7 Emergency)</p>
                        </div>
                    </div>
                    
                    <div class="contactus_section_contact_item">
                        <div class="contactus_section_contact_icon_wrap"><i class="far fa-envelope"></i></div>
                        <div class="contactus_section_contact_item_details">
                            <h5>Email Us</h5>
                            <p>info@carewellhospital.com</p>
                            <p>appointments@carewellhospital.com</p>
                        </div>
                    </div>
                    
                    <div class="contactus_section_contact_item">
                        <div class="contactus_section_contact_icon_wrap"><i class="fab fa-whatsapp"></i></div>
                        <div class="contactus_section_contact_item_details">
                            <h5>WhatsApp Us</h5>
                            <p>+91 98765 43210</p>
                            <p>Chat with us on WhatsApp</p>
                        </div>
                    </div>
                    
                    <div class="contactus_section_contact_item">
                        <div class="contactus_section_contact_icon_wrap"><i class="far fa-clock"></i></div>
                        <div class="contactus_section_contact_item_details">
                            <h5>Working Hours</h5>
                            <p>Monday - Sunday</p>
                            <p>24 Hours Open</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: Send Us a Message Form -->
            <div class="contactus_section_message_form">
                <div class="contactus_section_card">
                    <h3>Send Us a Message</h3>
                    <p class="contactus_section_subtitle">Have any questions or need details? Feel free to reach out to us.</p>
                    
                    <form action="#" method="POST">
                        <div class="contactus_section_form_row">
                            <div class="contactus_section_input_group">
                                <label for="your_name">Your Name <span>*</span></label>
                                <input type="text" id="your_name" name="your_name" placeholder="Enter your full name" required>
                            </div>
                            <div class="contactus_section_input_group">
                                <label for="phone_number">Phone Number <span>*</span></label>
                                <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        
                        <div class="contactus_section_form_row">
                            <div class="contactus_section_input_group">
                                <label for="email_address">Email Address <span>*</span></label>
                                <input type="email" id="email_address" name="email_address" placeholder="Enter your email address" required>
                            </div>
                            <div class="contactus_section_input_group">
                                <label for="subject">Subject <span>*</span></label>
                                <select id="subject" name="subject" required>
                                    <option value="" disabled selected>Select a subject</option>
                                    <option value="appointment">Appointment Inquiry</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="contactus_section_input_group contactus_section_input_group textarea_full">
                            <label for="message">Message <span>*</span></label>
                            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
                        </div>
                        
                        <div class="contactus_section_submit_box">
                            <button type="submit" class="contactus_section_btn">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Map & Appointment Section -->
    <section class="contactus_section_bottom_wrap">
        <div class="contactus_section_container contactus_section_bottom_grid">
            
            <!-- Left: Map -->
            <div class="contactus_section_map_wrap contactus_section_card">
                <div class="contactus_section_map_img"></div>
                <div class="contactus_section_map_overlay_card">
                    <h4>Carewell Multispeciality Hospital</h4>
                    <p>123, Main Road, Kakinada, Andhra Pradesh - 533001</p>
                    <a href="#">Directions <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Right: Appointment Callout -->
            <div class="contactus_section_appointment_wrap contactus_section_card">
                <h3>Book an Appointment</h3>
                <p>Schedule your appointment with our specialists today.</p>
                <button class="contactus_section_btn"><i class="far fa-calendar-alt"></i> Book Appointment</button>
                
                <div class="contactus_section_immediate_help_box">
                    <h3>Need Immediate Help?</h3>
                    <p class="contactus_section_sub_info">Our emergency team is available 24x7</p>
                    <div class="contactus_section_emergency_call_box">
                        <span class="contactus_section_call_emergency_sub"><i class="fas fa-ambulance"></i> Call Emergency</span>
                        <span class="contactus_section_call_num">+91 98765 43210</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Footer Icons Section -->
    <section class="contactus_section_footer_icons_wrap">
        <div class="contactus_section_container contactus_section_footer_icons_grid">
            <div class="contactus_section_footer_icon_box">
                <i class="fas fa-ambulance contactus_section_footer_icon"></i>
                <h4>24x7 Emergency Care</h4>
                <p>Round-the-clock emergency services for critical care.</p>
            </div>
            <div class="contactus_section_footer_icon_box">
                <i class="fas fa-user-md contactus_section_footer_icon"></i>
                <h4>Expert Doctors</h4>
                <p>Highly experienced and qualified specialists.</p>
            </div>
            <div class="contactus_section_footer_icon_box">
                <i class="fas fa-microscope contactus_section_footer_icon"></i>
                <h4>Advanced Technology</h4>
                <p>State-of-the-art infrastructure and medical equipment.</p>
            </div>
            <div class="contactus_section_footer_icon_box">
                <i class="fas fa-hospital-user contactus_section_footer_icon"></i>
                <h4>Patient First Approach</h4>
                <p>Personalized care with compassion and empathy.</p>
            </div>
            <div class="contactus_section_footer_icon_box">
                <i class="fas fa-check-circle contactus_section_footer_icon"></i>
                <h4>Safe & Hygienic</h4>
                <p>Strict hygiene protocols for a safe environment.</p>
            </div>
        </div>
    </section>

</body>
</html>