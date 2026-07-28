<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- General & Laparoscopic Surgery Section    -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">General & Laparoscopic Surgery</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our General & Laparoscopic Surgery department offers advanced surgical care for a wide range of abdominal, gastrointestinal, and general health conditions. Utilizing minimally invasive keyhole surgery techniques, our expert surgical team performs procedures with high precision, minimal scarring, and faster patient recovery.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreLaparoContent">
          <p class="service_description mb-3">
            Equipped with high-definition laparoscopic towers and modern surgical suites, we specialize in gallbladder removal (cholecystectomy), appendectomy, hernia repair, trauma surgeries, thyroidectomies, and bowel surgeries. We focus on patient safety, reduced post-operative pain, and ensuring a swift return to daily activities.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreLaparoContent" role="button" aria-expanded="true" aria-controls="moreLaparoContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperLaparo">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreLaparoContent" role="button" aria-expanded="false" aria-controls="moreLaparoContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/laparoscopic-surgery-illustration.png" alt="General and Laparoscopic Surgery" class="img-fluid service_main_img">
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
                <span>Minimally invasive keyhole procedures result in significantly smaller surgical incisions and minimal scarring.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Reduces post-operative pain, discomfort, and reliance on pain medications.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Ensures shorter hospital stays, allowing patients to recover in the comfort of their homes.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Lowers the risk of wound infections and speeds up return to normal daily routine.</span>
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
                <span>Requires thorough pre-operative medical evaluation and routine blood/imaging tests.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Temporary abdominal bloating or mild shoulder tip pain may occur due to CO2 gas used in laparoscopy.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Patients must follow temporary dietary restrictions right after gastrointestinal procedures.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Complex cases with extensive scar tissue may occasionally require conversion to open surgery.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// general & laparoscopic surgery service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const laparoCollapse = document.getElementById('moreLaparoContent');
  const readMoreLaparo = document.getElementById('readMoreWrapperLaparo');

  if (laparoCollapse && readMoreLaparo) {
    laparoCollapse.addEventListener('show.bs.collapse', function () {
      readMoreLaparo.style.display = 'none';
    });

    laparoCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreLaparo.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>