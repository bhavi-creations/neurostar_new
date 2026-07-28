<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Neuro Rehabilitation Section             -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Neuro Rehabilitation</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Neuro Rehabilitation department offers specialized, evidence-based care for patients recovering from nervous system disorders, brain injuries, and neurological conditions. Our multidisciplinary team works closely to restore independence, optimize physical movement, and improve overall quality of life.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreNeuroRehabContent">
          <p class="service_description mb-3">
            Utilizing state-of-the-art rehabilitation tech, advanced physiotherapy, occupational therapy, and speech therapy, we design personalized programs for stroke recovery, spinal cord injuries, Parkinson's disease, and traumatic brain injury (TBI). We focus on long-term functional recovery and patient empowerment.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeuroRehabContent" role="button" aria-expanded="true" aria-controls="moreNeuroRehabContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperNeuroRehab">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeuroRehabContent" role="button" aria-expanded="false" aria-controls="moreNeuroRehabContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/neuro-rehabilitation-illustration.png" alt="Neuro Rehabilitation Care" class="img-fluid service_main_img">
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
                <span>Helps patients regain motor skills, coordination, and day-to-day functional independence.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Comprehensive therapy combining physical, cognitive, speech, and occupational care.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Customized rehabilitation plans suited to the specific speed of neurological recovery.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Significantly reduces the risk of long-term disability and secondary health complications.</span>
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
                <span>Recovery timelines vary and require strong patience, commitment, and active participation.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires continuous family/caregiver support for exercises at home and daily care.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Regular ongoing sessions are necessary to maintain progress and avoid skill regression.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Full functional recovery depends on the severity of the initial neural damage.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// neuro rehabilitation service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const neuroRehabCollapse = document.getElementById('moreNeuroRehabContent');
  const readMoreNeuroRehab = document.getElementById('readMoreWrapperNeuroRehab');

  if (neuroRehabCollapse && readMoreNeuroRehab) {
    neuroRehabCollapse.addEventListener('show.bs.collapse', function () {
      readMoreNeuroRehab.style.display = 'none';
    });

    neuroRehabCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreNeuroRehab.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>