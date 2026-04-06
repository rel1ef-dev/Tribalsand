 <!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TribalSand | Sustainability</title>

    <link rel="canonical" href="https://tribalsand.com/sustainability.php" />

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



    <!-- header section css -->

    <style>
    html,
    body {
        overflow-x: hidden;
        /* Prevent horizontal scrolling */
    }

    .row,
    .container-fluid {
        margin: 0 !important;
        padding: 0 !important;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
    }



    .hero-sections {

        position: relative;

        min-height: 100vh;

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

        background-image: url('images/sustainabilityheroimg.jpg');

        background-color: #f7f7f7;

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

        background: rgba(0, 0, 0, 0.4);

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

        font-size: 2.5rem;

        font-weight: bold;

        margin-bottom: 1rem;

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



    <!-- PGA GOLF CSS -->

    <style>
    .banner-section {

        background-color: #2C3F58;

        color: white;

        padding: 100px 0;

        text-align: center;

        height: 750px;


    }



    .banner-title {

        font-family: Marcellus SC, sans-serif;

        font-size: 40px;

        font-weight: 100;

        letter-spacing: 6px;

        line-height: 52px;

        text-decoration: none solid rgb(255, 255, 255);

        text-transform: uppercase;

        margin-bottom: 30px;

    }



    .banner-description {

        font-family: Piazzolla, sans-serif;

        font-size: 18px;

        font-weight: 300;

        letter-spacing: 2px;

        line-height: 27px;

        text-decoration: none solid rgb(255, 255, 255);

        margin: 0 auto;

    }



    @media (max-width: 768px) {

        .banner-title {

            font-size: 2rem;

        }



        .banner-description {

            font-size: 1rem;

            padding: 0 20px;

        }

    }
    </style>



    <!-- driving range -->

    <style>
    .facility-section {

        background-color: #EDDED6;

        padding: 40px;

    }

    .facility-sectionss {

        background-color: #4F413F;

        padding: 40px;

    }



    .content-box {

        background-color: #4F413F;

        color: white;

        padding: 3rem 2rem;

        height: 100%;

        align-content: center;

    }

    .content-box-greenhouse {

        background-color: #2C3F58;

        color: white;

        padding: 3rem 2rem;

        height: 100%;

        align-content: center;

    }


    .content-boxx {

        background-color: #F7F4EF;

        color: black;

        padding: 3rem 2rem;

        height: 100%;

        align-content: center;

    }




    .divider {

        width: 50px;

        height: 2px;

        background-color: #d4af37;

        margin: 1.5rem 0;

    }



    .facility-title {

        font-family: Marcellus SC, sans-serif;

        font-weight: 36px;

        font-weight: 300;

        letter-spacing: 4px;

        line-height: 36px;

        text-decoration: none solid rgb(255, 255, 255);

    }



    .subtitle {

        font-family: Piazzolla, sans-serif;

        font-size: 15px;

        font-weight: 300;

        letter-spacing: 0.7px;

        line-height: 22.5px;

        text-decoration: none solid rgb(255, 255, 255);

        margin-bottom: 1rem;

    }



    .facility-list {

        list-style: none;

        padding-left: 0;

    }



    .facility-list li {

        margin-bottom: 0.5rem;

        position: relative;

        padding-left: 1.5rem;

    }



    .facility-list li:before {

        content: "•";

        position: absolute;

        left: 0;

        color: #d4af37;

    }



    .facility-image {

        height: 369px !important;

        width: 604px !important;

        object-fit: cover;

        min-height: 400px;

    }



    @media (max-width: 768px) {

        .facility-image {

            min-height: 300px;

        }



        .content-box {

            padding: 2rem 1.5rem;

        }

    }
    </style>



    <!-- GOLF WITH A UNIQUELY KENYAN TWIST CSS -->

    <style>
    .golf-section {

        padding: 80px 0;

        background-color: #ffffff;

    }



    .divider {

        width: 80px;

        height: 3px;

        background-color: #c0a080;

        margin: 20px 0;

    }



    .heading {

        font-family: Marcellus SC, sans-serif;

        font-size: 36px;

        font-weight: 300;

        letter-spacing: 4px;

        line-height: 36px;

        text-decoration: none solid rgb(45, 45, 45);

    }



    .subheading {

        font-family: Piazzolla, sans-serif;

        font-size: 16px;

        font-weight: 500;

        letter-spacing: 2px;

        line-height: 24px;

        text-decoration: none solid rgb(45, 45, 45);

    }





    .golf-image {

        width: 100%;

        height: 400px;

        object-fit: cover;

    }
    </style>



    <!-- Ready to explore -->

    <style>
    .hero-section {

        position: relative;

        background-image: url('images/green-2480256_640.jpg');

        background-size: cover;

        background-position: center;

        height: 60vh;

        display: flex;

        align-items: center;

        justify-content: center;

        overflow: hidden;

    }



    .hero-section::before {

        content: '';

        position: absolute;

        top: 0;

        left: 0;

        right: 0;

        bottom: 0;

        background: rgba(0, 0, 0, 0.4);

        z-index: 1;

    }



    .content-wrapper {

        position: relative;

        z-index: 2;

        text-align: center;

        max-width: 800px;

        width: 100%;

        padding: 2rem;

        position: absolute;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);

    }



    .hero-title {

        color: white;

        margin-bottom: 2.5rem;

        text-transform: uppercase;

        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);

        width: 100%;

        text-align: center;

        font-family: Marcellus SC, sans-serif;

        font-size: 36px;

        font-weight: 500;

        letter-spacing: 1.6px;

        line-height: 46.8px;

        text-decoration: none solid rgb(255, 255, 255);

    }



    .cta-wrapper {

        width: 100%;

        text-align: center;

    }



    .cta-button {

        font-family: Piazzolla, sans-serif;

        background-color: #C5A572;

        color: #fff;

        padding: 12px 36px;

        border: none;

        border-radius: 5px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        transition: all 0.3s ease;

        font-size: 20px;

        letter-spacing: 2px;

        text-decoration: none solid rgb(255, 255, 255);

        font-weight: 500;

        min-width: 300px;

        margin: 0 auto;

    }



    .cta-button:hover {

        transform: scale(0.96);

        background-color: #B89660;

        color: white;

        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

        text-decoration: none;

    }



    .cta-button i {

        margin-left: 12px;

        font-size: 1.2rem;

    }



    /* Large screens */

    @media (min-width: 1400px) {

        .hero-title {

            font-size: 4rem;

        }



        .content-wrapper {

            max-width: 1000px;

        }



        .cta-button {

            padding: 20px 40px;

            font-size: 1.2rem;

        }

    }



    /* Medium screens */

    @media (max-width: 992px) {

        .hero-title {

            font-size: 3rem;

        }



        .content-wrapper {

            max-width: 700px;

        }

    }



    /* Small screens */

    @media (max-width: 768px) {

        .hero-section {

            height: 80vh;

        }



        .hero-title {

            font-size: 2.5rem;

            margin-bottom: 2rem;

        }



        .cta-button {

            padding: 15px 30px;

            min-width: 280px;

            font-size: 1rem;

        }

    }



    /* Extra small screens */

    @media (max-width: 576px) {

        .hero-section {

            height: 70vh;

        }



        .hero-title {

            font-size: 2rem;

            margin-bottom: 1.5rem;

        }



        .content-wrapper {

            padding: 1rem;

        }



        .cta-button {

            padding: 12px 24px;

            min-width: 260px;

        }

    }



    /* Handle very tall screens */

    @media (min-height: 1000px) {

        .hero-section {

            height: 60vh;

        }

    }



    /* Handle landscape orientation on mobile */

    @media (max-height: 600px) and (orientation: landscape) {

        .hero-section {

            height: 100vh;

            padding: 2rem 0;

        }



        .hero-title {

            font-size: 2rem;

            margin-bottom: 1rem;

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



</head>



<body>
    <?php include 'includes/g-tag-body.php'; ?>



    <?php include 'includes/header.php'; ?>



    <section class="hero-sections d-flex align-items-center">

        <div class="slideshow-container">

            <div class="slideshow-image"></div>

        </div>

        <div class="overlay"></div>

        <div class="container content-container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-10 col-lg-8">

                    <h1 class="main-title">Sustainability</h1>

                    <p class="subtitlee">At Tribal Sand, sustainability is not just an add-on – it’s at the heart of
                        everything we do</p>

                </div>

            </div>

        </div>

    </section>


    <section class="banner-section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-10 col-lg-8">
                    <!-- <img src="images/whitelogo.png" alt="Logo" class="mb-3" style="max-height: 80px;" /></br></br></br> -->
                    <div class="text-center mb-4">
                        <img src="images/whitelogo11.png" alt="Logo" class="img-fluid"
                            style="max-height: 80px; display: block; margin-left: auto; margin-right: auto;" />
                    </div> </br>


                    <!-- <h1 class="banner-title">Responsible Stewards of The Land</h1> 

                    <p class="banner-description">Since opening our doors in 1992, Post Ranch has been at the forefront of 
                        environmental responsibility and continues to be an industry leader when it comes to sustainability. 
                        It is our belief that what’s good for the planet can also be good for your guest experience.
                    </p> -->

                    <div class="text-center">
                        <h1 class="banner-title mx-auto wider-heading">Responsible Stewards of The Land</h1></br>

                        <div class="mx-auto  " style="max-width: 650px;">
                            <p class="banner-description">
                                At Tribal Sand, we don’t just offer a place to stay – we offer a way to travel
                                consciously.
                                Our
                                properties, which stretch across the stunning coastline of Kenya from Watamu to Vipingo,
                                are designed and operated with a deep respect for nature, culture, and community.

                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>



    <style>
    .facility-section .slider-container {

        height: 100%;

        position: relative;

        overflow: hidden;

    }



    @media (max-width: 768px) {

        .facility-section .slider-container {

            height: 100%;

        }

    }



    .facility-section .slider-image {

        position: absolute;

        top: 0;

        left: 0;

        width: 100%;

        height: 100%;

        opacity: 0;

        transition: opacity 1s ease-in-out;

        object-fit: cover;

    }



    .facility-section .slider-image.active {

        opacity: 1;

    }
    </style>



    <!-- new Section -->

    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;">
    <div class="container-fluid p-0">
        <div class="row no-gutters d-flex flex-wrap">

                <!-- Image Column -->
                <div class="col-12 col-lg-6 order-1 order-lg-1">
                    <div class="slider-container w-100" style="height: 100%; max-height: 550px; overflow: hidden;">
                        <img src="images/myamani.outdoor-77.jpg" alt="African Night Wedding" class="w-100"
                            style="height: 100%; object-fit: cover; object-position: center;">
                    </div>
                </div>

            <!-- Content Column -->
            <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                <div class="content-boxx px-5 py-5">
                    <h3 class="facility-title mb-3">Design & Architecture</h3>
                    <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                    <p class="mb-0 subtitle" style="line-height: 1.6;">
                        Our developments embrace the natural landscape, using locally sourced materials, passive
                        cooling techniques, and low-impact construction methods. We design with nature in mind to
                        blend harmoniously with our coastal surroundings while minimizing environmental disruption.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


    <section class="facility-sectionss w-100" style="margin: 0; padding: 0; background-color: #f5f5f5 !important;">
        <div class="container-fluid p-0">
            <div class="row no-gutters d-flex flex-wrap">

                <!-- Image Column (will show first on mobile) -->
                <div class="col-12 col-lg-6 order-1 order-lg-2" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/greenenergy.jpg" alt="African Night Wedding" class="w-100 h-100"
                            style="object-fit: cover; object-position: center;">
                    </div>
                </div>

                <!-- Content Column (will show second on mobile) -->
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="content-box p-5">
                        <h3 class="facility-title">Green Energy Initiatives</h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            We are committed to reducing our carbon footprint through the use of renewable energy.
                            All of our properties are equipped with solar panel systems that provide clean, reliable
                            power,
                            significantly reducing reliance on fossil fuels and lowering greenhouse gas emissions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;">
        <div class="container-fluid p-0">
            <div class="row no-gutters d-flex flex-wrap">

                <!-- Image Column (visible first on mobile) -->
                <div class="col-12 col-lg-6 order-1 order-lg-1" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/Water-management.jpg" alt="African Night Wedding" class="w-100 h-100"
                            style="object-fit: cover; object-position: center;">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                    <div class="content-boxx px-5 py-5">
                        <h3 class="facility-title mb-3">Water Sustainability</h3>
                        <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                        <p class="mb-0 subtitle" style="line-height: 1.6;">
                        In a region where water is a precious resource, we have implemented advanced water
                            conservation and management practices such as rainwater harvesting and in-house water
                            filtration systems, which produce clean drinking water and eliminate the need for plastic
                            bottles.
                        </p>
                    </div>
                </div>


                <!-- <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                    <div class="content-boxx px-4 py-5 px-md-5">
                        <h3 class="facility-title mb-3">Water Sustainability</h3>
                        <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                        <p class="mb-0 subtitle" style="line-height: 1.6;">
                            In a region where water is a precious resource, we have implemented advanced water
                            conservation and management practices such as rainwater harvesting and in-house water
                            filtration systems, which produce clean drinking water and eliminate the need for plastic
                            bottles.
                        </p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;background-color: #f5f5f5 !important;">

        <div class="container-fluid p-0">

            <div class="row no-gutters d-flex flex-wrap">
                <!-- 'no-gutters' replaces 'g-0' in Bootstrap 4 -->


                <div class="col-12 col-lg-6 order-1 order-lg-2" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/community.png" alt="African Night Wedding"
                            class="w-100 h-100" style="object-fit: cover; object-position: center;">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="content-box p-5">
                        <!-- Optional padding for inner content -->
                        <h3 class="facility-title">Community Engagement</h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            Tribal Sand is deeply rooted in the communities we operate in. We prioritize employment of
                            local residents and offer ongoing training and development to enhance skills and
                            livelihoods.
                            We are committed to fair labour practices, cultural preservation, and economic
                            empowerment at all levels.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;">
        <div class="container-fluid p-0">
            <div class="row no-gutters d-flex flex-wrap">

                <!-- Image Column (visible first on mobile) -->
                <div class="col-12 col-lg-6 order-1 order-lg-1" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/solid-waste-management-500x500.webp" alt="African Night Wedding"
                            class="w-100 h-100" style="object-fit: cover; object-position: center;">
                    </div>
                </div>

                <!-- Content Column -->

                <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                    <div class="content-boxx px-5 py-5">
                        <h3 class="facility-title mb-3">Waste Management</h3>
                        <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                        <p class="mb-0 subtitle" style="line-height: 1.6;">
                        We minimize waste through a combination of recycling programs, composting organic waste
                            from our kitchens, and reducing single-use plastics. Our goal is to move closer to zero
                            waste operations across all our properties.
                        </p>
                    </div>
                </div>



                <!-- <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                    <div class="content-boxx px-4 py-5 px-md-5">
                        <h3 class="facility-title mb-3">Waste Management</h3>
                        <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                        <p class="mb-0 subtitle" style="line-height: 1.6;">
                            We minimize waste through a combination of recycling programs, composting organic waste
                            from our kitchens, and reducing single-use plastics. Our goal is to move closer to zero
                            waste operations across all our properties.
                        </p>
                    </div>
                </div> -->



            </div>
        </div>
    </section>


    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;background-color: #f5f5f5 !important;">

        <div class="container-fluid p-0">

            <div class="row no-gutters d-flex flex-wrap">
                <!-- 'no-gutters' replaces 'g-0' in Bootstrap 4 -->

                <div class="col-12 col-lg-6 order-1 order-lg-2" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/event-gallery/AfricanNight-2.jpg" alt="African Night Wedding"
                            class="w-100 h-100" style="object-fit: cover; object-position: center;">
                    </div>
                </div>


                <!-- Content Column -->
                <div class="col-12 col-lg-6 order-1 order-lg-1">
                    <div class="content-box p-5">
                        <!-- Optional padding for inner content -->
                        <h3 class="facility-title">Empowering Guests to Join the Journey</h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            We believe our guests are key partners in our sustainability journey. We provide simple and
                            meaningful ways for travelers to contribute during their stay: </br></br>
                            • Participate in linen and towel reuse programs </br>
                            • Join eco-tours to visit our greenhouse or coral nurseries </br>
                            • Support marine life through options to adopt a coral or sponsor a turtle </br>
                            • Learn more through educational talks, short documentaries, and guided nature walks
                            </br></br>
                            By choosing Tribal Sand, guests become part of something bigger: a shared commitment to
                            responsible travel.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="facility-sectionss w-100" style="margin: 0; padding: 0;">
        <div class="container-fluid p-0">
            <div class="row no-gutters d-flex flex-wrap">

                <!-- Image Column (visible first on mobile) -->
                <div class="col-12 col-lg-6 order-1 order-lg-1" style="min-height: 300px;">
                    <div class="slider-container h-100">
                        <img src="images/Regulatory Compliance & Sustainability1.jpeg" alt="African Night Wedding"
                            class="w-100" style="height: 600px; object-fit: cover; object-position: center;">

                    </div>
                </div>

                <!-- Content Column -->

                <div class="col-12 col-lg-6 order-2 order-lg-2 d-block d-lg-flex align-items-lg-center">
                    <div class="content-boxx px-5 py-5">
                        <h3 class="facility-title mb-3">Regulatory Compliance & Sustainability</h3>
                        <div class="divider mb-3" style="height: 2px; width: 60px; background-color: #333;"></div>
                        <p class="mb-0 subtitle" style="line-height: 1.6;">
                            At Tribal Sand, our commitment to sustainability goes hand in hand with full compliance to
                            the regulatory framework of Kenya. All our properties are duly licensed and certified as
                            required by law, ensuring that we operate responsibly, transparently, and to the highest
                            standards of
                            safety, hospitality, and environmental stewardship. From tourism licences and health &
                            safety certifications to environmental impact approvals and county operating permits, each
                            document
                            reflects our dedication not only to delivering exceptional guest experiences, but also to
                            protecting the communities and ecosystems in which we operate. By upholding these mandatory
                            certifications,
                            we reaffirm that our sustainability practices are not just voluntary initiatives, but a
                            fully
                            accountable way of doing business.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- <section class="facility-sectionss w-100" style="margin: 0; padding: 0;background-color: #f5f5f5 !important;">

        <div class="container-fluid p-0">

            <div class="row no-gutters">
              
                <div class="col-12 col-lg-6">
                    <div class="content-box p-5">
                        
                        <h3 class="facility-title">Design & Architecture asdasdasd
                        </h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            Post Ranch’s innovative organic environmental design was intended for people to feel a part
                            of
                            nature rather than observers. Designers used bio-structure architecture, utilizing the
                            natural
                            materials of glass, wood, stone, and passive solar heat.

                        </p>
                    </div>
                </div>

              
                <div class="col-12 col-lg-6" style="min-height: 100vh;">
                    <div class="slider-container h-100">
                        <img src="images/event-gallery/AfricanNight-2.jpg" alt="African Night Wedding"
                            class="  active w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

            </div>

        </div>

    </section> -->



    <!-- <section class="facility-sectionss w-100" style="margin: 0; padding: 0;background-color: #f5f5f5 !important;">

        <div class="container-fluid p-0">

            <div class="row no-gutters">
               

                <div class="col-12 col-lg-6" style="min-height: 100vh;">
                    <div class="slider-container h-100">
                        <img src="images/event-gallery/AfricanNight-2.jpg" alt="African Night Wedding"
                            class="  active w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>


                
                <div class="col-12 col-lg-6">
                    <div class="content-boxx p-5">
                       
                        <h3 class="facility-title">Design & Architecture
                        </h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            Post Ranch’s innovative organic environmental design was intended for people to feel a part
                            of
                            nature rather than observers. Designers used bio-structure architecture, utilizing the
                            natural
                            materials of glass, wood, stone, and passive solar heat.

                        </p>
                    </div>
                </div>

               


            </div>

        </div>

    </section> -->





    <section class="facility-section" style="">
        <div class="container-fluid p-0" style="border-radius: 20px;overflow: hidden; ">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <div class="content-box-greenhouse" style="height: 100%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            padding: 40px;">
                        <h3 class="facility-title">Greenhouse Initiative </h3>
                        <div class="divider"></div>
                        <p class="mb-4 subtitle">
                            Our on-site greenhouse is at the heart of our sustainability efforts. Powered by solar
                            energy and equipped with efficient irrigation systems, it supports local food production
                            while reducing our environmental footprint.
                        </p>
                        <ul class="mb-4 subtitle">
                            <li> Solar-powered operations</li>
                            <li> Rainwater harvesting & drip irrigation</li>
                            <li> Fresh, organic produce grown year-round</li>
                            <li> Composting and zero-waste practices</li>
                        </ul>
                        <p class="mb-0 subtitle">
                            Join us in promoting a greener, more sustainable future—one plant at a time.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="images/abigail-lynn-sNNzq24-cvw-unsplash.jpg" alt="Corporate Retreat and Wellness Event"
                        class="golf-image" style="width: 100%;
                            height: 100%;
                            object-fit: cover;  
                            display: block;">
                </div>
            </div>
        </div>
    </section>
 
    <!-- new section end  -->

    <section class="d-flex align-items-center" style="min-height:80vh; background-color: #EDDED6;">
        <div class="container">

            <!-- Section Heading -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center py-5">
                    <h2 class="facility-title py-3">Solar Energy & Sustainability Impact</h2>

                    <p class="subtitle mt-3" style="max-width: 700px; margin: 0 auto; font-size: 1.1rem;">
                        Our beachfront villas operate on clean solar power, reducing environmental impact
                        while delivering uninterrupted luxury.
                    </p>


                </div>
            </div>

            <!-- Solar Summary -->
            <div class="row g-4 mb-5">

                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 text-center border-0">
                        <div class="card-body">
                            <h3 class="fw-bold text-success mb-1">1.92 MWh</h3>
                            <small class="text-muted">Solar Energy Generated</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 text-center border-0">
                        <div class="card-body">
                            <h3 class="fw-bold mb-1">2.11 MWh</h3>
                            <small class="text-muted">Total Energy Consumed</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 text-center border-0">
                        <div class="card-body">
                            <h3 class="fw-bold mb-1">206.4 kWh</h3>
                            <small class="text-muted">Grid Energy Purchased</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 text-center border-0">
                        <div class="card-body">
                            <h3 class="fw-bold mb-1">177 Days</h3>
                            <small class="text-muted">Operational Period</small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Environmental Impact -->
            <div class="row g-4 py-5">

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-success">27.59 MWh</h4>
                            <p class="text-muted mb-0">Total Solar Production</p>
                        </div>
                    </div>
                </div>     

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-success">21.88 Tons</h4>
                            <p class="text-muted mb-0">CO₂ Emissions Reduced</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-success">1,503 Trees</h4>
                            <p class="text-muted mb-0">Equivalent Trees Planted</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-success">0 Wh</h4>
                            <p class="text-muted mb-0">Energy Fed Back to Grid</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Note -->
            <div class="row mt-5">
                <div class="col text-center">
                   
                    <p class="subtitle mt-3" style="  margin: 0 auto; font-size: 1.1rem;">
                      Sustainability data is captured directly from our on-site solar monitoring systems
                        and reviewed periodically to ensure accuracy and transparency.
                    </p>

                </div>
            </div>

        </div>
    </section>

    <section class="facility-section">
        <div class="container-fluid p-0">
            <div class="container my-4 wide-container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="facility-title">Marine Conservation Partnerships</h1>
                        <p class="subtitle mt-3" style="max-width: 700px; margin: 0 auto; font-size: 1.1rem;">
                            Our proximity to one of the most biologically rich marine ecosystems in the world places us
                            in a unique position of responsibility. We are proud partners of:
                        </p>
                        <br><br>
                    </div>
                </div>

                <!-- Three Columns Start -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="p-3 text-start">
                            <h4>Kuruwitu Conservation & Welfare Community </h4></br>
                            <p>Supporting coral reef rejuvenation,
                                coral planting, and sustainable marine practices.
                            </p></br>

                            <a href="#">Learn More </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 text-start">
                            <h4>Turtles Alive Project</h4></br>
                            <p> Protecting endangered sea turtles through habitat preservation,
                                monitoring, and community education. </p></br>

                            <a href="#">Learn More </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 text-start">
                            <h4>Ongoing Marine Research</h4></br>
                            <p>We host and collaborate with marine researchers to better
                                understand and protect coastal biodiversity.
                            </p></br>

                            <a href="#">Learn More </a>
                        </div>
                    </div>
                </div>
                <!-- Three Columns End -->

            </div>
        </div>
    </section>











    <style>
    .wide-container {
        max-width: 95%;
    }

    .gallery-container {

        padding: 15px;

    }



    .gallery-container .gallery-item {

        margin-bottom: 20px;

        position: relative;

        overflow: hidden;

        aspect-ratio: 1/1;

        cursor: pointer;

        display: block;

    }



    .gallery-container .gallery-item img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: transform 0.3s ease;

    }



    .gallery-container .gallery-overlay {

        position: absolute;

        top: 0;

        left: 0;

        right: 0;

        bottom: 0;

        background: rgba(0, 0, 0, 0.5);

        opacity: 0;

        transition: opacity 0.3s ease;

    }



    .gallery-container .gallery-item:hover .gallery-overlay {

        opacity: 1;

    }



    .gallery-container .gallery-item:hover img {

        transform: scale(1.1);

    }



    /* Responsive adjustments for 5 images per row */

    @media (min-width: 992px) {

        .gallery-container .col-lg-fifth {

            flex: 0 0 20%;

            max-width: 20%;

        }

    }
    </style>








    <style>
    /* Adventure Section Styles */

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



    .btn-reservation {

        background-color: #C9a96a;

        color: white;

        padding: 16px 48px 16px 48px;

        /* width: 435px; */

        text-decoration: none;

        transition: all 0.3sease;

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

        transition: transform 0.3s ease;

    }



    .btn-reservation:hover {

        transform: scale(0.95);

        background-color: #C9a96a;

        color: white;

    }
    </style>







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
    // Initialize GLightbox

    const lightbox = GLightbox({

        touchNavigation: true,

        loop: true,

        autoplayVideos: true,

        preload: false

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



</body>



</html>