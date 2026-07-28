<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Neurology Service Section                 -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Neurology</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Neurology department is dedicated to delivering world-class care for patients with a wide range of neurological disorders. Focusing on non-surgical diagnosis and medical management, our skilled neurologists provide compassionate, individualized care to treat conditions affecting the brain, spinal cord, nerves, and muscles.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreNeurologyContent">
          <p class="service_description mb-3">
            We specialize in treating stroke, epilepsy, Parkinson’s, multiple sclerosis, Alzheimer’s, migraines, and nerve disorders. Utilizing advanced tools like EEGs, MRI, and CT scans, we design tailored treatment plans involving targeted medication, therapeutic interventions, and specialized rehabilitation for long-term health.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeurologyContent" role="button" aria-expanded="true" aria-controls="moreNeurologyContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperNeurology">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreNeurologyContent" role="button" aria-expanded="false" aria-controls="moreNeurologyContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/neurology-illustration.png" alt="Neurology Treatment" class="img-fluid service_main_img">
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
                <span>Focuses on non-invasive medical management without surgical recovery times.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Provides accurate early detection for chronic neurological diseases.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Customized therapies to effectively control seizures, tremors, and severe headaches.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Enhances overall cognitive function, memory, and daily independence.</span>
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
                <span>Often requires long-term or ongoing medication management and routine check-ups.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Certain neurological conditions may need gradual lifestyle and diet adjustments.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Some medications may require periodic dosage tuning to minimize side effects.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>May require multidisciplinary therapies (speech/occupational) for best results.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// Neurology service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const neurologyCollapse = document.getElementById('moreNeurologyContent');
  const readMoreNeurology = document.getElementById('readMoreWrapperNeurology');

  if (neurologyCollapse && readMoreNeurology) {
    neurologyCollapse.addEventListener('show.bs.collapse', function () {
      readMoreNeurology.style.display = 'none';
    });

    neurologyCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreNeurology.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>