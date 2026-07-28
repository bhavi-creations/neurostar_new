<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Neurostar Hospital</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="assets/style.css">

</head>

<body>


 <!-- Top Bar -->

<section class="index_section_topbar">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 d-none d-lg-block">

<div class="index_section_topbar_left">

<span><i class="bi bi-envelope-fill"></i> info@neurostarhospital.com</span>

<span class="ms-4"><i class="bi bi-telephone-fill"></i> +91 9876543210</span>


</div>

</div>

 <div class="col-lg-6">

<div class="index_section_topbar_right text-lg-end text-center">

<span><i class="fas fa-map-marker-alt"></i> Kakinada, Andhra Pradesh</span>

<span><i class="fas fa-clock"></i> Open 24x7</span>

</div>

</div> 

</div>

</div>

</section>


<!-- ========================================= -->
<!-- Navbar                                    -->
<!-- ========================================= -->
<nav class="navbar navbar-expand-lg sticky-top index_section_navbar custom_navy_navbar shadow-sm">
  <div class="container-fluid px-lg-5">

    <a class="navbar-brand fw-bold" href="#">
      <img src="assets/img/neurostar_logo.png" alt="Neurostar Logo" style="max-height: 50px; ">
    </a>

    <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>

        <!-- Services Dropdown Button -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav_services_btn" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu shadow" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="#">Neuro Surgery</a></li>
            <li><a class="dropdown-item" href="#">Neurology</a></li>
            <li><a class="dropdown-item" href="#">Orthopaedic Surgery</a></li>
            <li><a class="dropdown-item" href="#">General Medicine</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Doctors</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

        <!-- Outline Pill Appointment Button -->
        <li class="nav-item ms-lg-2">
          <a href="#" class="btn nav_appointment_btn">
            Appointment
          </a>
        </li>

      </ul>
    </div>

  </div>
</nav>