<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Orthopaedic Surgery Section               -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Orthopaedic Surgery</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Orthopaedic Surgery department is dedicated to providing comprehensive care for patients with musculoskeletal disorders and injuries. Our team of highly skilled orthopaedic surgeons specializes in diagnosing, treating, and rehabilitating conditions affecting bones, joints, ligaments, and muscles.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreOrthoContent">
          <p class="service_description mb-3">
            Utilizing advanced techniques like arthroscopy and joint replacement, we handle sports injuries, complex fractures, and degenerative conditions. Equipped with state-of-the-art imaging and precision surgical tools, we focus on restoring full mobility, alleviating joint pain, and enhancing overall patient lifestyle.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreOrthoContent" role="button" aria-expanded="true" aria-controls="moreOrthoContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperOrtho">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreOrthoContent" role="button" aria-expanded="false" aria-controls="moreOrthoContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/orthopaedic-illustration.png" alt="Orthopaedic Surgery Treatment" class="img-fluid service_main_img">
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
                <span>Effectively restores mobility and function in damaged joints and bones.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Minimally invasive options like arthroscopy significantly reduce scarring.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Delivers long-term relief from chronic joint pain and arthritis discomfort.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Helps patients resume active, independent lifestyles and physical activities.</span>
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
                <span>Requires structured post-surgical physical therapy for maximum joint recovery.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Initial post-operative recovery period with temporary movement restrictions.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Standard surgical considerations such as infection prevention and healing time.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Full rehabilitation duration depends on the specific joint or bone procedure.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
//  orthopaedic-surgery service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const orthoCollapse = document.getElementById('moreOrthoContent');
  const readMoreOrtho = document.getElementById('readMoreWrapperOrtho');

  if (orthoCollapse && readMoreOrtho) {
    orthoCollapse.addEventListener('show.bs.collapse', function () {
      readMoreOrtho.style.display = 'none';
    });

    orthoCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreOrtho.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>
