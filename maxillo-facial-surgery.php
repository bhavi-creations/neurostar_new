<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Maxillofacial Surgery Section             -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Maxillofacial Surgery</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Oral and Maxillofacial Surgery department specializes in diagnosing and surgically treating complex conditions affecting the mouth, jaws, face, and neck. Our highly skilled surgical team combines medical expertise and advanced technology to restore facial structure, function, and aesthetic balance.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreMaxilloContent">
          <p class="service_description mb-3">
            Using state-of-the-art 3D imaging, precision surgical navigation, and reconstructive techniques, we treat complex facial trauma, jaw deformities (orthognathic surgery), impacted wisdom teeth, TMJ joint disorders, facial tumors, and congenital cleft conditions. We focus on achieving optimal functional recovery and enhancing overall quality of life.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreMaxilloContent" role="button" aria-expanded="true" aria-controls="moreMaxilloContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperMaxillo">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreMaxilloContent" role="button" aria-expanded="false" aria-controls="moreMaxilloContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/maxillofacial-surgery-illustration.png" alt="Maxillofacial Surgery and Treatment" class="img-fluid service_main_img">
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
                <span>Corrects severe facial asymmetry and structural jaw imbalances effectively.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Restores critical functions like chewing, swallowing, breathing, and speech articulation.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Provides comprehensive reconstruction following acute facial trauma or tumor resections.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Delivers long-lasting aesthetic improvements and boosts patient self-confidence.</span>
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
                <span>Surgical procedures often involve a structured post-operative healing and recovery phase.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>May require soft food or liquid diet adjustments during the initial healing period.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires thorough pre-surgical 3D imaging evaluations and medical clearances.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Follow-up rehabilitation or physiotherapy may be needed for complete jaw mobility.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// maxillofacial surgery service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const maxilloCollapse = document.getElementById('moreMaxilloContent');
  const readMoreMaxillo = document.getElementById('readMoreWrapperMaxillo');

  if (maxilloCollapse && readMoreMaxillo) {
    maxilloCollapse.addEventListener('show.bs.collapse', function () {
      readMoreMaxillo.style.display = 'none';
    });

    maxilloCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreMaxillo.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>