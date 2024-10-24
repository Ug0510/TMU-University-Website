@extends('layouts.main')
@section('content')


<link rel="stylesheet" href="{{asset('assets/css/swiper2.css')}}">
<!-----video banner start-->
<section id="slider" class="slider-element revslider-wrap min-vh-0 include-header">
    <div class="slider-inner">
        <div class="container-fluid p-0">
            <div class="video-banner">
                <!-- <img src="./assets/image/banner-poster.jpg" alt="" id="banner-tmu-img"> -->
                <!-- <video muted loop autoplay id="main-banner-vid" class="d-none" poster="./assets/image/banner-poster.jpg" src="#"> -->
                <!-- </video> -->
                <video muted autoplay loop>
                    <source src="{{asset('poster/tmu_final_video.mp4')}}">
                </video>
            </div>
            <div class="banner-text">
                <h1>This is TMU</h1>
                <p>With a bright history of shaping futures, we continue to shine even brighter <br> with our vision of TRANSFORMING MINDS, UNITING WISDOM</p>
            </div>
        </div>
    </div>
</section>
<!-- video banner End -->
<!-- <div class="container-sideb">
    <a href="#" class="side-button">CDOE</a>
    <a href="#" class="side-button">Admission Open</a>
</div> -->

<div class="container my-3  d-none d-md-block">
    <div class="row justify-content-center">
        <div class="col-6 col-lg-3 px-1">
            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>82%</span>
                    <br>
                    <span class="d-block pt-1">Placement Rate</span>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 px-1">
            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                    <span>100%</span>
                    <br>
                    <span class="d-block pt-1">Placement Assistance</span>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 px-1">
            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                    <span>60 LPA</span>
                    <br>
                    <span class="d-block pt-1">Highest Package</span>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 px-1">
            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                    <span>100+</span>
                    <br>
                    <span class="d-block pt-1">Global Collaborations</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-2 mt-4 d-block d-md-none">
  <div id="under-banner-carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                            <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>82%</span>
                                <br>
                                <span class="d-block pt-1">Placement Rate</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                            <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                <span>100%</span>
                                <br>
                                <span class="d-block pt-1">Placement Assistance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-6">
                        <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                            <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                <span>60 LPA</span>
                                <br>
                                <span class="d-block pt-1">Highest Package</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                            <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                <span>100+</span>
                                <br>
                                <span class="d-block pt-1">Global Collaborations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-----City in Itself Start-->
<section id="content">
    <div class="content-wrap py-0" style="background-color: #001055;">

        <div class="container-fluid py-md-5">
            <div class="row pt-5">

                <div class="col-md-3">
                    <h2 class="tmu-text-primary dark tmu--world-carousel"><span>TMU </span> <span>A WORLD WITHIN</span></h2>

                </div>
                <div class="col-md-9">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide"><img src="{{asset('images/infra/2-01.webp')}}" alt="Slide 6"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/3-01.webp')}}" alt="Slide 8"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/4-01.webp')}}" alt="Slide 9"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/5-01.webp')}}" alt="Slide 10"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/6-01.webp')}}" alt="Slide 11"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/7-01.webp')}}" alt="Slide 12"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/8-01.webp')}}" alt="Slide 13"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/9-01.webp')}}" alt="Slide 14"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/10-01.webp')}}" alt="Slide 15"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/11.webp')}}" alt="Slide 16"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/12.webp')}}" alt="Slide 17"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/13-01.webp')}}" alt="Slide 18"></div>
                            <div class="swiper-slide"><img src="{{asset('images/infra/14-01.webp')}}" alt="Slide 19"></div>

                        </div>
                        <!-- Add pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<!-----City in Itself End-->
<!-----Courses section Start-->

<!-----Courses section Start-->


