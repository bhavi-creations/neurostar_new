<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Dental Section                            -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Dental Care</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Dental department offers comprehensive oral healthcare solutions ranging from routine dental checkups to complex maxillofacial surgeries. Our team of experienced dentists and specialists utilizes modern technology to deliver personalized, painless, and high-quality dental care for patients of all ages.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreDentalContent">
          <p class="service_description mb-3">
            Equipped with state-of-the-art digital X-rays, laser dentistry equipment, and advanced sterilization systems, we specialize in root canal treatments, cosmetic smile design, dental implants, orthodontics (braces and aligners), and pediatric dental procedures. We focus on preserving your natural teeth while restoring optimal oral hygiene and confidence in your smile.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreDentalContent" role="button" aria-expanded="true" aria-controls="moreDentalContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperDental">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreDentalContent" role="button" aria-expanded="false" aria-controls="moreDentalContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/dental-illustration.png" alt="Dental Care and Treatment" class="img-fluid service_main_img">
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
                <span>Prevents long-term tooth decay, gum disease, and tooth loss through proactive care.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Enhances aesthetic appearance and facial symmetry with modern cosmetic dentistry solutions.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Utilizes minimally invasive and advanced techniques for virtually painless treatments.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Restores proper chewing function, speech clarity, and overall digestive health.</span>
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
                <span>Requires routine follow-up visits and strict daily oral hygiene maintenance at home.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Procedures like orthodontic alignment or implants may take several months to complete.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Temporary tooth sensitivity or minor discomfort may occur right after specific treatments.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>May require post-treatment dietary adjustments during the initial recovery period.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// dental service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const dentalCollapse = document.getElementById('moreDentalContent');
  const readMoreDental = document.getElementById('readMoreWrapperDental');

  if (dentalCollapse && readMoreDental) {
    dentalCollapse.addEventListener('show.bs.collapse', function () {
      readMoreDental.style.display = 'none';
    });

    dentalCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreDental.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>