<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Physiotherapy Section                    -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Physiotherapy</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Physiotherapy department is committed to helping patients restore movement, rebuild strength, and alleviate pain resulting from injury, surgery, or chronic conditions. Our team of certified physiotherapists provides personalized, evidence-based care to improve functional mobility and overall quality of life.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="morePhysioContent">
          <p class="service_description mb-3">
            Utilizing advanced therapeutic equipment, manual therapy techniques, targeted exercise programs, and electrotherapy, we treat a wide range of conditions including sports injuries, post-surgical stiffness, back pain, and neurological mobility challenges. We focus on long-term recovery and preventing future injuries.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePhysioContent" role="button" aria-expanded="true" aria-controls="morePhysioContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperPhysio">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePhysioContent" role="button" aria-expanded="false" aria-controls="morePhysioContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/physiotherapy-illustration.png" alt="Physiotherapy Treatment and Care" class="img-fluid service_main_img">
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
                <span>Effectively reduces pain and stiffness without relying solely on long-term medications.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Restores joint flexibility, muscle strength, and optimal body posture.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Accelerates recovery after orthopedic surgeries, trauma, or athletic injuries.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Prevents future musculoskeletal injuries through guided ergonomic education and conditioning.</span>
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
                <span>Requires active patient involvement and consistency with daily home exercise routines.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Progress happens gradually and requires multiple structured clinical sessions for lasting results.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Temporary mild soreness may occur initially as muscles and joints adapt to new movements.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Overall recovery timeline varies according to the specific injury or medical condition.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// physiotherapy service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const physioCollapse = document.getElementById('morePhysioContent');
  const readMorePhysio = document.getElementById('readMoreWrapperPhysio');

  if (physioCollapse && readMorePhysio) {
    physioCollapse.addEventListener('show.bs.collapse', function () {
      readMorePhysio.style.display = 'none';
    });

    physioCollapse.addEventListener('hide.bs.collapse', function () {
      readMorePhysio.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>