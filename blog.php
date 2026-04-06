<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TribalSand | Blogs</title>
    <link rel="canonical" href="https://tribalsand.com/blog.php" />
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <?php include 'includes/g-tag-head.php'; ?>

    <style>
        .hero-section {
            position: relative;
            min-height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),
                url('images/Tethys-pool-house-2.jpeg') bottom/cover no-repeat;
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
        .blog-section .blog-card {
            border: none;
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            height: 500px;
            /* Fixed height for all cards */
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-section .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-section .blog-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
            flex-shrink: 0;
            /* Prevent image from shrinking */
        }

        .blog-section .card-body {
            flex: 1;
            /* Take remaining space */
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .blog-section .read-more {
            color: #000;
            text-decoration: none;
            font-weight: 500;
            margin-top: auto;
            /* Push to bottom */
            font-size: 12px;
        }

        .blog-section .read-more:hover {
            text-decoration: none;
            color: #000;
        }

        .blog-section .date {
            color: #6c757d;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        .blog-section .blog-title {
            color: #2C3F58;
            font-size: 1.5rem;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 3.6rem;
            /* Fixed height for title */
            font-family: "Montserrat", Sans-serif;
            font-weight: 400;
            line-height: 1.2em;
        }


        .blog-section .blog-excerpt {
            color: #777;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* Limit to 4 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }

        /* Spinner Styles */
        .blog-section .spinner-container {
            display: none;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .blog-section .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #007bff;
            border-radius: 50%;
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

        /* Fade in animation for new blogs */
        /* .fade-in {
            animation: fadeIn 0.5s ease-in;
        } */

        /* @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        } */

        /* Equal height columns fix */
        .blog-section .row {
            display: flex;
            flex-wrap: wrap;
        }

        .blog-section .col-md-4 {
            display: flex;
            margin-bottom: 30px;
        }
    </style>
</head>


<body>
    <?php include 'includes/g-tag-body.php'; ?>

    <?php include 'includes/header.php'; ?>

    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">BLOG</h1>
        </div>
    </section>

    <div class="blog-section container py-5">
        <div class="row" id="blogContainer">
            <!-- Blogs will be loaded here dynamically -->
        </div>
        <div id="spinnerContainer" class="spinner-container">
            <div class="spinner"></div>
        </div>
    </div>

    <script>
        // Sample blog data
        const blogData = [ 
            {
                image: "images/tribal-dunes-sitemap.jpeg",
                title: "Kilifi's beachfront community for travellers who want more than a place to sleep.",
                excerpt: "Tribal Dunes — one large beachfront property in Kilifi where a boutique hotel, a café, a restaurant, a kite school and an eco compound share the same shore, the same values and the same sun.",
                date: "02 April, 2026",
                link: "tribalsand-blog-tribal-dunes.html"
            },  
    
            {
                image: "images/blog/hero-dining.jpg",
                title: "A La Carte Dining in Watamu & Kilifi | TribalSand Boutique Hotels",
                excerpt: "Experience refined à la carte dining at Tribal Sand boutique hotels in Watamu and Kilifi. Enjoy fresh seafood, Swahili-inspired flavors, and intimate beachfront service designed for couples and honeymooners on the Kenya coast.",
                date: "18 March, 2026",
                link: "a-la-carte-dining.php"
            },  
            {
                image: "images/hero-kenya-coast.jpg",
                title: "Kenya Active Holidays | Golf, Kitesurfing & Scuba Diving on the Kenya Coast",
                excerpt: "Discover Kenya’s perfect destination for active travellers. Enjoy championship golf, kitesurfing in Watamu, scuba diving in the Indian Ocean, and luxury beachfront stays on the Kenya coast.",
                date: "12 March, 2026",
                link: "kenya-active-holidays.php"
            },  
            {
                image: "images/masai-mara-sunset.jpg",
                title: "From Safari to Sea: The Perfect 10 Day Kenya Journey",
                excerpt: "Experience the ultimate 10-day Kenya adventure, from the wildlife of the Masai Mara to the pristine beaches of Watamu and Kilifi. Enjoy luxury villas, boutique hotels, and personalized experiences perfect for couples and honeymooners.",
                date: "4 March, 2026",
                link: "kenya-itinerary.php"
            },

            {
                image: "images/maya-kobe/Maya Kobe - Bedrooms/Bedroom 3/mayakobe.bedroomleftfrontsunrise-2.webp",
                title: "From Private Villa to Boutique Hotel",
                excerpt: "Discover Tribal Sand’s evolution from private villas to boutique hotels in Watamu and Kilifi. Luxury suites, chef-led dining, and personalized service designed for couples and honeymooners on the Kenya coast.",
                date: "23 Feb, 2026",
                link: "transition-to-boutique-hotel.php"
            },
            {   
                image: "images/zuri/Aerial/zuri-3.webp",
                title: "Kilifi and Bofa Beach A Growing Luxury Destination on the Kenya Coast",
                excerpt: "Discover why Kilifi and Bofa Beach are becoming top destinations on the Kenya Coast. Learn about digital nomad living family lifestyle kitesurfing and four beachfront luxury villas by Tribal Sand including Maya Kobe Maia Ilai Enkare and Sandbox.",
                date: "09 Dec, 2025",
                link: "kilifi-bofa-beach-growing-destination.php"
            },
            {   
                image: "images/hero-beach-wedding.jpg",
                title: "Wedding Venues Guide ",
                excerpt: "Discover how to choose the perfect luxury wedding venue on the Kenya Coast. Explore Maya Kobe in Kilifi and Zuri in Watamu and learn how Tribal Sand concierge services help create unforgettable beachfront weddings in Kenya.",
                date: "2 Dec, 2025",
                link: "finding-the-best-luxury-wedding-venue-kenya-coast.php"
            },
            {   
                image: "images/Kenya_Coast_Best_beachfront_luxury_destination_TribalSand_2.webp",
                title: "Why the Kenya Coast Is the Best Luxury Destination in Africa",
                excerpt: "Experience the unmatched beauty of the Kenya Coast—where pristine beaches, five-star luxury, rich culture, and breathtaking ocean views create Africa’s ultimate premium getaway.",
                date: "17 Nov, 2025",
                link: "why-kenya-coast-best-luxury-destination-africa.php"
            },
            {
                image: "images/blog/IMAGE-3_Discover-Maya-Kobe-Where-Secluded-Luxury-Meets-the-Ocean-Breeze-2048x1152.webp",
                title: "Discover Maya Kobe: Where Secluded Luxury Meets the Ocean Breeze",
                excerpt: "Discover Maya Kobe by TribalSand—a secluded, luxurious villa in Kilifi, Kenya, where the ocean meets sophisticated comfort. Lounge by the infinity pool, unwind in elegant interiors, and explore Kilifi’s natural wonders from coral reefs to pristine beaches. Perfect for a romantic getaway or a peaceful solo retreat, Maya Kobe offers a unique coastal experience.",
                date: "October 30, 2024",
                link: "discover-maya-kobe-where-secluded-luxury-meets-the-ocean-breeze.php"
            },
            {
                image: "images/blog/IMAGE-1_A-Day-in-Watamu-Exploring-Around-Zuri.webp",
                title: "A Day in Watamu: Exploring Around Zuri",
                excerpt: "Spend a perfect day in Watamu at Zuri by TribalSand. Start with a sunrise walk, snorkel at Watamu Marine Park, explore the ancient Gede Ruins, and kayak through the serene Mida Creek mangroves. End your day with a gourmet dinner and stargazing. Relaxation, adventure, and culture—all in one unforgettable experience.",
                date: "October 23, 2024",
                link: "a-day-in-watamu-exploring-around-zuri.php"
            },
            {
                image: "images/blog/IMAGE-3_The-Best-Time-to-Visit-My-Amani-in-Kilifi-2048x1152.webp",
                title: "The Best Time to Visit My Amani in Kilifi",
                excerpt: "Kilifi, Kenya, is a haven of natural beauty, and My Amani by TribalSand is its luxurious gem. Choosing the right time to visit can enhance your experience—whether you prefer the sunny beach days from January to March, the lush greenery of April to June, the cool breezes from July to October, or the festive warmth of November to December. Each season brings its unique charm, ensuring that My Amani offers an unforgettable escape year-round.",
                date: "October 16, 2024",
                link: "the-best-time-to-visit-my-amani-in-kilifi.php"
            },
            {
                image: "images/blog/IMAGE-3_How-to-Plan-a-Group-Vacation-on-the-Kenyan-Coast-A-Perfect-Guide-for-Unforgettable-Moments-2048x1152.webp",
                title: "How to Plan a Group Vacation on the Kenyan Coast: A Perfect Guide for Unforgettable Moments ",
                excerpt: "Planning a group getaway to Kenya’s coast is easy with the right approach. Choose between Vipingo for luxury, Kilifi for culture, or Watamu for adventure. Renting a private villa ensures space and privacy, while group activities like snorkeling or exploring local sites will keep everyone entertained. Leave time for spontaneity, and consider local help for a stress-free, unforgettable experience.",
                date: "October 9, 2024",
                link: "how-to-plan-a-group-vacation-on-the-kenyan-coast-a-perfect-guide-for-unforgettable-moments.php"
            },
            {
                image: "images/blog/IMAGE-1_Exploring-the-Local-Markets-of-Kilifi-A-Cultural-Journey-Like-No-Other-2048x1152.webp",
                title: "Exploring the Local Markets of Kilifi: A Cultural Journey Like No Other",
                excerpt: "Kilifi’s vibrant markets offer a glimpse into local life with fresh produce, handcrafted wares, and aromatic spices. The Kilifi Open Market is a must-visit, where artisans showcase unique crafts, and the culinary delights—like fresh seafood and Swahili dishes—add to the experience. Beyond shopping, the markets provide an opportunity to connect with the welcoming local community.",
                date: "October 2, 2024",
                link: "exploring-the-local-markets-of-kilifi-a-cultural-journey-like-no-other.php"
            },
            {
                image: "images/blog/IMAGE-1_Top-Luxury-Travel-Trends-in-Kenya-for-2024-2048x1152.webp",
                title: "Top Luxury Travel Trends in Kenya for 2024",
                excerpt: "Kenya’s luxury travel scene is evolving in 2024, offering exclusive and personalized wildlife experiences, eco-luxury accommodations, and immersive cultural encounters. Travelers can expect wellness retreats with spa treatments, beachside opulence along the stunning coastline, and adrenaline-pumping adventures like hot air balloon safaris and mountain climbing. Whether it’s connecting with nature or indulging in authentic cultural experiences, Kenya is setting new trends in luxury travel for the discerning explorer.",
                date: "September 25, 2024",
                link: "top-luxury-travel-trends-in-kenya-for-2024.php"
            },
            {
                image: "images/blog/IMAGE-3_High-End-Adventure-Sports-in-Kenya-For-the-Luxury-Thrill-Seeker.webp",
                title: "High-End Adventure Sports in Kenya: For the Luxury Thrill-Seeker",
                excerpt: "Kenya is a playground for luxury thrill-seekers, offering unforgettable high-end adventure sports. Dive into the vibrant marine life of Vipingo, soar above the Maasai Mara in a hot air balloon, or conquer the rapids of the Tana River. For ultimate adrenaline, try skydiving over Diani or kite surfing in Watamu. Kenya’s diverse landscapes and thrilling activities promise an adventure like no other.",
                date: "September 18, 2024",
                link: "high-end-adventure-sports-in-kenya-for-the-luxury-thrill-seeker.php"
            },
            {
                image: "images/blog/IMAGE-2_Eco-Luxury-Sustainable-Travel-Experiences-in-Kenya.webp",
                title: "Eco-Luxury: Sustainable Travel Experiences in Kenya ",
                excerpt: "Discover Kenya’s unique blend of luxury and sustainability. From eco-friendly lodges in the Maasai Mara to marine conservation in Watamu, Kenya offers a range of experiences that prioritize both comfort and environmental stewardship. Stay at TribalSand’s eco-luxury villas—My Amani, Maya Kobe, and Zuri—where sustainability meets elegance, ensuring your travel contributes to local conservation while providing an unforgettable, luxurious getaway.",
                date: "September 11, 2024",
                link: "eco-luxury-sustainable-travel-experiences-in-kenya.php"
            },
            {
                image: "images/blog/IMAGE-1_Cultural-Immersion-Luxury-Travel-with-a-Touch-of-Authentic-Kenyan-Culture-2048x1152.webp",
                title: "Cultural Immersion: Luxury Travel with a Touch of Authentic Kenyan Culture",
                excerpt: "Kenya offers luxury travelers a chance to connect deeply with its vibrant culture. From exploring Maasai villages in the Maasai Mara to experiencing the traditions of the Samburu people or the historical charm of Lamu Island, every moment offers a blend of authenticity and comfort.",
                date: "September 4, 2024",
                link: "cultural-immersion-luxury-travel-with-a-touch-of-authentic-kenyan-culture.php"
            },
            {
                image: "images/blog/IMAGE-2_Unforgettable-Coastal-Getaways-Exploring-Kenyas-Pristine-Beaches-2048x1152.webp",
                title: "Unforgettable Coastal Getaways: Exploring Kenya’s Pristine Beaches",
                excerpt: "Kenya’s coast is a paradise for luxury seekers, with pristine beaches and stunning villas. From Watamu’s clear waters to Vipingo’s secluded shores, enjoy exclusive stays at Zuri, My Amani, or Maya Kobe by TribalSand. Perfect for relaxation and adventure, Kenya’s beaches promise an unforgettable escape.",
                date: "August 28, 2024",
                link: "unforgettable-coastal-getaways-exploring-kenyas-pristine-beaches.php"
            },
            {
                image: "images/blog/IMAGE-2_The-Ultimate-Guide-to-Luxury-Travel-in-Kenya-2048x1152.webp",
                title: "The Ultimate Guide to Luxury Travel in Kenya",
                excerpt: "Kenya offers the perfect mix of adventure and luxury, from exclusive safaris in the Maasai Mara to private beachfront villas on the Indian Ocean. Whether exploring wildlife or relaxing in style, Kenya delivers an unforgettable experience.",
                date: "August 21, 2024",
                link: "the-ultimate-guide-to-luxury-travel-in-kenya.php"
            },
            {
                image: "images/blog/IMAGE-1-Bioluminescent-Algae-Kilifi-Creek-Indulge-in-Coastal-Beauty-and-Luxury-Stays-with-TribalSand-in-Kenya.jpg.webp",
                title: "Bioluminescent Algae Kilifi Creek: Indulge in Coastal Beauty and Luxury Stays with TribalSand in Kenya",
                excerpt: "Explore Kilifi Creek’s bioluminescent magic with TribalSand. Discover glowing waters, sunset dhow cruises, eco-friendly lodges, pristine beaches, and Kenya’s rich coastal heritage in this unforgettable adventure.",
                date: "July 10, 2024",
                link: "bioluminescent-algae-kilifi-creek-indulge-in-coastal-beauty-and-luxury-stays-with-tribalsand-in-kenya.php"
            },
            {
                image: "images/blog/IMAGE-1-Restoration-of-Riparian-Habitat-on-Maya-Kobe-Beachfront-–-Bofa-Beach-Kilifi-Kenya.jpg.webp",
                title: "Restoration of Riparian Habitat on Maya Kobe Beachfront – Bofa Beach, Kilifi, Kenya",
                excerpt: "Discover Maya Kobe’s initiative in riparian habitat restoration on Bofa Beach, enhancing biodiversity, preventing erosion, and improving water quality while offering luxurious accommodations.",
                date: "July 3, 2024",
                link: "restoration-of-riparian-habitat-on-maya-kobe-beachfront-bofa-beach-kilifi-kenya.php"
            },
            {
                image: "",
                title: "My Amani – Voted Kenya’s Most Romantic Villa",
                excerpt: "",
                date: "April 25, 2024",
                link: "my-amani-voted-kenyas-most-romantic-villa.php"
            },
            {
                image: "images/blog/3-Dec-08-2023-01-44-57-6512-PM.webp",
                title: "THE MAGIC OF MAYA KOBE; BOFA BEACH",
                excerpt: "Nestled along the pristine shores of the Kenya Coast, My Amani offers an escape into luxury that’s both intimate and grand.",
                date: "April 25, 2024",
                link: "the-magic-of-maya-kobe-bofa-beach.php"
            },
            {
                image: "images/blog/my-amani.jpg.webp",
                title: "A Day in Paradise: Experiencing My Amani’s Luxuries",
                excerpt: "Nestled along the pristine shores of the Kenya Coast, My Amani offers an escape into luxury that’s both intimate and grand.",
                date: "March 7, 2024",
                link: "a-day-in-paradise-experiencing-my-amanis-luxuries.php"
            },
            {
                image: "images/blog/My-Amani-1.jpg.webp",
                title: "Discover the Best of Both Worlds on the Kenya Coast with Tribal Sand",
                excerpt: "Experience the perfect mix of luxury living and exciting adventures on the Kenya Coast with Tribal Sand.",
                date: "March 7, 2024",
                link: "discover-the-best-of-both-worlds-on-the-kenya-coast-with-tribal-sand.php"
            },
        ];

        const blogsPerLoad = 6;
        let currentlyShown = 0;
        let isLoading = false;

        function createBlogCard(blog) {
            const blogImage = blog.image
                ? `<a href="${blog.link}">
                        <img src="${blog.image}" class="card-img-top blog-image" alt="${blog.title}">
                    </a>`
                : ''; // If no image, set an empty string or provide a placeholder.

            return `
                <div class="col-md-4 fade-in">
                    <div class="card blog-card">
                        ${blogImage}
                        <div class="card-body">
                            <a href="${blog.link}" class="text-decoration-none">
                                <h5 class="blog-title">${blog.title}</h5>
                            </a>
                            <p class="blog-excerpt">${blog.excerpt}</p>
                            <a href="${blog.link}" class="read-more">READ MORE »</a>
                            <p class="date mt-3">${blog.date}</p>
                        </div>
                    </div>
                </div>
            `;
        }


        async function loadBlogs() {
            if (isLoading || currentlyShown >= blogData.length) return;

            const spinner = document.getElementById('spinnerContainer');
            const container = document.getElementById('blogContainer');

            isLoading = true;
            spinner.style.display = 'flex';

            // Simulate network delay
            await new Promise(resolve => setTimeout(resolve, 1000));

            // Calculate end index for current load
            const end = Math.min(currentlyShown + blogsPerLoad, blogData.length);

            // Add new blogs
            for (let i = currentlyShown; i < end; i++) {
                container.innerHTML += createBlogCard(blogData[i]);
            }

            currentlyShown = end;
            isLoading = false;
            spinner.style.display = 'none';
        }

        // Initial load
        loadBlogs();

        // Infinite scroll implementation with throttling
        let throttleTimer;
        window.addEventListener('scroll', () => {
            if (throttleTimer) return;

            throttleTimer = setTimeout(() => {
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 500) {
                    loadBlogs();
                }
                throttleTimer = null;
            }, 100);
        });
    </script>




    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




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