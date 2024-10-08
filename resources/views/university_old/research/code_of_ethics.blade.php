@extends('layouts.university.research_cell_with_sidebar')
@section('content')





<div class="col-12 col-md-10 mt-3 mt-sm-0 pt-5">
    <div class="row mx-0">
        <h1 class="tmu-text-primary tmu-page-heading"><span>Code of </span><span> Ethics</span></h1>
        <div class="container my-2 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"> Research Ethics Course</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"> Ethics
                        Committee </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button" role="tab" aria-controls="Tab3" aria-selected="false">Publication
                        Guidance Committee </button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <object data="https://www.tmu.ac.in/pdf/code_of_ethics/publication_ethics_course.pdf" type="application/pdf" width="100%" height="1100px">
                        <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                        <center><a type="button" class="tmu-btn btn-1 m-0 py-1 px-2 mb-3" href="https://www.tmu.ac.in/pdf/code_of_ethics/publication_ethics_course.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a>
                        </center>
                    </object>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <object data="https://www.tmu.ac.in/pdf/code_of_ethics/research_ethics_committee.pdf" type="application/pdf" width="100%" height="1100px">
                        <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                        <center><a type="button" class="tmu-btn btn-1 m-0 py-1 px-2 mb-3" href="https://www.tmu.ac.in/pdf/code_of_ethics/research_ethics_committee.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a>
                        </center>
                    </object>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <object data="https://www.tmu.ac.in/pdf/code_of_ethics/publication_guidence_committee.pdf" type="application/pdf" width="100%" height="1100px">
                        <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                        <center><a type="button" class="tmu-btn btn-1 m-0 py-1 px-2 mb-3" href="https://www.tmu.ac.in/pdf/code_of_ethics/publication_guidence_committee.pdf" download type="application/pdf"><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a>
                        </center>
                    </object>
                </div>
            </div>
        </div>
        <!-- container ends -->
    </div>
    <!-- container ends -->
</div>
</div>
</div>
</div>
</section><!-- #content end -->

@endsection