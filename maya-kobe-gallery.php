<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TribalSand | Maya Kobe Gallery</title>
    <link rel="canonical" href="https://sevahealthcare.com/maya-kobe-gallery.php" />
    <link rel="icon" href="images/favicon.png">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- GLightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- Swiper CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css" rel="stylesheet">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"> -->


    <!-- header section css -->
    <style>
        .hero-sections {
            position: relative;
            min-height: 80vh;
            overflow: hidden;
            font-family: Marcellus SC, sans-serif;
            font-size: 44.8px;
            font-weight: 100;
            letter-spacing: 6px;
            line-height: 44.8px;
            text-decoration: none soli rgb(255, 255, 255);
            text-transform: uppercase;
        }

        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .slideshow-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/1t.jpg');
            background-size: cover;
            background-position: center;
            animation: kenBurnsEffect 10s infinite alternate;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.4); */
            z-index: 2;
        }

        .content-container {
            position: relative;
            z-index: 3;
            color: white;
            text-align: center;
        }

        @keyframes kenBurnsEffect {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.1);
            }
        }

        .main-title {
            font-family: Montserrat, sans-serif;
            font-size: 62px;
            font-weight: 300;
            letter-spacing: 10px;
            line-height: 167px;
            text-decoration: none solid rgb(255, 255, 255);
            text-transform: uppercase;
        }

        .subtitlee {
            font-family: Piazzolla, sans-serif;
            font-size: 22.4px;
            font-weight: 500;
            letter-spacing: 6px;
            line-height: 22.4px;
            text-decoration: none solid rgb(255, 255, 255);
            text-transform: capitalize;
        }
    </style>

    <!-- gallery -->
    <style>
        /* Custom Navigation Styles */
        .nav-tabs {
            border: none;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #666;
            font-size: 1.1rem;
            padding: 1rem 1.5rem;
            margin: 0 0.5rem;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: #333;
            background: none;
        }

        .nav-tabs .nav-link.active {
            color: #0d6efd;
            background: none;
        }

        .nav-tabs .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #0d6efd;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .nav-tabs .nav-link.active::after {
            transform: scaleX(1);
        }

        /* Gallery Grid */
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            margin-bottom: 1.5rem;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }

        /* Modal Styles */
        .modal-fullscreen {
            background: rgba(0, 0, 0, 0.9);
        }

        .modal-fullscreen .modal-content {
            background: none;
            border: none;
        }

        .modal-image {
            max-height: 85vh;
            object-fit: contain;
            border-radius: 8px;
        }

        .modal-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }

        .modal-nav-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-prev {
            left: 20px;
        }

        .modal-next {
            right: 20px;
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            background: none;
            border: none;
            font-size: 2rem;
            z-index: 1050;
            transition: color 0.3s ease;
        }

        .modal-close:hover {
            color: #0d6efd;
        }

        .image-caption {
            color: white;
            text-align: center;
            margin-top: 1rem;
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .nav-tabs .nav-link {
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }

            .gallery-item img {
                height: 250px;
            }

            .modal-nav-btn {
                width: 40px;
                height: 40px;
            }
        }
    </style>

    <style>
        /* Custom Styles */
        .hero-sectionr {
            background-color: #fcf1d9;
            display: flex;
            align-items: center;
        }

        .main-titlee {
            font-family: Montserrat, sans-serif;
            color: #333;
            font-weight: 200;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 4px;
            line-height: 25px;
            padding: 40px 10px;
        }

        .testimonial-section {
            background-color: #fcf1d9;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .image-side {
            padding: 0;
            position: relative;
            min-height: 500px;
        }

        .image-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .testimonial-side {
            background-color: #fcf1d9;
            padding: 40px;
        }

        .testimonial-logo {
            margin-bottom: 40px;
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            background-color: #f8f9fa;
            padding: 8px 15px;
            border-radius: 50px;
            margin-bottom: 20px;
            color: #055edd;
        }

        .verified-badge i {
            color: #0d6efd;
            margin-right: 8px;
        }

        .testimonial-text {
            color: #555;
            background-color: #f7f7f3;
            margin-bottom: 25px;
            font-style: italic;
            padding: 10px;
        }

        .testimonial-author {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .testimonial-location {
            color: #666;
            font-size: 1rem;
        }

        .carousel-indicators {
            position: relative;
            margin-top: 30px;
        }

        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 5px;
            border: none;
        }

        .carousel-indicators button.active {
            background-color: #666;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 50%;
            top: 40%;
            transform: translateY(-50%);
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 991px) {
            .image-side {
                min-height: 300px;
            }

            .testimonial-side {
                padding: 30px;
            }

            .main-titlee {
                font-size: 2rem;
                margin-bottom: 40px;
            }
        }
    </style>

    <style>
        .loader-container {
            text-align: center;
            padding: 20px;
            display: none;
        }

        .loader {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid #f3f3f3;
            border-radius: 50%;
            border-top: 3px solid #0d6efd;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body>

    <?php include 'includes/header.php'; ?>

    <section class="hero-sections d-flex align-items-center">
        <div class="slideshow-container">
            <div class="slideshow-image"></div>
        </div>
        <div class="overlay"></div>
        <div class="container content-container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <h1 class="main-title">Maya Kobe Gallery</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <!-- Main Navigation -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <button class="nav-link active" data-category="all">All</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="aerial">Aerial</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="bedrooms">Suites</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="cottage">Prestige Suite</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="pool-outdoors">Pool/Outdoors</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="kitchen">Kitchen</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="service">Service</button>
            </li>
        </ul>

        <!-- Gallery Grid -->
        <div class="row g-4" id="galleryGrid">
            <!-- Gallery items will be dynamically added here -->
        </div>
        <div class="loader-container" id="loaderContainer">
            <div class="loader"></div>
        </div>
    </div>

    <!-- Fullscreen Modal -->
    <div class="modal fade modal-fullscreen" id="imageModal" tabindex="-1" aria-hidden="true" style="z-index: 99999;">
        <button class="modal-close" data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body position-relative p-0">
                    <button class="modal-nav-btn modal-prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <img src="" class="modal-image w-100" alt="">
                    <button class="modal-nav-btn modal-next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="image-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="hero-sectionr">
        <div class="container">
            <h1 class="main-titlee">Experience a paradise like no other</h1>

            <div class="row testimonial-section">
         
                <div class="col-lg-6 image-side">
                    <img src="images/D1.jpg.webp" alt="Luxury oceanview terrace">
                </div>

        
                <div class="col-lg-6 testimonial-side">
                    <div class="testimonial-logo"></div>
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          
                            <div class="carousel-item active">
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Verified Review</span>
                                </div>
                                <p class="testimonial-text">"This was the perfect place for us to relax and unwind. We
                                    love the house, modern layout, pool, outdoor shower, beach... everything!"</p>
                                <h3 class="testimonial-author">- Viv & Peter Thairu</h3>
                                <p class="testimonial-location">United States</p>
                            </div>
                     
                            <div class="carousel-item">
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Verified Review</span>
                                </div>
                                <p class="testimonial-text">"I wanted to take moment to send you a massive asante for
                                    enabling me to curate an incredible birthday celebration. It was definitely one for
                                    the books. Your Home is absolutely spectacular."</p>
                                <h3 class="testimonial-author">- Erin</h3>
                                <p class="testimonial-location">United States</p>
                            </div>
                       
                            <div class="carousel-item">
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Verified Review</span>
                                </div>
                                <p class="testimonial-text">"We will always remember this stunning place–its vibrance,
                                    its calm aura, its unbelievably kind staff. Our five days were filled with
                                    astonishment. Thank you with all our hearts!"</p>
                                <h3 class="testimonial-author">- Sonal Patel</h3>
                                <p class="testimonial-location">United States</p>
                            </div>
                        </div>

               
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const galleryData = [
                ...[
                    'images/maya-kobe/Aerial/mayakobe-10.webp',
                    'images/maya-kobe/Aerial/mayakobe-2.webp',
                    'images/maya-kobe/Aerial/mayakobe-3.webp',
                    'images/maya-kobe/Aerial/mayakobe-4.webp',
                    'images/maya-kobe/Aerial/mayakobe-5.webp',
                    'images/maya-kobe/Aerial/mayakobe-6.webp',
                    'images/maya-kobe/Aerial/mayakobe-7.webp',
                    'images/maya-kobe/Aerial/mayakobe-8.webp',
                    'images/maya-kobe/Aerial/mayakobe-9.webp',
                    'images/maya-kobe/Aerial/mayakobe.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'aerial',
                    caption: 'Image'
                })),

                ...[
                 'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/Maya kobe  Haze suite 1.jpg',
                'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/Maya kobe  Haze suite 2.jpg',
                'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/Maya kobe  Haze suite 4.jpg',
                'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/Maya kobe  Haze suite 6.jpg',
                //old images

                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-3.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-4.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-5.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-6.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise-7.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.bedroomrightfrontsunrise.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.night.bedroom1-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.night.bedroom1-3.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.night.bedroom1.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.night.bedroom2-5.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 1/mayakobe.night.bedroom2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 2/mayakobe.night.bedroom2-6.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 2/mayakobe.night.bedroom3-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 2/mayakobe.outdoor.bedroomrightbacksunset.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 2/mayakobe.outdoor.bedroomrightbacksunset1.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 2/mayakobe.outdoor.bedroomrightbacksunset2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-3.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-4.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-5.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-6.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-7.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-8.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.night.bedroom2-4.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-10.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-3.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-4.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-5.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-6.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-7.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-8.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.bedroomleftfrontsunrise2-9.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.night.bedroom2-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.night.bedroom3-2.webp',
                    'images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 4/mayakobe.night.bedroom3.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'bedrooms',
                    caption: 'Image'
                })),

                ...[
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 7.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 8.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 9.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 11.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 12.jpg',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/Maya Kobe prestige suite 13.jpg',
                    //old images

                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bathroom/mayakobe.cottage.bedroom.bathroom-2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bathroom/mayakobe.cottage.bedroom.bathroom-3.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bathroom/mayakobe.cottage.bedroom.bathroom-4.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bathroom/mayakobe.cottage.bedroom.bathroom.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bathroom/mayakobe.cottage.outdoor.bedroom2.bathroom-2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.bedroom-2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.bedroom-3.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.bedroom-4.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.bedroom-5.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.bedroom.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.outdoor.bedroom2.bathroom-4.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.outdoor.bedroom2.bathroom.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.outdoor.bedroom2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Bedrooms/mayakobe.cottage.outdoor.bedroom2.outdoor.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Living Room/mayakobe.cottage.kitchen.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Living Room/mayakobe.cottage.livingroom-2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Living Room/mayakobe.cottage.livingroom-3.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage Living Room/mayakobe.cottage.livingroom.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-10.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-11.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-12.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-13.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-14.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-16.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-17.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-2.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-3.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-4.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-6.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-7.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-8.webp',
                    'images/maya-kobe/Maya Kobe - Cottage/Cottage PoolView/mayakobe.cottage.outdoor-9.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'cottage',
                    caption: 'Image'
                })),

                ...[
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bedroomleftfrontsunrise2-11.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bedroomrightfrontsunrise-10.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bedroomrightfrontsunrise-8.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bedroomrightfrontsunrise-9.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bofabeach-2.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bofabeach-3.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bofabeach-4.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bofabeach-5.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.bofabeach.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.livingroom.outdoor-3.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.livingroom.outdoor.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-10.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-11.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-12.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-13.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-15.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-16.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-17.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-18.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-19.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-2.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-20.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-22.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-23.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-24.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-25.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-27.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-28.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-29.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-3.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-30.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-31.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-32.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-33.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-34.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-4.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-5.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-6.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-7.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor-8.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.behind-2.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.behind-3.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.behind-4.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.behind-6.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.behind.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.dining-2.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.dining-3.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.dining-4.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.dining.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoor.foodservice-21.webp',
                    'images/maya-kobe/Maya Kobe - Day Outdoor, Pool, Beach/mayakobe.outdoorvolleyball_.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-10.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-11.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-2.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-3.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-4.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-5.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-6.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-8.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea-9.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.livingarea.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Dining, Living Evening/mayakobe.night.outdoor-2.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-10.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-11.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-12.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-13.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-14.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-15.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-16.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-17.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-18.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-19.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-20.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-22.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-23.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-24.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-25.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-26.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-27.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-28.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-29.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-3.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-30.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-31.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-32.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-33.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-34.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-35.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-36.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-37.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-38.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-39.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-4.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-6.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-7.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-8.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor-9.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoor.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.night.outdoorcrazystory-3.webp',
                    'images/maya-kobe/Maya Kobe - Evening Outdoor/Maya Kobe - Outdoors Evening/mayakobe.outdoorvolleyball_-2.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'pool-outdoors',
                    caption: 'Image'
                })),

                ...[
                    'images/maya-kobe/Maya Kobe - Kitchen/mayakobe.kitchen.webp',
                    'images/maya-kobe/Maya Kobe - Kitchen/mayakobe.kitchen-2.webp',
                    'images/maya-kobe/Maya Kobe - Kitchen/mayakobe.kitchen-3.webp',
                    'images/maya-kobe/Maya Kobe - Kitchen/mayakobe.kitchen-5.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'kitchen',
                    caption: 'Image'
                })),

                ...[
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-10.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-12.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-13.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-14.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-15.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-3.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-4.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-5.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-6.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-7.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-8.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice-9.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.foodservice.webp',
                    'images/maya-kobe/Maya Kobe - Service/mayakobe.outdoor.webp'
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'service',
                    caption: 'Image'
                }))
            ];

            const galleryGrid = document.getElementById('galleryGrid');
            const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            let currentCategory = 'all';
            let currentImageIndex = 0;

            let imagesPerLoad = 6;
            let currentlyLoadedImages = 0;
            let isLoading = false;

            const loaderContainer = document.getElementById('loaderContainer');

            function attachClickHandlers() {
                document.querySelectorAll('.gallery-item').forEach((item, index) => {
                    item.addEventListener('click', () => {
                        currentImageIndex = parseInt(item.dataset.index);
                        showImage(currentImageIndex);
                        imageModal.show();
                    });
                });
            }

            function renderGallery(append = false) {
                if (append) {
                    loaderContainer.style.display = 'block';
                    // Add a small delay to show the loading animation
                    setTimeout(() => {
                        renderImages(append);
                        loaderContainer.style.display = 'none';
                    }, 800);
                } else {
                    renderImages(append);
                }
            }

            function renderImages(append) {
                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                if (!append) {
                    galleryGrid.innerHTML = '';
                    currentlyLoadedImages = 0;
                }

                const startIndex = currentlyLoadedImages;
                const endIndex = Math.min(startIndex + imagesPerLoad, filteredImages.length);
                const imagesToRender = filteredImages.slice(startIndex, endIndex);

                const newHTML = imagesToRender.map((item, index) => `
                    <div class="col-md-4">
                        <div class="gallery-item fade-in" data-index="${startIndex + index}">
                            <img src="${item.src}" alt="${item.caption}" loading="lazy">
                            <div class="gallery-overlay">
                                <i class="fas fa-expand"></i>
                            </div>
                        </div>
                    </div>
                `).join('');

                galleryGrid.insertAdjacentHTML('beforeend', newHTML);
                currentlyLoadedImages = endIndex;
                isLoading = false;

                // Add click handlers to new gallery items
                attachClickHandlers();
            }

            // Show image in modal
            function showImage(index) {
                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                const image = filteredImages[index];
                const modalImage = document.querySelector('.modal-image');
                const caption = document.querySelector('.image-caption');

                modalImage.src = image.src;
                modalImage.alt = image.caption;
                caption.textContent = image.caption;
            }

            // Attach click handlers
            function attachClickHandlers() {
                document.querySelectorAll('.gallery-item').forEach((item, index) => {
                    item.addEventListener('click', () => {
                        currentImageIndex = parseInt(item.dataset.index);
                        showImage(currentImageIndex);
                        imageModal.show();
                    });
                });
            }

            // Handle infinite scroll
            function handleScroll() {
                if (isLoading) return;

                const scrollPosition = window.innerHeight + window.scrollY;
                const bodyHeight = document.documentElement.scrollHeight;

                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                if (scrollPosition >= bodyHeight - 1000 && currentlyLoadedImages < filteredImages.length) {
                    isLoading = true;
                    renderGallery(true);
                }
            }

            // Navigation event handlers
            document.querySelectorAll('.nav-tabs .nav-link').forEach(link => {
                link.addEventListener('click', function () {
                    document.querySelectorAll('.nav-tabs .nav-link').forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    currentCategory = this.dataset.category;
                    renderGallery(false);
                });
            });

            // Modal navigation
            document.querySelector('.modal-prev').addEventListener('click', () => {
                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                currentImageIndex = (currentImageIndex - 1 + filteredImages.length) % filteredImages.length;
                showImage(currentImageIndex);
            });

            document.querySelector('.modal-next').addEventListener('click', () => {
                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                currentImageIndex = (currentImageIndex + 1) % filteredImages.length;
                showImage(currentImageIndex);
            });

            // Keyboard navigation
            document.addEventListener('keydown', function (e) {
                if (imageModal._element.classList.contains('show')) {
                    if (e.key === 'Escape') imageModal.hide();
                    else if (e.key === 'ArrowLeft') document.querySelector('.modal-prev').click();
                    else if (e.key === 'ArrowRight') document.querySelector('.modal-next').click();
                }
            });

            // Add scroll event listener
            window.addEventListener('scroll', handleScroll);

            // Initialize gallery
            renderGallery();
        });
    </script>

    <script>
        $(document).ready(function () {
            // Handle click on parent dropdown toggle (including submenus)
            $('.dropdown-toggle').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                var $dropdownMenu = $(this).next('.dropdown-menu');
                var isSubmenu = $dropdownMenu.hasClass('dropdown-submenu');

                // If clicking on a parent dropdown (not a submenu), close other dropdowns
                if (!isSubmenu) {
                    $('.dropdown-menu').not($dropdownMenu).removeClass('show');
                    $('.dropdown-toggle').not($(this)).attr('aria-expanded', 'false');
                } else {
                    // If clicking on a submenu toggle, close other submenus at the same level
                    var $siblingSubmenus = $(this).closest('.dropdown-menu')
                        .find('.dropdown-submenu')
                        .not($dropdownMenu);

                    $siblingSubmenus.removeClass('show');
                    $siblingSubmenus.prev('.dropdown-toggle').attr('aria-expanded', 'false');
                }

                // Toggle the clicked dropdown (parent or submenu)
                $dropdownMenu.toggleClass('show');

                // Toggle aria-expanded attribute for accessibility
                $(this).attr('aria-expanded', function (_, attr) {
                    return attr === 'true' ? 'false' : 'true';
                });
            });

            // Close dropdowns when clicking outside
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown-menu').removeClass('show');
                    $('.dropdown-toggle').attr('aria-expanded', 'false');
                }
            });

            // Prevent closing of the parent dropdown when clicking on a submenu toggle
            $('.dropdown-submenu > .dropdown-toggle').on('click', function (e) {
                e.stopPropagation(); // Prevent closing parent dropdown when clicking on submenu
            });
        });
    </script>

    <script>
        document.querySelectorAll('.custom-toggler').forEach(button => {
            button.addEventListener('click', function () {
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
            });
        });
    </script>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

</body>

</html>