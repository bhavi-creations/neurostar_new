<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/critical-care.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Critical Care
        </nav>
        <h1 class="ns-hero-title">Critical Care &amp; Intensive Care Unit (ICU)</h1>
        <p class="ns-hero-subtitle">Round-the-clock specialized monitoring and life-support for critically ill patients</p>
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
              At NeuroStar Hospital, our Critical Care Department provides 24/7 advanced intensive care to patients suffering from severe, life-threatening medical and surgical conditions. Managed by certified intensivists, critical care nurses, and multidisciplinary specialists, our Intensive Care Units (ICU) offer continuous physiological monitoring and immediate life-saving interventions in a highly controlled environment.
            </p>
            <div class="collapse" id="moreCriticalCareContent">
              <p class="service_description pt-2">
                We specialize in managing complex clinical emergencies such as multi-organ failure, severe sepsis, acute respiratory distress, postoperative complications, cardiac crises, and neurological trauma. With advanced life-support technology and a dedicated nurse-to-patient ratio, our team delivers empathetic, rapid-response medical care focused on stabilizing patients and driving recovery during their most vulnerable moments.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#moreCriticalCareContent" role="button" aria-expanded="false" aria-controls="moreCriticalCareContent" onclick="toggleReadMoreText(this)">
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
              <span>24/7 continuous multipara vital sign monitoring & bedside care</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Advanced mechanical ventilation & acute respiratory insufficiency support</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Management of severe sepsis, septic shock & systemic infections</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Postoperative high-dependency care after complex surgeries</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Targeted temperature management & neuro-critical monitoring</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>In-ICU continuous renal replacement therapy (CRRT) & hemodialysis support</span>
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
              <span>High-End Invasive & Non-Invasive Mechanical Ventilators</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Centralized Multi-Parameter Hemodynamic & ECG Monitoring Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Bedside Arterial Blood Gas (ABG) & Rapid Point-of-Care Analyzers</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Continuous Renal Replacement Therapy (CRRT) & Dialysis Machines</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Point-of-Care Bedside Ultrasound (POCUS) & Echocardiography</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>HEPA-Filtered Laminar Flow Air Handling Isolation Units</span>
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
              <span>24/7 presence of dedicated intensivists and skilled critical care nurses</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Rapid emergency response and immediate intervention capabilities</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Strict infection control protocols to ensure patient safety</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Compassionate family counseling and transparent medical updates</span>
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
              <div>Immediate triage, patient stabilization & invasive baseline assessment</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Initiation of targeted life support (ventilation, central lines, organ support)</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Continuous round-the-clock monitoring and multidisciplinary consultations</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Gradual weaning, stabilization & transition to high-dependency or ward care</div>
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
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
            <a href="neurology.php" class="ns-dept-tag">Neurology</a>
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