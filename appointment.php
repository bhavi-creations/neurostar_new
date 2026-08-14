<?php include 'header.php'; ?>

<!-- ========================================= -->
<!-- Appointment Section                       -->
<!-- ========================================= -->
<section class="appointment_section py-5">
  <div class="container py-md-3">

    <!-- Section Title -->
    <div class="text-center mb-4 mb-md-5">
      <h2 class="appointment_title fw-bold">Make an Appointment</h2>
      <div class="heading_line mx-auto"></div>
    </div>

    <!-- Main Content Row -->
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Hospital Building Image -->
      <div class="col-lg-6 text-center d-none d-md-block">
        <div class="appointment_img_box">
          <img src="./assets/img/neurostar-hospital-new.png" alt="Neurostar Hospital Reception" class="img-fluid appointment_img">

        </div>
      </div>

      <!-- Right Column: Appointment Form Card -->
      <div class="col-lg-6">
        <div class="appointment_card p-4 p-sm-5 rounded-4 shadow-sm">
          <form action="appointmentform.php" method="post" role="form" class="appointment_form">
            <div class="row g-3">
              <!-- Name Input -->
              <div class="col-md-6">
                <input type="text" name="name" class="form-control custom_input" placeholder="Your Name" required>
              </div>

              <!-- Email Input -->
              <div class="col-md-6">
                <input type="email" name="email" class="form-control custom_input" placeholder="Your Email" required>
              </div>

              <!-- Phone Input -->
              <div class="col-md-6">
                <input type="tel" name="phone" class="form-control custom_input" placeholder="Your Phone" required>
              </div>

              <!-- Date Input -->
              <div class="col-md-6">
                <input type="date" name="date" class="form-control custom_input" required>
              </div>

              <!-- Service Dropdown -->
              <div class="col-12">
                <select name="service" class="form-select custom_input" required>
                  <option value="">Select Service</option>
                  <option value="Neuro Surgery">Neuro Surgery</option>
                  <option value="Neurology">Neurology</option>
                  <option value="Accidents & Trauma Care">Accidents & Trauma Care</option>
                  <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                  <option value="General Medicine">General Medicine</option>
                  <option value="Critical Care">Critical Care</option>
                  <option value="Neuro Psychiatric">Neuro Psychiatric</option>
                  <option value="Dental">Dental</option>
                  <option value="Maxillo facial Surgery">Maxillo facial Surgery</option>
                  <option value="Plastic & Cosmetic surgery">Plastic & Cosmetic surgery</option>
                  <option value="Pediatrics">Pediatrics</option>
                  <option value="Physiotherapy">Physiotherapy</option>
                  <option value="Radiology">Radiology</option>
                  <option value="Neuro rehabilitation">Neuro rehabilitation</option>
                  <option value="General & Laproscopic Surgery">General & Laproscopic Surgery</option>
                </select>
              </div>

              <!-- Message Field -->
              <div class="col-12">
                <textarea class="form-control" name="message" style="border-radius: 23px;" rows="5" placeholder="Message (Optional)"></textarea>
              </div>

              <!-- Submit Button -->
              <div class="col-12 text-center mt-4">
                <button type="submit" name="submit_appointment" class="btn btn_submit_appointment px-4 py-2 fw-semibold">
                  Make an Appointment
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include 'footer.php'; ?>