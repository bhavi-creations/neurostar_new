<?php include 'header.php'; ?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div class="swiper-container team-slider"> <!-- Swiper Container -->
    <div class="swiper-wrapper"> <!-- Swiper Wrapper -->
        <!-- Team block -->
        <div class="swiper-slide"> <!-- Swiper Slide -->

        </div>

        <div class="swiper-slide">

        </div>

        <div class="swiper-slide">

        </div>

        <div class="swiper-slide">

        </div>

        <div class="swiper-slide">

        </div>
        <div class="swiper-slide">

        </div>
        <div class="swiper-slide">

        </div>







        <div class="swiper-slide">

        </div>


        <div class="swiper-slide">

        </div>



    </div>

</div>

<!-- Swiper JS Initialization -->
<script>
    var swiper = new Swiper(".team-slider", {
        slidesPerView: 3, // Show exactly 3 slides
        spaceBetween: 30, // Adjust space between slides
        loop: true,
        centeredSlides: false, // Ensure it aligns properly
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 2
            },
            0: {
                slidesPerView: 1
            }
        }
    });
</script>

<?php include 'footer.php'; ?>