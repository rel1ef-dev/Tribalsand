<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TribalSand | Events Gallery</title>

    <link rel="canonical" href="https://tribalsand.com/events-gallery.php" />

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css" rel="stylesheet">



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

            background-image: url('images/event-gallery/AfricanNight-61.jpg');

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

        .containerr {

            padding: 3rem 1rem;

        }



        /* Enhanced tab styling */

        .nav-tabs {

            border: none;

            justify-content: center;

            /* gap: 2.5rem; */

            margin-bottom: 4rem;

            flex-wrap: wrap;

        }



        .nav-tabs .nav-link {

            border: none;

            color: #666;

            font-size: 1.1rem;

            padding: 0.75rem 0;

            position: relative;

            transition: all 0.3s ease;

            font-weight: 500;

        }



        .nav-tabs .nav-link:hover {

            color: var(--text-color);

        }



        .nav-tabs .nav-link.active {

            color: var(--text-color);

            background: none;

        }



        .nav-tabs .nav-link::after {

            content: "";

            position: absolute;

            bottom: -2px;

            left: 0;

            width: 100%;

            height: 2px;

            background-color: var(--primary-color);

            transform: scaleX(0);

            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);

        }



        .nav-tabs .nav-link.active::after {

            transform: scaleX(1);

        }



        /* Enhanced gallery styling */

        .gallery-grid {

            display: grid;

            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));

            gap: 2rem;

            padding: 1rem;

        }



        .gallery-item {

            position: relative;

            border-radius: 8px;

            overflow: hidden;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);

            cursor: pointer;

            transition: transform 0.3s ease;

        }



        .gallery-item:hover {

            transform: translateY(-5px);

        }



        .gallery-img {

            width: 100%;

            height: 300px;

            object-fit: cover;

            transition: transform 0.5s ease;

        }



        .gallery-item:hover .gallery-img {

            transform: scale(1.05);

        }



        .gallery-overlay {

            position: absolute;

            inset: 0;

            background: var(--overlay-color);

            opacity: 0;

            transition: opacity 0.3s ease;

            display: flex;

            align-items: center;

            justify-content: center;

            pointer-events: none;

        }



        .gallery-item:hover .gallery-overlay {

            opacity: 1;

        }



        .gallery-overlay i {

            color: white;

            font-size: 2rem;

            transform: translateY(20px);

            opacity: 0;

            transition: all 0.3s ease;

        }



        .gallery-item:hover .gallery-overlay i {

            transform: translateY(0);

            opacity: 1;

        }



        /* Enhanced Lightbox Styles */

        .lightbox {

            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0, 0, 0, 0.95);

            z-index: 1050;

            backdrop-filter: blur(8px);

            padding: 2rem;

            opacity: 0;

            transition: opacity 0.3s ease;

        }



        .lightbox.active {

            display: flex;

            align-items: center;

            justify-content: center;

            opacity: 1;

        }



        .lightbox-content {

            position: relative;

            max-width: 1200px;

            width: 90%;

            margin: auto;

            animation: zoomIn 0.3s ease;

        }



        .lightbox-img {

            width: 100%;

            height: auto;

            max-height: 85vh;

            object-fit: contain;

            border-radius: 12px;

            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);

        }



        .lightbox-nav {

            position: absolute;

            top: 50%;

            left: -80px;

            right: -80px;

            transform: translateY(-50%);

            display: flex;

            justify-content: space-between;

            pointer-events: none;

        }



        .prev-lightbox,

        .next-lightbox {

            width: 56px;

            height: 56px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.1);

            border: 2px solid rgba(255, 255, 255, 0.2);

            color: white;

            font-size: 24px;

            cursor: pointer;

            transition: all 0.3s ease;

            display: flex;

            align-items: center;

            justify-content: center;

            pointer-events: auto;

            backdrop-filter: blur(4px);

        }



        .prev-lightbox:hover,

        .next-lightbox:hover {

            background: rgba(255, 255, 255, 0.2);

            border-color: rgba(255, 255, 255, 0.3);

            transform: scale(1.1);

        }



        .close-lightbox {

            position: absolute;

            top: -30px;

            right: 0;

            width: 48px;

            height: 48px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.1);

            border: 2px solid rgba(255, 255, 255, 0.2);

            color: white;

            font-size: 28px;

            cursor: pointer;

            transition: all 0.3s ease;

            display: flex;

            align-items: center;

            justify-content: center;

            backdrop-filter: blur(4px);

        }



        .close-lightbox:hover {

            background: rgba(255, 255, 255, 0.2);

            border-color: rgba(255, 255, 255, 0.3);

            transform: scale(1.1) rotate(90deg);

        }



        @keyframes zoomIn {

            from {

                opacity: 0;

                transform: scale(0.95);

            }



            to {

                opacity: 1;

                transform: scale(1);

            }

        }



        /* Responsive adjustments */

        @media (max-width: 1024px) {

            .lightbox-nav {

                left: -20px;

                right: -20px;

            }



            .prev-lightbox,

            .next-lightbox {

                width: 48px;

                height: 48px;

                font-size: 20px;

            }

        }



        @media (max-width: 768px) {

            .lightbox {

                padding: 1rem;

            }



            .close-lightbox {

                top: -40px;

                width: 40px;

                height: 40px;

                font-size: 24px;

            }

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



        /* Room Type Navigation */

        .room-types {

            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 1rem;

            margin-bottom: 3rem;

            padding: 0;

            list-style: none;

        }



        .room-type-btn {

            background: none;

            border: none;

            color: #666;

            padding: 0.5rem 1rem;

            position: relative;

            transition: all 0.3s ease;

        }



        .room-type-btn:hover {

            color: #333;

        }



        .room-type-btn.active {

            color: #0d6efd;

        }



        .room-type-btn::after {

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



        .room-type-btn.active::after {

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

                    <h1 class="main-title">Events Gallery</h1>

                </div>

            </div>

        </div>

    </section>



    <div class="containerr">

        <!-- Tabs -->

        <ul class="nav nav-tabs mb-4">

            <li class="nav-item">

                <button class="nav-link active" data-category="all">All</button>

            </li>

            <li class="nav-item">

                <button class="nav-link" data-category="weddings">Weddings</button>

            </li>

            <li class="nav-item">

                <button class="nav-link" data-category="birthdays">Birthdays</button>

            </li>

            <li class="nav-item">

                <button class="nav-link" data-category="festive-retreats">Festive retreats</button>

            </li>

            <li class="nav-item">

                <button class="nav-link" data-category="celebratory-retreats">Celebratory retreats</button>

            </li>

        </ul>



        <!-- Tab Content -->

        <div class="row g-4" id="galleryGrid">

            <!-- Gallery items will be dynamically added here -->

        </div>

        <div class="loader-container" id="loaderContainer">

            <div class="loader"></div>

        </div>

    </div>



    <!-- Fullscreen Modal -->

    <!-- <div class="modal fade modal-fullscreen" id="imageModal" tabindex="-1" aria-hidden="true" style="z-index: 99999;">

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

    </div> -->


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
                    <!-- <img src="" class="modal-image w-100" alt=""> -->
                    <!-- <div class="modal-image w-100" id="modalMediaContainer"></div> -->

                    <div class="modal-body p-0 d-flex align-items-center justify-content-center overflow-hidden" style="height:80vh;">
                        <div class="modal-image w-100 h-100 d-flex align-items-center justify-content-center" id="modalMediaContainer"></div>
                    </div>



                    <button class="modal-nav-btn modal-next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="image-caption"></div>
                </div>
            </div>
        </div>
    </div>








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

                {
                    "id": 58,
                    "src": "https://tribalsand.com/images/event-gallery/StorySaver.net-gilberttunjeh-Video-1770798657491.mp4",
                    "category": "weddings",
                    "caption": "Wedding Highlight",
                    "type": "video"
                },
                {

                    "id": 1,

                    "src": "images/event-gallery/AfricanNight-2.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 2,

                    "src": "images/event-gallery/AfricanNight-24.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 3,

                    "src": "images/event-gallery/AfricanNight-260.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 4,

                    "src": "images/event-gallery/AfricanNight-27.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 5,

                    "src": "images/event-gallery/AfricanNight-396.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 6,

                    "src": "images/event-gallery/AfricanNight-486.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 7,

                    "src": "images/event-gallery/AfricanNight-5.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 8,

                    "src": "images/event-gallery/AfricanNight-50.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 9,

                    "src": "images/event-gallery/AfricanNight-505.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 10,

                    "src": "images/event-gallery/AfricanNight-51.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 11,

                    "src": "images/event-gallery/AfricanNight-58.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 13,

                    "src": "images/event-gallery/AfricanNight-61.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 14,

                    "src": "images/event-gallery/AfricanNight-66.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 15,

                    "src": "images/event-gallery/AfricanNight-68.jpg",

                    "category": "weddings",

                    "caption": "Image"

                },

                {

                    "id": 16,

                    "src": "images/event-gallery/Birthday29th-43.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 17,

                    "src": "images/event-gallery/Birthday29th-481.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 18,

                    "src": "images/event-gallery/Birthday29th-56.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 19,

                    "src": "images/event-gallery/Birthday29th-578.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 20,

                    "src": "images/event-gallery/Birthday29th-589.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 21,

                    "src": "images/event-gallery/Birthday29th-60.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 22,

                    "src": "images/event-gallery/Birthday29th-637.jpg",

                    "category": "birthdays",

                    "caption": "Image"

                },

                {

                    "id": 23,

                    "src": "images/event-gallery/BRUNCH.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 24,

                    "src": "images/event-gallery/NYE-16.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 25,

                    "src": "images/event-gallery/NYE-25.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 26,

                    "src": "images/event-gallery/NYE-35.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 27,

                    "src": "images/event-gallery/NYE-376.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 28,

                    "src": "images/event-gallery/NYE-4.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 29,

                    "src": "images/event-gallery/NYE-46.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 30,

                    "src": "images/event-gallery/NYE-53.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 31,

                    "src": "images/event-gallery/NYE-658.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 32,

                    "src": "images/event-gallery/NYE-66.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 33,

                    "src": "images/event-gallery/NYE-78.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 34,

                    "src": "images/event-gallery/NYE-8.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 35,

                    "src": "images/event-gallery/NYE-87.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 36,

                    "src": "images/event-gallery/NYE-88.jpg",

                    "category": "festive-retreats",

                    "caption": "Image"

                },

                {

                    "id": 37,

                    "src": "images/event-gallery/PoolParty30th-11.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 38,

                    "src": "images/event-gallery/PoolParty30th-16.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 39,

                    "src": "images/event-gallery/PoolParty30th-23.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 40,

                    "src": "images/event-gallery/PoolParty30th-252.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 41,

                    "src": "images/event-gallery/PoolParty30th-302.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 42,

                    "src": "images/event-gallery/PoolParty30th-9.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 43,

                    "src": "images/event-gallery/WakaWakaIsland-315.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 44,

                    "src": "images/event-gallery/WelcomeDinner-13.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 45,

                    "src": "images/event-gallery/WelcomeDinner-2.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 46,

                    "src": "images/event-gallery/WelcomeDinner-28.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 47,

                    "src": "images/event-gallery/WelcomeDinner-3.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 48,

                    "src": "images/event-gallery/WelcomeDinner-33.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 49,

                    "src": "images/event-gallery/WelcomeDinner-34.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 50,

                    "src": "images/event-gallery/WelcomeDinner-47.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 51,

                    "src": "images/event-gallery/WelcomeDinner-59.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 52,

                    "src": "images/event-gallery/WelcomeDinner-61.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 53,

                    "src": "images/event-gallery/WelcomeDinner-66.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 54,

                    "src": "images/event-gallery/WelcomeDinner-79.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 55,

                    "src": "images/event-gallery/WelcomeDinner-8.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 56,

                    "src": "images/event-gallery/WelcomeDinner-80.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                },

                {

                    "id": 57,

                    "src": "images/event-gallery/WelcomeDinner.jpg",

                    "category": "celebratory-retreats",

                    "caption": "Image"

                }

            ];



            const galleryGrid = document.getElementById('galleryGrid');

            const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));

            let currentCategory = 'all';

            let currentImageIndex = 0;

            let imagesPerLoad = 6;

            let currentlyLoadedImages = 0;

            let isLoading = false;



            const loaderContainer = document.getElementById('loaderContainer');



            // function attachClickHandlers() {

            //     document.querySelectorAll('.gallery-item').forEach((item, index) => {

            //         item.addEventListener('click', () => {

            //             currentImageIndex = parseInt(item.dataset.index);

            //             showImage(currentImageIndex);

            //             imageModal.show();

            //         });

            //     });

            // }

             function attachClickHandlers() {
                document.querySelectorAll('.gallery-item').forEach((item) => {
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



            // Move your existing render logic to this new function

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



            //     const newHTML = imagesToRender.map((item, index) => `

            //     <div class="col-md-4">

            //         <div class="gallery-item fade-in" data-index="${startIndex + index}">

            //             <img src="${item.src}" alt="${item.caption}" loading="lazy">

            //             <div class="gallery-overlay">

            //                 <i class="fas fa-expand"></i>

            //             </div>

            //         </div>

            //     </div>

            // `).join('');

             const newHTML = imagesToRender.map((item, index) => {

            const mediaElement = item.type === "video"
                ? `
                        
                    <video class="w-100" controls preload="metadata" style="height:290px;">
                        <source src="${item.src}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                `
                : `
                    <img src="${item.src}" alt="${item.caption}" loading="lazy">
                `;

            return `
                <div class="col-md-4">
                    <div class="gallery-item fade-in" data-index="${startIndex + index}">
                        ${mediaElement}
                        <div class="gallery-overlay">
                            <i class="fas fa-expand"></i>
                        </div>
                    </div>
                </div>
            `;
            }).join('');






                galleryGrid.insertAdjacentHTML('beforeend', newHTML);

                currentlyLoadedImages = endIndex;

                isLoading = false;



                // Add click handlers to new gallery items

                attachClickHandlers();

            }





            // Infinite scroll handler

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



            // Show image in modal

            // function showImage(index) {

            //     const filteredImages = galleryData.filter(item => {

            //         if (currentCategory === 'all') return true;

            //         return item.category === currentCategory;

            //     });



            //     const image = filteredImages[index];

            //     const modalImage = document.querySelector('.modal-image');

            //     const caption = document.querySelector('.image-caption');



            //     modalImage.src = image.src;

            //     modalImage.alt = image.caption;

            //     caption.textContent = image.caption;

            // }

            function showImage(index) {

                const filteredImages = galleryData.filter(item => {
                    if (currentCategory === 'all') return true;
                    return item.category === currentCategory;
                });

                const item = filteredImages[index];

                const modalContainer = document.getElementById("modalMediaContainer");
                const caption = document.querySelector(".image-caption");

                if (item.type === "video") {

                    modalContainer.innerHTML = `
                        <video class="w-100" controls autoplay>
                            <source src="${item.src}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    `;

                } else {

                    modalContainer.innerHTML = `
                        <img src="${item.src}" class="img-fluid w-100" alt="${item.caption}">
                    `;
                }

                // caption.textContent = item.caption;
            }



            
            document.getElementById('imageModal')
                .addEventListener('hidden.bs.modal', function () {
                    document.getElementById("modalMediaContainer").innerHTML = "";
            });




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