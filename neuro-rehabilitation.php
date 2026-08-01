<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/neuro-rehab-bg.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Neuro-Rehabilitation
        </nav>
        <h1 class="ns-hero-title">Neuro-Rehabilitation</h1>
        <p class="ns-hero-subtitle">Comprehensive, multidisciplinary recovery programs for brain, spinal cord, and nerve disorders</p>
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
              At NeuroStar Hospital, our Neuro-Rehabilitation Department is dedicated to helping individuals recover lost skills, maximize independence, and rebuild their lives after serious neurological conditions. Our expert multidisciplinary team combines advanced neuro-physiotherapy, occupational therapy, speech-language therapy, and cognitive rehabilitation tailored to each patient’s unique neurological needs.
            </p>
            <div class="collapse" id="moreNeuroRehabContent">
              <p class="service_description pt-2">
                Utilizing the principles of neuroplasticity—the brain’s natural ability to reorganize and form new neural pathways—we create highly structured therapy programs for patients recovering from stroke, traumatic brain injuries, spinal cord lesions, Parkinson’s disease, and neuromuscular disorders. We focus not only on motor restoration, but also on functional mobility, communication, swallowing, and psychological well-being.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreNeuroRehabContent" role="button" aria-expanded="false" aria-controls="moreNeuroRehabContent" onclick="toggleReadMoreText(this)">
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
              <span>Comprehensive Post-Stroke Recovery &amp; Hemiplegia Rehabilitation</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Traumatic Brain Injury (TBI) &amp; Spinal Cord Injury (SCI) Recovery</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Parkinson’s Disease &amp; Movement Disorder Mobility Management</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Speech, Language, &amp; Dysphagia (Swallowing) Therapy</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Cognitive Function, Memory, &amp; Executive Skill Retraining</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Occupational Therapy for Daily Living Activities &amp; Adaptive Training</span>
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
              <span>Robotic-Assisted Gait &amp; Locomotor Training Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Functional Electrical Stimulation (FES) for Muscle Re-education</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Virtual Reality (VR) &amp; Biofeedback Movement Retraining</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Computerized Balance &amp; Postural Stability Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Body-Weight Supported Treadmill Systems for Safe Mobility Practice</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced Upper-Limb Exoskeletons &amp; Fine-Motor Training Devices</span>
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
              <span>Maximized functional independence and enhanced quality of life</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Re-establishment of movement patterns through targeted neuroplasticity protocols</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Improved speech clarity, communication, and safe swallowing capabilities</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Comprehensive family training and home modification support</span>
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
              <div>Initial neurological assessment, motor-sensory evaluation &amp; functional scoring</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Formulation of personalized rehabilitation goals with team specialists and family</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Intensive multi-modal therapy sessions (Physical, Speech, and Occupational)</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Periodic outcome tracking, home care integration &amp; long-term progress support</div>
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
            <a href="neurology.php" class="ns-dept-tag">Neurology &amp; Stroke Care</a>
            <a href="neuro-surgery.php" class="ns-dept-tag">Neurosurgery</a>
            <a href="physiotherapy.php" class="ns-dept-tag">Physiotherapy &amp; Rehabilitation</a>
            <a href="neuro-psychiatric.php" class="ns-dept-tag">Psychiatry &amp; Behavioral Health</a>
          </div>
        </div>

      </div>

      <!-- RIGHT SIDEBAR (CTA - CLEAN & STICKY BELOW NAVBAR) -->
      <div class="col-lg-4">
        <div class="ns-sidebar-cta sticky-top">
          <div class="cta_sub_label">NEED NEURO-REHABILITATION?</div>
          <h3 class="cta_main_title">Consult a Specialist</h3>
          
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