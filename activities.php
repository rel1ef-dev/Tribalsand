<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities & Excursions – Coastal Adventures with TribalSand</title>
    <link rel="canonical" href="https://tribalsand.com/activities" />
    <meta name="description" content="Explore a range of curated activities with TribalSand along Kenya's coast. From water sports and marine life exploration to cultural tours and safaris, tailor your adventure to your interests.">
    <meta name="keywords" content="TribalSand activities, Kenya coastal adventures, water sports Kenya, marine life exploration, cultural tours Kenya, safaris Kenya, beach activities Kenya">

    <meta property="og:title" content="Activities & Excursions – Coastal Adventures with TribalSand">
    <meta property="og:description" content="Discover curated activities with TribalSand along Kenya's coast. Engage in water sports, explore marine life, embark on cultural tours, and enjoy safaris tailored to your interests.">
    
    <meta property="og:url" content="https://tribalsand.com/activities">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="TribalSand">

    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- GLightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <?php include 'includes/g-tag-head.php'; ?>
    <!-- Swiper CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css" rel="stylesheet">

    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
            height: 100vh;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .slideshow-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slideshow-image.active {
            opacity: 1;
        }

        /* Container */
        .container {
            position: relative;
            z-index: 2;
        }

        /* Heading */
        h1.display-4 {
            color: #ffffff;
            font-family: 'Montserrat', Sans-serif;
            font-size: 62px;
            font-weight: 300;
            text-transform: uppercase;
            line-height: 1.2;
            margin-bottom: 4rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1.display-4 {
                font-size: 42px;
                line-height: 1.4;
                margin-bottom: 2rem;
            }

            .hero-section {
                min-height: 50vh;
            }
        }
    </style>

    <!-- adventure and activities  -->
    <style>
        .LuxuryRental .row {
            height: 100%;
        }

        .LuxuryRental .hero-section {
            background-color: #fcf1d9;
            width: 100%;
            height: 70vh;
            display: flex;
            align-items: center;
        }

        .LuxuryRental .content-container {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            box-sizing: border-box;
        }

        .LuxuryRental .title {
            font-family: Montserrat, sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 1.5;
            color: #2d2d2d;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        .LuxuryRental .title::after {
            content: "";
            display: block;
            width: 25%;
            margin-top: 1.5rem;
            border-bottom: 2px solid #c9a96a;
        }

        .LuxuryRental .descriptionn {
            color: #000;
            margin-bottom: 1rem;
            font-weight: 300;
            letter-spacing: 2px;
            text-align: left;
        }

        .LuxuryRental .cta-button {
            background-color: #C5A572;
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .LuxuryRental .cta-button:hover {
            background-color: #B39362;
            transform: scale(0.9);
        }

        .LuxuryRental .carousel-container {
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .LuxuryRental .carousel-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            object-fit: cover;
        }

        .LuxuryRental .carousel-image.active {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .LuxuryRental .hero-section {
                height: 50vh;
            }

            .LuxuryRental .title {
                font-size: 20px;
            }

            .LuxuryRental .content-container {
                padding: 1rem;
            }

            .LuxuryRental .carousel-container {
                height: 50vh;
            }

            .LuxuryRental .descriptionn {
                font-size: 14px;
                letter-spacing: 1px;
            }
        }

        @media (max-width: 576px) {
            .LuxuryRental .title {
                font-size: 18px;
                letter-spacing: 2px;
            }

            .LuxuryRental .descriptionn {
                font-size: 12px;
            }

            .LuxuryRental .hero-section {
                height: auto;
            }

            .LuxuryRental .carousel-container {
                height: 40vh;
            }
        }
    </style>

    <!-- Getting there -->
    <style>
        .divcontent {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)),
                url("images/33-scaled.jpg") center/cover no-repeat;
            color: #fff;
            min-height: 100vh;
            font-family: "Arial", sans-serif;
            padding: 60px 0;
        }

        .container h1 {
            margin-bottom: 15px;
            color: #fff;
            font-family: Montserrat, sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 25px;
        }

        .divider {
            width: 60px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 30px 0 50px 0;
        }

        .transport-section {
            margin-bottom: 40px;
            display: flex;
            align-items: flex-start;
        }

        .icon-wrapper {
            margin-right: 15px;
            margin-top: 5px;
            font-size: 16px;
        }

        .icon-wrapper img {
            width: 70px;
        }

        .content-wrapper {
            flex: 1;
        }

        .transport-heading {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 15px;
            color: #fff;
        }

        .transport-text {
            color: #fff;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        .airlines-list {
            margin-top: 20px;
            padding-left: 40px;
            list-style: none;
        }

        .airline-item {
            margin-bottom: 10px;
            display: flex;
            align-items: baseline;
            gap: 8px;
        }

        .airline-item a {
            font-size: 22px;
            line-height: 33px;
            color: #afe2e9;
            text-decoration: none;
        }

        .airline-item a:hover {
            font-weight: 500;
        }

        .airline-number {
            min-width: 25px;
            color: rgba(255, 255, 255, 0.9);
        }

        .airline-link {
            color: #8ecae6;
            text-decoration: none;
            margin-left: 8px;
            transition: color 0.3s ease;
        }

        .airline-link:hover {
            color: #219ebc;
        }

        .flyals-link {
            color: #8ecae6;
            text-decoration: none;
            margin-left: 8px;
            transition: color 0.3s ease;
            font-size: 22px;
            line-height: 33px;
        }

        .flyals-link:hover {
            color: #219ebc;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container h1 {
                font-size: 20px;
            }

            .transport-section {
                flex-direction: column;
            }

            .icon-wrapper {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .icon-wrapper img {
                width: 50px;
            }

            .transport-heading {
                font-size: 1rem;
            }

            .transport-text {
                font-size: 14px;
            }

            .airline-item a {
                font-size: 18px;
            }

            .flyals-link {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .container h1 {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .divider {
                margin: 20px 0 30px 0;
            }

            .icon-wrapper img {
                width: 40px;
            }

            .transport-heading {
                font-size: 0.9rem;
            }

            .transport-text {
                font-size: 12px;
            }

            .airline-item a {
                font-size: 16px;
            }

            .flyals-link {
                font-size: 16px;
            }
        }
    </style>


    <!-- Slider CSS -->
    <style>
        /* General Styles */
        .slidbox {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .tourist-activities-section {
            /* max-width: 1400px; */
            margin: 0 auto;
            padding: 20px;
            background-color: #2c3f58;
            overflow: hidden;
        }

        .activities-carousel {
            position: relative;
            overflow: hidden;
        }

        .activities-track {
            display: flex;
            transition: transform 0.5s ease;
            will-change: transform;
        }

        .activity-slide {
            flex: 0 0 33.333%;
            padding: 10px 5px;
            box-sizing: border-box;
        }

        .activity-card {
            position: relative;
            height: 550px;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .activity-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .activity-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .activity-card:hover img {
            transform: scale(1.05);
        }

        .activity-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 0%,
                    rgba(0, 0, 0, 0.6) 40%,
                    rgba(0, 0, 0, 0) 100%);
            color: white;
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }

        .activity-title {
            font-size: 24px;
            font-weight: 600;
            line-height: 36px;
            font-style: italic;
            margin-bottom: 10px;
        }

        .activity-description {
            font-size: 15px;
            font-style: italic;
            line-height: 22.5px;
        }

        .carousel-button {
            position: absolute;
            /* top: 50%; */
            transform: translateY(-740%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            cursor: pointer;
            z-index: 10;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .carousel-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .carousel-button-prev {
            left: 2px;
        }

        .carousel-button-next {
            right: 2px;
        }

        .section-heading {
            font-family: Montserrat, sans-serif;
            font-size: 25px;
            font-weight: 200;
            line-height: 25px;
            text-transform: uppercase;
            text-align: center;
            margin: 20px 0;
            color: #fff;
        }

        @media (max-width: 1024px) and (min-width: 769px) {
            .activity-slide {
                flex: 0 0 50%;
            }
        }

        @media (max-width: 768px) {
            .activity-slide {
                flex: 0 0 100%;
            }

            .activity-card {
                height: 400px;
            }

            .activity-overlay {
                padding: 20px;
            }

            .activity-title {
                font-size: 1.2rem;
            }

            .activity-description {
                font-size: 0.9rem;
            }

            .carousel-button {
                width: 30px;
                height: 30px;
                font-size: 16px;
            }
        }
    </style>

    <!-- activities css -->
    <style>
        .activities-section {
            padding: 80px 0;
            background-color: #fff;
        }

        .section-titlee {
            font-family: Montserrat, sans-serif;
            color: #2c3f58;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 300;
            font-size: 25px;
            line-height: 25px;
            text-decoration: none solid rgb(44, 63, 88);
        }

        .description {
            color: #2c3f58;
            text-align: center;
            max-width: 900px;
            margin: 0 auto 50px;
            font-family: Piazzolla, sans-serif;
            font-size: 15px;
            font-weight: 300;
            letter-spacing: 2px;
            line-height: 22.5px;
            text-decoration: none solid rgb(44, 63, 88);
        }

        .btn-custom {
            color: #576573;
            padding: 12px 24px 12px 24px;
            border-radius: 5px;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 10px;
            border: 2px solid #2c3f58;
            font-family: Montserrat, sans-serif;
            font-size: 20px;
            font-weight: 300;
            line-height: 20px;
            text-decoration: none solid rgb(44, 63, 88) !important;
        }

        .btn-custom:hover {
            background-color: #414f5a;
            color: white;
        }

        .buttons-container {
            text-align: center;
        }

        @media (max-width: 768px) {
            .section-titlee {
                font-size: 2rem;
            }

            .description {
                font-size: 1rem;
                padding: 0 20px;
            }

            .btn-custom {
                display: block;
                margin: 10px auto;
                max-width: 200px;
            }
        }
    </style>

    <!-- Wedding section -->
    <style>
        .wedding-section {
            background-color: #fcf1d9;
            padding: 5rem 0;
        }

        .heading-title {
            font-family: Montserrat, sans-serif;
            font-size: 36px;
            font-weight: 300;
            letter-spacing: 4px;
            line-height: 36px;
            text-decoration: none solid rgb(45, 45, 45);
        }

        .divider {
            width: 100px;
            height: 2px;
            background-color: #c9a96a;
            margin: 1.5rem 0;
        }

        .wedding-image {
            width: 100%;
            height: auto;
        }

        .wedding-content {
            padding: 2rem;
        }

        .wedding-text {
            font-family: Piazzolla, sans-serif;
            font-size: 15px;
            font-weight: 300;
            letter-spacing: 2px;
            line-height: 22.5px;
            text-decoration: none solid rgb(0, 0, 0);
        }

        @media (max-width: 768px) {
            .wedding-content {
                padding: 2rem 1rem;
            }
        }
    </style>

    <!-- SAFARI section -->
    <style>
        .safari-section {
            background-color: #0a192f;
            color: white;
            padding: 5rem 0;
        }

        .safari-title {
            font-family: montserrat, sans-serif;
            font-size: 36px;
            font-weight: 300;
            letter-spacing: 4px;
            line-height: 36px;
            text-decoration: none solid rgb(255, 255, 255);
        }

        .divider {
            width: 100px;
            height: 3px;
            background-color: #c89b3f;
            margin: 1.5rem 0;
            font-size: 16px;
            line-height: 24px;
        }

        .safari-text {
            font-family: Piazzolla, sans-serif;
            font-weight: 500;
            letter-spacing: 2px;
            line-height: 24px;
            text-decoration: none solid rgb(255, 255, 255);

        }

        .safari-image {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .safari-section {
                padding: 3rem 0;
            }

            .content-wrapper {
                margin-bottom: 2rem;
            }
        }
    </style>

    <!-- adventure section and footer css -->
    <style>
        .adventure-section {
            background-image: url('images/a-g-5.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 150px 0;
            color: white;
        }

        .adventure-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .adventure-section .adventure-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .adventure-section .adventure-title {
            font-family: montserrat, sans-serif;
            font-size: 36px;
            font-weight: 200;
            letter-spacing: 6px;
            line-height: 46.8px;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;
            text-transform: uppercase;
            word-spacing: 0;
            margin-bottom: 20px;
        }

        .adventure-section .adventure-subtitle {
            font-family: montserrat, sans-serif;
            font-size: 16px;
            font-weight: 300;
            letter-spacing: 2px;
            line-height: 22.4px;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;
            word-spacing: 0;
            margin-bottom: 20px;
        }

        .adventure-section .btn-reservation {
            background-color: #C9a96a;
            color: white;
            padding: 16px 48px;
            /* width: 435px; */
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: "Montserrat Alternates", sans-serif;
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 2px;
            line-height: 20px;
            text-align: center;
            word-spacing: 0;
        }

        .adventure-section .btn-reservation:hover {
            transform: scale(0.95);
            /* background-color: #45a049; */
            color: white;
        }

        .adventure-section .btn-reservation i {
            transition: transform 0.3s ease;
        }

        .adventure-section .btn-reservation:hover i {
            transform: translateX(5px);
        }

        /* Media Queries for all devices */
        @media (max-width: 1200px) {
            .adventure-section .adventure-title {
                font-size: 32px;
                line-height: 42px;
            }

            .adventure-section .adventure-subtitle {
                font-size: 14px;
                line-height: 20px;
            }

            .adventure-section .btn-reservation {
                font-size: 18px;
                padding: 14px 40px;
                width: 100%;
            }
        }

        @media (max-width: 992px) {
            .adventure-section {
                padding: 100px 0;
            }

            .adventure-section .adventure-title {
                font-size: 28px;
                line-height: 38px;
            }

            .adventure-section .adventure-subtitle {
                font-size: 14px;
            }

            .adventure-section .btn-reservation {
                font-size: 16px;
                padding: 12px 30px;
            }
        }

        @media (max-width: 768px) {
            .adventure-section .adventure-title {
                font-size: 24px;
                line-height: 34px;
            }

            .adventure-section .btn-reservation {
                font-size: 16px;
                padding: 10px 25px;
            }
        }

        @media (max-width: 576px) {
            .adventure-section {
                padding: 70px 0;
            }

            .adventure-section .adventure-title {
                /* font-size: 20px; */
                line-height: 30px;
            }

            .adventure-section .adventure-subtitle {
                font-size: 12px;
            }

            .adventure-section .btn-reservation {
                font-size: 14px;
                padding: 8px 20px;
            }
        }
    </style>

</head>

<body>
    <?php include 'includes/g-tag-body.php'; ?>

    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Slideshow images -->
        <div class="slideshow-image active" style="
          background-image: url('images/reservation-1.jpg');
        "></div>
        <div class="slideshow-image" style="background-image: url('images/brown-bg-1')"></div>
        <div class="slideshow-image" style="
          background-image: url('images/Tribal-Sand-lion-White-logo-768x923.png');
        "></div>

        <!-- Hero overlay -->
        <div class="hero-overlay"></div>

        <!-- Container for content -->
        <div class="container" style="position: relative; z-index: 2">
            <div class="row">
                <div class="col-12">
                    <!-- Heading with styling -->
                    <h1 class="display-4 mb-4" style="
                        color: #ffffff;
                        font-family: 'Montserrat', Sans-serif;
                        font-size: 62px;
                        font-weight: 300;
                        text-transform: uppercase;
                        line-height: 2.7em;
                        letter-spacing: 10px;
                        text-shadow: 0px 0px 30px #000000;
                    ">
                       ACTIVITIES
                    </h1>
                    <p style="
                        color: #ffffff;
                        font-size: 20px;
                        font-weight: 400;
                        font-family: 'Montserrat', Sans-serif;
                        text-shadow: 0px 0px 15px #000000;
                        margin-top: 10px;
                        margin-bottom: 30px;
                        max-width: 700px;
                        margin-left: auto;
                        margin-right: auto;
                        ">
                        At Tribal Sand, staying with us means more than just enjoying a
                        beautiful villa — it’s about experiencing the best of Kenya’s coast, your
                        way.
                    </p>

                              
                    <!-- Paragraph -->
 
     
<!-- Button -->
<a href="tribal-sand-activity.html" target="_blank" style="
    display: inline-block;        
    padding: 14px 32px;
    font-size: 14px;    
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: 'Montserrat', Sans-serif;
    color: #ffffff;
    border: 1px solid #ffffff;
    text-decoration: none;
    transition: all 0.3s ease;
">                                     
    Explore Activities
</a>
     


                    <!-- Downward arrow icon with bounce animation -->      
                    <!-- <i class="fas fa-angle-down fa-2x bounce"></i> -->          
                </div>
            </div>         
        </div>
    </section>


    <section class="LuxuryRental py-5">
        <div class="">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <div class="hero-section">
                        <div class="content-container">
                            <h1 class="title">ADVENTURE AND ACTIVITIES</h1>
                            <div class="descriptionn">
                                <p>At TribalSand, experience the vibrant marine life of the Kuruwitu Marine Conservancy and enjoy a variety of water sports in Kilifi Creek. The nearby Vipingo Ridge offers a world-class golfing experience with breathtaking ocean views. <br /></p>
                                <p>Explore the stunning Watamu region, boasting beautiful beaches and the UNESCO-listed Watamu Marine Park, perfect for snorkeling and diving. Engage in unique activities like Dolphin safaris, Sunset Dhow Cruises, and seasonal Whale Watching Tours for a memorable coastal adventure.</p>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="col-12 col-lg-6" style="min-height: 40vh">
                    <div class="carousel-container">
                        <img src="images/Birdwatching-1.jpg" alt="Birdwatching experience from luxury beachfront villa in Watamu" class="carousel-image active">
                        <img src="images/27-scaled.jpg" alt="Private pool area at luxury villa in Watamu" class="carousel-image">
                        <img src="images/32-scaled.jpg" alt="Ocean view terrace at luxury villa in Watamu" class="carousel-image">
                        <img src="images/31-scaled.jpg" alt="Spacious bedroom in luxury villa in Watamu" class="carousel-image">
                        <img src="images/29-scaled.jpg" alt="Villa living room with modern decor and ocean view" class="carousel-image">
                        <img src="images/a1-scaled.jpg" alt="Luxury villa outdoor lounge area with beach view" class="carousel-image">
                        <img src="images/28-scaled.jpg" alt="Sunset view from luxury villa balcony in Watamu" class="carousel-image">
                        <img src="images/33-scaled.jpg" alt="Garden and private path leading to the beach at luxury villa" class="carousel-image">
                    </div>
                </div>
            </div>
        </div>
        <script>
            function initializeCarousel() {
                const images = document.querySelectorAll('.LuxuryRental .carousel-image');
                let currentIndex = 0;

                function showNextImage() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }

                setInterval(showNextImage, 3000);
            }

            document.addEventListener('DOMContentLoaded', initializeCarousel);
        </script>
    </section>


    <!-- <div class="divcontent">
        <div class="container">
            <h1>Getting There</h1>
            <div class="divider"></div>

            <div class="transport-section">
                <div class="icon-wrapper">
                    <img src="images/sedan-150x150.png" alt="">
                </div>
                <div class="content-wrapper">
                    <div class="transport-heading">By Road</div>
                    <p class="transport-text">
                        The house is situated a few minutes from the main coastal highway,
                        30 minutes south of Kilifi, just over an one hour's drive North of
                        Mombasa and 90 minutes South of Malindi.
                    </p>
                </div>
            </div>

            <div class="transport-section">
                <div class="icon-wrapper">
                    <img src="images/airplane-1-150x150.png" alt="">
                </div>
                <div class="content-wrapper">
                    <div class="transport-heading">By Air</div>
                    <p class="transport-text">
                        There is a daily flight from Nairobi's Wilson Airport to the Vipingo
                        Ridge airstrip.
                    </p>
                    <a href="http://flyals.com" target="_blank" class="flyals-link airline-link">flyals.com</a>
                </div>
            </div>

            <div class="transport-section">
                <div class="content-wrapper">
                    <p class="transport-text">
                        Airlines flying to Malindi and/or Mombasa from Nairobi include :
                    </p>
                    <ul class="airlines-list">
                        <li class="airline-item">
                            <span class="airline-number">1.</span>
                            <span>Kenya Airways (from Jomo Kenyatta International Airport)</span>
                            <a href="http://www.kenya-airways.com" target="_blank" class="airline-link">Kenya Airways</a>
                        </li>
                        
                        <li class="airline-item">
                            <span class="airline-number">2.</span>
                            <span>Safarilink (from Wilson Airport )</span>
                            
                        </li>
                        <li class="airline-item">
                            <span class="airline-number">3.</span>
                            <span>Jambo Jet (from Jomo Kenyatta International Airport)</span>
                            <a href="https://www.jambojet.com/en-us" target="_blank" class="airline-link">Jambojet</a>
                        </li>
                        <li class="airline-item">
                            <span class="airline-number">4.</span>
                            <span>Skyward Express (from Wilson Airport)</span>
                            <a href="https://www.skywardexpress.co.ke/" target="_blank" class="airline-link">Skyward Express</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="slidbox">
        <div class="tourist-activities-section">
            <h2 class="display-4 section-heading">Adventure and Activities</h2>
            <div class="activities-carousel">
                <div class="activities-track">
                    <!-- Slides dynamically added -->
                </div>
                
            </div>
            <button class="carousel-button carousel-button-prev">←</button>
                <button class="carousel-button carousel-button-next">→</button>
        </div>
    </div>

    <section class="activities-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-titlee">ACTIVITIES & EXCURSIONS</h2>
                    <p class="description">
                        Step beyond the tranquility of our retreats and immerse yourself in the vibrant tapestry of Kenya's coastal wonders. From the historical allure of Malindi to the pristine shores of Watamu, each excursion promises a captivating blend of culture, nature, and adventure. Let us be your compass as you uncover the hidden gems and timeless beauty of these coastal treasures.
                    </p>
                    <div class="buttons-container">
                        <!-- <a href="content/TRIBAL-SAND-My-Amani-Excursions.pdf" class="btn-custom" target="_blank">My Amani</a> -->
                        <!-- <a href="content/TRIBAL-SAND-Maya-Kobe-Excursions.pdf" class="btn-custom" target="_blank">Maya Kobe</a> -->
                        <!-- <a href="content/TRIBAL-SAND-Zuri-Excursions.pdf" class="btn-custom" target="_blank">Zuri</a> -->
                        <a href="tribal-sand-activity.html" class="btn-custom" target="_blank">Explore Activities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="wedding-section"> -->
        <!-- <div class="container"> -->
            <!-- <div class="row align-items-center"> -->
                <!-- Image Column -->
                <!-- <div class="col-lg-6 mb-4 mb-lg-0"> -->
                    <!-- <img src="images/beach-g58efaf92a_1280-1024x682.jpg" -->
                        <!-- class="wedding-image" alt="Beach Wedding Setup" loading="lazy"> -->
                <!-- </div> -->

                <!-- Content Column -->
                <!-- <div class="col-lg-6"> -->
                    <!-- <div class="wedding-content"> -->
                        <!-- <h3 class="heading-title">WEDDING</h3> -->
                        <!-- <div class="divider"></div> -->
                        <!-- <div class="wedding-text"> -->
                            <!-- <p>Our stunning Beachfront Villas are an ultimate destination for hosting your dream wedding.</p> -->
                            <!-- <p>Experience an unforgettable sunset ceremony on the oceanfront surrounded by lush tropical gardens, offering an unparalleled setting on the beautiful Kenyan coastline.</p> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </section> -->

    <section class="safari-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6 content-wrapper">
                    <h3 class="safari-title">SAFARI</h3>
                    <div class="divider"></div>
                    <div class="safari-text">
                        <p>Discover the wonders of Kenya's National Parks with Tribalsand.</p>
                        <p>Combine your relaxing Beach holiday with an unforgettable Safari adventure at the nearby Tsavo National Park or the world renowned Masai Mara National Reserve.</p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6">
                    <img src="images/elephant-g2c78cef21_1280-1024x683.jpg"
                        alt="Safari Elephant"
                        class="safari-image"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="adventure-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="adventure-content">
                        <h2 class="adventure-title">Make Room<br> for Adventure</h2>
                        <h4 class="adventure-subtitle">Book your room right now and start your amazing adventure full of
                            discoveries and new experiences with My Amani.</h4>
                        <a href="contact.php" class="btn-reservation">
                            <span>Inquire Today</span>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>


    <!-- Slider script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slidesData = [{
                image: 'images/Golf.jpg',
                title: 'Golf Course',
                description: 'Experience Africa’s only 18Hole PGA accredited Golf Course at Vipingo Ridge',
                alt: 'Golf Course'
            },
            {
                image: 'images/Birdwatching-1.jpg',
                title: 'Beautiful Beaches',
                description: 'Visit and relax at one of the beautiful beaches in Watamu-Malindi',
                alt: 'Beautiful Beaches'
            },
            {
                image: 'images/skydive-tandem-jump-windows-wallpaper-5379579.jpg',
                title: 'Skydiving',
                description: 'Visit and relax at one of the beautiful beaches in Watamu-Malindi',
                alt: 'Skydiving'
            },
            {
                image: 'images/kitesurf.jpeg',
                title: 'Kitesurfing',
                description: 'Kitesurfing',
                alt: 'Kitesurfing'
            },
            {
                image: 'images/sail-7714719_1280.jpg',
                title: 'Swahili Dhow Cruise',
                description: 'Traditional Swahili Dhow Cruise on the nearby Kilifi Creek',
                alt: 'Dhow'
            },
            {
                image: 'images/kingfisher-6583229_1280.jpg',
                title: 'Birdwatching',
                description: 'Birdwatching at Arabuko Sokoke National Reserve',
                alt: 'Birdwatching'
            },
            {
                image: 'images/Dolphin-sighting.jpg.webp',
                title: 'Dolphin Safari',
                description: 'Dolphin Safari at Watamu Marine Park',
                alt: 'Dolphin Safari'
            },
            {
                image: 'images/humpback-whale-436120_1280 (1).webp',
                title: 'Whale Watching',
                description: 'Seasonal whale watching safari',
                alt: 'Seasonal Whale Watching'
            },
            {
                image: 'images/fisherman-4601744_1280.jpg',
                title: 'Deep Sea Fishing',
                description: 'Deep Sea Fishing',
                alt: 'Deep Sea Fishing'
            },
            {
                image: 'images/blue-water-1866976_960_720.jpg',
                title: 'Snorkeling',
                description: 'Thrilling adventures- kayaking and snorkelling at the Kuruwitu Marine Park a protected area with over 200 species of fish.',
                alt: 'Snorkeling'
            },
            {
                image: 'images/MARAFA-HELLS-KITCHEN.jpg.webp',
                title: 'Marafa Hells Kitchen',
                description: 'A picturesque canyon in Malindi. It features jagged sandstone cliffs and formations that rise as high as 30m.',
                alt: 'Marafa Hells Kitchen'
            }
            ];

            class Carousel {
                constructor(container, slides) {
                    this.container = container;
                    this.track = container.querySelector('.activities-track');
                    this.slides = slides;
                    this.currentIndex = 0;

                    // Determine slides per view based on screen size
                    this.updateSlidesPerView();
                    window.addEventListener('resize', () => this.updateSlidesPerView());

                    this.init();
                }

                updateSlidesPerView() {
                    if (window.innerWidth <= 768) {
                        this.slidesPerView = 1;
                    } else if (window.innerWidth <= 1024) {
                        this.slidesPerView = 2;
                    } else {
                        this.slidesPerView = 3;
                    }

                    // Re-render slides to adapt to new slidesPerView
                    this.renderSlides();
                }

                init() {
                    this.renderSlides();
                    this.addListeners();
                }

                renderSlides() {
                    const clonedSlides = [...this.slides];
                    const clonedStart = clonedSlides.slice(0, this.slidesPerView);
                    const clonedEnd = clonedSlides.slice(-this.slidesPerView);

                    this.track.innerHTML = clonedEnd
                        .concat(clonedSlides, clonedStart)
                        .map(slide => `
                    <div class="activity-slide">
                        <div class="activity-card">
                            <img src="${slide.image}" alt="${slide.alt}">
                            <div class="activity-overlay">
                                <h2 class="activity-title">${slide.title}</h2>
                                <p class="activity-description">${slide.description}</p>
                            </div>
                        </div>
                    </div>
                `)
                        .join('');

                    this.currentIndex = this.slidesPerView;
                    this.updatePosition();
                }

                addListeners() {
                    document.querySelector('.carousel-button-next').addEventListener('click', () => {
                        this.moveSlide(1);
                    });

                    document.querySelector('.carousel-button-prev').addEventListener('click', () => {
                        this.moveSlide(-1);
                    });
                }

                moveSlide(direction) {
                    this.currentIndex += direction;
                    this.updatePosition();

                    const totalSlides = this.slides.length + 2 * this.slidesPerView;

                    setTimeout(() => {
                        if (this.currentIndex === 0) {
                            this.currentIndex = this.slides.length;
                            this.updatePosition(false);
                        } else if (this.currentIndex === totalSlides - this.slidesPerView) {
                            this.currentIndex = this.slidesPerView;
                            this.updatePosition(false);
                        }
                    }, 500); // Match transition duration
                }

                updatePosition(animate = true) {
                    if (!animate) this.track.style.transition = 'none';
                    const offset = -this.currentIndex * (100 / this.slidesPerView);
                    this.track.style.transform = `translateX(${offset}%)`;
                    if (!animate) setTimeout(() => this.track.style.transition = 'transform 0.5s ease', 0);
                }
            }

            new Carousel(document.querySelector('.activities-carousel'), slidesData);
        });
    </script>
    <!-- Slider script -->


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

</body>

</html>