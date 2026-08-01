<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/general-medicine.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; General Medicine
        </nav>
        <h1 class="ns-hero-title">General Medicine &amp; Internal Care</h1>
        <p class="ns-hero-subtitle">Comprehensive primary care, chronic disease management, and acute illness treatment</p>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="ns-service-wrapper mt-4 mb-5">
  <div class="container">
    <div class="row g-4">

      <!-- LEFT COLUMN -->
      <div class="col-lg-8">

        <!-- 1. Service Overview -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-activity"></i></div>
            <h2 class="ns-card-title">Service Overview</h2>
          </div>
          <div class="ns-card-body">
            <p class="service_description">
              At NeuroStar Hospital, our General Medicine department serves as the primary gateway for comprehensive healthcare, addressing a wide spectrum of acute illnesses and complex chronic conditions. Led by expert internists and general physicians, we offer thorough clinical evaluations, precise diagnostic workups, and personalized treatment plans to promote overall wellness and preventive health.
            </p>
            <div class="collapse" id="moreGenMedContent">
              <p class="service_description pt-2">
                We specialize in managing long-term metabolic conditions such as diabetes, hypertension, and thyroid disorders, as well as treating infectious diseases, respiratory infections, and multiorgan health issues. By coordinating seamlessly with sub-specialty departments, our general medicine team delivers holistic, patient-centered care for both outpatient consultation and inpatient medical management.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreGenMedContent" role="button" aria-expanded="false" aria-controls="moreGenMedContent" onclick="toggleReadMoreText(this)">
                <span class="btn_text">Read More</span> <i class="bi bi-arrow-right ms-1 toggle_arrow"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 2. What's Included -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-list-check"></i></div>
            <h2 class="ns-card-title">What's Included</h2>
          </div>
          <ul class="ns-check-grid">
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Diagnosis & management of chronic diseases (Diabetes, Hypertension, Thyroid)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Treatment for acute viral, bacterial, and seasonal infectious fevers</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Comprehensive preventive health checkups & routine screening packages</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Management of respiratory, gastrointestinal & systemic illnesses</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Geriatric care & age-related multisystem condition monitoring</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Pre-operative medical clearance & post-discharge follow-up care</span>
            </li>
          </ul>
        </div>

        <!-- 3. Equipment & Technology -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-cpu"></i></div>
            <h2 class="ns-card-title">Equipment &amp; Technology</h2>
          </div>
          <ul class="ns-check-grid">
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Fully Automated 24/7 Clinical Pathology & Biochemistry Analyzers</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Continuous Glucose Monitoring (CGM) & HbA1c Rapid Testing</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Non-Invasive Blood Pressure & Holter Monitoring Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Digital Electrocardiogram (ECG) & Spirometry Pulmonary Function Testing</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>High-Resolution Digital X-Ray & Point-of-Care Ultrasound Scans</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Dedicated Inpatient Isolation & Step-Down Medical Monitoring Units</span>
            </li>
          </ul>
        </div>

        <!-- 4. Benefits -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-sparkles"></i></div>
            <h2 class="ns-card-title">Benefits</h2>
          </div>
          <ul class="ns-check-grid">
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Holistic approach treating root causes rather than just symptom management</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Early detection of lifestyle diseases to prevent long-term complications</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Seamless referrals and co-management with super-specialty doctors</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Personalized diet, medication, and lifestyle guidance for sustained health</span>
            </li>
          </ul>
        </div>

        <!-- 5. Process / Workflow -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-diagram-3"></i></div>
            <h2 class="ns-card-title">Process / Workflow</h2>
          </div>
          <ul class="ns-process-list">
            <li class="ns-process-item">
              <div class="ns-process-number">1</div>
              <div>Initial physician consultation, detailed medical history & clinical examination</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Targeted diagnostic evaluations (blood tests, imaging, or cardiac workups)</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Evidence-based medical therapy initiation or inpatient stabilization</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Ongoing disease monitoring, periodic review, and health maintenance planning</div>
            </li>
          </ul>
        </div>

        <!-- 6. Related Departments -->
        <div class="ns-card">
          <div class="ns-card-header">
            <div class="ns-icon-badge"><i class="bi bi-building"></i></div>
            <h2 class="ns-card-title">Related Departments</h2>
          </div>
          <div class="ns-dept-tags">
            <a href="neurology.php" class="ns-dept-tag">Neurology</a>
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
            <a href="critical-care.php" class="ns-dept-tag">Critical Care</a>
            <a href="radiology.php" class="ns-dept-tag">Radiology &amp; Diagnostics</a>
          </div>
        </div>

      </div>

      <!-- RIGHT SIDEBAR (CTA - CLEAN & STICKY BELOW NAVBAR) -->
      <div class="col-lg-4">
        <div class="ns-sidebar-cta sticky-top">
          <div class="cta_sub_label">NEED THIS SERVICE?</div>
          <h3 class="cta_main_title">Get in touch</h3>
          
          <a href="appointment.php" class="ns-btn-cta-orange mb-3 text-center text-decoration-none">
            <i class="bi bi-calendar-event me-2"></i>Book Appointment
          </a>
          <a href="tel:8341713713" class="ns-btn-cta-outline text-center text-decoration-none">
            <i class="bi bi-telephone me-2"></i>Call 8341713713
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
function toggleReadMoreText(btn) {
  const textSpan = btn.querySelector('.btn_text');
  const icon = btn.querySelector('.toggle_arrow');
  
  setTimeout(() => {
    const isExpanded = btn.getAttribute('aria-expanded') === 'true';
    if (isExpanded) {
      textSpan.textContent = 'Read Less';
      icon.className = 'bi bi-arrow-up ms-1 toggle_arrow';
    } else {
      textSpan.textContent = 'Read More';
      icon.className = 'bi bi-arrow-right ms-1 toggle_arrow';
    }
  }, 150);
}
</script>

<?php include 'footer.php'; ?>