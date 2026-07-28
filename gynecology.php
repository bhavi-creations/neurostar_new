<?php include 'header.php'; ?>
<!-- ========================================= -->
<!-- Gynecology Section                         -->
<!-- ========================================= -->
<section class="service_page_wrapper py-5">
  <div class="container">
    
    <!-- Hero / Intro Block -->
    <div class="row align-items-center g-4 lg-g-5 mb-5">
      
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <h1 class="service_title mb-3">Gynecology & Obstetrics</h1>
        
        <!-- Paragraph 1 (Always Visible) -->
        <p class="service_description mb-3">
          At NeuroStar Hospital, our Gynecology & Obstetrics department is dedicated to providing compassionate, comprehensive healthcare for women at every stage of life. Our expert team of gynecologists specializes in preventive care, advanced surgical interventions, maternity care, and the treatment of various reproductive health conditions.
        </p>

        <!-- Paragraph 2 (Hidden until Read More is clicked) -->
        <div class="collapse" id="moreGynaeContent">
          <p class="service_description mb-3">
            Utilizing state-of-the-art diagnostic technology and minimally invasive laparoscopic techniques, we manage complex conditions like fibroids, endometriosis, PCOS, and high-risk pregnancies. We are committed to providing personalized care, prioritizing patient comfort, emotional support, and overall well-being.
          </p>

          <!-- Read Less button (Placed AT THE BOTTOM inside expanded content) -->
          <div class="pt-1 mb-3">
            <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreGynaeContent" role="button" aria-expanded="true" aria-controls="moreGynaeContent">
              <span class="btn_text">Read Less</span> <i class="bi bi-arrow-up ms-1 toggle_arrow"></i>
            </a>
          </div>
        </div>

        <!-- Read More button (Visible only when collapsed) -->
        <div class="pt-1" id="readMoreWrapperGynae">
          <a class="toggle_read_more_btn" data-bs-toggle="collapse" href="#moreGynaeContent" role="button" aria-expanded="false" aria-controls="moreGynaeContent">
            <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
          </a>
        </div>
      </div>

      <!-- Right Image Column -->
      <div class="col-lg-6 text-center">
        <div class="service_image_container">
          <img src="assets/img/gynecology-illustration.png" alt="Gynecology Care and Treatment" class="img-fluid service_main_img">
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
                <span>Advanced laparoscopic surgeries ensure minimal scarring and faster recovery times.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Comprehensive maternal and prenatal care ensuring optimal safety for mother and baby.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Effective management and long-term relief for hormonal issues like PCOS and Endometriosis.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-success me-2 mt-1 fs-5"></i>
                <span>Personalized treatment plans tailored to women's physical and reproductive wellness.</span>
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
                <span>Certain hormonal therapies require long-term monitoring and regular follow-ups.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Post-operative rest and activity restrictions are vital after major gynecological surgeries.</span>
              </li>
              <li class="d-flex align-items-start mb-3">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>High-risk pregnancies require strict adherence to clinical guidance and frequent check-ups.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-danger me-2 mt-1 fs-5"></i>
                <span>Individual recovery periods vary based on whether procedures are open or minimally invasive.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
// gynecology service page read less and more buttons
document.addEventListener('DOMContentLoaded', function () {
  const gynaeCollapse = document.getElementById('moreGynaeContent');
  const readMoreGynae = document.getElementById('readMoreWrapperGynae');

  if (gynaeCollapse && readMoreGynae) {
    gynaeCollapse.addEventListener('show.bs.collapse', function () {
      readMoreGynae.style.display = 'none';
    });

    gynaeCollapse.addEventListener('hide.bs.collapse', function () {
      readMoreGynae.style.display = 'block';
    });
  }
});
</script>
<?php include 'footer.php'; ?>