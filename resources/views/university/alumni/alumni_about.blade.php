@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')


    <div class="main-content">
        <div class="container">
            <div class="banner text-white text-center p-4 rounded"
                style="height: 20vh; background-color: #001055;">
                <h2 style="color: #fff; padding:1.5rem;">College Overview</h2>
            </div>

            <section class="about-section mt-4">
                <div class="container">
                    <div class="text-content p-4">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span>Alumni Association</span></h1>
                        <p class="about-p mb-4">Teerthanker Mahaveer University has registered Alumni Association with Reference No: <b>579/2015-16/MBD-29913</b> as registered dated on: August 06, 2015. Alumni Association aims to bring current and former students together to enhance the opportunities of employability and entrepreneurship skills while conducting various events such as workshops, webinars, lectures by alumni or alumni meet which brings good alumni relationships benefits to both the institutions and the alumni.</p>
                    </div>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/banner_overview/alumni/banner.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <div class="container p-3">
                        <p class="about-p mb-4">TMU has a rich background of profound alumni who’s thought have not made any financial contribution but certainly 
                        have made their presence felt of their successful journeys, both professionally and personally, during the annual alumni meets held in the campus.</p>  
                        <p class="about-p mb-4">TMU alumni have a special connection with the university and produce invaluable word-of-mouth publicity and promotion 
                        across their personal and professional networks. They are most loyal supporters and best ambassadors. TMU has always welcomed its alumni with 
                        open arms. The Alumni have come out with flying colors in various fields in the society.</p>
                         <p class="about-p mb-4">Alumni which are placed in various reputed organizations visit the campus and deliver guest lectures and also come for campus recruitment drives.</p>
                    </div>
            </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->
@endsection