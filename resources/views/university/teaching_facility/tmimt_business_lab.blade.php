@extends('layouts.university.departments.teaching_facility_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <div class="col-md-12">
            <h1 class="tmu-text-primary tmu-page-heading mb-3 mt-md-3"><span>TMIMT Business  </span><span> Lab</span></h1>
        </div>

        <div class="row gutter-30 col-mb-5 justify-content-center mt-3">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_01.jpeg')}}" alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_01.jpeg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_02.jpeg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_02.jpeg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-image">
                        <img src="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_03.jpeg')}}"
                            alt="" height="280">
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/tmimt_lab/tmimt_b-lab_03.jpeg')}}"> Download Geo Tag Image</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                    <div class="team-video">
                        <video width="100%" height="200" controls>
                            <source src="{{asset('/assets/img/facilities/Business_Lab.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="team-desc p-2">
                        <div class="team-title pt-0">
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn mb-1" href="{{asset('/assets/img/facilities/Business_Lab.mp4')}}" download> Download Video</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>

@endsection