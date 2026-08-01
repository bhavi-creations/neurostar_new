<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/Neurology1-bg.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Neurology
        </nav>
        <h1 class="ns-hero-title">Neurology Care</h1>
        <p class="ns-hero-subtitle">Comprehensive care for brain, spinal cord & nerve disorders</p>
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
              At NeuroStar Hospital, our Neurology department is dedicated to delivering world-class care for patients with a wide range of neurological disorders. Focusing on non-surgical diagnosis and medical management, our skilled neurologists provide compassionate, individualized care to treat conditions affecting the brain, spinal cord, nerves, and muscles.
            </p>
            <div class="collapse" id="moreNeurologyContent">
              <p class="service_description pt-2">
                We specialize in treating stroke, epilepsy, Parkinson’s, multiple sclerosis, Alzheimer’s, migraines, and nerve disorders. Utilizing advanced tools like EEGs, MRI, and CT scans, we design tailored treatment plans involving targeted medication, therapeutic interventions, and specialized rehabilitation for long-term health.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreNeurologyContent" role="button" aria-expanded="false" aria-controls="moreNeurologyContent" onclick="toggleReadMoreText(this)">
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
              <span>Comprehensive stroke prevention & emergency management</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Specialized epilepsy & seizure disorder evaluation</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Parkinson's disease & movement therapy</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Chronic migraine & headache treatment protocols</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Neuropathy & peripheral nerve disorder management</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Dementia & Alzheimer's cognitive health programs</span>
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
              <span>High-Resolution 3T MRI Neuro-imaging</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Multi-Slice CT Scanner for Acute Ischemic Stroke</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Video EEG Monitoring for Epilepsy</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>EMG & Nerve Conduction Velocity (NCV) Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Transcranial Doppler (TCD) Ultrasound</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Sleep Diagnostic Monitoring</span>
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
              <span>24/7 dedicated neurological evaluation and emergency care</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Non-invasive medical management minimizing surgical risk</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Personal treatment plans to help you recover better.</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Multidisciplinary team involving neuro-rehab specialists</span>
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
              <div>Initial neurological consultation & baseline physical examination</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Advanced diagnostic imaging & neuro-physiological assessment</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Customized therapeutic plan & medication setup</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Ongoing rehabilitation, monitoring & periodic clinical review</div>
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
            <a href="neuro-surgery.php" class="ns-dept-tag">Neurosurgery</a>
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
            <a href="radiology.php" class="ns-dept-tag">Radiology</a>
            <a href="physiotherapy.php" class="ns-dept-tag">Physiotherapy & Rehabilitation</a>
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