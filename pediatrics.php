<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Pediatrics Section                        -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Pediatrics & Child Care</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Pediatrics department is dedicated to providing compassionate, comprehensive healthcare for infants, children, and adolescents. Our team of experienced pediatricians creates a child-friendly and comforting environment to ensure early diagnosis, effective treatment, and healthy growth at every stage of childhood.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="morePedsContent">
          <p class="service_description mb-3">
            Equipped with modern neonatal care units (NICU/PICU) and advanced pediatric diagnostic facilities, we specialize in routine vaccinations, growth and developmental monitoring, pediatric emergency care, infectious disease management, and childhood nutritional guidance. We work closely with parents to support their child's physical and emotional well-being.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePedsContent" role="button" aria-expanded="true" aria-controls="morePedsContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperPeds">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#morePedsContent" role="button" aria-expanded="false" aria-controls="morePedsContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/pediatrics-illustration.png" alt="Pediatric Care and Child Health" class="img-fluid service_main_img">
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
                <span>Ensures timely immunizations and preventive care against common childhood diseases.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Provides continuous tracking of physical growth, motor skills, and cognitive developmental milestones.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Offers specialized, gentle care tailored specifically for delicate infant and child anatomy.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Guides parents with expert dietary and lifestyle advice for robust immunity and growth.</span>
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
                <span>Requires strict adherence to routine vaccination schedules and pediatric checkup timelines.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Children may experience temporary mild fever or irritability following routine vaccinations.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Demands active parent involvement and continuous home monitoring during medical treatments.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Requires careful dosage management tailored specifically to the child's age and exact weight.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// pediatrics service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const pedsCollapse = document.getElementById('morePedsContent');
  const readMorePeds = document.getElementById('readMoreWrapperPeds');

  if (pedsCollapse && readMorePeds) {
    pedsCollapse.addEventListener('show.bs.collapse', function () {
      readMorePeds.style.display = 'none';
    });

    pedsCollapse.addEventListener('hide.bs.collapse', function () {
      readMorePeds.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>