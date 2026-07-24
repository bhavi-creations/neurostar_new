<?php include 'header.php'; ?>
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

<?php include 'footer.php' ; ?>