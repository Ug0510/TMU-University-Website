<!DOCTYPE html>
<html dir="ltr" lang="en-US" style="border:0;">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    @php
    // Build the full URL
    $currentUrl = request()->fullUrl();

    // Get URI segments
    $uriData = [
    Request::segment(1),
    Request::segment(2),
    Request::segment(3),
    Request::segment(4),
    Request::segment(5)
    ];

    // Assuming the `news_model` is available through dependency injection or a service, replace this with the appropriate call
    $metaData = app(\App\Models\Metas::class)->fetchMetaTagsBySlug($uriData);
    @endphp

    @if($metaData)
    <title>{{ $metaData->meta_title }}</title>
    <meta name="description" content="{{ $metaData->meta_description }}" />
    <meta name="keywords" content="{{ $metaData->meta_keywords }}" />
    <meta property="og:title" content="{{ $metaData->meta_title }}" />
    <meta property="og:description" content="{{ $metaData->meta_description }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="TMU" />
    <meta property="og:url" content="{{ $currentUrl }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Tmumbd" />
    <meta name="twitter:title" content="{{ $metaData->meta_title }}" />
    <meta name="twitter:description" content="{{ $metaData->meta_description }}" />

    @if(!empty($metaData->canonical_tag))
    <link rel="canonical" href="{{ $metaData->canonical_tag }}" />
    @endif

    {!! $metaData->schema_markup ?? '' !!}

    @if($metaData->no_index_status === 'Y')
    <meta name="robots" content="noindex">
    @else
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="robots" content="noarchive" />
    <meta name="revisit-after" content="1 days">
    <meta name="googlebot" content="noodp">
    <meta name="msnbot" content="noodp">
    <meta name="slurp" content="noodp, noydir">
    <meta name="teoma" content="noodp">
    <meta name="robots" content="noodp, noydir">
    @endif
    @else


    <title>TMU Moradabad – Best Private University in UP, India.</title>
    <meta name="description" content="Teerthanker Mahaveer University is amongst the top universities in Uttar Pradesh, India. It provides world-class education for undergraduate, postgraduate, and doctoral degrees." />
    <meta name="keywords" content="Best private University in UP,Top Private University in up,Best University in India,Top Rated University,Best University in Moradabad,Best Engineering University in UP,Best Law University in up,Best management University in UP." />
    <meta property="og:title" content="TMU Moradabad – Best Private University in UP, India." />
    <meta property="og:description" content="Teerthanker Mahaveer University is amongst the top universities in Uttar Pradesh, India. It provides world-class education for undergraduate, postgraduate, and doctoral degrees." />
    <meta name="robots" content="noindex">
    <meta name="robots" content="noarchive" />
    <meta name="revisit-after" content="1 days">
    <meta name="googlebot" content="noodp">
    <meta name="msnbot" content="noodp">
    <meta name="slurp" content="noodp, noydir">
    <meta name="teoma" content="noodp">



    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "TEERTHANKER MAHAVEER UNIVERSITY",
            "url": "https://www.tmu.ac.in/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.tmu.ac.in/tmu/all-programmes{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollegeOrUniversity",
            "name": "Teerthanker Mahaveer University",
            "alternateName": "TMU",
            "url": "https://www.tmu.ac.in/",
            "logo": "https://www.tmu.ac.in/monaco/assets/image/tmu%20logo.png",
            "sameAs": [
                "https://www.facebook.com/tmumbd/",
                "https://twitter.com/Tmumbd",
                "https://www.instagram.com/tmu_mbd/",
                "https://www.youtube.com/channel/UCSdJPj_8DCXkGY6SOmo_0ow",
                "https://www.linkedin.com/school/tmuuni/",
                "https://en.wikipedia.org/wiki/Teerthanker_Mahaveer_University"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "VideoObject",
            "name": "Admissions Open for session 2023-2024 At Best Private University In UP | TMU Moradabad",
            "description": "Teerthanker Mahaveer University (TMU) is the best private university in Moradabad, Uttar Pradesh (UP) and is well known for its Jain philosophy. The university stands determined to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge, and Right Conduct. The university has formed alliances with recognised institutions like- IBM, i-Nurture, NIVIDIA, BOSCH, Bombay Stock Exchange, Talentedge, UR Services, Safeducate, Future Group, TCS- ION etc so that students can get training on the latest technologies used in the industry. The university has world-class infrastructure, sports facilities, 24x7 security, mess, libraries, banking facilities, study rooms, gymnasium and much more. It also has a state-of-the-art Apple iMac lab, ventilated classrooms, and an air-conditioned auditorium. TMU is a multidisciplinary centre for higher education with NAAC ‘A’ Grade accreditation. It is the best private university in Uttar Pradesh because of its reputation for providing high-quality placements, affordable tuition costs, and a comprehensive learning environment.  Why is TMU the best private university in UP? ● 1000+ well qualified & experienced faculty ● 150+ academic programmes ● 82% placements ● 130+ acres of campus ● 48 LPA highest placement offer  In just over a decade, TMU has become one of the important centres of learning in northern India and aspires to be one of the top private global universities as each programme focuses on in-depth knowledge and the development of practical skills.  Opportunities are Waiting for You! Admissions are open at the best private university in UP. Enrol Now: www.tmu.ac.in Must Watch: TMU Convocation 2023 | Yogi Adityanath Ji | Chief Guest | Teerthanker Mahaveer University, Moradabad: https://www.youtube.com/watch?v=MgfmQzo_HrQ&amp;t=0s Must Watch: Rock-On VIII | Guru Randhawa Live Performance At TMU Moradabad: https://www.youtube.com/watch?v=DbQ9RaMZsHU&amp;t=0s Read all the latest news here: https://www.tmu.ac.in/news Subscribe the TMU’s official Youtube channel for more videos and all the latest updates: https://www.youtube.com/c/TeerthankerMahaveerUniversity  Get in Touch- Facebook: https://www.facebook.com/tmumbd/ Twitter: https://twitter.com/Tmumbd?ref_src=tw… Instagram: https://www.instagram.com/accounts/lo… LinkedIn: https://www.linkedin.com/school/tmuuni/ Pinterest: https://in.pinterest.com/tmumbd/ Official Website: https://www.tmu.ac.in/   #privateuniversity #university #bestprivateuniversity #admission #admission2023",
            "thumbnailUrl": "https://i.ytimg.com/vi/tDkqPksIsxQ/default.jpg",
            "uploadDate": "2023-03-24T05:11:55Z",
            "duration": "PT32S",
            "embedUrl": "https://www.youtube.com/embed/tDkqPksIsxQ",
            "interactionCount": "80288"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "TEERTHANKER MAHAVEER UNIVERSITY",
            "alternateName": "TMU",
            "url": "https://www.tmu.ac.in/",
            "logo": "https://www.tmu.ac.in/monaco/assets/image/tmu%20logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "1800-270-1490",
                "contactType": "technical support",
                "contactOption": "TollFree",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/tmumbd/",
                "https://twitter.com/Tmumbd",
                "https://www.instagram.com/tmu_mbd/",
                "https://www.youtube.com/@TeerthankerMahaveerUniversity",
                "https://www.linkedin.com/school/tmuuni/",
                "https://en.wikipedia.org/wiki/Teerthanker_Mahaveer_University",
                "https://www.tmu.ac.in/"
            ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "Is the University recognised/approved by UGC?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Teerthanker Mahaveer University is recognized and approved by the University Grants Commission (UGC). After a thorough inspection of our physical and academic infrastructure, we have been granted registration under Section 2(f) of the UGC Act 1956."
                }
            }, {
                "@type": "Question",
                "name": "Is TMU NAAC accredited?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Teerthanker Mahaveer University (TMU) has received accreditation from the National Assessment and Accreditation Council (NAAC). The university has been awarded the NAAC A grade, indicating its compliance with quality standards set by the council."
                }
            }, {
                "@type": "Question",
                "name": "Is Orientation mandatory?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, it is highly recommended for students to attend the orientation as it will provide you with information about various rules, regulations, and policies of the university."
                }
            }, {
                "@type": "Question",
                "name": "What activities can I pursue at TMU?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "From Sports (Indoor and Outdoor) to dance, drama to debates, quizzes to more, TMU students have a plethora of activities to do in the University campus. The campus life at TMU is amazing."
                }
            }]
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ArchiveOrganization",
            "name": "TEERTHANKER MAHAVEER UNIVERSITY",
            "image": "https://www.tmu.ac.in/img/facilities/university%20campus.webp",
            "@id": "",
            "url": "https://www.tmu.ac.in/",
            "telephone": "1800-270-1490",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "N.H.-9, Delhi Road",
                "addressLocality": "Moradabad",
                "postalCode": "244001",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 25.241020,
                "longitude": 86.962112
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "09:00",
                "closes": "18:30"
            },
            "sameAs": [
                "https://www.facebook.com/tmumbd/",
                "https://twitter.com/Tmumbd",
                "https://www.instagram.com/tmu_mbd/",
                "https://www.youtube.com/@TeerthankerMahaveerUniversity",
                "https://www.linkedin.com/school/tmuuni/",
                "",
                "https://en.wikipedia.org/wiki/Teerthanker_Mahaveer_University",
                "https://www.tmu.ac.in/"
            ]
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "TEERTHANKER MAHAVEER UNIVERSITY",
            "url": "https://www.tmu.ac.in/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.tmu.ac.in/tmu/all-programmes{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "VideoObject",
            "name": "Admissions Open for session 2023-2024 At Best Private University In UP | TMU Moradabad",
            "description": "Teerthanker Mahaveer University (TMU) is the best private university in Moradabad, Uttar Pradesh (UP) and is well known for its Jain philosophy. The university stands determined to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge, and Right Conduct. The university has formed alliances with recognised institutions like- IBM, i-Nurture, NIVIDIA, BOSCH, Bombay Stock Exchange, Talentedge, UR Services, Safeducate, Future Group, TCS- ION etc so that students can get training on the latest technologies used in the industry. The university has world-class infrastructure, sports facilities, 24x7 security, mess, libraries, banking facilities, study rooms, gymnasium and much more. It also has a state-of-the-art Apple iMac lab, ventilated classrooms, and an air-conditioned auditorium. TMU is a multidisciplinary centre for higher education with NAAC ‘A’ Grade accreditation. It is the best private university in Uttar Pradesh because of its reputation for providing high-quality placements, affordable tuition costs, and a comprehensive learning environment.  Why is TMU the best private university in UP? ● 1000+ well qualified & experienced faculty ● 150+ academic programmes ● 82% placements ● 130+ acres of campus ● 48 LPA highest placement offer  In just over a decade, TMU has become one of the important centres of learning in northern India and aspires to be one of the top private global universities as each programme focuses on in-depth knowledge and the development of practical skills.  Opportunities are Waiting for You! Admissions are open at the best private university in UP. Enrol Now: www.tmu.ac.in Must Watch: TMU Convocation 2023 | Yogi Adityanath Ji | Chief Guest | Teerthanker Mahaveer University, Moradabad: https://www.youtube.com/watch?v=MgfmQzo_HrQ&amp;t=0s Must Watch: Rock-On VIII | Guru Randhawa Live Performance At TMU Moradabad: https://www.youtube.com/watch?v=DbQ9RaMZsHU&amp;t=0s Read all the latest news here: https://www.tmu.ac.in/news Subscribe the TMU’s official Youtube channel for more videos and all the latest updates: https://www.youtube.com/c/TeerthankerMahaveerUniversity  Get in Touch- Facebook: https://www.facebook.com/tmumbd/ Twitter: https://twitter.com/Tmumbd?ref_src=tw… Instagram: https://www.instagram.com/accounts/lo… LinkedIn: https://www.linkedin.com/school/tmuuni/ Pinterest: https://in.pinterest.com/tmumbd/ Official Website: https://www.tmu.ac.in/   #privateuniversity #university #bestprivateuniversity #admission #admission2024",
            "thumbnailUrl": "https://i.ytimg.com/vi/tDkqPksIsxQ/default.jpg",
            "uploadDate": "2023-03-24T05:11:55Z",
            "duration": "PT32S",
            "embedUrl": "https://www.youtube.com/embed/tDkqPksIsxQ",
            "interactionCount": "80288"
        }
    </script>

    <script type="application/ld+json" class="saswp-custom-schema-markup-output">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Teerthanker Mahaveer College of Law and Legal Studies",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "ratingCount": "4248"
            }
        }
    </script>
    <script type="application/ld+json" class="schemantra.com">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "@id": "Teerthanker Mahaveer University",
            "additionalType": "https://www.tmu.ac.in/",
            "address": "NH 9, Delhi Road, Moradabad, Uttar Pradesh",
            "alternateName": "tmumbd",
            "image": "https://www.tmu.ac.in/monaco/assets/image/tmu%20logo.png"
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Gurudev Sri Sri Ravi Shankar Youth Meet",
            "description": "Join the inspiring session with Gurudev Sri Sri Ravi Shankar at Teerthanker Mahaveer University. This youth meet will focus on inner peace, leadership, and mindfulness for young minds.",
            "image": "https://www.tmu.ac.in/monaco/assets/image/banner/Ravi_shankerji_desktop.webp",
            "startDate": "2024-09-16T11:00",
            "endDate": "2024-09-16T14:00",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "Place",
                "name": "Teerthanker Mahaveer University",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Teerthanker Mahaveer University",
                    "addressLocality": "Moradabad",
                    "postalCode": "244001",
                    "addressCountry": "IN"
                }
            },
            "performer": {
                "@type": "Person",
                "name": "Sri Sri Ravi Shankar"
            },
            "organizer": {
                "@type": "Organization",
                "name": "Teerthanker Mahaveer University",
                "url": "https://www.tmu.ac.in"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://bit.ly/youthmeet",
                "price": "0",
                "priceCurrency": "INR",
                "availability": " https://bit.ly/youthmeet ",
                "validFrom": "2024-09-16T09:00"
            }
        }
    </script>

    @endif


    <!-- Font Imports -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet"> -->


    <!-- Canela Deck font  -->
    <link rel="preload" href="https://db.onlinewebfonts.com/c/6e2da64b88f7e60cda1df63cb63cc8f2?family=Canela+Deck+Bold" as="style" onload="this.rel='stylesheet'">

    <script>
        // Function to load a stylesheet
        function loadStyleSheet(href) {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            document.head.appendChild(link);
        }

        // Load Font Awesome CSS
        // var fontAwesomeLink = document.createElement('link');
        // fontAwesomeLink.rel = 'preload';
        // fontAwesomeLink.href = "{{ asset('assets/css/default/fontawesome6.2.1.all.min.css') }}";
        // fontAwesomeLink.as = 'style';
        // fontAwesomeLink.onload = function() {
        //     this.rel = 'stylesheet';
        // };
        // document.head.appendChild(fontAwesomeLink);

        // Load Bootstrap CSS
        var bootstrapLink = document.createElement('link');
        bootstrapLink.rel = 'preload';
        bootstrapLink.href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css";
        bootstrapLink.as = 'style';
        bootstrapLink.onload = function() {
            this.rel = 'stylesheet';
        };
        document.head.appendChild(bootstrapLink);

        // Load Core Style CSS
        var coreStyleLink = document.createElement('link');
        coreStyleLink.rel = 'preload';
        coreStyleLink.href = "{{asset('style.css')}}";
        coreStyleLink.as = 'style';
        coreStyleLink.onload = function() {
            this.onload = null; // Avoid calling onload multiple times
            this.rel = 'stylesheet';
        };
        document.head.appendChild(coreStyleLink);

        //Load Owl-Carousel
        var owlCarouselLink = document.createElement('link');
        owlCarouselLink.rel = 'preload';
        owlCarouselLink.href = "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css";
        owlCarouselLink.as = 'style';
        owlCarouselLink.onload = function() {
            this.rel = 'stylesheet';
        };
        document.head.appendChild(owlCarouselLink);

        document.addEventListener("DOMContentLoaded", function() {
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = "{{ asset('css/font-icons.css') }}";
            document.head.appendChild(link);
        });
    </script>

    <noscript>
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/default/fontawesome6.2.1.all.min.css') }}"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{('style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- Font Icons -->
        <link rel="stylesheet" href="{{asset('css/font-icons.css')}}">
    </noscript>





    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <!-- <link rel="stylesheet" href="demos/landing/landing.css"> -->
    <!-- <link rel="stylesheet" href="demos/articles/articles.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('demos/insurance/insurance.css')}}">

    <!-- managemt college css -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/managemnt.css')}}"> -->

    <!-- Document Title
	============================================= -->
    <title>TMU | New Website</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" > -->
    <link rel="stylesheet" href="{{asset('/assets/css/default/swiper-bundle.min.css')}}">
    <!-- <script src="https://kit.fontawesome.com/0fb07c839c.js" crossorigin="anonymous"></script> -->

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('demos/store/store.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <!-- Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
    <!-- Replacing the cdn with downloaded js for bootstrap -->
    <script href="{{asset('assets/js/default/bootstrap.min.js')}}"></script>

    <!-- commenting the below js because no content to call -->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <script href="{{asset('assets/js/default/popper@1.16.0.min.js')}}"></script>
    <script href="{{asset('assets/js/default/popperjs_core@2.11.6.min.js')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="{{asset('assets/js/default/jquery_3.7.min.js')}}"></script>



</head>

<body class="stretched is-expanded-menu" data-menu-breakpoint="1200">

    <!-- <div class="preloader">
        <div class="loader"></div>
    </div> -->

    <section style="background-color: #001055;">
        <div class="container-fluid d-flex justify-content-start px-5 py-3 ps-4">
            <a href="{{route('tmuhome')}}"> <img src="{{asset('logo.webp')}}" alt="" class="navbar-logo"></a>
        </div>
    </section>


    <!-- Searchbar code starts here -->

    <div class="search-icon" id="searchIcon">
        <i class="uil uil-search" style="color:white;"></i>
    </div>



    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" style="display: block;">


        <div class="side-button-container">
            <a href="https://admissions.tmu.ac.in/">
                <div class="expandable-button d-none d-sm-block" id="button1">
                    <img class="new-arrow" id="new-menu-icon" src="{{asset('assets/img/icons/enquire-side-orange.svg')}}" width="25px"
                        alt="Menu Icon">
                    <span class="text">Admissions Open</span>
                </div>
            </a>
            <!-- <a href="tel:18002701490" target="blank">
                <div class="expandable-button d-none d-sm-block" id="button2">
                    <img class="new-arrow" id="new-menu-icon" src="assets/img/icons/call-side-orange.svg" width="25px"
                        alt="Icon 1">
                    <span class="text">Call</span>
                </div>
            </a> -->
            <a href="https://api.whatsapp.com/send/?phone=919258112544&text&type=phone_number&app_absent=0" target="blank">
                <div class="expandable-button d-none d-sm-block" id="button3">
                    <img src="{{asset('assets/img/icons/whatsapp-side.svg')}}" width="25px" alt="Icon 1">
                    <span class="text">Whatsapp Chat</span>
                </div>
            </a>
        </div>

        <div class="new-menu-container d-block d-sm-none">
            <div class="new-menu-btn" id="new-menu-btn" onclick="toggleNewMenu()" ontouchstart="handleTouchStart(event)"
                ontouchmove="handleTouchMove(event)" ontouchend="handleTouchEnd()">

                <img class="new-arrow" id="new-menu-icon" src="{{asset('assets/img/icons/arrowu.png')}}" width="25px"
                    alt="Menu Icon"> <!-- Replace arrow with your image -->
            </div>
            <div class="new-menu-row">
                <div class="new-menu-item"><span><a href="https://www.tmu.ac.in/"
                            style="color: #fff; text-decoration: none;">Enquire Now</a></span></div>
                <div class="new-vl"></div>
                <div class="new-menu-item"><span>TMU Online</span></div>
            </div>
            <div class="new-menu" id="new-menu">
                <div class="new-menu-row">
                    <div class="new-menu-item"><a
                            href="https://api.whatsapp.com/send/?phone=919258112544&text&type=phone_number&app_absent=0"
                            target="blank"><img src="{{asset('assets/img/icons/Whatsapp.png')}}" height="25px" width="auto"
                                alt="Icon 1"></a></div>
                    <div class="new-menu-item"><a href="https://www.tmu.ac.in/virtual-tour" target="blank"><img
                                src="{{asset('assets/img/icons/360.png')}}" height="25px" width="auto" alt="Icon 2"></a></div>
                    <div class="new-menu-item"><a href="tel:18002701490" target="blank"><img
                                src="{{asset('assets/img/icons/call.png')}}" height="25px" width="auto" alt="Icon 1"></a></div>
                </div>
            </div>
        </div>


        <!-- Header Code Section Begin -->
        <header>
            <nav id="main--menubar">


                <!-- Left Section of header -->
                <div class="left-section">
                    <div class="nav-logo-container mt-4">
                        <a href="{{route('tmuhome')}}"><img src="{{asset('logo.webp')}}" alt="" class="main-nav-logo"></a>

                    </div>

                    <!-- Back button only activated in mobile view in under options -->
                    <div id="menubar-back-button" style="display: none;">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span id="back-button-text"></span>
                    </div>




                    <!-- First Menubar options -->


                    <ul class="university-nav sw-none"></ul>

                    <div class="container mobile-inner-nav d-block d-lg-none">
                        <div class="row p-0 m-0">
                            <div class="col-4 mb-3">
                                <a href="{{route('tmuhome')}}">Home</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="http://portal.tmu.ac.in/">ERP Login</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('iqac.about')}}">IQAC</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('all_blogs')}}">Blogs</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('alumni.home')}}">Alumni</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('crc.home')}}">Placement</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('tmu.careers')}}">Careers</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('all_news')}}">News</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section Code -->
                <div class="right-section">
                    <div id="close-btn-container">
                        <!-- For all screens -->
                        <span onclick="closeMenubar()">Close
                            <i class="fa-regular fa-circle-xmark"></i>
                        </span>
                        <!-- For mobile screens -->
                        <span onclick="closeMenubar()">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </span>
                    </div>


                    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom d-none d-lg-block">
                        <div class="container-fluid">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('tmuhome')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://portal.tmu.ac.in/">ERP Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('iqac.about')}}">IQAC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('all_blogs')}}">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('alumni.home')}}">Alumni</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('crc.home')}}">Placement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('tmu.careers')}}">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('all_news')}}">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>






                    <div id="menubar__content">
                        <div id="menubar--subcategories">
                            <!-- Menbar categories will be shown dynamically -->
                        </div>
                        <div id="menubar__submenu_content">
                            <!-- Menubar categories content will be displayed here  -->
                        </div>
                        <div id="menubar__submenu_courses">
                            <!-- Menubar courses will be displayed here  -->
                        </div>


                        <div id="nav-banner">
                            <!-- <img src="https://www.hindustantimes.com/ht-img/img/2023/08/08/550x309/Screenshot_2023-08-08_183058_1691499721701_1691499729400.png" class="w-100" alt=""> -->
                            <img src="{{asset('assets/image/navbar-banner.webp')}}" alt="" class="w-100" loading="lazy">
                            <div class="blue-overlay"></div>
                        </div>

                        <!-- <img src="./assets/image/Asset 1@4x.png" alt="" style="width: 100%; margin:auto; "> -->
                    </div>
                </div>
            </nav>
        </header>

        <!-- Header Code Section Completed -->


        <!-- Menubar Open Button Code  -->
        <div id="menubar--open--button" class="menu-container" onclick="showMenubar()">
            <i class="fa-solid fa-bars"></i>
            <span class="d-none d-md-block" class="menu-button" aria-describedby="menu-tooltip"> Menu</span>
            <div class="tooltip px-3 py-2" id="menu-tooltip"> * Includes University & College Menu</div>
        </div>
        <!-- Menubar Open Button Completed -->






        <div class="modal-search" id="searchModal">
            <div class="modal-search-content">
                <span class="modal-search-close" id="closeModal">&times;</span>
                <input type="text" id="searchInput" placeholder="Search...">
                <div class="suggestions" id="suggestions">
                    <!-- Suggestions will be shown here -->
                </div>
            </div>
        </div>

        <!-- Searchbar code ends here -->


        <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>


        <link rel="stylesheet" href="{{asset('assets/css/swiper2.css')}}">
        <!-----video banner start-->
        <section id="slider" class="slider-element revslider-wrap min-vh-0 include-header">
            <div class="slider-inner">
                <div class="container-fluid p-0">
                    <div class="video-banner">

                        <!-- <video muted autoplay loop playsinline class="d-none d-md-block" >
                    <source src="{{asset('poster/tmu_final_video.mp4')}}">
                </video>

                <video muted autoplay loop playsinline class="d-block d-md-none w-100" >
                    <source src="{{asset('poster/tmu_final_mobile_video.mp4')}}">
                </video> -->
                        <video id="videoPlayer89" muted autoplay loop playsinline class="w-100" preload="auto" poster="{{asset('poster/banner_video_poster.webp')}}" ></video>

                        <!--<video muted autoplay loop playsinline preload="auto" class="d-block d-md-none w-100">-->
                        <!--              <source src="{{asset('poster/tmu_final_mobile_video.mp4')}}">-->
                        <!--          </video>-->

                    </div>
                    <div class="banner-text">
                        <h1>This is TMUU</h1>
                        <p>With a bright history of shaping futures, we continue to shine even brighter <br> with our vision of TRANSFORMING MINDS, UNITING WISDOM</p>
                    </div>
                </div>
            </div>
        </section>