<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Service Main Section                      -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
     <!-- Left Content Column -->
<div class="col-lg-6">
  <h1 class="service_title mb-3">Neuro Surgery</h1>
  
  <!-- Paragraph 1 (Always Visible) -->
  <p class="service_description mb-3">
    At NeuroStar Hospital, our Neurosurgery Department offers cutting-edge surgical interventions for complex brain and spinal conditions. Equipped with state-of-the-art facilities like MRI, CT, and neuronavigation systems, our expert neurosurgeons ensure precise diagnosis and tailored treatment planning.
  </p>

  <!-- Paragraph 2 (Hidden until Read More is clicked) -->
  <div class="collapse" id="moreServiceContent">
    <p class="service_description mb-3">
      We specialize in minimally invasive endoscopic and robotic-assisted techniques that significantly reduce recovery times and improve patient outcomes. Collaborating with neurologists, oncologists, and rehabilitation specialists, we deliver compassionate care focused on patient safety and long-term recovery.
    </p>

    <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
    <div class="pt-1 mb-3">
      <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreServiceContent" role="button" aria-expanded="true" aria-controls="moreServiceContent">
        <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
      </a>
    </div>
  </div>

  <!-- Read More button (Visible only when collapsed) -->
  <div class="pt-1" id="readMoreWrapper">
    <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreServiceContent" role="button" aria-expanded="false" aria-controls="moreServiceContent">
      <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
    </a>
  </div>
</div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/neurosurgery-illustration.png" alt="Neuro Surgery Treatment" class="img-fluid service_main_img">
        </div>
      </div>

    </div>

    <!-- ========================================= -->
    <!-- Advantages & Disadvantages Section       -->
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
                <span>Provides direct relief from severe brain and spinal nerve pain.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Prevents progressive neurological damage and long-term disability.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Utilizes minimally invasive options for faster overall recovery times.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Restores physical motor functions and improves daily independent living.</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Disadvantages Card -->
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
                <span>Requires a post-surgery recovery and monitored rehabilitation period.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Standard surgical risks like infection, bleeding, or anesthetic reaction.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>May require follow-up physical therapy sessions for optimal mobility.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Recovery progress varies based on the patient's individual overall health.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// Neuro Surgery service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const collapseElem = document.getElementById('moreServiceContent');
  const readMoreWrapper = document.getElementById('readMoreWrapper');

  if (collapseElem && readMoreWrapper) {
    // Hide "Read More" button when content expands
    collapseElem.addEventListener('show.bs.collapse', function () {
      readMoreWrapper.style.display = 'none';
    });

    // Show "Read More" button again when content collapses
    collapseElem.addEventListener('hide.bs.collapse', function () {
      readMoreWrapper.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>