@extends('layouts.university.main')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<style>
    /*map css start */

    #container {
        max-width: 1150px;
        height: 100%;
    }

    /*map css end */

    .profile-img {
        width: auto;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    .btn-custom {
        background-color: #00bfa5;
        color: white;
    }

    .btn-custom:hover {
        background-color: #009d8a;
        color: white;
    }

    .alimni-login-box {
        background-color: #f1f1f1f1;
        padding: 20px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alimni-login-box:hover {
        transform: translateY(-5px);
        /* alimni-login-box */
    }

    /*alumni testimonial swiper css start*/

    .testimonial-container {
        margin-top: 50px;
        text-align: center;
    }

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        max-width: 1200px;
        position: relative;
        margin: 0 auto;
        height: 7.5rem;
    }

    .navigation {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
    }

    .nav-arrow {
        font-size: 24px;
        cursor: pointer;
        color: #0077b5;
        margin: 0 250px;
    }

    .nav-arrow:hover {
        color: #005580;
    }

    .thumb {
        height: 60px;
        width: 42px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.3s ease-in-out;
        background-size: cover;
        border-radius: 5px;
        background-position: center center;
    }

    .active-thumb {
        width: 61px;
        height: 86px;
        opacity: 1;
        z-index: 2;
    }

    .content-section {
        display: flex;
        background: #fff;
        border-radius: 15px;
        width: 100%;
        padding: 20px;
    }

    .profile-section {
        border-radius: 15px;
        max-width: 650px;
        width: 100%;
        padding: 20px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-picture {
        width: auto;
        height: 280px;
        border-radius: 30px;
        padding: 20px;
        z-index: 2;
    }

    .profile-details {
        flex: 1;
        text-align: left;
        padding: 10px;
        margin: 20px;
    }

    .profile-details h2 {
        font-size: 20px;
        line-height: 25px;
        margin: 0;
    }

    .profile-details a {
        color: #0077b5;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        text-decoration: underline;
        display: flex;
        align-items: center;
        margin-right: 10px;
    }

    .profile-info {
        margin-top: 10px;
    }

    .profile-info p {
        margin: 10px 0;
        display: flex;
        align-items: center;
    }

    .icon {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        flex-shrink: 0;
        border: none;
        margin-left: 5px;
    }

    .testimonial-card {
        background: #ffffff;
        border-radius: 15px;
        padding: 20px;
        margin: 30px;
        box-shadow: 0 4px 8px rgba(0 40 255 / 25%);
        text-align: left;
        width: 650px;
        height: 270px;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .quote {
        font-size: 75px;
        color: #001154 !important;
        position: absolute;
        padding-top: 35px;
        top: 5px;
        left: 15px;
    }

    .quote:before {
        color: #ff7900 !important;
    }

    .testimonial-title {
        font-weight: bold;
        margin: 10px 0px 10px 35px;
    }

    .testimonial-text {
        height: 170px;
        font-size: 0.9rem;
        margin-bottom: 10px;
        text-align: justify;
        overflow: auto;
        padding: 10px 20px;

    }

    @media screen and (max-width: 1250px) {
        .content-section {
            display: grid;
        }

        .nav-arrow {
            font-size: 40px;
            margin: 0 20px;
        }

        .navigation {
            /* display: ; */
            top: 0%;
        }

        .testimonial-card {
            width: auto;
        }
    }

    @media screen and (max-width: 550px) {
        .profile-section {
            display: grid;
        }

    }

    /*alumni testimonial css end*/
</style>
<section id="content">

    <div class="container-fluid  my-0 px-2">
        <div class="row ps-4">
            <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                <h1 class=" mt-5 mb-5 d-none d-md-block banner-main-heading">Welcome to <span
                        style="font-weight:700!important;"> Alumni Association </span></h1>
                <h1 class=" mt-5 mb-3 d-block d-md-none"
                    style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">
                    Welcome to <span>College Of</span> Computing Sciences & IT (CCSIT)</h1>
                <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-1 me-md-4 py-1 px-3 py-xl-2 px-xl-5 "> Apply Now</a>
            </div>
            <div class="col-12 col-md-6">
                <div class="pe-lg-4 position-relative p-0">
                    <div style="z-index: 2;">
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                        <img src="{{asset('/assets/img/banner/alumni/banner.png')}}" alt="" class="p-0 m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container ">
        <div class="box">
            <h1 class="college-main-heading">Welcome to TMU Alumni Association</h1>
            <div class="row">
                <div class="col-12 px-2 px-md-5">
                    <p style="text-align: justify;">Welcome to the Teerthankar Mahaveer University (TMU) Alumni Page! Our alumni community is a vibrant network of professionals who are making a difference in various fields around the world. We are proud of our graduates and their achievements. This page is designed to help you stay connected with the university and fellow alumni.</p>
                    <p style="text-align: justify;">Here, you can find updates on alumni events, share your success stories, and access resources to support your ongoing career development. Join us in celebrating the legacy of TMU and contribute to the growth of our global alumni network. Stay in touch, stay inspired, and continue to make an impact!</p>
                    <a href="{{route('alumni.overview')}}" class="tmu-btn btn-1 py-2 mt-4 ms-2 mt-2" title="Know More">Know More</a>

                </div>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center alimni-login-box">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-2">
                    <!-- Repeat this block for each profile image -->
                    <img src="{{asset('/assets/img/department/alumni/people/mukesh2.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/1.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ashi_Jain.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ishan_Vishnoi.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Konain_Iqbal.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Mukesh_Kumar.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Priyanka_Chandna.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/ritu.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Vishwas_Saxena_.png')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/mukesh2.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/1.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ashi_Jain.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ishan_Vishnoi.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Konain_Iqbal.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Mukesh_Kumar.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Priyanka_Chandna.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/ritu.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Vishwas_Saxena_.png')}}" alt="Profile Image" class="profile-img">
                </div>
            </div>
            <div class="col-md-4 text-center text-md-start">
                <h4>Search and <strong>network</strong> with alums across programs and batches</h4>
                <a href="#" class="tmu-btn btn-4 py-2 mt-4 ms-2 mt-2">Login / SignUp</a>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="testimonial-container">
            <div class="image-container">
                <div class="navigation">
                    <span class="nav-arrow" onclick="showPreviousReview()">&#10094;</span>
                    <span class="nav-arrow" onclick="showNextReview()">&#10095;</span>
                </div>
                <div class="thumb" onclick="displayReviewByIndex(0)" style="background-image: url('/assets/img/department/alumni/people/1.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(1)" style="background-image: url('/assets/img/department/alumni/people/2.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(2)" style="background-image: url('/assets/img/department/alumni/people/3.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(3)" style="background-image: url('/assets/img/department/alumni/people/1.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(4)" style="background-image: url('/assets/img/department/alumni/people/2.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(5)" style="background-image: url('/assets/img/department/alumni/people/3.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(6)" style="background-image: url('/assets/img/department/alumni/people/2.png');"></div>
            </div>
        </div>
        <div class="content-section">
            <div class="profile-section">
                <img id="profile-picture" class="profile-picture" src="" alt="Profile Image" />
                <div class="profile-details">
                    <h2 id="profile-name"></h2>
                    <a id="profile-link" href="#">LinkedIn
                        <img src="{{asset('/assets/img/icons/alumni/linkedin.svg')}}" alt="LinkedIn Icon" class="icon" /></a>
                    <div class="profile-info">
                        <p><img src="{{asset('/assets/img/icons/alumni/user.svg')}}" class="icon" /><span id="profile-designation"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/office-building.svg')}}" class="icon" /><span id="profile-company"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/book.svg')}}" class="icon" /><span id="profile-course"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/calendar.svg')}}" class="icon" /><span id="profile-graduationYear"></span></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div id="testimonial-wrapper" class="text">
                    <div class="quote"></div>
                    <div class="testimonial-title">Rediscovering Dreams with upGrad Campus</div>
                    <div class="testimonial-text review-text">"I always wanted to be a game developer, so I began searching for universities related to my interest. I found one in Japan and applied. My happiness ..."</div>
                </div>
            </div>
        </div>
    </section>


    <section id="content">
        <div class="content-wrap">
            <div class="container" style="margin-bottom: 10px;">


                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center">
                        <h2 class="tmu-text-primary my-4 mb-5"><span>TMU </span> <span>HIGHLIGHTS</span></h2>
                    </div>
                </div>
                <div class="row col-mb-37">
                    <main class="postcontent col-lg-8 col-md-9">
                        <div class="row g-4">


                            <div class=" mb-0 entry col-lg-12 col-md-12">
                                <div class="owl-carousel" id="owl-carousel2">
                                    <div class="item">

                                        <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                            <div class="entry-image mb-0">
                                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide"><a href="{{asset('/images/news/ccsit/News_05.jpg')}}" data-lightbox="gallery-item" style="background: url('/images/news/ccsit/News_05.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                            </div>
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="entry-title">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">TMU's Educational
                                                        Odyssey to Narora Atomic Power Station</a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                        <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                            <div class="entry-image mb-0">
                                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide"><a href="{{asset('/images/news/ccsit/News_04.jpg')}}" data-lightbox="gallery-item" style="background: url('/images/news/ccsit/News_04.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                            </div>
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="entry-title">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">TMU's Faculty of
                                                        Education Marks 24th Vijay Diwas.</a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                        <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">

                                        <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                            <div class="entry-image mb-0">
                                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide"><a href="{{asset('/images/news/ccsit/News_01.jpg')}}" data-lightbox="gallery-item" style="background: url('/images/news/ccsit/News_01.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>
                                                            </div>
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-2.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-2.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                            <!--<div class="slide"><a href="demos/modern-blog/images/items/lightbox/4-3.jpg" data-lightbox="gallery-item" style="background: url('demos/modern-blog/images/items/4-3.jpg') no-repeat center bottom; background-size: cover; height: 200px;"></a>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="entry-title">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">CTLD's Faculty
                                                        Development Programme Empowers Educators</a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="uil uil-schedule"></i> 10th Feb 2021</li>
                                                        <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Carousel Starts Here -->

                        <div class="row g-4 mb-0 d-none d-sm-block">

                            <div class="owl-carousel" id="owl-carousel3">
                                <div class="item ">

                                    <article class="mb-0 entry event col-12 ">
                                        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                            <div class="col-md-4 mb-md-0">
                                                <a href="#" class="entry-image mb-0 h-100">
                                                    <img src="{{asset('/images/blogs/Uni_03.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content justify-content-start align-items-start">
                                                            <div class="badge bg-light text-dark rounded-pill">
                                                                Latest Blog</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 p-4">
                                                <div class="entry-meta no-separator mb-1 mt-0">
                                                    <ul>
                                                        <li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
                                                                @
                                                                3:00PM</a></li>
                                                    </ul>
                                                </div>

                                                <div class="entry-title nott">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">Scope and
                                                        Opportunity through Non-Clinical Medical</a>
                                                </div>
                                                <div class="entry-content my-3">
                                                    <p style="font-size: 14px;">Explore the diverse opportunities in
                                                        non-clinical medical programs like MD Biochemistry, Physiology,[...]
                                                    </p>
                                                </div>

                                                <div class="entry-meta no-separator">
                                                    <ul>
                                                        <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                                Chiang Mai,
                                                                Thailand</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>


                                <div class="item">

                                    <article class="mb-0 entry event col-12 ">
                                        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                            <div class="col-md-4 mb-md-0">
                                                <a href="#" class="entry-image mb-0 h-100">
                                                    <img src="{{asset('/images/blogs/Uni_01.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content justify-content-start align-items-start">
                                                            <div class="badge bg-light text-dark rounded-pill">
                                                                Latest Blog</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 p-4">
                                                <div class="entry-meta no-separator mb-1 mt-0">
                                                    <ul>
                                                        <li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
                                                                @
                                                                3:00PM</a></li>
                                                    </ul>
                                                </div>

                                                <div class="entry-title nott">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">Top 10
                                                        engineering colleges in India</a>
                                                </div>
                                                <div class="entry-content my-3">
                                                    <p style="font-size: 14px;">Explore the top 10 Engineering colleges in
                                                        India and the top 10 things to consider while choosing a [...]</p>
                                                </div>

                                                <div class="entry-meta no-separator">
                                                    <ul>
                                                        <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                                Chiang Mai,
                                                                Thailand</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>



                                <div class="item">

                                    <article class="mb-0 entry event col-12 ">
                                        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                            <div class="col-md-4 mb-md-0">
                                                <a href="#" class="entry-image mb-0 h-100">
                                                    <img src="{{asset('/images/blogs/Uni_02.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content justify-content-start align-items-start">
                                                            <div class="badge bg-light text-dark rounded-pill">
                                                                Latest Blog</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-8 p-4">
                                                <div class="entry-meta no-separator mb-1 mt-0">
                                                    <ul>
                                                        <li><a href="#" class="text-uppercase fw-medium">Mon, Feb 12
                                                                @
                                                                3:00PM</a></li>
                                                    </ul>
                                                </div>

                                                <div class="entry-title nott">
                                                    <a herf="" style="font-size: 18px; font-weight: 500; ">Top 100
                                                        Universities in India</a>
                                                </div>
                                                <div class="entry-content my-3">
                                                    <p style="font-size: 14px;">Get guidance on India's top 100
                                                        universities, offering comprehensive insights into diverse
                                                        education[...]</p>
                                                </div>

                                                <div class="entry-meta no-separator">
                                                    <ul>
                                                        <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
                                                                Chiang Mai,
                                                                Thailand</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>


                            </div>
                        </div>
                        <!-- 
														Blog Carousel Starts Here
														-->
                    </main>
                    <!-- 
												Side Menu Code start here
											 -->


                    <aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
                        <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                            <div class="widget">

                                <h4>Latest Blogs</h4>
                                <hr>
                                <div class="posts-sm row col-mb-30" id="post-list-sidebar" style="margin-top: -0.25rem;">



                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{asset('/assets/img/blog-thumb/bfa.jpg')}}" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">BFA Course Details, Full Form, Admission, Fees, Syllabus, Top Colleges, Career</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>10th July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{asset('/assets/img/blog-thumb/bpt.jpg')}}" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">BPT Course Details, Full Form, Admission, Fees, Syllabus, Top Colleges, Career</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>10th July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{asset('/assets/img/blog-thumb/blog_thumbnail.jpg')}}" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">Top 10 Engineering colleges in india</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>10th July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{asset('/assets/img/blog-thumb/blog_thumbnail4.jpg')}}" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">Top 100 Universities in india</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>10th July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="{{asset('/assets/img/blog-thumb/llm.jpg')}}" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">LLM Course Details, Full Form, Admission, Syllabus, Top Colleges, Career</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>10th July 2021</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>


                    <aside class="sidebar col-lg-4 col-md-12">
                        <div class="notice-board">
                            <div class="notice-header">NOTICE BOARD</div>
                            <div class="notice-body">

                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Women Empowerment Cell, Faculty of Engineering, and CCSIT are going to
                                            organise International Women's Day</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            Conference Room</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 09,
                                            March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Department of Mechanical Engineering is hosting a one-day workshop on "Drone
                                            Technology" in association with ESTC Ramnagar.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            Conference Room</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 15,
                                            March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Computer Science and Engineering Department is organising a Digital/Physical
                                            Poster Competition on the topic "Mera Pehla Vote-Desh ke liye</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            CCSIT</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 21,
                                            March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Cultural Club of CCSIT is organisng a student fest for Holi, "SPLASH-The Joy
                                            of Colors".</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            CCSIT</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 20,
                                            March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Students may register for the 14th edition of Mega Quiz Khoj-2024 which is being
                                            organised by the Techno Club (CCSIT).</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            Auditorium</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 14,
                                            March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Department of Physics is going to organise National Science Day with various
                                            activities and competitions</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            LT-6, CCSIT </span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 28,
                                            February</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Electronics and Communication Engineering Department is organising a Guest
                                            Lecture on "Process of Innovation & Technology Readiness Level".</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                            LT-6, FOE</span>
                                        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 24,
                                            February</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <!--<div class="notice">-->
                                <!--    <div class="notice-pub">-->
                                <!--        <span>01, April</span>-->
                                <!--    </div>-->
                                <!--    <div class="notice-content">-->
                                <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                                <!--            tincidunt vestibulum.</p>-->
                                <!--    </div>-->
                                <!--    <div class="notice-meta">-->
                                <!--        <span style="margin-right: 15px;"><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="20px" height="20px">-->
                                <!--            Conference Room</span>-->
                                <!--        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="20px" height="20px"> 5,-->
                                <!--            April</span>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<hr class="notice-separator">-->
                                <!--<div class="notice">-->
                                <!--    <div class="notice-pub">-->
                                <!--        <span>01, April</span>-->
                                <!--    </div>-->
                                <!--    <div class="notice-content">-->
                                <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros eget nunc-->
                                <!--            tincidunt vestibulum.</p>-->
                                <!--    </div>-->
                                <!--    <div class="notice-meta">-->
                                <!--        <span>01, April</span>-->
                                <!--        <span><img src="{{asset('/assets/img/icons/placeholder.svg')}}" width="15px" height="15px"> Conference Room</span>-->
                                <!--        <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="15px" height="15px"> 5, April</span>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!-- Add more notices here -->
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- 
												Side Menu Code Ends Here
											 -->


            </div>
        </div>
    </section><!-- #content end -->




    <!--<div id="container" class="mb-5 mt-5" style="height: 500px; margin: 0 auto;"></div>-->

    <section>
        <div class="container-fluid mt-5 ">
            <h2 class="tmu-text-primary text-center">
                <span>Our </span><span> Recruiters</span>
            </h2>
            <div class="marquee my-5 py-5 pt-4">
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <div class="container">
        <h2 class="tmu-text-primary text-center">
            <span>Alumni </span><span> Glimpse</span>
        </h2>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/1.jpg')}}" alt="Gallery Thumb 1"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/2.jpg')}}" alt="Gallery Thumb 2"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/3.jpg')}}" alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/4.jpg')}}" alt="Gallery Thumb 4"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/6.jpg')}}" alt="Gallery Thumb 6"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/9.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/9.jpg')}}" alt="Gallery Thumb 9"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/10.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/10.jpg')}}" alt="Gallery Thumb 10"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/13.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/13.webp')}}" alt="Gallery Thumb 1"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/14.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/14.webp')}}" alt="Gallery Thumb 2"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/ccsit/15.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/ccsit/15.webp')}}" alt="Gallery Thumb 3"></a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>



