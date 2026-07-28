<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Neuro-Psychiatry Section                  -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Neuro-Psychiatry</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Neuro-Psychiatry department specializes in diagnosing and treating complex conditions that bridge brain health and mental well-being. Our expert neuro-psychiatrists offer compassionate care for patients dealing with mood disorders, cognitive changes, and behavioral issues stemming from neurological conditions.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreNeuroPsychContent">
          <p class="service_description mb-3">
            Combining advanced neurological assessments with modern psychiatric interventions, we manage conditions such as depression linked to neurological diseases, dementia, adult ADHD, anxiety, epilepsy-related behavioral changes, and sleep disorders. We provide holistic, personalized treatment plans tailored to restore mental balance and enhance overall well-being.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeuroPsychContent" role="button" aria-expanded="true" aria-controls="moreNeuroPsychContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperNeuroPsych">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeuroPsychContent" role="button" aria-expanded="false" aria-controls="moreNeuroPsychContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/neuro-psychiatry-illustration.png" alt="Neuro-Psychiatry Care and Treatment" class="img-fluid service_main_img">
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
                <span>Comprehensive medical approach addressing both neurological and psychiatric aspects together.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Effectively improves cognitive performance, emotional stability, and behavioral symptoms.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Combines evidence-based psychotherapy with precise medication management.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Enhances daily living and social functioning for both patients and their families.</span>
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
                <span>Requires periodic evaluation to adjust medication dosages and monitor treatment progress.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Therapeutic response may take time, requiring consistent adherence to medication and therapy.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires active family involvement and counseling for long-term behavioral management.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Treatment timelines depend heavily on the underlying neurological diagnosis.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// neuro-psychiatry service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const neuroPsychCollapse = document.getElementById('moreNeuroPsychContent');
  const readMoreNeuroPsych = document.getElementById('readMoreWrapperNeuroPsych');

  if (neuroPsychCollapse && readMoreNeuroPsych) {
    neuroPsychCollapse.addEventListener('show.bs.collapse', function () {
      readMoreNeuroPsych.style.display = 'none';
    });

    neuroPsychCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreNeuroPsych.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>