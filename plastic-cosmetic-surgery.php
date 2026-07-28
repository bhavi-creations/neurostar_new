<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Plastic & Cosmetic Surgery Section        -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Plastic & Cosmetic Surgery</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Plastic & Cosmetic Surgery department provides advanced aesthetic and reconstructive procedures designed to refine facial features, contour the body, and restore tissue form and function. Our experienced surgeons combine artistic precision with medical expertise to deliver natural-looking and satisfying results.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="morePlasticContent">
          <p class="service_description mb-3">
            Equipped with surgical facilities and state-of-the-art technology, we offer body contouring (liposuction, abdominoplasty), facial rejuvenation (rhinoplasty, facelifts), reconstructive surgeries post-trauma or cancer excision, scar revision, and burn management. We prioritize patient safety, tailored treatment plans, and complete confidentiality throughout your journey.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePlasticContent" role="button" aria-expanded="true" aria-controls="morePlasticContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperPlastic">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePlasticContent" role="button" aria-expanded="false" aria-controls="morePlasticContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/plastic-surgery-illustration.png" alt="Plastic and Cosmetic Surgery" class="img-fluid service_main_img">
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
                <span>Enhances natural physical appearance and restores aesthetic proportion.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Reconstructs damaged tissues and restores function after trauma, burns, or surgery.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Significantly boosts self-confidence and improves overall emotional well-being.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Utilizes refined, minimally invasive techniques for subtle scarring and faster healing.</span>
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
                <span>Requires dedicated post-operative recovery time and rest for optimal outcomes.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Temporary swelling, bruising, or mild discomfort can occur immediately after procedure.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Demands realistic expectations and comprehensive pre-surgical consultation.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires strict adherence to post-treatment care guidelines and follow-up visits.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// plastic & cosmetic surgery service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const plasticCollapse = document.getElementById('morePlasticContent');
  const readMorePlastic = document.getElementById('readMoreWrapperPlastic');

  if (plasticCollapse && readMorePlastic) {
    plasticCollapse.addEventListener('show.bs.collapse', function () {
      readMorePlastic.style.display = 'none';
    });

    plasticCollapse.addEventListener('hide.bs.collapse', function () {
      readMorePlastic.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>