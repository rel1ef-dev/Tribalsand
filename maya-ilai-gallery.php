<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TribalSand | Maya Ilai Gallery</title>
    <meta name="description" content="Stay at Maya Ilai by TribalSand – a private beachfront villa offering luxury accommodation, stunning ocean views, and personalized services for an unforgettable escape.">
    <link rel="icon" href="images/favicon.png">
    <!-- Canonical -->
    <link rel="canonical" href="https://tribalsand.com/Maya Ilai-gallery" />
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
            background-image: url('images/maya_illai/SITE PHOTOS BAR AND POOL-images-1.jpg');
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
                    <h1 class="main-title">Maya Ilai Gallery</h1>
                    <a href="maya_ilai.php" class="btn book-btn px-4 py-2" style="background-color:#C9A96A; border-radius: 0;">
                        REQUEST AVAILABILITY →
                    </a>
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
                <button class="nav-link" data-category="Doubleroom">Double Rooms</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="Quadrooms">Quadruple Rooms</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="Studios">Studios</button> 
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="Villas">Villas</button>
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
                    'images/maya_illai/Double_Rooms/Doubleroom1.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom2.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom3.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom4.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom5.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom6.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom7.jpeg',
                    'images/maya_illai/Double_Rooms/Doubleroom8.jpeg'
            
                ].map((src, index) => ({
                    id: index + 1,
                    src,
                    category: 'Doubleroom',
                    caption: 'Aerial View'
                })),

                ...[
                    'images/maya_illai/Quadruple_Rooms/quadrupleroom1.jpeg',
                    'images/maya_illai/Quadruple_Rooms/quadrupleroom2.jpeg',

                ].map((src, index) => ({
                    id: index + 13,
                    src,
                    category: 'Quadrooms',
                    type: 'Bedroom 1',
                    caption: 'Bedroom 1 View'
                })),

                ...[
                    'images/maya_illai/Studios/Studio1.jpeg',
                    'images/maya_illai/Studios/Studio2.jpeg',
                    'images/maya_illai/Studios/Studio3.jpeg',
                    'images/maya_illai/Studios/Studio4.jpeg',
                    'images/maya_illai/Studios/Studio5.jpeg',
                    'images/maya_illai/Studios/Studio6.jpeg',
                    'images/maya_illai/Studios/Studio7.jpeg',
                    'images/maya_illai/Studios/Studio8.jpeg',
                    'images/maya_illai/Studios/Studio9.jpeg',
                    'images/maya_illai/Studios/Studio10.jpeg',
                    'images/maya_illai/Studios/Studio11.jpeg',
                    'images/maya_illai/Studios/Studio12.jpeg',
                    'images/maya_illai/Studios/Studio13.jpeg',
                    'images/maya_illai/Studios/Studio14.jpeg',
                    'images/maya_illai/Studios/Studio15.jpeg'
                ].map((src, index) => ({
                    id: index + 23,
                    src,
                    category: 'Studios',
                    type: 'Studios',
                    caption: 'Studios View'
                })),

                ...[
                    'images/maya_illai/Villa/Villa1.jpeg',
                    'images/maya_illai/Villa/Villa2.jpeg',
                    'images/maya_illai/Villa/Villa3.jpeg',
                    'images/maya_illai/Villa/Villa4.jpeg',
                    'images/maya_illai/Villa/Villa5.jpeg',
                    'images/maya_illai/Villa/Villa6.jpeg',
                    'images/maya_illai/Villa/Villa7.jpeg',
                    'images/maya_illai/Villa/Villa8.jpeg',
                    'images/maya_illai/Villa/Villa9.jpeg',
                    'images/maya_illai/Villa/Villa10.jpeg',
                    'images/maya_illai/Villa/Villa11.jpeg',
                    'images/maya_illai/Villa/Villa12.jpeg',
                    'images/maya_illai/Villa/Villa13.jpeg',
                    'images/maya_illai/Villa/Villa14.jpeg',
                    'images/maya_illai/Villa/Villa15.jpeg',
                    'images/maya_illai/Villa/Villa16.jpeg',
                    'images/maya_illai/Villa/Villa17.jpeg',
                    'images/maya_illai/Villa/Villa18.jpeg',
                    'images/maya_illai/Villa/Villa19.jpeg',
                    'images/maya_illai/Villa/Villa20.jpeg',
                    'images/maya_illai/Villa/Villa21.jpeg',
                    'images/maya_illai/Villa/Villa22.jpeg',
                    'images/maya_illai/Villa/Villa23.jpeg',
                    'images/maya_illai/Villa/Villa24.jpeg',
                    'images/maya_illai/Villa/Villa25.jpeg',
                    'images/maya_illai/Villa/Villa26.jpeg',
                    'images/maya_illai/Villa/Villa27.jpeg',
                    'images/maya_illai/Villa/Villa28.jpeg',
                    'images/maya_illai/Villa/Villa29.jpeg',
                    'images/maya_illai/Villa/Villa30.jpeg',
                    'images/maya_illai/Villa/Villa31.jpeg',
                    'images/maya_illai/Villa/Villa32.jpeg',
                    'images/maya_illai/Villa/Villa33.jpeg',
                     
                ].map((src, index) => ({
                    id: index + 33,
                    src,
                    category: 'Villas',
                    type: 'Villas',
                    caption: 'Villas View'
                })),

                ...[
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.bedroom4.bath-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.bedroom4.bath-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.bedroom4.bath.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.bedroomupleftbathroom-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.twinbedroom-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.twinbedroom-4.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 4/myamani.twinbedroom.webp'
                ].map((src, index) => ({
                    id: index + 42,
                    src,
                    category: 'bedrooms',
                    type: 'Bedroom 4',
                    caption: 'Bedroom 4 View'
                })),

                ...[
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5-4.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5.bath-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5.bath-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5.bath.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.bedroom5.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.bedroom5-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.bedroom5-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.bedroom5.bath.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.bedroom5.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom-2.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom-3.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom-4.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom-6.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom-7.webp',
                    'images/my-amani/My Amani - Bedrooms/Bedroom 5/myamani.night.uprightroom.webp'
                ].map((src, index) => ({
                    id: index + 49,
                    src,
                    category: 'bedrooms',
                    type: 'Bedroom 5',
                    caption: 'Bedroom 5 View'
                })),

                ...[
                    // 'images/my-amani/My Amani - Entrance/myamani.gardenoutdoor-2.webp',
                    // 'images/my-amani/My Amani - Entrance/myamani.gardenoutdoor-3.webp',
                    'images/my-amani/My Amani - Entrance/myamani.gardenoutdoor.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-45.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-46.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-47.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-48.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-49.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-50.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-56.webp',
                    'images/my-amani/My Amani - Entrance/myamani.outdoor-57.webp'
                ].map((src, index) => ({
                    id: index + 66,
                    src,
                    category: 'entrance',
                    caption: 'Entrance View'
                })),

                ...[
                    'images/my-amani/My Amani - Kitchen/myamani.kitchen-2.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.kitchen.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.night.kitchen-2.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.night.kitchen-3.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.night.kitchen-4.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.outdoor-68.webp',
                    'images/my-amani/My Amani - Kitchen/myamani.outdoorkitchen-2.webp'
                ].map((src, index) => ({
                    id: index + 77,
                    src,
                    category: 'kitchen',
                    caption: 'Kitchen View'
                })),

                ...[
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingarea.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-10.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-11.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-12.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-13.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-14.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-15.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-16.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-17.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-19.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-20.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-21.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-22.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-5.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.livingroom-9.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.sunset.livingroom-2.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.sunset.livingroom-3.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.sunset.livingroom-4.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.sunset.livingroom-7.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Day/myamani.sunset.livingroom.webp'
                ].map((src, index) => ({
                    id: index + 84,
                    src,
                    category: 'livingRooms',
                    type: 'Day',
                    caption: 'Living Room Day View'
                })),

                ...[
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-10.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-15.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-16.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-2.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-3.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-4.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-5.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-6.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-7.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-8.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea-9.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingarea.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom-3.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom-6.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom-7.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom-8.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom-9.webp',
                    'images/my-amani/My Amani - LivingRoom/My Amani Livingroom - Night/myamani.night.livingroom.webp'
                ].map((src, index) => ({
                    id: index + 104,
                    src,
                    category: 'livingRooms',
                    type: 'Night',
                    caption: 'Living Room Night View'
                })),

                ...[
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.livingroom-23.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.livingroom-24.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.night.outdoorgarden-15.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-103.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-106.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-108.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-109.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-115.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-116.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-117.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-122.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-123.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-124.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-126.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-128.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-129.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-131.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-132.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-133.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-135.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-136.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-138.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-140.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-141.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-143.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-146.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-147.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-150.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-151.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-152.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-154.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-155.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-156.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-157.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-21.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-22.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-34.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-39.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-43.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-51.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-52.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-53.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-54.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-60.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-62.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-64.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-65.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-66.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-67.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-69.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-70.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-71.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-73.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-74.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-75.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-76.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-77.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-81.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-82.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-83.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-84.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-85.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-88.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-90.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-91.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-93.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-94.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-95.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-96.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-97.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-98.webp',
                    'images/my-amani/My Amani - Outdoor/My Amani Outdoor Day/myamani.outdoor-99.webp',
                ].map((src, index) => ({
                    id: index + 122,
                    src,
                    category: 'outdoor',
                    caption: 'Outdoor View'
                })),
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

            // Navigation event handlers
            document.querySelectorAll('.nav-tabs .nav-link').forEach(link => {
                link.addEventListener('click', function () {
                    document.querySelectorAll('.nav-tabs .nav-link').forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    currentCategory = this.dataset.category;
                    renderGallery(false); // Reset gallery on category change
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
            $('.dropdown-toggle').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                var $dropdownMenu = $(this).next('.dropdown-menu');
                var isSubmenu = $dropdownMenu.hasClass('dropdown-submenu');

                if (!isSubmenu) {
                    $('.dropdown-menu').not($dropdownMenu).removeClass('show');
                    $('.dropdown-toggle').not($(this)).attr('aria-expanded', 'false');
                } else {
                    var $siblingSubmenus = $(this).closest('.dropdown-menu')
                        .find('.dropdown-submenu')
                        .not($dropdownMenu);

                    $siblingSubmenus.removeClass('show');
                    $siblingSubmenus.prev('.dropdown-toggle').attr('aria-expanded', 'false');
                }

                $dropdownMenu.toggleClass('show');

                $(this).attr('aria-expanded', function (_, attr) {
                    return attr === 'true' ? 'false' : 'true';
                });
            });

            $(document).on('click', function (e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown-menu').removeClass('show');
                    $('.dropdown-toggle').attr('aria-expanded', 'false');
                }
            });

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