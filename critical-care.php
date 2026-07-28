<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Critical Care Section                     -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Critical Care</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Critical Care department provides 24/7 advanced medical monitoring and life support for patients facing life-threatening illnesses and acute medical emergencies. Guided by highly experienced intensivists and specialized ICU nursing staff, we ensure rapid intervention and continuous round-the-clock patient care.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreCriticalCareContent">
          <p class="service_description mb-3">
            Equipped with state-of-the-art ventilators, multi-para hemodynamic monitors, and advanced organ support technology, our Intensive Care Unit (ICU) handles complex conditions including severe trauma, septic shock, acute respiratory distress, stroke, and post-operative critical recovery. We combine clinical precision with compassionate family support during crucial healing moments.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreCriticalCareContent" role="button" aria-expanded="true" aria-controls="moreCriticalCareContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperCriticalCare">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreCriticalCareContent" role="button" aria-expanded="false" aria-controls="moreCriticalCareContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/critical-care-illustration.png" alt="Critical Care and ICU Treatment" class="img-fluid service_main_img">
        </div>
      </div>

    </div>

    <!-- ========================================= -->
    <!-- Advantages & Considerations Section       -->
    <!-- ========================================= -->
    <div class="service_pros_cons_wrapper mt-5 pt-3">
      <div class="text-center mb-4">
        <h2 class="pros_cons_heading fw-bold">Treatment Overview</h2>
        <div class="heading_line mx-auto"></div>
      </div>

      <div class="row g-4 justify-content-center">
        
        <!-- Advantages Card -->
        <div class="col-md-6 col-lg-5">
          <div class="pro_con_card advantages_card h-100 p-4 rounded-4 bg-white shadow-sm">
            <div class="d-flex align-items-center mb-3">
              <div class="icon_box pro_icon_bg me-3">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <h3 class="h4 mb-0 fw-bold text-success">Advantages</h3>
            </div>
            
            <ul class="list-unstyled mb-0 pros_cons_list">
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Continuous 24/7 monitoring by dedicated intensivists and specialized ICU nursing professionals.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Immediate emergency access to state-of-the-art life support and organ stabilization equipment.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Multidisciplinary medical coordination across neurology, cardiology, and surgical specialties.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Strict infection control protocols ensuring a safer sterile environment for vulnerable patients.</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Considerations Card -->
        <div class="col-md-6 col-lg-5">
          <div class="pro_con_card disadvantages_card h-100 p-4 rounded-4 bg-white shadow-sm">
            <div class="d-flex align-items-center mb-3">
              <div class="icon_box con_icon_bg me-3">
                <i class="bi bi-exclamation-triangle-fill"></i>
              </div>
              <h3 class="h4 mb-0 fw-bold text-danger">Considerations</h3>
            </div>

            <ul class="list-unstyled mb-0 pros_cons_list">
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires strict visitor restrictions to protect high-risk patients from external infections.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>High-intensity medical care can be emotionally challenging for patients and family members.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Recovery progress varies significantly based on the severity of the underlying condition.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>May involve extended step-down care and rehabilitation following ICU discharge.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// critical care service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const criticalCareCollapse = document.getElementById('moreCriticalCareContent');
  const readMoreCriticalCare = document.getElementById('readMoreWrapperCriticalCare');

  if (criticalCareCollapse && readMoreCriticalCare) {
    criticalCareCollapse.addEventListener('show.bs.collapse', function () {
      readMoreCriticalCare.style.display = 'none';
    });

    criticalCareCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreCriticalCare.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>