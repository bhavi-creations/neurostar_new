<?php include  'header.php' ; ?>


<style>
/* ==========================================
   TOP-QUALITY MACHINERY SECTION
========================================== */

.top-equipment-section {
    padding: 20px 0;
}

.top-equipment-section .card_box_equp {
    position: relative;
    height: 100%;
    min-height: 250px;
    padding: 28px 18px !important;
    background: linear-gradient(145deg, #ffffff 0%, #f4f9ff 100%);
    border: 1px solid rgba(22, 116, 190, 0.12);
    border-radius: 22px;
    overflow: hidden;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    box-shadow: 0 8px 25px rgba(24, 87, 140, 0.08);
    transition: all 0.4s ease;
}

/* Decorative Circle */
.top-equipment-section .card_box_equp::before {
    content: "";
    position: absolute;
    width: 130px;
    height: 130px;
    border-radius: 50%;
    background: rgba(22, 116, 190, 0.06);

    top: -55px;
    right: -45px;

    transition: all 0.5s ease;
}

/* Bottom Decorative Line */
.top-equipment-section .card_box_equp::after {
    content: "";
    position: absolute;
    width: 45px;
    height: 4px;

    background: linear-gradient(90deg, #0b74c9, #19b5fe);
    border-radius: 10px;

    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);

    transition: width 0.4s ease;
}

/* ==========================================
   CARD HOVER
========================================== */

.top-equipment-section .card_box_equp:hover {
    transform: translateY(-10px);
    border-color: rgba(22, 116, 190, 0.35);

    box-shadow: 0 18px 40px rgba(11, 116, 201, 0.16);

    background: linear-gradient(
        145deg,
        #ffffff 0%,
        #eef8ff 100%
    );
}

.top-equipment-section .card_box_equp:hover::before {
    width: 180px;
    height: 180px;
    background: rgba(22, 116, 190, 0.09);
}

.top-equipment-section .card_box_equp:hover::after {
    width: 85px;
}


/* ==========================================
   MACHINE IMAGE
========================================== */

.top-equipment-section .card_box_equp img {
    width: 125px;
    height: 125px;

    object-fit: contain;
    padding: 14px;
    margin-bottom: 18px;

    border-radius: 50%;
    background: #ffffff;

    box-shadow:
        0 8px 20px rgba(11, 116, 201, 0.10),
        inset 0 0 0 1px rgba(11, 116, 201, 0.08);

    transition: all 0.45s ease;

    position: relative;
    z-index: 2;
}

/* Image Hover */
.top-equipment-section .card_box_equp:hover img {
    transform: scale(1.08) rotate(2deg);

    box-shadow:
        0 12px 28px rgba(11, 116, 201, 0.18),
        inset 0 0 0 2px rgba(11, 116, 201, 0.15);
}


/* ==========================================
   MACHINE TITLE
========================================== */

.top-equipment-section .card_box_equp .SCAN {
    position: relative;
    z-index: 2;

    margin: 0;
    max-width: 220px;

    color: #173b5e;
    font-size: 17px;
    line-height: 1.4;
    font-weight: 700;
    letter-spacing: 0.2px;

    transition: color 0.3s ease;
}

.top-equipment-section .card_box_equp:hover .SCAN {
    color: #0876c9;
}


/* ==========================================
   SECTION HEADING
========================================== */

.top-equipment-section .docHead {
    position: relative;
    display: inline-block;

    color: #173b5e;
    font-size: 34px;
    font-weight: 800;

    margin-bottom: 12px;
}

.top-equipment-section .docHead::after {
    content: "";

    display: block;
    width: 65px;
    height: 4px;

    margin-top: 10px;

    border-radius: 10px;

    background: linear-gradient(
        90deg,
        #0876c9,
        #21c3ff
    );
}

.top-equipment-section .docPara {
    max-width: 850px;

    color: #66798b;
    font-size: 16px;
    line-height: 1.8;
}


/* ==========================================
   TABLET
========================================== */

@media (max-width: 991px) {

    .top-equipment-section .card_box_equp {
        min-height: 235px;
    }

    .top-equipment-section .card_box_equp img {
        width: 110px;
        height: 110px;
    }

    .top-equipment-section .card_box_equp .SCAN {
        font-size: 16px;
    }

    .top-equipment-section .docHead {
        font-size: 30px;
    }
}


/* ==========================================
   MOBILE
========================================== */

@media (max-width: 767px) {

    .top-equipment-section .card_box_equp {
        min-height: 220px;
        border-radius: 18px;
    }

    .top-equipment-section .card_box_equp img {
        width: 100px;
        height: 100px;
        padding: 12px;
        margin-bottom: 14px;
    }

    .top-equipment-section .card_box_equp .SCAN {
        font-size: 15px;
    }

    .top-equipment-section .docHead {
        font-size: 27px;
    }

    .top-equipment-section .docPara {
        font-size: 15px;
    }
}


/* ==========================================
   SMALL MOBILE
========================================== */

@media (max-width: 575px) {

    .top-equipment-section .card_box_equp {
        min-height: 210px;
        padding: 25px 15px !important;
    }

    .top-equipment-section .card_box_equp img {
        width: 90px;
        height: 90px;
    }

    .top-equipment-section .card_box_equp .SCAN {
        font-size: 15px;
    }
}
</style>


<section class="top-equipment-section">

    <div class="container">

        <h2 class="docHead">Top-Quality Machinery</h2>

        <p class="docPara mb-5">
            Neurostar Hospital is equipped with top-quality machinery,
            ensuring precision and excellence in every medical procedure.
        </p>

        <div class="container my-4">

            <div class="row gx-4 gy-4">

                <!-- CT SCAN -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/1.png"
                             alt="CT Scan"
                             class="img-fluid">
                        <h4 class="SCAN">CT SCAN</h4>
                    </div>
                </div>

                <!-- Ultrasound -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/2.png"
                             alt="Ultrasound 2D ECHO"
                             class="img-fluid">
                        <h4 class="SCAN">Ultrasound 2D ECHO</h4>
                    </div>
                </div>

                <!-- EEG & NCS -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/3.png"
                             alt="EEG and NCS"
                             class="img-fluid">
                        <h4 class="SCAN">EEG &amp; NCS</h4>
                    </div>
                </div>

                <!-- Endoscopy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/4.png"
                             alt="Endoscopy"
                             class="img-fluid">
                        <h4 class="SCAN">Endoscopy</h4>
                    </div>
                </div>

                <!-- X-Ray -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/5.png"
                             alt="X-ray"
                             class="img-fluid">
                        <h4 class="SCAN">X-ray</h4>
                    </div>
                </div>

                <!-- Neuro Microscope -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/6.png"
                             alt="Neuro Microscope"
                             class="img-fluid">
                        <h4 class="SCAN">Neuro Microscope</h4>
                    </div>
                </div>

                <!-- Ventilators -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/7.png"
                             alt="Ventilators"
                             class="img-fluid">
                        <h4 class="SCAN">Ventilators</h4>
                    </div>
                </div>

                <!-- Physiotherapy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/8.png"
                             alt="Physiotherapy"
                             class="img-fluid">
                        <h4 class="SCAN">Physiotherapy</h4>
                    </div>
                </div>

                <!-- Lab -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/9.png"
                             alt="Laboratory"
                             class="img-fluid">
                        <h4 class="SCAN">Lab</h4>
                    </div>
                </div>

                <!-- Dental Chair -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/10.png"
                             alt="Electronic Dental Chair with RVG"
                             class="img-fluid">
                        <h4 class="SCAN">
                            Electronic Dental Chair with RVG
                        </h4>
                    </div>
                </div>

                <!-- Bronchoscopy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/11.png"
                             alt="Bronchoscopy"
                             class="img-fluid">
                        <h4 class="SCAN">Bronchoscopy</h4>
                    </div>
                </div>

                <!-- Pharmacy -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card_box_equp py-4 text-center">
                        <img src="assets/img/scan/12.png"
                             alt="24/7 Pharmacy"
                             class="img-fluid">
                        <h4 class="SCAN">24/7 Pharmacy</h4>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>





<?php include 'footer.php'; ?>