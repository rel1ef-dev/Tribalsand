<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TribalSand | Zuri Gallery</title>
    <meta name="description" content="Book Zuri Villa by TribalSand – a private beachfront villa offering luxury accommodation, stunning ocean views, and personalized services for an unforgettable escape.">
    <link rel="icon" href="images/favicon.png">

    <!-- Canonical -->
    <link rel="canonical" href="https://tribalsand.com/zuri-gallery" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- GLightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- Swiper CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css" rel="stylesheet">

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
            background-image: url('images/zuri-hero.webp');
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
                    <h1 class="main-title">Zuri Gallery</h1>
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
                <button class="nav-link" data-category="aerial">Aerial</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="beach">Beach</button>
            </li>
            <li class="nav-item">   
                <button class="nav-link" data-category="garden">Garden</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="greenhouse">Greenhouse</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="pool">Pool</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="bedrooms">Suites</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="entrance">Entrance</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="living-area">Living Area</button>
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
                // Aerial Category
                ...[
                    'images/zuri/Aerial/zuri.webp',
                    'images/zuri/Aerial/zuri-2.webp',
                    'images/zuri/Aerial/zuri-3.webp',
                    'images/zuri/Aerial/zuri-4.webp',
                    'images/zuri/Aerial/zuri-5.webp',
                    'images/zuri/Aerial/zuri-6.webp',
                    'images/zuri/Aerial/zuri-7.webp',
                    'images/zuri/Aerial/zuri-8.webp',
                    'images/zuri/Aerial/zuri-9.webp',
                    'images/zuri/Aerial/zuri-11.webp',
                    'images/zuri/Aerial/zuri-12.webp',
                    'images/zuri/Aerial/zuri-13.webp',
                    'images/zuri/Aerial/zuri-14.webp',
                    'images/zuri/Aerial/zuri-15.webp'
                ].map((src, index) => ({
                    id: `aerial-${index + 1}`,
                    src,
                    category: 'aerial',
                    caption: 'Aerial View'
                })),

                // Beach Category
                ...[
                    'images/zuri/Beach/zuri.watamu.beach.webp',
                    'images/zuri/Beach/zuri.watamu.beach-2.webp',
                    'images/zuri/Beach/zuri.watamu.beach-3.webp'
                ].map((src, index) => ({
                    id: `beach-${index + 1}`,
                    src,
                    category: 'beach',
                    caption: 'Beach Scene'
                })),

                // Garden Category
                ...[
                    'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-2.webp',
                    'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-3.webp',
                    'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-4.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-3.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-10.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-11.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-13.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-14.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-17.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-19.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-21.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-28.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-30.webp',
                    'images/zuri/Garden/zuri.watamu.morning.pool-31.webp',
                    'images/zuri/Garden/zuri.watamu.morning.upstares.outdoor.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.entry.garden-2.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea-17.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea-18.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-10.webp'
                ].map((src, index) => ({
                    id: `garden-${index + 1}`,
                    src,
                    category: 'garden',
                    caption: 'Garden View'
                })),

                // Greenhouse Category
                ...[
                    'images/zuri/Green House/zuri.watamu.outdoor.greenhouse-2.webp',
                    'images/zuri/Green House/Greenhouseimg1.jpeg',
                    'images/zuri/Green House/Greenhouseimg2.jpeg',
                    'images/zuri/Green House/Greenhouseimg3.jpeg',
                    'images/zuri/Green House/Greenhouseimg4.jpeg',
                    'images/zuri/Green House/Greenhouseimg5.jpeg',
                    'images/zuri/Green House/Greenhouseimg6.jpeg',
                    'images/zuri/Green House/Greenhouseimg7.jpeg',
                    'images/zuri/Green House/Greenhouseimg8.jpeg',
                    'images/zuri/Green House/Greenhouseimg9.jpeg',
                    'images/zuri/Green House/Greenhouseimg10.jpeg',
                    'images/zuri/Green House/Greenhouseimg11.jpeg',
                    'images/zuri/Green House/Greenhouseimg12.jpeg',
                    'images/zuri/Green House/Greenhouseimg13.jpeg',
                    'images/zuri/Green House/Greenhouseimg14.jpeg'   
                    
                ].map((src, index) => ({
                    id: `greenhouse-${index + 1}`,
                    src,
                    category: 'greenhouse',
                    caption: 'Greenhouse'
                })),

                // Pool Category
                ...[
                    'images/zuri/Pool/zuri.watamu.beach-4.webp',
                    'images/zuri/Pool/zuri.watamu.webp',
                    'images/zuri/Pool/zuri.watamu.morning.bedroom4-14.webp',
                    'images/zuri/Pool/zuri.watamu.morning.bedroom4-15.webp',
                    'images/zuri/Pool/zuri.watamu.morning.bedroom4-16.webp',
                    'images/zuri/Pool/zuri.watamu.morning.outdoor-2.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-15.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-16.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-2.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-20.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-22.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-23.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-24.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-26.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-27.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-29.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-4.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-6.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-7.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool-9.webp',
                    'images/zuri/Pool/zuri.watamu.morning.pool.webp',
                    'images/zuri/Pool/zuri.watamu.outdoor.pool-2.webp',
                    'images/zuri/Pool/zuri.watamu.outdoor.pool.webp',
                    'images/zuri/Pool/zuri.watamu.pool-2.webp',
                    'images/zuri/Pool/zuri.watamu.pool.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-12.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-13.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-2.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-4.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-5.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-6.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-8.webp',
                    'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-9.webp'
                ].map((src, index) => ({
                    id: `pool-${index + 1}`,
                    src,
                    category: 'pool',
                    caption: 'Pool Area'
                })),

                // Bedrooms Category
                ...[
                    
// Maji Suite
                    'images/zuri/Maji Suite/Maji Suite 1.jpg',
                    'images/zuri/Maji Suite/Maji Suite 2.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 1.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 2.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 3.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom.jpg',
                    'images/zuri/Maji Suite/Maji Suite.jpg',
                    
                    // Mwezi Suite
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0030.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0031.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0032.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0033.jpg', 
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0034.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0035.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0036.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0037.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0038.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0039.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0040.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0041.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0042.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0043.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0044.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0045.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0045.jpg',
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0046.jpg',
                   
                    // Us Suite
                    'images/zuri/Ua Suite/Ua Suite 1.jpg',
                    'images/zuri/Ua Suite/Ua Suite 2.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom 1.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom 2.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom.jpg',
                    'images/zuri/Ua Suite/Ua Suite.jpg',

                    // First Floor
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room 1.jpg',
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room 2.jpg',
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room 3.jpg',
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room 4.jpg',
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room 5.jpg',
                    'images/zuri/First Floor Relax - Reading Room/First Floor Relax - Reading Room.jpg',

                    // Anga Suite
                    'images/zuri/Anga Suite/Anga Suite .jpg',
                    'images/zuri/Anga Suite/Anga Suite 1.jpg',
                    'images/zuri/Anga Suite/Anga Suite 2.jpg',
                    'images/zuri/Anga Suite/Anga Suite 3.jpg',
                    'images/zuri/Anga Suite/Anga Suite Bathroom 1.jpg',
                    'images/zuri/Anga Suite/Anga Suite Bathroom.jpg',
                    'images/zuri/Anga Suite/Mwezi Suite 1.jpg',
                     

                     
                ].map((src, index) => ({
                    id: `bedroom-${index + 1}`,
                    src,
                    category: 'bedrooms',
                    caption: 'Bedroom'
                })),

                // Entrance Category
                ...[
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry-12.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry-13.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-2.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-3.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-4.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-5.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-6.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-7.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-10.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-11.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-12.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-2.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-5.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-6.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-7.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-8.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-2.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-3.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-5.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-2.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-4.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-5.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-6.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor.webp',
                    'images/zuri/Zuri - Entrance Day/zuri.watamu.entryoutdoor.garden-6.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-2.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-3.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-4.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-5.webp',
                    'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-6.webp'
                ].map((src, index) => ({
                    id: `entrance-${index + 1}`,
                    src,
                    category: 'entrance',
                    caption: 'Entrance Area'
                })),

                // Living Area Category
                ...[
                    // Indoor Living Area
                     ...[
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0047.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0048.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0049.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0050.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0051.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0052.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0053.jpg', 
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0054.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0055.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0056.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0057.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0058.jpg',
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0059.jpg', 
                        'images/zuri/Zuri - Living Areas Day/Living & Dinning Areas/IMG-20251121-WA0060.jpg',
 
                    ],

                     
                ].map((src, index) => ({
                    id: `living-area-${index + 1}`,
                    src,
                    category: 'living-area',
                    caption: 'Living Area'
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