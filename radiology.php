<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Radiology & Imaging Section               -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Radiology & Advanced Imaging</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Radiology & Advanced Imaging department plays a vital role in accurate diagnosis and effective treatment planning. Utilizing state-of-the-art imaging technology, our expert radiologists provide precise medical insights, enabling early detection and targeted therapies for various health conditions.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreRadioContent">
          <p class="service_description mb-3">
            Equipped with modern MRI, CT scan, digital X-ray, high-resolution ultrasound, and fluoroscopy systems, we offer a comprehensive range of diagnostic and interventional radiology services. Our team is committed to patient comfort, minimal radiation exposure, and delivering fast, highly accurate diagnostic reports to guide your medical care.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreRadioContent" role="button" aria-expanded="true" aria-controls="moreRadioContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperRadio">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreRadioContent" role="button" aria-expanded="false" aria-controls="moreRadioContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/radiology-illustration.png" alt="Radiology and Diagnostic Imaging" class="img-fluid service_main_img">
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
                <span>Enables non-invasive internal body scans for precise and pain-free disease detection.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Provides high-resolution diagnostic images for early detection of complex medical conditions.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Delivers rapid imaging results essential for emergency medical evaluations and trauma care.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Supports minimally invasive interventional procedures with real-time image guidance.</span>
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
                <span>Certain scans (like CT or X-Ray) involve minimal radiation exposure requiring safety protocols.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Contrast dye scans require pre-screening for kidney function and known allergies.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>MRI procedures require removing all metallic items and screening for implanted devices.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Patients must remain completely still during scans to ensure optimal image clarity.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// radiology service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const radioCollapse = document.getElementById('moreRadioContent');
  const readMoreRadio = document.getElementById('readMoreWrapperRadio');

  if (radioCollapse && readMoreRadio) {
    radioCollapse.addEventListener('show.bs.collapse', function () {
      readMoreRadio.style.display = 'none';
    });

    radioCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreRadio.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>