<?php include 'header.php' ; ?>

    <div class="doctors_section_container">
        
        <!-- Breadcrumb -->
        <div class="doctors_section_breadcrumb">Home <span>></span> Doctors</div>

        <!-- Hero Section -->
        <div class="doctors_section_hero">
            <div class="doctors_section_hero_content">
                <h1>Our Expert Doctors</h1>
                <h2>Experienced. Dedicated. Compassionate.</h2>
                <p>Our team of highly qualified and experienced doctors is committed to providing world-class healthcare with compassion and excellence.</p>
            </div>
            <div class="doctors_section_hero_image">
                <img src="https://via.placeholder.com/600x400.png?text=Doctor+Team" alt="Doctor Team"> <!-- Reference image placeholer -->
            </div>
        </div>

        <!-- Hero Stats -->
        <div class="doctors_section_hero_stats">
            <div class="doctors_section_hero_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1043/1043472.png" class="doctors_section_hero_icon" alt="Expert Doctors icon">
                <div>
                    <div class="doctors_section_hero_number">120+</div>
                    <div class="doctors_section_hero_label">Expert Doctors</div>
                </div>
            </div>
            <div class="doctors_section_hero_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" class="doctors_section_hero_icon" alt="Specialities icon">
                <div>
                    <div class="doctors_section_hero_number">25+</div>
                    <div class="doctors_section_hero_label">Specialities</div>
                </div>
            </div>
            <div class="doctors_section_hero_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/3112/3112946.png" class="doctors_section_hero_icon" alt="Years of Excellence icon">
                <div>
                    <div class="doctors_section_hero_number">20+</div>
                    <div class="doctors_section_hero_label">Years of Excellence</div>
                </div>
            </div>
            <div class="doctors_section_hero_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1040/1040901.png" class="doctors_section_hero_icon" alt="Happy Patients icon">
                <div>
                    <div class="doctors_section_hero_number">75,000+</div>
                    <div class="doctors_section_hero_label">Happy Patients</div>
                </div>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="doctors_section_filter_bar">
            <input type="text" class="doctors_section_filter_input" placeholder="Search doctors by name, speciality...">
            <select class="doctors_section_filter_select">
                <option value="" disabled selected>All Specialities</option>
            </select>
            <select class="doctors_section_filter_select">
                <option value="" disabled selected>All Qualifications</option>
            </select>
            <select class="doctors_section_filter_select">
                <option value="" disabled selected>All Experience</option>
            </select>
            <button class="doctors_section_filter_btn">Search</button>
            <button class="doctors_section_clear_btn">&#10006; Clear Filters</button>
        </div>

        <!-- Doctor Grid -->
        <div class="doctors_section_grid">
            
            <!-- Card 1 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+1" alt="Dr. Ramesh Babu" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Ramesh Babu</h3>
                    <p class="doctors_section_doctor_spec">Cardiologist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD, DM (Cardiology)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 15+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+2" alt="Dr. Anitha Reddy" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Anitha Reddy</h3>
                    <p class="doctors_section_doctor_spec">Neurologist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD, DM (Neurology)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 12+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>

             <!-- Card 3 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+3" alt="Dr. Sandeep Kumar" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Sandeep Kumar</h3>
                    <p class="doctors_section_doctor_spec">Orthopedic Surgeon</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MS (Ortho), MCh (Ortho)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 14+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+4" alt="Dr. Priya Sharma" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Priya Sharma</h3>
                    <p class="doctors_section_doctor_spec">Gynecologist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD, DGO
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 10+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+5" alt="Dr. Mohan Rao" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Mohan Rao</h3>
                    <p class="doctors_section_doctor_spec">Nephrologist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD, DM (Nephrology)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 13+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>

             <!-- Card 6 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+6" alt="Dr. Kavya Rani" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Kavya Rani</h3>
                    <p class="doctors_section_doctor_spec">Pediatrician</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD (Pediatrics)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 9+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 7 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+7" alt="Dr. Venkatesh P." class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Venkatesh P.</h3>
                    <p class="doctors_section_doctor_spec">Gastroenterologist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MD, DM (Gastro)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 11+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 8 -->
            <div class="doctors_section_card">
                <div class="doctors_section_card_top">
                    <img src="https://via.placeholder.com/100x100.png?text=Dr+8" alt="Dr. Arjun Varma" class="doctors_section_doctor_image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png" alt="Like" class="doctors_section_card_heart">
                </div>
                <div class="doctors_section_card_bottom">
                    <h3 class="doctors_section_doctor_name">Dr. Arjun Varma</h3>
                    <p class="doctors_section_doctor_spec">ENT Specialist</p>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/81/81182.png" alt="Qualification" class="doctors_section_meta_icon"> MS (ENT)
                    </div>
                    <div class="doctors_section_card_meta_row">
                        <img src="https://cdn-icons-png.flaticon.com/512/91/91212.png" alt="Experience" class="doctors_section_meta_icon"> 8+ Years Exp.
                    </div>
                    <div class="doctors_section_card_actions">
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_profile">View Profile</a>
                        <a href="#" class="doctors_section_card_btn doctors_section_card_btn_book"><img src="https://cdn-icons-png.flaticon.com/512/2619/2619864.png" alt="Book Appointment" style="width: 14px; height: 14px;"> Book</a>
                    </div>
                </div>
            </div>

        </div>

        <a href="#" class="doctors_section_all_btn">View All Doctors</a>

        <!-- Bottom Stats Section -->
        <div class="doctors_section_bottom_stats">
            <div class="doctors_section_bottom_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1043/1043472.png" class="doctors_section_bottom_icon" alt="Expert Doctors icon">
                <div>
                    <div class="doctors_section_bottom_number">120+</div>
                    <div class="doctors_section_bottom_label">Expert Doctors</div>
                </div>
            </div>
            <div class="doctors_section_bottom_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" class="doctors_section_bottom_icon" alt="Specialities icon">
                <div>
                    <div class="doctors_section_bottom_number">25+</div>
                    <div class="doctors_section_bottom_label">Specialities</div>
                </div>
            </div>
            <div class="doctors_section_bottom_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1040/1040901.png" class="doctors_section_bottom_icon" alt="Happy Patients icon">
                <div>
                    <div class="doctors_section_bottom_number">75,000+</div>
                    <div class="doctors_section_bottom_label">Happy Patients</div>
                </div>
            </div>
            <div class="doctors_section_bottom_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1162/1162234.png" class="doctors_section_bottom_icon" alt="OP Consultations icon">
                <div>
                    <div class="doctors_section_bottom_number">2,50,000+</div>
                    <div class="doctors_section_bottom_label">OP Consultations</div>
                </div>
            </div>
            <div class="doctors_section_bottom_stat_item">
                <img src="https://cdn-icons-png.flaticon.com/512/1042/1042453.png" class="doctors_section_bottom_icon" alt="Successful Surgeries icon">
                <div>
                    <div class="doctors_section_bottom_number">15,000+</div>
                    <div class="doctors_section_bottom_label">Successful Surgeries</div>
                </div>
            </div>
        </div>

        <!-- Why Our Doctors Are Trusted -->
        <h2 class="doctors_section_why_title">Why Our Doctors Are Trusted</h2>
        <div class="doctors_section_why_underline"></div>

        <div class="doctors_section_why_grid">
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#127891;</div>
                <h3>Highly Qualified</h3>
                <p>Trained in top institutes across India and abroad</p>
            </div>
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#128101;</div>
                <h3>Experienced Team</h3>
                <p>Years of hands-on experience in specialized care</p>
            </div>
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#128153;</div>
                <h3>Patient First</h3>
                <p>Compassionate care with personalized treatment</p>
            </div>
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#9881;</div>
                <h3>Advanced Treatment</h3>
                <p>Latest technology and evidence-based protocols</p>
            </div>
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#128100;</div>
                <h3>Ethical Practices</h3>
                <p>Transparent, honest & ethical medical practices</p>
            </div>
            <div class="doctors_section_why_item">
                <div class="doctors_section_why_icon">&#8987;</div>
                <h3>Continuous Support</h3>
                <p>Follow-up care and continuous health monitoring</p>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="doctors_section_cta">
            <div class="doctors_section_cta_left">
                <h2>Book an Appointment</h2>
                <h3>with Our Expert Today!</h3>
                <p>We are here to help you with the best medical care.</p>
            </div>
            <div class="doctors_section_cta_right">
                <a href="#" class="doctors_section_cta_btn_full">Book Appointment</a>
                <a href="#" class="doctors_section_cta_btn_outline">Find a Doctor</a>
                <div class="doctors_section_cta_emergency">
                    <div class="doctors_section_cta_emergency_label">24x7 Emergency</div>
                    <div class="doctors_section_cta_emergency_number">+91 98765 43210</div>
                </div>
            </div>
        </div>

    </div>

<?php include 'footer.php' ; ?>