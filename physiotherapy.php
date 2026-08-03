<?php include 'header.php'; ?>

<!-- HERO BANNER SECTION -->
<section class="ns-hero-banner" style="background-image: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)), url('assets/img/physiotherpy-bg.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ns-hero-content">
        <nav class="ns-breadcrumb">
          <a href="Home.php">Home</a> &rsaquo; <a href="#">Services</a> &rsaquo; Physiotherapy
        </nav>
        <h1 class="ns-hero-title">Physiotherapy</h1>
        <p class="ns-hero-subtitle">Advanced physical therapy, mobility restoration, and customized pain management care</p>
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
              At NeuroStar Hospital, our Physiotherapy Department is dedicated to helping patients recover function, eliminate pain, and regain physical independence. Led by highly skilled physiotherapists specialists, we provide evidence-based, personalized treatment plans for acute musculoskeletal injuries, chronic pain conditions, neurological disorders, and post-surgical recovery.
            </p>
            <div class="collapse" id="morePhysioContent">
              <p class="service_description pt-2">
                We combine hands-on manual therapy with specialized exercise equipment, and movement retraining protocols. Whether you are recovering from joint replacement surgery, managing spinal pain, rehabilitating after a stroke, or returning to sports after an injury, our team works closely with you to accelerate healing, restore joint mobility, and improve overall quality of life.
              </p>
            </div>
            
            <div class="pt-2">
              <a class="toggle_read_more_btn ns-btn-readmore text-decoration-none" data-bs-toggle="collapse" href="#morePhysioContent" role="button" aria-expanded="false" aria-controls="morePhysioContent" onclick="toggleReadMoreText(this)">
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
              <span>Orthopedic &amp; Post-Surgical Rehabilitation (ACL, Joint Replacement, Fractures)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Neuro-Rehabilitation for Stroke, Parkinson's &amp; Spinal Cord Injuries</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Spine &amp; Chronic Pain Management (Neck, Back, Sciatica &amp; Spondylosis Care)</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Sports Injury Prevention, Conditioning &amp; Athletic Performance Recovery</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Manual Therapy, Soft Tissue Mobilization &amp; Myofascial Release</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Ergonomic Assessment, Gait Analysis &amp; Posture Correction Guidance</span>
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
              <span>Advanced Ultrasound Therapy &amp; TENS/IFT Electrotherapy Units</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Class 4 High-Intensity Laser Therapy (HILT) for Tissue Repair</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Computerized Lumbar &amp; Cervical Spinal Traction Systems</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Extracorporeal Shockwave Therapy (ESWT) for Chronic Tendonitis</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Continuous Passive Motion (CPM) Devices for Post-Op Joint Mobility</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Digital Motion Analysis &amp; Balance Rehabilitation Training Systems</span>
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
              <span>Significant reduction in pain levels with reduced reliance on pain medications</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Restored joint mobility, enhanced muscle strength, and improved flexibility</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Accelerated post-operative recovery timelines and safer return to daily activities</span>
            </li>
            <li class="ns-check-item">
              <i class="bi bi-check-circle ns-check-icon"></i>
              <span>Targeted fall-prevention and balance stability training for senior adults</span>
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
              <div>Comprehensive physical evaluation, pain assessment &amp; posture/gait analysis</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">2</div>
              <div>Customized therapy plan design with clear functional milestones and target goals</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">3</div>
              <div>Supervised therapy sessions combining modalities, manual techniques &amp; exercises</div>
            </li>
            <li class="ns-process-item">
              <div class="ns-process-number">4</div>
              <div>Progress evaluation, home exercise program transition &amp; long-term prevention guidance</div>
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
            <a href="orthopaedic-surgery.php" class="ns-dept-tag">Orthopedics &amp; Joint Replacement</a>
            <a href="neuro-surgery.php" class="ns-dept-tag"> Neurosurgery</a>
            <a href="accidents-and-trauma-care.php" class="ns-dept-tag">Emergency &amp; Trauma Care</a>
          </div>
        </div>

      </div>

      <!-- RIGHT SIDEBAR (CTA - CLEAN & STICKY BELOW NAVBAR) -->
      <div class="col-lg-4">
        <div class="ns-sidebar-cta sticky-top">
          <div class="cta_sub_label">NEED PHYSIOTHERAPY?</div>
          <h3 class="cta_main_title">Book a Session</h3>
          
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