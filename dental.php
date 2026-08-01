<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/dental.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Dental Care
        </nav>
        <h1 class="ns-hero-title">Dental Care</h1>
        <p class="ns-hero-subtitle">Complete oral healthcare, restorative treatments, and advanced dentistry</p>
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
              At NeuroStar Hospital, our Dental department delivers exemplary oral healthcare using state-of-the-art dental technology in a painless and hygienic environment. Led by qualified dental surgeons, endodontists, orthodondists, and oral & maxillofacial specialists, we offer complete dental solutions ranging from routine preventive checkups and deep cleanings to complex restorative procedures and smile enhancements.
            </p>
            <div class="collapse" id="moreDentalContent">
              <p class="service_description pt-2">
                We specialize in root canal treatments (RCT), dental implants, wisdom tooth extractions, aligners, and correction of traumatic facial fractures. By combining precise digital diagnostics with strict sterilization protocols, our team ensures gentle, patient-friendly care to preserve your natural teeth and restore confidence in your smile.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreDentalContent" role="button" aria-expanded="false" aria-controls="moreDentalContent" onclick="toggleReadMoreText(this)">
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
              <span>Painless Root Canal Treatments (RCT) & crown fittings</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Permanent Dental Implants & full mouth rehabilitation</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Surgical extraction of impacted wisdom teeth & trauma management</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Orthodontic treatments including invisible aligners & braces</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Cosmetic dentistry (Teeth whitening, veneers & smile designing)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Scaling, teeth polishing & periodontal gum care treatments</span>
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
              <span>Digital Cone Beam Computed Tomography (CBCT) & OPG X-Ray Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Rotary Endodontic Systems for Fast, Painless RCTs</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Intraoral Scanners & 3D CAD/CAM Digital Impression Units</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Soft & Hard Tissue Dental Lasers for Minimally Invasive Gum Care</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Ultrasonic Scalers & LED Teeth Whitening Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Class-B Autoclave Sterilization Systems for Maximum Hygiene</span>
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
              <span>Virtually painless treatments utilizing modern anesthesia and rotary technology</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Natural-looking aesthetic results tailored to your unique facial profile</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Strict 100% infection control and hospital-grade sterilization protocols</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Long-lasting restorative solutions to improve chewing and speech function</span>
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
              <div>Comprehensive clinical examination, intraoral screening & digital X-rays</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Clear discussion of treatment plan options, timeline, and cost estimates</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Execution of precise therapeutic or surgical dental procedure</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Post-treatment care instructions, follow-up, and routine maintenance plan</div>
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
            <a href="neuro-surgery.php" class="ns-dept-tag">Neuro Surgery</a>
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
            <a href="general-and-laproscopic-surgery.php" class="ns-dept-tag">General Surgery</a>
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