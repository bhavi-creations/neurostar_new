<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Accidents & Trauma Care Section           -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Accidents & Trauma Care</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Accidents and Trauma Care department is dedicated to providing immediate, comprehensive, and expert medical attention to individuals affected by traumatic injuries and emergencies. Our 24/7 emergency team of surgeons and physicians is equipped to respond swiftly to severe motor vehicle accidents, falls, and critical sports injuries.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreTraumaContent">
          <p class="service_description mb-3">
            Equipped with state-of-the-art diagnostic facilities including rapid X-rays, CT scans, and ultrasounds, we perform quick evaluations to stabilize patients immediately. Whether urgent surgical intervention or conservative care is needed, our multidisciplinary team acts fast to ensure optimal survival and recovery outcomes.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreTraumaContent" role="button" aria-expanded="true" aria-controls="moreTraumaContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperTrauma">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreTraumaContent" role="button" aria-expanded="false" aria-controls="moreTraumaContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/trauma-care-illustration.png" alt="Accidents and Trauma Care" class="img-fluid service_main_img">
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
                <span>24/7 availability for immediate life-saving critical interventions.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Rapid-response diagnostic tools enable accurate injury assessments within minutes.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Comprehensive emergency team including trauma surgeons and ICU specialists.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Significantly minimizes long-term disability through quick, structured trauma protocols.</span>
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
                <span>Severe trauma cases often require extended ICU stays or follow-up surgeries.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Complex physical injuries may demand structured long-term rehabilitation.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>High-stress environment for family members during initial emergency stabilization.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Recovery timeline varies depending on the severity of multi-system trauma.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// accidents-and-trauma-care service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const traumaCollapse = document.getElementById('moreTraumaContent');
  const readMoreTrauma = document.getElementById('readMoreWrapperTrauma');

  if (traumaCollapse && readMoreTrauma) {
    traumaCollapse.addEventListener('show.bs.collapse', function () {
      readMoreTrauma.style.display = 'none';
    });

    traumaCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreTrauma.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>