<section id="content" class="prog-bm" style="margin-top: 22px; ">
    <div class="content-wrap py-0">
        <!-- Code for the Desktop view -->
        <div class="container d-none d-sm-block">

            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center">
                    <h2 class="tmu-text-primary my-4 mb-5"><span>PROGRAMMES </span> <span>OFFERED</span></h2>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-3">
                    <div class="list-group" id="list-tab" role="tablist">
                        @php
                        $i = 1;
                    @endphp
 @foreach ($colleges as $college)

<h4 class="mb-1"><a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm" id="{{$college->cd_code}}" data-collegeId="{{$college->cd_id}}" data-bs-toggle="list" href="#{{$college->cd_id}}" role="tab" aria-controls="{{$college->cd_id}}"><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;{{$college->short_name}}
  </a></h4>


@php
$i++;
@endphp

 @endforeach


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="nav-tabContent">

                        <!-- Home Tab starts here -->


                        @foreach ($colleges as $college)
                        <div class="tab-pane fade show programmes-data" id="{{$college->cd_id}}" role="tabpanel" aria-labelledby="{{$college->cd_code}}">

                        </div>
                         @endforeach


               

                    
                    </div>
                </div>
            </div>

        </div>

        <!-- Code for the Desktop view Ends -->


        <!-- Code for the Mobile View Starts Here -->
        <div class="container d-block d-sm-none">


            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center">
                    <h2 class="tmu-text-primary my-3"><span>PROGRAMMES</span> <span>OFFERED</span></h2>
                </div>
            </div>


            <!--Accordion code starts here -->
@foreach ($colleges as $college)
<button class="careers-accordion" data-collegeId="{{$college->cd_id}}"><span> <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$college->cd_name}}</span> <span class="icon">+</span></button>
<div class="panel">
<ul class="progul" id="programme{{$college->cd_id}}">
              


                   
</ul>
</div>
<hr class="horizontal-line">
@endforeach
            <!-- Add the horizontal line here -->
         

            <!-- Accordion code ends here -->
        </div>
        <!-- -------------   Accordian 4 Ends here -------------
							-------------------------      -------------------------  -->

        <!-- Code for the Mobile View Ends Here -->

    </div>
</section>