<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Highcharts.mapChart('container', {
            chart: {
                map: 'custom/world'
            },
            title: {
                text: 'Our Alumni in different Contries'
            },
            subtitle: {
                text: 'text'
            },
            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },
            colorAxis: {
                min: 0
            },
            series: [{
                data: [
                    ['us', 6],
                    ['gb', 1],
                    ['fr', 2],
                    ['jp', 3],
                    ['cn', 4],
                    ['in', 5]
                ],
                name: 'Random data',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: false,
                    format: '{point.name}'
                }
            }, {
                type: 'mappoint',
                name: 'Cities',
                color: 'blue',
                dataLabels: {
                    useHTML: true,
                    format: '{point.name}'
                },
                data: [{
                        name: 'New York',
                        lat: 40.7128,
                        lon: -74.0060
                    },
                    {
                        name: 'Paris',
                        lat: 48.8566,
                        lon: 2.3522
                    },
                    {
                        name: 'Tokyo',
                        lat: 35.6895,
                        lon: 139.6917
                    },
                    {
                        name: 'London',
                        lat: 51.5074,
                        lon: -0.1278
                    },
                    {
                        name: 'Sydney',
                        lat: -33.8688,
                        lon: 151.2093
                    }
                ],
                dataLabels: {
                    format: '{point.name}'
                },
                tooltip: {
                    pointFormat: '{point.name}: {point.lat}, {point.lon}'
                }
            }]
        });
    });

    const reviews = [{
            name: "Speaks about TMIMT",
            text: "Teerthanker Mahaveer University (TMU) played a vital role in my success as Head of Saudi German Hospitals Group in Dubai. The transformative MBA experience provided essential skills and support from faculty mentors. Practical learning and industry exposure instilled confidence for leadership, and I am forever grateful for TMU's impact on my career.",
            img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
                name: "Shobhit Jain",
                link: "https://www.linkedin.com/in/shobhit-jain-49197ba0",
                designation: "Head",
                company: "Saudi German Hospitals Group, Dubai, UAE",
                course: "MBA",
                graduationYear: "2011",
            },
        },
        {
            name: "Speaks about CCSIT",
            text: "TMU, as a University is the cornerstone of my success as a Technical Architect. The transformative education equipped me with vital skills and mentorship from faculty. Practical learning and industry exposure provided confidence to excel in my profession. Grateful for TMU's profound impact on my career journey.",
            img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
                name: "Rajeev Mishra",
                link: "https://www.linkedin.com/in/rajeevmishra20/",
                designation: "Technical Architect",
                course: "Bearing Point, Germany",
                location: "Technical Architect Bearing Point",
            },
        },
        {
            name: "Speaks about Medical College & Research Centre",
            text: "TMU, Medical College & Research Centre has been the bedrock of my success as an MBBS doctor. The comprehensive medical education and mentorship from faculty have honed my skills and knowledge. With practical training and industry exposure, TMU empowered me to make a meaningful impact in healthcare. Forever grateful to TMU.",
            img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
                name: "Radhika Mathur",
                link: "#",
                designation: "Clinical Research Coordinator",
                company: "Ann & Robert H. Lurie Children's Hospital, chicago",
                course: "MBBS",
                graduationYear: "2019",
            },
        },
        {
            name: "Speaks about TMIMT",
            text: "Teerthanker Mahaveer University (TMU) played a vital role in my success as Head of Saudi German Hospitals Group in Dubai. The transformative MBA experience provided essential skills and support from faculty mentors. Practical learning and industry exposure instilled confidence for leadership, and I am forever grateful for TMU's impact on my career.",
            img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/1.png')}}",
                name: "Shobhit Jain",
                link: "https://www.linkedin.com/in/shobhit-jain-49197ba0",
                designation: "Head",
                company: "Saudi German Hospitals Group, Dubai, UAE",
                course: "MBA",
                graduationYear: "2011",
            },
        },
        {
            name: "Speaks about CCSIT",
            text: "TMU, as a University is the cornerstone of my success as a Technical Architect. The transformative education equipped me with vital skills and mentorship from faculty. Practical learning and industry exposure provided confidence to excel in my profession. Grateful for TMU's profound impact on my career journey.",
            img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
                name: "Rajeev Mishra",
                link: "https://www.linkedin.com/in/rajeevmishra20/",
                designation: "Technical Architect",
                course: "Bearing Point, Germany",
                location: "Technical Architect Bearing Point",
            },
        },
        {
            name: "Speaks about Medical College & Research Centre",
            text: "TMU, Medical College & Research Centre has been the bedrock of my success as an MBBS doctor. The comprehensive medical education and mentorship from faculty have honed my skills and knowledge. With practical training and industry exposure, TMU empowered me to make a meaningful impact in healthcare. Forever grateful to TMU.",
            img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/3.png')}}",
                name: "Radhika Mathur",
                link: "#",
                designation: "Clinical Research Coordinator",
                company: "Ann & Robert H. Lurie Children's Hospital, chicago",
                course: "MBBS",
                graduationYear: "2019",
            },
        },
        {
            name: "Speaks about CCSIT",
            text: "TMU, as a University is the cornerstone of my success as a Technical Architect. The transformative education equipped me with vital skills and mentorship from faculty. Practical learning and industry exposure provided confidence to excel in my profession. Grateful for TMU's profound impact on my career journey.",
            img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
            profile: {
                img: "{{asset('/assets/img/department/alumni/people/2.png')}}",
                name: "Rajeev Mishra",
                link: "https://www.linkedin.com/in/rajeevmishra20/",
                designation: "Technical Architect",
                company: "Bearing Point, Germany",
                course: "Technical Architect Bearing Point",
            },
        },
    ];

    let currentReviewIndex = 0;

    function showReview(index) {
        const review = reviews[index];
        document.querySelector('.testimonial-title').innerText = review.name;
        document.querySelector('.review-text').innerText = review.text;
        document.getElementById('profile-picture').src = review.profile.img;
        document.getElementById('profile-name').innerText = review.profile.name;
        document.getElementById('profile-link').href = review.profile.link;
        document.getElementById('profile-designation').innerText = review.profile.designation;
        document.getElementById('profile-company').innerText = review.profile.company;
        document.getElementById('profile-course').innerText = review.profile.course;
        document.getElementById('profile-graduationYear').innerText = review.profile.graduationYear;

        document.querySelectorAll('.thumb').forEach((thumb, i) => {
            thumb.classList.toggle('active-thumb', i === index);
        });
    }

    function showNextReview() {
        currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
        showReview(currentReviewIndex);
    }

    function showPreviousReview() {
        currentReviewIndex = (currentReviewIndex - 1 + reviews.length) % reviews.length;
        showReview(currentReviewIndex);
    }

    function displayReviewByIndex(index) {
        currentReviewIndex = index;
        showReview(currentReviewIndex);
    }

    showReview(currentReviewIndex);
</script>

@endsection