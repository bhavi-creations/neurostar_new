<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/radiology-bg.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Radiology &amp; Imaging
        </nav>
        <h1 class="ns-hero-title">Radiology &amp; Advanced Imaging</h1>
        <p class="ns-hero-subtitle">High-precision diagnostic imaging, non-invasive screening, and image-guided procedures</p>
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
              At NeuroStar Hospital, our Radiology & Imaging Department serves as the backbone of precise medical diagnosis and treatment planning. Equipped with next-generation imaging technology and operated by experienced radiologists and sub-specialists, we provide round-the-clock diagnostic clarity across a wide spectrum of health conditions with minimal patient discomfort and low radiation exposure.
            </p>
            <div class="collapse" id="moreRadiologyContent">
              <p class="service_description pt-2">
                From high-speed multi-slice CT scans and high-field MRI to advanced 3D/4D ultrasound and digital mammography, our department delivers swift, accurate reporting essential for emergency trauma, oncology, cardiology, and neurological evaluations. Additionally, our sub-specialized interventional radiologists offer minimally invasive image-guided therapeutic procedures that serve as effective alternatives to conventional open surgeries.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreRadiologyContent" role="button" aria-expanded="false" aria-controls="moreRadiologyContent" onclick="toggleReadMoreText(this)">
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
              <span>High-Resolution Magnetic Resonance Imaging (3T &amp; 1.5T MRI Scans)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Multi-Slice Computed Tomography (Ultra-Fast CT Angiography &amp; Body Scans)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>3D/4D Color Doppler Ultrasound &amp; Fetal Wellbeing Diagnostics</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Full-Field Digital Mammography &amp; Breast Ultrasound Imaging</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Digital X-Ray Systems &amp; Fluoroscopy for Dynamic Examinations</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Interventional Radiology (Image-Guided Biopsies, Drainage &amp; Angiography)</span>
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
              <span>Wide-Bore 3.0 Tesla MRI System for Reduced Claustrophobia &amp; Fine Detail</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Ultra-Low-Dose 128-Slice Cardiac &amp; Whole-Body CT Scanner</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Picture Archiving &amp; Communication System (PACS) for Instant Digital Access</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>High-End Ultrasound Systems with AI-Assisted Lesion Detection</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Flat-Panel Digital Radiography (DR) Units for Rapid &amp; Low-Dose X-Rays</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Dedicated Cath-Lab Fluoroscopy Suite for Precision Interventional Procedures</span>
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
              <span>Pinpoint diagnostic accuracy aiding timely and precise medical intervention</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Significantly reduced radiation exposure with smart dose-reduction software</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>24/7 emergency diagnostic support for acute trauma, stroke, and cardiac care</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Fast turn-around times for digital reports and web-accessible imaging files</span>
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
              <div>Doctor order review, safety screening (e.g., metal check for MRI) &amp; patient prep</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Quick &amp; comfortable scan execution guided by certified radiologic technologists</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>In-depth image analysis and diagnostic reporting by senior sub-specialist radiologists</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Digital delivery of results to your consulting doctor and patient portal integration</div>
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
            <a href="neuro-surgery.php" class="ns-dept-tag">Neurology &amp; Neurosurgery</a>
            <a href="orthopaedic-surgery.php" class="ns-dept-tag">Orthopedics &amp; Joint Care</a>
            <a href="neuro-rehabilitation.php" class="ns-dept-tag">Neuro Rehabilitation</a>
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
          </div>
        </div>

      </div>

      <!-- RIGHT SIDEBAR (CTA - CLEAN & STICKY BELOW NAVBAR) -->
      <div class="col-lg-4">
        <div class="ns-sidebar-cta sticky-top">
          <div class="cta_sub_label">NEED DIAGNOSTIC IMAGING?</div>
          <h3 class="cta_main_title">Schedule a Scan</h3>
          
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