<!-----Courses Ends  Start-->


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
                               

                                @foreach ($news as $event)                                
                                <div class="item">

                                    <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                        <div class="entry-image mb-0">
                                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide">
                                                            <a href="{{ $event->n_slug}}" data-lightbox="gallery-item" style="background: url('{{ $event->monaco_image_path }}') no-repeat center bottom; background-size: cover; height: 200px;">
                                                            </a>
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
                                                <a herf="" style="font-size: 18px; font-weight: 500; ">{{$event->event_title}}</a>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> {{$event->event_date}}</li>
                                                    <li><a href="{{'news/'.$event->n_slug}}" target="_blank">Read More</a></li>
                                                    {{-- <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endforeach

                               


                               
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
                                                <img src="{{asset('images/blogs/Uni_03.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
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
                                                <img src="{{asset('images/blogs/Uni_01.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
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
                                                <img src="{{asset('images/blogs/Uni_02.webp')}}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
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
                                                <a href="#"><img src="{{asset('assets/img/blog-thumb/bfa.jpg')}}" alt="Image"></a>
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
                                                <a href="#"><img src="{{asset('assets/img/blog-thumb/bpt.jpg')}}" alt="Image"></a>
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
                                                <a href="#"><img src="{{asset('assets/img/blog-thumb/blog_thumbnail.jpg')}}" alt="Image"></a>
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
                                                <a href="#"><img src="{{asset('assets/img/blog-thumb/blog_thumbnail4.jpg')}}" alt="Image"></a>
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
                                                <a href="#"><img src="{{asset('assets/img/blog-thumb/llm.jpg')}}" alt="Image"></a>
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        Conference Room</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 09,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        Conference Room</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 15,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 21,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        CCSIT</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 20,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        Auditorium</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 14,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        LT-6, CCSIT </span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 28,
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
                                    <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="20px" height="20px">
                                        LT-6, FOE</span>
                                    <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 24,
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
                            <!--        <span style="margin-right: 15px;"><img src="assets/img/icons/placeholder.svg" width="20px" height="20px">-->
                            <!--            Conference Room</span>-->
                            <!--        <span><img src="assets/img/icons/calendar.svg" width="20px" height="20px"> 5,-->
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
                            <!--        <span><img src="assets/img/icons/placeholder.svg" width="15px" height="15px"> Conference Room</span>-->
                            <!--        <span><img src="assets/img/icons/calendar.svg" width="15px" height="15px"> 5, April</span>-->
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



<!------VIDEO TESTIMONIALS START------->
<section id="content">
    <div class="content-wrap py-0" style="margin-top: 23px; margin-bottom: 37px;">

        <div class="row justify-content-center ">
            <div class="col-xl-10 col-lg-10 text-center">
                <h2 class="tmu-text-primary my-4 mb-5"> <span>Testimonials</span></h2>
            </div>
        </div>

        <div class="owl-carousel tmu-video-testimonial" id="owl-carousel4">
            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(2)"><img src="./assets/img/university/testimonial-thumbnail/deeksha-rani.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Deeksha rani</p>
                        <p class="text-center mb-0">B.A.-B.E.D(2021 - 2024)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>

            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(1)"><img src="./assets/img/university/testimonial-thumbnail/mansi-boraa.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Mansi Boraa</p>
                        <p class="text-center mb-0">M.B.B.S(2021 - 2026)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>

            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(1)"><img src="./assets/img/university/testimonial-thumbnail/navodita-bisht.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Navodita Bisht</p>
                        <p class="text-center mb-0">B.A.-B.E.D(2022 - 2025)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>

            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(3)"><img src="./assets/img/university/testimonial-thumbnail/nikshita-singh.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Nikshita Singh</p>
                        <p class="text-center mb-0">M.B.B.S(2021 - 2026)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>

            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(0)"><img src="./assets/img/university/testimonial-thumbnail/saloni-jain.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Saloni Jain</p>
                        <p class="text-center mb-0">MBA(2023 - 2025)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>
            <div class="item">
                <div class="card shadow-sm mb-2">
                    <a onclick="showStory(1)"><img src="./assets/img/university/testimonial-thumbnail/shashank-negi.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="tmu-color fw-bold">Shashank Negi</p>
                        <p class="text-center mb-0">M.B.B.S(2020 - 2025)</p>
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class=" px-2 py-1 linkedin-text">Linkedin <i class="bi bi-linkedin"></i></a>
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->


<!-- Success Stories Popup Modal code begin  -->
<div id="success-stories-popup" class="popup">
    <div class="ss-popup-content ">
        <span class="ss-heading"></span>
        <span class="ss-close-btn" id="closePopupBtn">&times;</span>
        <iframe src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<!-- Success Stories Popup Modal code end -->

<div class="container mb-5 mt-5">
    <hr class="horizontal-line">

    <button class="careers-accordion">Why Teerthanker Mahaveer University(TMU) is Among the Top Private Universities in India?<span class="icon">+</span></button>
    <div class="panel">
        <p>Teerthanker Mahaveer University (TMU) has emerged as a prominent
            educational institution, garnering attention for various reasons.
            Let's explore the factors that contribute to TMU's status as one
            of the best private universities in India.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">TMU’s Impressive Placement Records<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="mb-2 tmu-color accord">82% Outstanding Placement Rate</h3>
        <p>One of the key indicators of a university'ssuccess is its placement records. TMU boasts an outstanding placement rate of 82% in the academic year 2022-23.</p>
        <h3 class="mb-2 tmu-color accord">Highest Package Offered - 60 LPA</h3>
        <p>The university's commitment to providing quality education is evident in the remarkable achievement of a 60 LPA package offered to TMU students, showcasing the recognition and demand for graduates from the university.</p>
        <h3 class="mb-2 tmu-color accord">National and International Collaborations</h3>
        <p>With over 100 collaborations with national and international organizations, TMU ensures that its students have access to diverse and enriching opportunities.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Awards and Recognitions of Teerthanker Mahaveer University<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="mb-2 tmu-color accord">NIRF Innovation Category</h3>
        <p>TMU secured a position in the 51-100 rank band in the NIRF innovation category, highlighting its commitment to fostering innovation in education.</p>
        <h3 class="mb-2 tmu-color accord">Excellence in Skills Development</h3>
        <p>Acknowledgement from Observe Now and LinkedIn Talent Solutions for Excellence in Skills Development further solidifies TMU's standing.</p>
        <h3 class="mb-2 tmu-color accord">Outlook India Ranking</h3>
        <p>TMU holds the 45th rank among the Top 50 State Private Universities by Outlook India, a testament to its overall excellence.</p>
        <h3 class="mb-2 tmu-color accord">Notable Alumni Network</h3>
        <p>With over 28,000 alumni, TMU has created a robust network of successful individuals contributing to various fields globally.</p>
        <h3 class="mb-2 tmu-color accord">Diverse Academic Programmes</h3>
        <p>TMU offers over 150 programmes across 14 on-campus colleges and independent departments, catering to a wide range of academic interests.</p>
        <h3 class="mb-2 tmu-color accord">Cutting-Edge Infrastructure</h3>
        <p>The university's lush green campus spanning over 130 acres provides a conducive environment for learning. State-of-the-art facilities, including sports complexes and libraries, contribute to a holistic educational experience.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Innovation and Research Achievements at TMU<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="mb-2 tmu-color accord">Patent Success and Recognition</h3>
        <p>TMU ranks 6th nationally in patent filings among all universities, showcasing a commitment to academic excellence. The Business Incubation Centre's recognition by the UP state government further emphasizes TMU's success in fostering innovation.</p>
        <h3 class="mb-2 tmu-color accord">Industry Collaborations</h3>
        <p>TMU has established strong ties with leading industries, providing students with valuable insights and opportunities. Collaborations with IBM, AutoCAD, TCS-iON, and others enhance the practical exposure students receive.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">TMU’s Commitment to Quality Education<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="mb-2 tmu-color accord">Adherence to National Education Policy (NEP) 2020</h3>
        <p>TMU is strategically aligning with the future of education by implementing NEP 2020, adopting a national credit framework and redesigning the curriculum.</p>
        <h3 class="mb-2 tmu-color accord">Outcome-Based Education (OBE)</h3>
        <p>TMU's focus on OBE enhances the overall quality of learning, preparing students for the challenges of the future. TMU is actively contributing to the idea of a self-reliant India by creating a hub for startups, an Entrepreneurship Development Cell, and aligning its activities with the vision of an Aatmanirbhar Bharat through the Institution Innovation Council.</p>
        <h3 class="mb-2 tmu-color accord">Strategic Initiatives for Skill Development</h3>
        <p>The university prioritizes skill development through various initiatives, including a Centre for Teaching Learning & Development, global internship opportunities, and live projects.</p>
        <h3 class="mb-2 tmu-color accord">Recognitions and Accreditations</h3>
        <p>TMU's numerous accreditations, including NAAC-A, NBA, and ICAR, reflect its commitment to maintaining high-quality standards in education.</p>
        <h3 class="mb-2 tmu-color accord">Global Outreach and Collaborations</h3>
        <p>TMU's affiliation with the United Nations Academic Impact (UNAI) and global collaborations contribute to creating a culturally diverse community.</p>
        <h3 class="mb-2 tmu-color accord">Commitment to Social Responsibility</h3>
        <p>TMU's involvement in social initiatives, including NSS units and support for sustainable institutions, highlights its commitment to social responsibility.</p>
        <h3 class="mb-2 tmu-color accord">Your Future Awaits</h3>
        <p>Teerthanker Mahaveer University's consistent commitment to excellence, innovation, and holistic development has propelled it into the league of top universities in India. The impressive placement records, accolades, and a focus on quality education make TMU a preferred choice for aspiring students.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Frequently Asked Questions (FAQs)<span class="icon">+</span></button>
    <div class="panel">
        <h4 class="mb-2 tmu-color">1. What sets TMU apart from other universities?</h4>
        <p>TMU's commitment to excellence, innovation, and holistic development sets it apart. The university's impressive placement records and global collaborations contribute to its distinguished status.</p>
        <h4 class="mb-2 tmu-color">2. How does TMU support entrepreneurship?</h4>
        <p>TMU actively fosters entrepreneurship through its Business Incubation Centre, strategic initiatives aligned with Aatmanirbhar Bharat, and a strong industry-university interface.</p>
        <h4 class="mb-2 tmu-color">3. What is the significance of TMU's accreditations?</h4>
        <p>Accreditations like NAAC-A, NBA, and ICAR reflect TMU's adherence to high-quality standards, ensuring students receive a top-notch education.</p>
        <h4 class="mb-2 tmu-color">4. How does TMU contribute to social responsibility?</h4>
        <p>TMU engages in various social initiatives, including NSS units and support for sustainable institutions, showcasing its commitment to social responsibility.</p>
        <h4 class="mb-2 tmu-color">5. How can I get admission to TMU?</h4>
        <p>To get admission to Teerthanker Mahaveer University, visit the <a href="https://admissions.tmu.ac.in/">admission page</a> or contact 18002701490</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


$(document).ready(function() {
    // Click event for navbar buttons
    $('.programme-fetch-button').click(function() {
        var collegeId = this.getAttribute('data-collegeId');
        // Ajax call to fetch programs of selected type
        $.ajax({
            url: '{{ route("fetch_programme_by_college_id") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cd_id: collegeId
            },
            success: function(response) {
                // Handle JSON response and populate program list
                console.log(response);
                var programs = response.programs;
                var programListHtml = '';
                let i =0;
                programs.forEach(function(program) {
                    if ((i % 3 == 0) && (i != 0)) {
                        programListHtml += `</div><div class="row">`;
                    } else if (i == 0) {
                        programListHtml += `<div class="row">`; 
                    }

                        programListHtml += `
                    <div class="col-md-4">
                                    <div class="card card-sz shadow-sm ">
                                        <img src="${program.programme_image_path}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <!--<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>-->
                                            <h5>${program.prog_name}</h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="programme/${program.page_slug}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>`;

            
                
                                i++;
                });
                $('#'+collegeId).html(programListHtml);
            },
            error: function(xhr, status, error) {
              
                console.log('the error is'+error);
            }
        });
    });
    $('.programme-fetch-button:first').addClass('active').click();
    $('.programmes-data:first').addClass('active');

// Programme fetch code for the mobile view starts here

    $('.careers-accordion').click(function() {
        var collegeId = this.getAttribute('data-collegeId');
        // Ajax call to fetch programs of selected type
        $.ajax({
            url: '{{ route("fetch_programme_by_college_id") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cd_id: collegeId
            },
            success: function(response) {
                // Handle JSON response and populate program list
                console.log(response);
                var programs = response.programs;
                var programListHtml = '';
                let i =0;
                programs.forEach(function(program) {
                 
                        programListHtml += `<li class="progli">
                        <div class="card shadow-sm progcard card-sz">
                            <img src="${program.programme_image_path}" class="card-img-top" alt="...">
                            <div class="card-body progcardbody">

                                <h5 class="mb-2">${program.prog_name}</h5>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                <div>
                                </div>
                                <a href="programme/${program.page_slug}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                    More</a>
                            </div>
                        </div>
                    </li>`;
 i++;
                });
                $('#programme'+collegeId).html(programListHtml);
            },
            error: function(xhr, status, error) {
              
                console.log('the error is'+error);
            }
        });
    });

// Programme fetch code for the mobile view ends here

});

</script>

@endsection
