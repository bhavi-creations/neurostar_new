<!DOCTYPE html>
<html lang="te">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neurostar Multispeciality Hospital - Responsive Slider</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons (Optional/Useful) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .btn-appointment {
            border: 2px solid #ffffff;
            color: #ffffff;
            border-radius: 20px;
            padding: 4px 18px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-appointment:hover {
            background-color: #ffffff;
            color: #1c3366;
        }

        /* Slider Wrapper */
        .index-new-slider-section {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .index-new-slider-section .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 520px;
            object-fit: cover;
        }

        /* Custom Arrow Styling (as seen in screenshots) */
        .index-new-slider-section .carousel-control-prev-icon,
        .index-new-slider-section .carousel-control-next-icon {
            background-color: transparent !important;
            /* Circular background removed */
            background-image: none !important;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Chevron Arrows (< and >) */
        .index-new-slider-section .carousel-control-prev-icon::after {
            content: '❮';
            font-size: 32px;
            color: #000000;
            opacity: 0.8;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .index-new-slider-section .carousel-control-next-icon::after {
            content: '❯';
            font-size: 32px;
            color: #000000;
            opacity: 0.8;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        .index-new-slider-section .carousel-control-prev-icon:hover::after,
        .index-new-slider-section .carousel-control-next-icon:hover::after {
            opacity: 1;
        }

        /* Indicators Styling */
        .index-new-slider-section .carousel-indicators [data-bs-target] {
            width: 35px;
            height: 4px;
            border-radius: 2px;
            background-color: #ffffff;
            opacity: 0.5;
        }

        .index-new-slider-section .carousel-indicators .active {
            opacity: 1;
        }
    </style>
</head>

<body>





     <div class="index-new-slider-section">
        <!-- data-bs-ride="carousel" and data-bs-interval="3000" enables auto-sliding every 3 seconds -->
        <div id="hospitalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

            <!-- Slide Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hospitalCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#hospitalCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#hospitalCarousel" data-bs-slide-to="2"></button>
            </div>

            <!-- Carousel Images -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/all-equipment.png" alt="Hospital Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/111_11.png" alt="Doctors Team">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/1.png" alt="Hospital Services">
                </div>
            </div>

            <!-- Left / Right Control Buttons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        </div>




</body>

</html>