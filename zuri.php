<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri – Award-Winning Beachfront Boutique Hotel in Watamu, Kenya | Tribal Sand</title>
    <link rel="canonical" href="https://tribalsand.com/zuri.php" />
    <meta property="og:title" content="Zuri – Award-Winning Beachfront Boutique Hotel in Watamu, Kenya | Tribal Sand">
    
    <meta name="description"
        content="Discover Zuri, an award-winning beachfront boutique hotel in Watamu, Kenya. This luxury 6-suite retreat offers ocean views, lush gardens, and an intimate escape. Book individual suites or the entire villa for a personalized stay, perfect for couples, families, or exclusive group getaways along Kenya’s stunning coastline.">

    <meta property="og:description"  
        content="Discover Zuri, an award-winning beachfront boutique hotel in Watamu, Kenya. This luxury 6-suite retreat offers ocean views, lush gardens, and an intimate escape. Book individual suites or the entire villa for a personalized stay, perfect for couples, families, or exclusive group getaways along Kenya’s stunning coastline.">

    <meta property="og:url" content="https://tribalsand.com/zuri">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="TribalSand">

    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">   
    <?php include 'includes/g-tag-head.php'; ?>
    <!-- IntlTelInput CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">



    <style>
    /* Suite name overlay on hover */
    .gallery-overlay .suite-name {
        font-size: 1.5rem;
        /* Increase font size */
        font-weight: 300;
        /* Bold text */
        color: #fff;
        /* White text */
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        /* Optional shadow for readability */
        position: absolute;
        bottom: 15px;
        /* Adjust vertical position */
        left: 15px;
        /* Adjust horizontal position */
    }

    /* Optional: smooth fade-in on hover */
    .gallery-item:hover .suite-name {
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    p {
        font-family: "Piazzolla", Sans-serif;
    }
    </style>

    <style>
    .hero-section {
        position: relative;
        min-height: 100vh;
        /* background: linear-gradient(rgb(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)),
                url('images/zuri-hero.webp') center/cover no-repeat; */
        background: linear-gradient(rgb(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
            url('images/zuri/Aerial/zuri-3.webp') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 0 20px;
    }

    .hero-section .hero-title {
        color: #FFFFFF;
        font-family: "Montserrat", Sans-serif;
        font-size: 4.5em;
        font-weight: 300;
        text-transform: uppercase;
        font-style: normal;
        letter-spacing: 6px;
    }

    .hero-section .hero-subtitle {
        color: #FFFFFF;
        font-family: "Montserrat", Sans-serif;
        font-size: 2.8em;
        font-weight: 200;
        text-transform: uppercase;
        font-style: normal;
        letter-spacing: 6px;
    }

    @media (max-width: 768px) {
        .hero-section .hero-title {
            font-size: 2rem;
        }

        .hero-section .hero-subtitle {
            font-size: 1.8rem;
        }
    }
    </style>


    <style>
    .book-now-section {
        background-color: #031B31;
        padding-bottom: 4rem;
        font-family: "Piazzolla", Sans-serif;
    }

    .book-now-section .booking-container {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin: 2rem auto 0rem auto;
        max-width: 1200px;
    }

    .book-now-section .page-title {
        text-align: center;
        color: white;
        font-size: 2.5rem;
        letter-spacing: 4px;
        padding: 2rem 0;
    }


    .book-now-section .form-control,
    .book-now-section .form-select {
        border: 1px solid #ddd;
        /* padding: 0.75rem; */
    }

    .book-now-section .calendar-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
    }

    .book-now-section .date-input-container {
        position: relative;
    }

    .book-now-section .send-inquiry-btn {
        background-color: #c9a96a;
        border: none;
        color: white;
        padding: 0.75rem;
        width: 100%;
    }

    .book-now-section .send-inquiry-btn:hover {
        background-color: #B39565;
    }

    .book-now-section .flag-select {
        width: 100px;
    }




    .book-now-section .error-message {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
        display: none;
    }

    /* Override some IntlTelInput styles for better integration */
    .book-now-section .iti {
        width: 100%;

    }

    .book-now-section .iti__flag {
        background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags.png");
    }

    @media (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi) {
        .book-now-section .iti__flag {
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/img/flags@2x.png");
        }
    }

    .book-now-section .valid-feedback {
        color: #28a745;
        display: none;
        font-size: 14px;
        margin-top: 5px;
    }

    /* .phone-input-container{
            overflow-x: hidden;
        } */
    </style>


    <style>
    .LuxuriousBeach {
        background-color: #FFFAEF;
    }

    .LuxuriousBeach .row {
        height: 100%;
        color: white;
    }

    .LuxuriousBeach .hero-section2 {
        background-color: #031B31;
    }

    .LuxuriousBeach .content-wrapper {
        padding: 2rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .LuxuriousBeach .main-title {
        font-size: 2.5rem;
        letter-spacing: 2px;
        color: #FFFFFF;
        margin-bottom: 0.5rem;
        font-weight: 200;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    .LuxuriousBeach .main-title1 {
        font-size: 1.7rem;
        letter-spacing: 2px;
        color: #FFFFFF;
        margin-bottom: 0.5rem;
        font-weight: 200;
        text-transform: uppercase;
        letter-spacing: 4px;
        max-width: 700px;
        margin: auto;
    }

    .LuxuriousBeach .main-title::after {
        content: "";
        display: block;
        width: 25%;
        /* Set the width of the border to 25% */
        margin-top: 1.5rem;
        /* Center the border */
        border-bottom: 2px solid #c9a96a;
        /* Match the color and thickness */
    }

    .LuxuriousBeach .description {
        color: #FFFFFF;
        margin-bottom: 1rem;
        font-weight: 300;
        letter-spacing: 2px;
    }

    .LuxuriousBeach .book-btn {
        background-color: #C5A572;
        color: white;
        padding: 0.8rem 2rem;
        border: none;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .LuxuriousBeach .book-btn:hover {
        background-color: #B39362;
        transform: scale(0.9);
        color: white;
    }

    .LuxuriousBeach .slider-container {
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .LuxuriousBeach .slider-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        object-fit: cover;
    }

    .LuxuriousBeach .slider-image.active {
        opacity: 1;
    }

    @media (max-width: 992px) {
        .LuxuriousBeach .slider-container {
            height: 100%;
            left: 0px;
            margin-top: 0;
            margin-bottom: 0;
        }

        .LuxuriousBeach .content-wrapper {
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        .LuxuriousBeach .hero-section2 {
            min-height: auto;
        }

        .LuxuriousBeach .slider-container {
            height: 100%;
        }

        .LuxuriousBeach .main-title {
            font-size: 2rem;
        }
    }
    </style>

    <style>
    .amenities-section {
        background: linear-gradient(#081323DE, #081323DE),
            url('images/zuri-hero-2.webp');
        background-size: cover;
        background-position: center;
        padding: 40px 0;
        color: white;
    }

    .amenities-section .section-title {
        margin-bottom: 40px;
        position: relative;
        font-weight: 300;
        text-transform: uppercase;
        font-style: normal;
        letter-spacing: 4px;
        font-size: 30px;
    }

    .amenities-section .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 2px;
        background: #c8a97e;
        margin-top: 15px;
    }

    .amenities-section .amenity-item {
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-family: "Piazzolla", Sans-serif;
    }

    .amenities-section .amenity-icon {
        font-size: 24px;
        color: #c8a97e;
        width: 40px;
        text-align: center;
    }

    .amenities-section .amenity-text {
        flex: 1;
    }

    .amenities-section .amenity-text h5 {
        margin-bottom: 0px;
        font-size: 16px;
        font-weight: 500;
    }

    .amenities-section .book-btn {
        background-color: #C5A572;
        color: white;
        padding: 0.8rem 2rem;
        border: none;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .amenities-section .book-btn:hover {
        background-color: #B39362;
        transform: scale(0.9);
        color: white;
    }

    .amenities-section .intro-text {
        margin-bottom: 3rem;
        text-align: center;
        font-weight: 300;
        line-height: 1.8;
    }
    </style>


    <style>
    .premiumAmenities {
        background-color: #031B31;

    }

    .premiumAmenities .section-title {
        color: white;
    }

    .premiumAmenities .section-title::after {
        content: "";
        display: block;
        width: 25%;
        /* Set the width of the border to 25% */
        margin-top: 1.5rem;
        /* Center the border */
        border-bottom: 2px solid #c9a96a;
        /* Match the color and thickness */
    }

    .premiumAmenities p {
        color: white;
    }

    .premiumAmenities ul {
        color: white;
        font-family: "Piazzolla", Sans-serif;
    }

    .premiumAmenities h1,
    .premiumAmenities h5 {
        font-family: "Piazzolla", Sans-serif;
    }
    </style>

    <style>
    .slider-container {
        margin: 0 auto;
        padding: 40px 20px;
        position: relative;
        font-family: "Piazzolla", Sans-serif;
    }

    .slide {
        display: none;
        text-align: center;
        animation: fadeEffect 1s;
        background-color: #fdf6e9;
        color: black;
    }

    @keyframes fadeEffect {
        from {
            opacity: 0.4
        }

        to {
            opacity: 1
        }
    }

    .active {
        display: block;
    }

    .quote {
        font-style: italic;
        font-size: 1.2em;
        color: #333;
        margin-bottom: 30px;
        line-height: 1.6;
        color: black !important;
        padding-top: 20px;
    }

    .profile {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .profile img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-name {
        font-weight: 500;
        color: #333;
    }

    .nav-dots {
        text-align: center;
        margin-top: 20px;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin: 0 5px;
        background-color: #333;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .dot.active {
        background-color: #bbb;
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
        background-color: #e6dac2;
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
        padding: 0 5px;
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
        /* transform: translateY(-5px); */
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

    <!-- adventure section and footer css -->
    <style>
    /* Adventure Section Styles */
    .adventure-section {
        background-image: url('images/Tethys-frontentrance.jpeg');
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
        font-family: "Piazzolla", Sans-serif;
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
        font-family: "Piazzolla", Sans-serif;
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
        padding: 16px 48px 16px 48px;
        width: 435px;
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
        text-decoration: none solid rgb(255, 255, 255);
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


    /* Mobile-specific styles */
    @media screen and (max-width: 480px) {

        .adventure-section .btn-reservation {
            width: 100%;
            padding: 12px 0;
        }

        .adventure-section .adventure-title {
            font-size: 28px;
        }

        .adventure-section .adventure-subtitle {
            font-size: 14px;
        }
    }

    /* All Screens Media Query (Responsive for all screen sizes) */
    @media screen and (max-width: 1024px) {
        .adventure-section .adventure-title {
            font-size: 32px;
        }

        .adventure-section .adventure-subtitle {
            font-size: 14px;
        }

        .adventure-section .btn-reservation {
            width: 100%;
        }

    }
    </style>

    <!-- gallery -->
    <style>
    .containerr {
        padding: 3rem 1rem;
        /* padding-left:100px;
            padding-right:100px; */
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
    <?php include 'includes/g-tag-body.php'; ?>

    <?php include 'includes/header.php'; ?>

    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">ZURI</h1>
            <h2 class="hero-subtitle">BY TribalSand</h2>

            <p class="hero-location text-white fs-5 mb-1">
                <i class="fas fa-map-marker-alt me-2"></i>Zuri - Watamu, Kenya
            </p>

            <div class="d-flex justify-content-center gap-4 fs-5 text-white">
                <div>
                    <i class="fas fa-users me-1"></i> Sleeps: 14
                </div>
                <div>
                    <i class="fas fa-bed me-1"></i> Suites: 6
                </div>
                <div>
                    <i class="fas fa-bath me-1"></i> Bathrooms: 6
                </div>
            </div>

        </div>
    </section>

    <section class="book-now-section" id="book-now-section">
        <!-- <h1 class="page-title">BOOK NOW</h1> -->

        <div class="booking-container"
            style="background: transparent; text-align: center; padding-bottom: 0; margin-bottom: 0;">
            <!--<form id="bookingForm">-->
            <!--    <div class="row g-3 mb-3">-->
            <!--        <div class="col-md-4">-->
            <!--            <label class="form-label">Arrival Date</label>-->
            <!--            <div class="date-input-container">-->
            <!--                <input type="date" class="form-control" id="arrivalDate" required>-->
            <!-- <i class="fas fa-calendar calendar-icon"></i> -->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-md-3">-->
            <!--            <label class="form-label">Departure Date</label>-->
            <!--            <div class="date-input-container">-->
            <!--                <input type="date" class="form-control" id="departureDate" required>-->
            <!-- <i class="fas fa-calendar calendar-icon"></i> -->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-md-5">-->
            <!--            <label class="form-label">Name</label>-->
            <!--            <input type="text" class="form-control" id="name" required>-->
            <!--        </div>-->
            <!--    </div>-->


            <!--    <div class="row g-3 mb-3">-->
            <!--        <div class="col-md-3">-->
            <!--            <label class="form-label">Guests</label>-->
            <!--            <select class="form-select" id="guests" required>-->
            <!--                <option value="" selected disabled>- Select -</option>-->
            <!--                <option value="1">1</option>-->
            <!--                <option value="2">2</option>-->
            <!--                <option value="3">3</option>-->
            <!--                <option value="4">4</option>-->
            <!--                <option value="5">5</option>-->
            <!--                <option value="6">6</option>-->
            <!--                <option value="7">7</option>-->
            <!--                <option value="8">8</option>-->
            <!--                <option value="9">9</option>-->
            <!--                <option value="10">10</option>-->
            <!--                <option value="11">11</option>-->
            <!--                <option value="12">12</option>-->
            <!--                <option value="13">13</option>-->
            <!--                <option value="14">14</option>-->

            <!--            </select>-->
            <!--        </div>-->
            <!--        <div class="col-md-3">-->
            <!--            <label class="form-label">Children</label>-->
            <!--            <select class="form-select" id="children" required>-->
            <!--                <option value="" selected disabled>- Select -</option>-->
            <!--                <option value="0">0</option>-->
            <!--                <option value="1">1</option>-->
            <!--                <option value="3">3</option>-->
            <!--                <option value="4">4</option>-->
            <!--                <option value="5">5</option>-->
            <!--                <option value="6">6</option>-->
            <!--            </select>-->
            <!--        </div>-->
            <!--        <div class="col-md-3">-->
            <!--            <label class="form-label">Phone</label>-->
            <!--            <div class="input-group">-->
            <!--                <div class="phone-input-container">-->
            <!--                    <input type="tel" id="phone" class="form-control">-->
            <!--                    <div class="error-message" id="error-msg"></div>-->
            <!--                    <div class="valid-feedback" id="valid-msg">✓ Valid phone number</div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-md-3">-->
            <!--            <label class="form-label">Email</label>-->
            <!--            <div class="input-group">-->
            <!--                <input type="email" class="form-control" id="email" required>-->
            <!--                <span class="input-group-text"><i class="fas fa-envelope"></i></span>-->
            <!--            </div>-->
            <!--        </div>-->

            <!--    </div>-->



            <!--    <div class="row g-3 mb-3">-->
            <!--        <div class="col-12">-->
            <!--            <label class="form-label">Comments/Questions</label>-->
            <!--            <textarea class="form-control" id="comments" rows="3"></textarea>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="row">-->
            <!--        <div class="col-12">-->
            <!--            <button type="submit" class="send-inquiry-btn">Send Inquiry</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</form>-->
            <!-- OwnerRez Booking/Inquiry widget for Zuri by Tribal Sand -->
            <!-- <div class="ownerrez-widget" data-widgetId="b550a00e7ad64057a1a5c2727d323d24" data-propertyId="4f90fe46329c4f858c14f38f8f71dcd0" data-widget-type="Booking/Inquiry"></div> -->
            <!-- <script type="text/javascript" src="https://app.ownerrez.com/widget.js"></script> -->
            <!-- Zuri Inquiry -->
            <!-- OwnerRez Booking/Inquiry widget -->
            <!-- <div class="ownerrez-widget" data-widget-type="Zuri Inquiry - Booking/Inquiry" data-widgetId="e88fa6278a9243f48fdf7359c33d6d6a"></div>
            <script src="https://app.ownerrez.com/widget.js"></script> -->

            <!-- code for ezee book now button -->
            <a href="https://book.tribalsand.com/booking/roomlisting-tribalsand-retreatszurilimited-be"
                class="btn booknow-btn" target="_blank" style="max-width:250px; display: inline-block;">Book Now</a>
            <!-- // code for ezee book now button //  -->
            <!-- <a href="#contatnow" class="btn booknow-btn" style="max-width:250px; display: inline-block;">Book Now</a> -->


            <style>
            .booknow-btn {
                background-color: #C5A572;
                color: white;
                padding: 0.8rem 2rem;
                border: none;
                transition: all 0.3s ease;
                text-decoration: none;
                display: inline-block;
            }

            .booknow-btn:hover {
                background-color: #B39362;
                transform: scale(0.9);
                color: white;
            }
            </style>
        </div>


        <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Gather form data
            const formData = {
                arrivalDate: document.getElementById('arrivalDate').value,
                departureDate: document.getElementById('departureDate').value,
                name: document.getElementById('name').value,
                guests: document.getElementById('guests').value,
                children: document.getElementById('children').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('countryCode').value + document.getElementById('phone')
                    .value,
                comments: document.getElementById('comments').value
            };

            // Here you would typically send the data to your server
            // console.log('Form submitted:', formData);
            // alert('Booking inquiry sent successfully!');
            this.reset();
        });

        // Format phone number as user types
        document.getElementById('phone').addEventListener('input', function(e) {
            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });

        // Set minimum date for arrival and departure
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('arrivalDate').min = today;

        document.getElementById('arrivalDate').addEventListener('change', function() {
            document.getElementById('departureDate').min = this.value;
            if (document.getElementById('departureDate').value && document.getElementById('departureDate')
                .value < this.value) {
                document.getElementById('departureDate').value = this.value;
            }
        });
        </script>

    </section>


    <!-- gallery section start  -->
    <div class="containerr">
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <button class="nav-link active" data-category="bedrooms">Suites</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="pool">Pool</button>
            </li>


            <li class="nav-item">
                <button class="nav-link" data-category="beach">Beach</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="garden">Garden</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-category="udla">Living in Common Areas</button>
            </li>

            <!-- <li class="nav-item">
                <button class="nav-link" data-category="entrance">Entrance</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="living-area">Living Area</button>
            </li> -->
            <li class="nav-item">
                <button class="nav-link" data-category="greenhouse">Greenhouse</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-category="aerial">Aerial</button>
            </li>
            <li class="nav-item">
                <button class="nav-link " data-category="all">All</button>
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

    <div class="modal fade modal-fullscreen" id="imageModal" tabindex="-1" aria-hidden="true" style="z-index:99999;">

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
    <!-- gallery section end -->  





    <section class="LuxuriousBeach LuxuriousBeach1 py-4">
        <div class="container" style="background-color: #031B31;">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <div class="hero-section2">
                        <div class="content-wrapper">
                            <h1 class="main-title">Discover Watamu's Hidden Paradise</h1>
                            <div class="description">
                                <p>Zuri is an award-winning Beachfront Boutique Hotel tucked away along the East African
                                    coastline in Watamu, Kenya. This cozy yet lavish 6-Suite beachfront premises offers
                                    a unique escape, with breathtaking ocean views on one side and a lush garden oasis
                                    on the other.</p>
                                <!-- <p>Crafted for those who appreciate the finer things in life in a relaxed, intimate setting, <i>Zuri welcomes guests to book individual suites or reserve the entire retreat</i>, creating a personalised experience that suits both tranquil solo retreats and memorable group getaways.</p> -->
                                <p>Crafted for those who appreciate the finer things in life in a relaxed, intimate
                                    setting, <i>Zuri Beachfront Boutique Hotel welcomes guests to book individual rooms
                                        or reserve the entire Beachfront Boutique Hotel</i>, creating a personalised
                                    experience that suits both tranquil stays and memorable group getaways.</p>
                            </div>
                            <div class="d-flex">
                                <a href="https://book.tribalsand.com/booking/roomlisting-tribalsand-retreatszurilimited-be"
                                    target="_blank" class="btn book-btn">Book an Enquiry →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6" style="min-height: 50vh">
                    <div class="slider-container">
                        <img src="images/zuri/Aerial/zuri.jpg" alt="Luxury Villa 1" class="slider-image active p-md-5">
                        <!-- <img src="images/zuri/Aerial/zuri-1.jpg" alt="Luxury Villa 3" class="slider-image p-md-5"> -->
                        <img src="images/zuri/Aerial/zuri-3.jpg" alt="Luxury Villa 2" class="slider-image p-md-5">
                        <img src="images/zuri/Beach/zuri.watamu.beach.webp" alt="Luxury Villa 3"
                            class="slider-image p-md-5">
                        <img src="images/zuri/Pool/Zuri Best3.jpg" alt="Luxury Villa 4" class="slider-image p-md-5">
                        <img src="images/zuri/Pool/Zuri Best6.jpg" alt="Luxury Villa 5" class="slider-image p-md-5">
                        <img src="images/zuri/Aerial/zuri.jpg" alt="Luxury Villa 6" class="slider-image p-md-5">
                        <img src="images/zuri/Aerial/zuri-3.jpg" alt="Luxury Villa 7" class="slider-image p-md-5">
                    </div>
                </div>
            </div>
        </div>

        <script>
        function initializeSlider() {
            const images = document.querySelectorAll('.LuxuriousBeach1 .slider-image');
            let currentIndex = 0;

            function showNextImage() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }

            setInterval(showNextImage, 3000);
        }

        document.addEventListener('DOMContentLoaded', initializeSlider);
        </script>
    </section>

    <section class="amenities-section">
        <div class="container">
            <h2 class="section-title">PREMIUM AMENITIES OFFERED AT OUR HIDDEN PARADISE- ZURI
            </h2>

            <!-- <p class="text-left intro-text">
                With your stay at My Amani’s Garden View Room, you’ll enjoy the very best that luxury vacationing has to
                offer:
            </p> -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>
                                6 Suites ( Sleeping 14 people)</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-house"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>
                                Private Roof Terrace</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Swimming pool</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Award Winning interior design</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-umbrella-beach"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>
                                Private Beach Access</h5>
                        </div>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Check In: 2.00pm – Check Out: 10.00am</h5>
                        </div>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-wine-bottle"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Mini-fridge, kettle, coffee & tea station, complimentary bottled water, safe, hairdryer
                            </h5>
                        </div>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-fan"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Mosquito net, air conditioning, ceiling fan</h5>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Lush Garden filled with unique plants and indeginous trees</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Bed & Breakfast</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-kitchen-set"></i>
                        </div>
                        <div class="amenity-text">
                            <!-- <h5>
                                Fully equipped kitchen</h5> -->
                            <!-- <h5>
                                * Meals prepared by our in-house chefs
                                </br>À la carte or set menu – ingredients provided by us
                                </br>What to Expect :</br>
                                Every detail is taken care of for you.
                                All meals are prepared by our in-house chefs using fresh, locally sourced ingredients.
                                As part of our fully serviced experience, the kitchen is managed exclusively by our team
                                to ensure quality, hygiene, and peace of mind.
                                Guests can enjoy a curated dining experience with à la carte or set menu options
                                available daily.
                                </br>For the ultimate guest experience, self-catering is not offered—allowing you to
                                fully relax and enjoy your holiday without lifting a finger. *
                            </h5> -->   
                            <h5>
                               Dining Experience</br></br>
                                At Zuri, your stay is designed around comfort and simplicity.
                                </br>
                                A daily breakfast is included, served in a relaxed setting to start your day at your own pace.
                                </br>
                                For lunch and dinner, guests can enjoy a curated à la carte menu, served at designated times and charged separately.
                                </br>
                                A refined dining experience, thoughtfully designed to complement your stay.
                            </h5>
                        </div>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="amenity-text">
                            <h5> 24 Hour Security</h5>
                        </div>
                    </div>

                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-bath"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Body wash, shampoo, conditioner, hand wash, body lotion, vanity kit</h5>
                        </div>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Wi-Fi connection (no television in the room)</h5>
                        </div>
                    </div>


                    <!-- <div class="amenity-item">
                        <div class="amenity-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="amenity-text">
                            <h5>Check In: 2.00pm – Check Out: 10.00am</h5>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="text-left">
                <a href="https://book.tribalsand.com/booking/roomlisting-tribalsand-retreatszurilimited-be"
                    target="_blank" class="book-btn">Book a Reservation Today →</a>
                <p class="fs-small mt-3 fw-bold" style="font-size: 12px">A security deposit of USD500 will apply – Non
                    smoking property<br>
                    Airport transfers available on request.</p>
            </div>


        </div>
    </section>

    <section class="LuxuriousBeach LuxuriousBeach2 py-4" style="background-color: #FFF;">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <div class="hero-section2" style="background-color: #FFF;">
                        <div class="content-wrapper">
                            <h1 class="main-title text-dark">THE EMBODIMENT OF ECO-FRIENDLY ELEGANCE</h1>
                            <div class="description text-dark">
                                <p>Zuri is a beautifully restored Beachfront Boutique Hotel in Watamu that seamlessly
                                    blends local artistry with a deep commitment to environmental conservation. Set
                                    along a pristine stretch of beach, Zuri champions the preservation of its natural
                                    surroundings—including marine life like sea turtles—through dedicated cleanliness
                                    efforts and active community involvement.</p>
                                <p>Here, luxury meets sustainability, offering guests an experience where comfort,
                                    beauty, and nature coexist in perfect harmony. Whether you choose to book a private
                                    suite or the Entire property/ all suites, Zuri invites you to immerse yourself in an
                                    eco-conscious escape unlike any other.</p>
                                <p>ARE YOU READY TO EXPERIENCE ZURI?</p>
                            </div>
                            <div class="d-flex">
                                <a href="https://book.tribalsand.com/booking/roomlisting-tribalsand-retreatszurilimited-be"
                                    target="_blank" class="btn book-btn">Book a Reservation Today →</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" style="min-height: 50vh">
                    <div class="slider-container">
                        <img src="images/zuri/Garden/zuri.watamu.morning.pool-17.webp" alt="Luxury Villa 1"
                            class="slider-image active p-md-5" loading="lazy">
                        <img src="images/zuri/Garden/zuri.watamu.morning.pool-21.webp" alt="Luxury Villa 2"
                            class="slider-image p-md-5" loading="lazy">
                        <img src="images/zuri/Pool/Zuri Best9.jpg" alt="Luxury Villa 3" class="slider-image p-md-5"
                            loading="lazy">
                        <img src="images/zuri/Zuri - Bedrooms/Bedroom 1/Zuri Best16.jpg" alt="Luxury Villa 4"
                            class="slider-image p-md-5" loading="lazy">
                        <img src="images\zuri\Zuri - Living Areas Day\Indoors Living Area\Zuri Best8.jpg"
                            alt="Luxury Villa 4" class="slider-image p-md-5" loading="lazy">
                        <img src="images\zuri\Zuri - Living Areas Day\Indoors Living Area\Zuri Best10.jpg"
                            alt="Luxury Villa 4" class="slider-image p-md-5" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <script>
        function initializeSlider2() {
            const images = document.querySelectorAll('.LuxuriousBeach2 .slider-image');
            let currentIndex = 0;

            function showNextImage() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }

            setInterval(showNextImage, 3000);
        }

        document.addEventListener('DOMContentLoaded', initializeSlider2);
        </script>
    </section>

    <section class="LuxuriousBeach LuxuriousBeach3 py-4" style="background-color: #FFF;">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-6" style="min-height: 50vh">
                    <div class="slider-container">
                        <img src="images/zuri/Aerial/Zuri Best19.JPG" alt="Luxury Villa 1"
                            class="slider-image active p-md-5" loading="lazy">
                        <img src="images/zuri/Pool/Zuri Best3.jpg" alt="Luxury Villa 2" class="slider-image p-md-5"
                            loading="lazy">
                        <img src="images\zuri\Zuri - Living Areas Day\Indoors Living Area\Zuri Best7.jpg"
                            alt="Luxury Villa 3" class="slider-image p-md-5" loading="lazy">
                        <!-- <img src="images/zuri-3 (4).webp" alt="Luxury Villa 4" class="slider-image p-md-5" loading="lazy">
                        <img src="images/zuri-3 (5).webp" alt="Luxury Villa 4" class="slider-image p-md-5" loading="lazy"> -->
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="hero-section2" style="background-color: #FFF;">
                        <div class="content-wrapper">
                            <h1 class="main-title text-dark">YOUR GATEWAY TO ADVENTURE
                            </h1>
                            <div class="description text-dark">
                                <p>Zuri is your havenfor exciting adventures in the enchanting surroundings of Watamu.
                                </p>
                                <ul>
                                    <li><b>Thrilling Watersports:</b> Dive into a world of water sports, from
                                        exhilarating kite surfing to mesmerizing snorkeling and scuba diving.</li>
                                    <li><b>Sunset Delights:</b> Embark on a serene dhow cruise and savor a delicious
                                        dinner experience on the renowned Kilifi Creek, just a stone’s throw away.</li>
                                    <li><b>Endless Exploration:</b> Explore other activities and attractions that will
                                        keep you entertained for as long as your heart desires.</li>
                                </ul>
                                <p>
                                    At Zuri, adventure is right at your doorstep, promising memorable experiences and
                                    cherished moments.
                                </p>
                                <p>READY TO EMBRACE ADVENTURE?</p>
                            </div>
                            <div class="d-flex">
                                <a href="https://book.tribalsand.com/booking/roomlisting-tribalsand-retreatszurilimited-be"
                                    target="_blank" class="btn book-btn">Book a Reservation Today →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        function initializeSlider3() {
            const images = document.querySelectorAll('.LuxuriousBeach3 .slider-image');
            let currentIndex = 0;

            function showNextImage() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }

            setInterval(showNextImage, 3000);
        }

        document.addEventListener('DOMContentLoaded', initializeSlider3);
        </script>

    </section>

    <!-- <section class="LuxuriousBeach LuxuriousBeach4 py-4" style="background-color: #031B31;">
        <div class="container">
            <div class="row g-0">


                <div class="col-12 col-lg-6">
                    <div class="hero-section2" style="background-color: #031B31;">
                        <div class="content-wrapper">
                            <h1 class="main-title text-white">ADVENTURE AND ACTIVITIES</h1>
                            <div class="description text-white">
                               <ul>
                                <li>Snorkeling and Scuba Diving</li>
                                <li> Watamu Turtle Watch</li>
                                <li>Arabuko Sokoke Forest Exploration</li>
                                <li>Kite Surfing</li>
                                <li>Local Cuisine and Culture Discovery</li>
                               </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6" style="min-height: 50vh">
                    <div class="slider-container" style="left: 0px;">
                        <img src="images/Tethys-bathroom.jpg.webp" alt="Luxury Villa 1" class="slider-image active" loading="lazy">
                        <img src="images/Tethys-bedroom3.jpeg.webp" alt="Luxury Villa 2" class="slider-image" loading="lazy">
                        <img src="images/Tethys-dining-inside-garden.jpeg.webp" alt="Luxury Villa 3" class="slider-image" loading="lazy">
                    </div>
                </div>

            </div>
        </div>

        <script>
            function initializeSlider4() {
                const images = document.querySelectorAll('.LuxuriousBeach4 .slider-image');
                let currentIndex = 0;

                function showNextImage() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }

                setInterval(showNextImage, 3000);
            }

            document.addEventListener('DOMContentLoaded', initializeSlider4);
        </script>
    </section> -->

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

    <section class="adventure-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="adventure-content">
                        <h2 class="adventure-title">Make Room<br> for Adventure</h2>
                        <h4 class="adventure-subtitle">Book your stay now and begin your unforgettable coastal escape
                            with Zuri by Tribalsand—available as a Beachfront Boutique Hotel with the option to reserve
                            individual suites or the entire Beachfront Boutique Hotel.</h4>
                        <a href="https://book.tribalsand.com/booking/book-rooms-retreatszurilimited"
                            class="btn-reservation">
                            <span>Book a Reservation Today</span>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contatnow">
        <?php include 'includes/contact.php'; ?>
    </section>
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- IntlTelInput Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
    const phoneInputField = document.querySelector("#phone");
    const errorMsg = document.querySelector("#error-msg");
    const validMsg = document.querySelector("#valid-msg");

    // Error messages for different error codes
    const errorMap = [
        "Invalid number",
        "Invalid country code",
        "Too short",
        "Too long",
        "Invalid number"
    ];

    // Initialize the intl-tel-input
    const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["us", "co", "in", "de"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        separateDialCode: true,
        autoPlaceholder: "aggressive",
        formatOnDisplay: true,
        allowDropdown: true,
        autoHideDialCode: false,
        nationalMode: true
    });

    // Function to reset messages
    const reset = () => {
        phoneInputField.classList.remove("error");
        errorMsg.style.display = "none";
        validMsg.style.display = "none";
    };

    // Validate on input
    const validatePhoneNumber = () => {
        reset();

        if (phoneInputField.value.trim()) {
            if (phoneInput.isValidNumber()) {
                validMsg.style.display = "block";
                return true;
            } else {
                phoneInputField.classList.add("error");
                const errorCode = phoneInput.getValidationError();
                errorMsg.textContent = errorMap[errorCode] || "Invalid number";
                errorMsg.style.display = "block";
                return false;
            }
        }
        return false;
    };

    // Event listeners
    phoneInputField.addEventListener("blur", validatePhoneNumber);
    phoneInputField.addEventListener("change", validatePhoneNumber);
    phoneInputField.addEventListener("keyup", validatePhoneNumber);

    // Country change event
    phoneInput.promise.then(() => {
        phoneInputField.addEventListener("countrychange", () => {
            reset();
            validatePhoneNumber();
        });
    });

    // Example of getting the full number with country code
    const getFullNumber = () => {
        if (validatePhoneNumber()) {
            return phoneInput.getNumber(); // E.164 format
        }
        return null;
    };
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const slidesData = [{
                image: 'images/Golf.jpg.webp',
                title: 'PGA Baobab Golf Course',
                description: 'Go on a one-of-a-kind golfing experience at Africa’s only 18-Hole, PGA accredited Golf Course.',
                alt: 'Golf'
            },
            {
                image: 'images/Kuruwitu-Conservancy.jpg',
                title: 'Kuruwitu Conservancy',
                description: 'Kayak and snorkel at the Kuruwitu Marine Park, a protected area with over 200 different species of fish.',
                alt: 'Kuruwitu Conservancy'
            },
            {
                image: 'images/kitesurf.jpeg',
                title: 'Kitesurfing',
                description: 'Kitesurf with ease along Vipingo’s iconic sandy coastline for a thrilling marine adventure.',
                alt: 'Kitesurfing'
            },
            {
                image: 'images/skydive-tandem-jump-windows-wallpaper-5379579.jpg.webp',
                title: 'Skydiving',
                description: 'Inject some adrenaline into your vacation with a breathtaking bird’s-eye-view of Vipingo Ridge.',
                alt: 'Skydiving'
            },
            {
                image: 'images/sail-7714719_1280.jpg.webp',
                title: 'Traditional Swahili Sunset Dhow Cruise',
                description: 'Let Captain Issa and his crew take you on an unforgettable, sunset trip along the nearby Kilifi Creek.',
                alt: 'Traditional Swahili Sunset Dhow Cruise'
            },
            {
                image: 'images/Arabuko-Sokoke (1).png',
                title: 'Arabuko Sokoke National Reserve',
                description: 'Experience birdwatching like no other with Arabuko Sokoke National Reserve’s unparalleled biodiversity.',
                alt: 'Arabuko Sokoke National Reserve'
            },
            {
                image: 'images/Dolphin-Safari-2.jpg.webp',
                title: 'Watamu-Malindi Beaches',
                description: 'Let loose and relax on the velvety smooth sand at the serene beaches of Watamu and Malindi.',
                alt: 'Watamu-Malindi Beaches'
            },
            {
                image: 'images/Dolphin-sighting.jpg.webp',
                title: 'Dolphin Safari',
                description: 'Say hello to Kenya’s majestic dolphins at Watamu Marine Park’s dolphin haven sanctuaries.',
                alt: 'Dolphin Safari'
            },
            {
                image: 'images/humpback-whale-436120_1280 (1).webp',
                title: 'Seasonal Whale Watching',
                description: 'Take an excursion out on the water for a seasonal whale watching tour at Watamu Marine Park.',
                alt: 'Seasonal Whale Watching'
            },
            {
                image: 'images/Deep-sea-fishing-img-1.jpg.webp',
                title: 'Deep Sea Fishing',
                description: 'Explore a myriad of deep sea fishing options from Vipingo’s local, hands-on fishing tours.',
                alt: 'Deep Sea Fishing'
            },
            {
                image: 'images/MARAFA-HELLS-KITCHEN.jpg.webp',
                title: 'Marafa Hells Kitchen',
                description: 'A picturesque canyon in Malindi. It features jagged sandstone cliffs and formations that rise as high as 30m.',
                alt: 'Marafa Hells Kitchen'
            }
        ];

        class InfiniteCarousel {
            constructor(container, slides) {
                this.container = container;
                this.track = container.querySelector('.activities-track');
                this.slides = slides;
                this.currentIndex = 0;
                this.isTransitioning = false;
                this.autoplayInterval = null;

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
                if (this.track) {
                    this.renderSlides();
                }
            }

            init() {
                this.renderSlides();
                this.addListeners();
                this.startAutoplay();
            }

            renderSlides() {
                const clonedSlides = [...this.slides];
                const clonedStart = clonedSlides.slice(-this.slidesPerView);
                const clonedEnd = clonedSlides.slice(0, this.slidesPerView);

                // Create expanded slides array for infinite effect
                const expandedSlides = [...clonedStart, ...clonedSlides, ...clonedEnd];

                this.track.innerHTML = expandedSlides
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
                // Navigation buttons
                document.querySelector('.carousel-button-next').addEventListener('click', () => {
                    this.pauseAutoplay();
                    this.moveSlide(1);
                    this.startAutoplay();
                });

                document.querySelector('.carousel-button-prev').addEventListener('click', () => {
                    this.pauseAutoplay();
                    this.moveSlide(-1);
                    this.startAutoplay();
                });

                // Handle mouse interactions
                this.track.addEventListener('mouseenter', () => this.pauseAutoplay());
                this.track.addEventListener('mouseleave', () => this.startAutoplay());

                // Handle transition end
                this.track.addEventListener('transitionend', () => {
                    this.isTransitioning = false;
                    this.handleInfiniteScroll();
                });
            }

            moveSlide(direction) {
                if (this.isTransitioning) return;

                this.isTransitioning = true;
                this.currentIndex += direction;
                this.updatePosition();
            }

            handleInfiniteScroll() {
                const totalSlides = this.slides.length + 2 * this.slidesPerView;

                if (this.currentIndex <= 0) {
                    this.currentIndex = this.slides.length;
                    this.updatePosition(false);
                } else if (this.currentIndex >= totalSlides - this.slidesPerView) {
                    this.currentIndex = this.slidesPerView;
                    this.updatePosition(false);
                }
            }

            updatePosition(animate = true) {
                if (!animate) {
                    this.track.style.transition = 'none';
                } else {
                    this.track.style.transition = 'transform 0.5s ease';
                }

                const offset = -this.currentIndex * (100 / this.slidesPerView);
                this.track.style.transform = `translateX(${offset}%)`;

                if (!animate) {
                    // Force reflow
                    this.track.offsetHeight;
                    this.track.style.transition = 'transform 0.5s ease';
                }
            }

            startAutoplay() {
                if (this.autoplayInterval) return;

                this.autoplayInterval = setInterval(() => {
                    this.moveSlide(1);
                }, 3000); // Change slide every 3 seconds
            }

            pauseAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                    this.autoplayInterval = null;
                }
            }
        }

        // Initialize the carousel
        new InfiniteCarousel(document.querySelector('.activities-carousel'), slidesData);
    });
    </script>




    <script>
    $(document).ready(function() {
        // Handle click on parent dropdown toggle (including submenus)
        $('.dropdown-toggle').on('click', function(e) {
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
            $(this).attr('aria-expanded', function(_, attr) {
                return attr === 'true' ? 'false' : 'true';
            });
        });

        // Close dropdowns when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').removeClass('show');
                $('.dropdown-toggle').attr('aria-expanded', 'false');
            }
        });

        // Prevent closing of the parent dropdown when clicking on a submenu toggle
        $('.dropdown-submenu > .dropdown-toggle').on('click', function(e) {
            e.stopPropagation(); // Prevent closing parent dropdown when clicking on submenu
        });
    });
    </script>

    <script>
    document.querySelectorAll('.custom-toggler').forEach(button => {
        button.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
        });
    });
    </script>


 <script>
    document.addEventListener('DOMContentLoaded', function() {

        const galleryGrid = document.getElementById('galleryGrid');
        const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));

        let currentCategory = 'bedrooms';
        let currentlyLoadedImages = 0;
        const imagesPerLoad = 9;
        let isLoading = false;


        // =============================
        // SUITES DATA (BEDROOMS)
        // =============================
        const suitesData = [{
                name: "Maji Suite : King bed. Sleeps 2",
                category: "bedrooms",
                images: [
                    'images/zuri/Maji Suite/Maji Suite 1.jpg',
                    'images/zuri/Maji Suite/Maji Suite 2.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 1.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 2.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom 3.jpg',
                    'images/zuri/Maji Suite/Maji Suite Bathroom.jpg',
                    'images/zuri/Maji Suite/Maji Suite.jpg',
                ]
            },

            {
                name: "Mwezi Suite: King + two twin beds. Sleeps 4.",
                category: "bedrooms",
                images: [
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
                    'images/zuri/Mwezi Suite/IMG-20251121-WA0046.jpg',
                ]
            },

            {
                name: "Ua Suite: King Bed. Sleeps 2",
                category: "bedrooms",
                images: [
                    'images/zuri/Ua Suite/Ua Suite 1.jpg',
                    'images/zuri/Ua Suite/Ua Suite 2.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom 1.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom 2.jpg',
                    'images/zuri/Ua Suite/Ua Suite Bathroom.jpg',
                    'images/zuri/Ua Suite/Ua Suite.jpg',
                ]
            },

            {
                name: "Anga Suite: King Bed. Sleeps 2.",
                category: "bedrooms",
                images: [
                    'images/zuri/Anga Suite/Anga Suite 2.jpg',
                    'images/zuri/Anga Suite/Anga Suite .jpg',
                    'images/zuri/Anga Suite/Anga Suite 1.jpg',
                    // 'images/zuri/Anga Suite/Anga Suite 2.jpg',
                    'images/zuri/Anga Suite/Anga Suite 3.jpg',
                    'images/zuri/Anga Suite/Anga Suite Bathroom 1.jpg',
                    'images/zuri/Anga Suite/Anga Suite Bathroom.jpg',
                    'images/zuri/Anga Suite/Mwezi Suite 1.jpg',
                ]
            },

            {
                name: "Jua Suite: King Bed. Sleeps 2.",
                category: "bedrooms",
                images: [
                    'images/zuri/Jua Suite/Zuri Retreat Jua Suite.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Jua Suite Balcony.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Jua Suite Bathroom 2.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Suite Anga Bathroom.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Suite Jua 1.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Suite Jua 2.jpg',
                    'images/zuri/Jua Suite/Zuri Retreat Suite Jua Bathroom.jpg',
                ]
            },

            {
                name: "Bahari Suite: Two Single Beds. Sleeps 2",
                category: "bedrooms",
                images: [
                    'images/zuri/Bahari Suite/IMG-20251121-WA0011.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0014.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0015.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0016.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0017.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0018.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0019.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0020.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0021.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0022.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0023.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0024.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0025.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0026.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0027.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0028.jpg',
                    'images/zuri/Bahari Suite/IMG-20251121-WA0029.jpg',
                    'images/zuri/Bahari Suite/WhatsApp Image 2025-11-21 at 13.12.48_8ee218c1.jpg',
                    'images/zuri/Bahari Suite/WhatsApp Image 2025-11-21 at 13.12.51_02420a65.jpg',
                    'images/zuri/Bahari Suite/WhatsApp Image 2025-11-21 at 13.12.52_5ebe29cd.jpg',
                ]
            }
        ];


        // =============================
        // OTHER GALLERY IMAGES
        // =============================
        const galleryData = [  

            /* AERIAL */
            {
                src: "images/zuri/Aerial/zuri-2.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-8.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-9.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-11.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-12.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-13.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-14.jpg",
                category: "aerial"
            },
            {
                src: "images/zuri/Aerial/zuri-15.jpg",
                category: "aerial"
            },
            
 
            /* BEACH */
            {
                src: "images/zuri/Beach/zuri.watamu.beach-2.webp",
                category: "beach"
            },
            {
                src: "images/zuri/Aerial/zuri-3.jpg",
                category: "beach"
            },
            {
                src: "images/zuri/Aerial/zuri-6.jpg",
                category: "beach"
            },

            /* GARDEN */
            {
                src: "images/zuri/Garden/zuri.watamu.entryoutdoor.garden-2.webp",
                category: "garden"
            },
            {
                src: "images/zuri/Garden/zuri.watamu.entryoutdoor.garden-3.webp",
                category: "garden"
            },
            {
                src: "images/zuri/Garden/zuri.watamu.entryoutdoor.garden-4.webp",
                category: "garden"
            },
            {
                src: "images/zuri/Garden/zuri.watamu.morning.pool-3.webp",
                category: "garden"
            },
            {
                src: "images/zuri/Garden/zuri.watamu.morning.pool-10.webp",
                category: "garden"
            },
           
            {
                src: "images/zuri/Garden/zuri.watamu.morning.pool-13.webp",
                category: "garden"
            },
            {
                src: "images/zuri/Garden/zuri.watamu.morning.pool-17.webp",
                category: "garden"
            },
            
            /* GREENHOUSE */   
            {
                src: "images/zuri/Green House/zuri.watamu.outdoor.greenhouse-2.webp",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg1.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg2.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg3.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg4.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg5.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg6.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg7.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg8.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg9.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg1.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg10.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg11.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg12.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg13.jpeg",
                category: "greenhouse"
            },
            {
                src: "images/zuri/Green House/Greenhouseimg14.jpeg",
                category: "greenhouse"
            },


            /* POOL */
            {
                src: "images/zuri/Pool/Zuri Best6.jpg",
                category: "pool"
            },
            {
                src: "images/zuri/Pool/Zuri Best9.jpg",
                category: "pool"
            },
            {
                src: "images/zuri/Pool/zuri.watamu.beach-4.webp",
                category: "pool"
            },


            /* UDLA AREA */
            {
                src: "images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 2.jpg",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 4.jpg",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Entrance Day/zuri.watamu.entry-13.webp",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-2.webp",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-5.webp",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-6.webp",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0050.jpg",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0055.jpg",
                category: "udla"
            },
            {
                src: "images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0058.jpg",
                category: "udla"
            }

        ];   


        // =============================
        // RENDER GALLERY
        // =============================
        function renderGallery(append = false) {

            let items;

            if (currentCategory === 'bedrooms') {
                items = suitesData;
            } else if (currentCategory === 'all') {
                items = galleryData;
            } else {
                items = galleryData.filter(img => img.category === currentCategory);
            }

            if (!append) {
                galleryGrid.innerHTML = '';
                currentlyLoadedImages = 0;
            }

            const slice = items.slice(currentlyLoadedImages, currentlyLoadedImages + imagesPerLoad);

            slice.forEach((item, index) => {

                let html;

                if (currentCategory === 'bedrooms') {

                    html = `
                            <div class="col-md-4">
                            <div class="gallery-item" data-index="${currentlyLoadedImages + index}">
                            <img src="${item.images[0]}" class="img-fluid">
                            <div class="gallery-overlay">
                            <span class="suite-name">${item.name}</span>
                            </div>
                            </div>
                            </div>`;

                } else {

                    html = `
                            <div class="col-md-4">
                            <div class="gallery-item" data-index="${currentlyLoadedImages + index}">
                            <img src="${item.src}" class="img-fluid">
                            </div>
                            </div>`;

                }

                galleryGrid.insertAdjacentHTML("beforeend", html);

            });

            currentlyLoadedImages += slice.length;

            attachClickHandlers();
        }


        // =============================
        // CLICK HANDLERS
        // =============================
        function attachClickHandlers() {

            document.querySelectorAll(".gallery-item").forEach(item => {

                item.addEventListener("click", function() {

                    const index = parseInt(this.dataset.index);

                    if (currentCategory === "bedrooms") {

                        showSuiteModal(index);

                    } else {

                        showImageModal(index);

                    }

                });

            });

        }


        // =============================
        // SUITE MODAL
        // =============================

        let modalImages = [];
        let currentModalIndex = 0;

        // function showSuiteModal(index) {

        //     const suite = suitesData[index];
        //     const container = document.getElementById("modalImagesContainer");

        //     container.innerHTML = "";

        //     suite.images.forEach(src => {

        //         container.innerHTML += `
        //             <div class="mb-3">
        //             <img src="${src}" class="img-fluid w-100">
        //             </div>`;

        //     });

        //     imageModal.show();

        // }
        function showSuiteModal(index) {

            const suite = suitesData[index];

            modalImages = suite.images;
            currentModalIndex = 0;

            updateModalImage();

            imageModal.show();

        }

        function updateModalImage() {

            const modalImg = document.querySelector(".modal-image");

            modalImg.src = modalImages[currentModalIndex];

        }

        document.querySelector(".modal-next").addEventListener("click", function() {

            currentModalIndex++;

            if (currentModalIndex >= modalImages.length) {
                currentModalIndex = 0;
            }

            updateModalImage();

        });


        document.querySelector(".modal-prev").addEventListener("click", function() {

            currentModalIndex--;

            if (currentModalIndex < 0) {
                currentModalIndex = modalImages.length - 1;
            }

            updateModalImage();

        });




        // =============================
        // SINGLE IMAGE MODAL
        // =============================
        // function showImageModal(index) {

        //     const images = galleryData.filter(img => img.category === currentCategory);
        //     const container = document.getElementById("modalImagesContainer");

        //     container.innerHTML = `
        //         <img src="${images[index].src}" class="img-fluid w-100">
        //         `;

        //     imageModal.show();

        // }


        function showImageModal(index) {

            const images = galleryData.filter(img => img.category === currentCategory);

            modalImages = images.map(img => img.src);

            currentModalIndex = index;

            updateModalImage();

            imageModal.show();

        }



        // =============================
        // CATEGORY TABS
        // =============================
        document.querySelectorAll(".nav-link").forEach(tab => {

            tab.addEventListener("click", function() {

                document.querySelectorAll(".nav-link").forEach(t => t.classList.remove(
                    "active"));

                this.classList.add("active");

                currentCategory = this.dataset.category;

                renderGallery();

            });

        });


        // =============================
        // INITIAL LOAD
        // =============================
        renderGallery();

    });
    </script>




    <!--  js gallery old section -->



    <script>
    // document.addEventListener('DOMContentLoaded', function() {

    //     const galleryData = [
    //         // Aerial Category
    //         ...[

    //             // 'images/zuri/Aerial/zuri.jpg',
    //             'images/zuri/Aerial/zuri-2.jpg',
    //             // 'images/zuri/Aerial/zuri-3.jpg',
    //             // 'images/zuri/Aerial/zuri-4.jpg',
    //             // 'images/zuri/Aerial/zuri-5.jpg',
    //             // 'images/zuri/Aerial/zuri-6.jpg',
    //             // 'images/zuri/Aerial/zuri-7.jpg',
    //             'images/zuri/Aerial/zuri-8.jpg',
    //             'images/zuri/Aerial/zuri-9.jpg',
    //             'images/zuri/Aerial/zuri-11.jpg',
    //             'images/zuri/Aerial/zuri-12.jpg',
    //             'images/zuri/Aerial/zuri-13.jpg',
    //             'images/zuri/Aerial/zuri-14.jpg',
    //             'images/zuri/Aerial/zuri-15.jpg',

    //         ].map((src, index) => ({
    //             id: `aerial-${index + 1}`,
    //             src,
    //             category: 'aerial',
    //             caption: 'Aerial View'
    //         })),

    //         // Beach Category
    //         ...[
                // // 'images/zuri/Beach/zuri.watamu.beach.webp',
                // 'images/zuri/Beach/zuri.watamu.beach-2.webp',
                // // 'images/zuri/Beach/zuri.watamu.beach-3.webp'  
                // 'images/zuri/Aerial/zuri-3.jpg',
                // // 'images/zuri/Aerial/zuri-4.jpg', 
                // 'images/zuri/Aerial/zuri-6.jpg',
    //         ].map((src, index) => ({
    //             id: `beach-${index + 1}`,
    //             src,
    //             category: 'beach',
    //             caption: 'Beach Scene'
    //         })),

    //         // Garden Category
    //         ...[
                // 'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-2.webp',
                // 'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-3.webp',
                // 'images/zuri/Garden/zuri.watamu.entryoutdoor.garden-4.webp',
                // 'images/zuri/Garden/zuri.watamu.morning.pool-3.webp',
                // 'images/zuri/Garden/zuri.watamu.morning.pool-10.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-11.webp',   
                // 'images/zuri/Garden/zuri.watamu.morning.pool-13.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-14.webp',
                // 'images/zuri/Garden/zuri.watamu.morning.pool-17.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-19.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-21.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-28.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-30.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.pool-31.webp',
                // // 'images/zuri/Garden/zuri.watamu.morning.upstares.outdoor.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.entry.garden-2.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea-17.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea-18.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-10.webp'
    //         ].map((src, index) => ({
    //             id: `garden-${index + 1}`,
    //             src,
    //             category: 'garden',
    //             caption: 'Garden View'
    //         })),

    //         // Greenhouse Category
    //         ...[
                // 'images/zuri/Green House/zuri.watamu.outdoor.greenhouse-2.webp',
                // 'images/zuri/Green House/zuri.watamu.outdoor.greenhouse-3.webp',
                // 'images/zuri/Green House/zuri.watamu.outdoor.greenhouse-4.webp'
    //         ].map((src, index) => ({
    //             id: `greenhouse-${index + 1}`,
    //             src,
    //             category: 'greenhouse',
    //             caption: 'Greenhouse'
    //         })),

    //         // Pool Category
    //         ...[
                // // 'images/zuri/Pool/Zuri Best3.jpg',
                // 'images/zuri/Pool/Zuri Best6.jpg',
                // 'images/zuri/Pool/Zuri Best9.jpg',
                // 'images/zuri/Pool/zuri.watamu.beach-4.webp',
                // // 'images/zuri/Pool/zuri.watamu.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.bedroom4-14.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.bedroom4-15.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.bedroom4-16.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.outdoor-2.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-15.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-16.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-2.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-20.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-22.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-23.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-24.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-26.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-27.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-29.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-4.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-6.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-7.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool-9.webp',
                // // 'images/zuri/Pool/zuri.watamu.morning.pool.webp',
                // // 'images/zuri/Pool/zuri.watamu.outdoor.pool-2.webp',
                // // 'images/zuri/Pool/zuri.watamu.outdoor.pool.webp',
                // // 'images/zuri/Pool/zuri.watamu.pool-2.webp',
                // // 'images/zuri/Pool/zuri.watamu.pool.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-12.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-13.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-2.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-4.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-5.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-6.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-8.webp',
                // // 'images/zuri/Zuri - Night/Garden & Pool/zuri.watamu.evening.livingarea.outdoor-9.webp'
    //         ].map((src, index) => ({
    //             id: `pool-${index + 1}`,
    //             src,
    //             category: 'pool',
    //             caption: 'Pool Area'
    //         })),

    //         // Bedrooms Category   
    //         ...[
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/Anga Suite 2.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 2.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 3.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 4.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/IMG-20251121-WA0030.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/IMG-20251121-WA0031.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/Maji Suite Bathroom 1.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/Ua Suite 1.jpg',
    //             'images/zuri/Zuri - Bedrooms/Bedroom 1/Ua Suite.jpg',

    //         ].map((src, index) => ({
    //             id: `bedroom-${index + 1}`,
    //             src,
    //             category: 'bedrooms',
    //             caption: 'Bedroom'
    //         })),

    //         // udla Category    
    //         ...[
                // 'images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 2.jpg',
                // 'images/zuri/Zuri - Bedrooms/Bedroom 1/First Floor Relax - Reading Room 4.jpg',
                // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry-13.webp',
                // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-2.webp',
                // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-5.webp',
                // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-6.webp',
                // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0050.jpg',
                // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0055.jpg',
                // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0058.jpg',

    //         ].map((src, index) => ({
    //             id: `udla-${index + 1}`,
    //             src,
    //             category: 'udla',
    //             caption: 'udla Area'
    //         })),


    //         // Entrance Category
    //         ...[
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry-12.webp',
    //             'images/zuri/Zuri - Entrance Day/zuri.watamu.entry-13.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.webp',
    //             'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-2.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-3.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-4.webp',
    //             'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-5.webp',
    //             'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-6.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception-7.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-10.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-11.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-12.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-2.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-5.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-6.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-7.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairs-8.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-2.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-3.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.reception.upstairscrazy-5.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-2.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-4.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-5.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor-6.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entry.upstairs.corridor.webp',
    //             // 'images/zuri/Zuri - Entrance Day/zuri.watamu.entryoutdoor.garden-6.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-2.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-3.webp', 
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-4.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-5.webp',
    //             // 'images/zuri/Zuri - Night/Entrance/zuri.watamu.evening.entry.garden-6.webp'
    //         ].map((src, index) => ({
    //             id: `entrance-${index + 1}`,
    //             src,
    //             category: 'entrance',
    //             caption: 'Entrance Area'
    //         })),

    //         // Living Area Category     
    //         ...[
    //             // Indoor Living Area    
    //             ...[

    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0047.jpg',
    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0049.jpg',
    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0050 (1).jpg',
    //                 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0050.jpg',
    //                 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0055.jpg',
    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0056.jpg',
    //                 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0058.jpg',
    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0060.jpg',
    //                 // 'images/zuri/Zuri - Living Areas Day/Indoors Living Area/IMG-20251121-WA0059.jpg',

    //             ],

    //         ].map((src, index) => ({
    //             id: `living-area-${index + 1}`,
    //             src,
    //             category: 'living-area',
    //             caption: 'Living Area'
    //         })),


    //     ];

    //     const galleryGrid = document.getElementById('galleryGrid');
    //     const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
    //     let currentCategory = 'bedrooms';
    //     let currentImageIndex = 0;
    //     let imagesPerLoad = 9;
    //     let currentlyLoadedImages = 0;
    //     let isLoading = false;

    //     const loaderContainer = document.getElementById('loaderContainer');

    //     function attachClickHandlers() {
    //         document.querySelectorAll('.gallery-item').forEach((item, index) => {
    //             item.addEventListener('click', () => {
    //                 currentImageIndex = parseInt(item.dataset.index);
    //                 showImage(currentImageIndex);
    //                 imageModal.show();
    //             });
    //         });
    //     }

    //     function renderGallery(append = false) {
    //         if (append) {
    //             loaderContainer.style.display = 'block';
    //             // Add a small delay to show the loading animation
    //             setTimeout(() => {
    //                 renderImages(append);
    //                 loaderContainer.style.display = 'none';
    //             }, 800);
    //         } else {
    //             renderImages(append);
    //         }
    //     }

    //     // Move your existing render logic to this new function
    //     function renderImages(append) {
    //         const filteredImages = galleryData.filter(item => {
    //             if (currentCategory === 'all') return true;
    //             return item.category === currentCategory;
    //         });

    //         if (!append) {
    //             galleryGrid.innerHTML = '';
    //             currentlyLoadedImages = 0;
    //         }

    //         const startIndex = currentlyLoadedImages;
    //         const endIndex = Math.min(startIndex + imagesPerLoad, filteredImages.length);
    //         const imagesToRender = filteredImages.slice(startIndex, endIndex);

    //         const newHTML = imagesToRender.map((item, index) => `
    //                 <div class="col-md-4">
    //                     <div class="gallery-item fade-in" data-index="${startIndex + index}">
    //                         <img src="${item.src}" alt="${item.caption}" loading="lazy">
    //                         <div class="gallery-overlay">
    //                             <i class="fas fa-expand"></i>
    //                         </div>
    //                     </div>
    //                 </div>
    //             `).join('');

    //         galleryGrid.insertAdjacentHTML('beforeend', newHTML);
    //         currentlyLoadedImages = endIndex;
    //         isLoading = false;

    //         // Add click handlers to new gallery items
    //         attachClickHandlers();
    //     }


    //     // Infinite scroll handler
    //     function handleScroll() {
    //         if (isLoading) return;

    //         const scrollPosition = window.innerHeight + window.scrollY;
    //         const bodyHeight = document.documentElement.scrollHeight;

    //         const filteredImages = galleryData.filter(item => {
    //             if (currentCategory === 'all') return true;
    //             return item.category === currentCategory;
    //         });

    //         if (scrollPosition >= bodyHeight - 1000 && currentlyLoadedImages < filteredImages.length) {
    //             isLoading = true;
    //             renderGallery(true);
    //         }
    //     }

    //     // Show image in modal
    //     function showImage(index) {
    //         const filteredImages = galleryData.filter(item => {
    //             if (currentCategory === 'all') return true;
    //             return item.category === currentCategory;
    //         });

    //         const image = filteredImages[index];
    //         const modalImage = document.querySelector('.modal-image');
    //         const caption = document.querySelector('.image-caption');

    //         modalImage.src = image.src;
    //         modalImage.alt = image.caption;
    //         caption.textContent = image.caption;
    //     }



    //     // Navigation event handlers
    //     document.querySelectorAll('.nav-tabs .nav-link').forEach(link => {
    //         link.addEventListener('click', function() {
    //             document.querySelectorAll('.nav-tabs .nav-link').forEach(l => l.classList
    //                 .remove('active'));
    //             this.classList.add('active');
    //             currentCategory = this.dataset.category;
    //             renderGallery(false);
    //         });
    //     });

    //     // Modal navigation
    //     document.querySelector('.modal-prev').addEventListener('click', () => {
    //         const filteredImages = galleryData.filter(item => {
    //             if (currentCategory === 'all') return true;
    //             return item.category === currentCategory;
    //         });

    //         currentImageIndex = (currentImageIndex - 1 + filteredImages.length) % filteredImages.length;
    //         showImage(currentImageIndex);
    //     });

    //     document.querySelector('.modal-next').addEventListener('click', () => {
    //         const filteredImages = galleryData.filter(item => {
    //             if (currentCategory === 'all') return true;
    //             return item.category === currentCategory;
    //         });

    //         currentImageIndex = (currentImageIndex + 1) % filteredImages.length;
    //         showImage(currentImageIndex);
    //     });

    //     // Add scroll event listener
    //     window.addEventListener('scroll', handleScroll);

    //     // Initialize gallery
    //     renderGallery();
    // });
    </script>


    <!-- js gallery section end -->
</body>

</html>