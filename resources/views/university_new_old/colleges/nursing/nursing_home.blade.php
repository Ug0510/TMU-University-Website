@extends('layouts.university.colleges.nursing_home_without_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap py-0">
		<div class="container-fluid  my-0 px-2">
			<div class="row ps-4">
				<div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
					<h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Nursing</span> College in UP</h1>
					<h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Nursing</span> College in UP,</h1>
					<a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a>
					<a href="https://admissions.tmu.ac.in/" target="blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
				</div>
				<div class="col-12 col-md-6">
					<div class="pe-lg-4 position-relative p-0">
						<div style="z-index: 2;">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
							<img src="{{asset('/assets/img/banner/nursing/nursing-banner.webp')}}" alt="" class="p-0 m-0">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container my-3 d-none d-md-block">
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

		<div class="container my-2 d-block d-md-none">
			<div id="under-banner-carouselExample" class="carousel slide">
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







		<div class="box-container">
            <div class="box">
                <h2 class="college-main-heading">TMU Nursing College, Among the top Nursing Colleges</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">College of Nursing, Teerthanker Mahaveer University was established in 2009. College of Nursing is committed to grooming competent nursing professionals according to the latest industry standards of the ever-evolving healthcare sector with UG, PG and doctoral nursing programmes. Join the bandwagon of the best nursing college in UP to excel beyond your imagination.</p>
                        <div class="read-more-content mt-0">
                        <p style="text-align: justify;">Nursing professionals are one of the most vital members of the healthcare industry. Their significant contribution towards the betterment of the patient is incomparable. Hence nursing professionals are also called caregivers. TMU’s College of Nursing understands the essence of the profession. It aids in nurturing refined, compassionate healthcare professionals with the right blend of academic and practical training, making us the top choice among aspiring Nursing candidates.</p>
						<p style="text-align: justify;">Choosing the right nursing college can shape your career in profound ways. TMU Nursing College stands out as a premier institution, offering a blend of academic excellence, practical training, and holistic development. Here's why TMU Nursing College is the best choice for your nursing education.</p>
                    </div>
                    <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>

		<div class="container my-5 py-2">
			<ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> Key Highlights</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Placement/Internship</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button" role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> Curriculum</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button" role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i> Infrastructure</button>
				</li>
			</ul>
			<div class="tab-content second ps-5 px-md-5" id="myTabContent">
				<div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<h3>Key Highlights</h3>
					<ul class="m-ol-list ps-4">
						<li>
							<p class="p-0 m-0">Highly qualified & experienced faculty members.</p>
						</li>
						<li>
							<p class="p-0 m-0">American Heart Association (AHA) International Training Center for Basic Life Support & Advanced Cardiac Life Support.</p>
						</li>
						<li>
							<p class="p-0 m-0">American Heart Association certified Instructors for delivering training.</p>
						</li>
						<li>
							<p class="p-0 m-0">Smart classroom with advanced technology.</p>
						</li>
						<li>
							<p class="p-0 m-0">800+ Bedded parent hospital for providing enriched clinical experience for nursing students.</p>
						</li>
						<li>
							<p class="p-0 m-0">We have well-equipped Advanced Simulation and OSCE labs and various skill labs for training/induction to nursing students before they go to the hospital.</p>
						</li>
						<li>
							<p class="p-0 m-0">Digitalized & Centralized Library facility with 8830 books, 813 e-books, 11 national journals, 5 international journals & 322 e-journals.</p>
						</li>
						<li>
							<p class="p-0 m-0">In Campus placement of students in pan India corporate hospital.</p>
						</li>
						<li>
							<p class="p-0 m-0">Learning management system (LMS) for the students.</p>
						</li>
					</ul>
				</div>
				<div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<h3>Placement/Internship</h3>
					<p>College of Nursing takes great pride in achieving a 100% placement rate. Our dedicated placement cell and training programs in Uttar Pradesh (UP) ensure that our students are well-prepared for successful careers in the healthcare industry. Alongside their academic studies, we offer comprehensive soft skill training, English language proficiency courses, and value-added programs, including BLAS certification.
						<br><br>
						Our commitment to providing holistic education and professional development enables our students to meet the high standards set by the top healthcare institutions in our city; including Paras Hospital, Medanta Hospital, Fortis Hospital, SGRCH Hospital, Max Healthcare Hospital, and CK Birla Hospital.
						These hospitals represent the pinnacle of healthcare excellence in our region, and our graduates are equipped to contribute effectively to their teams.
						<br><br>
						We are dedicated to nurturing our students' potential and providing them with the tools they need to succeed in their professional journeys. With a focus on academic excellence and industry relevance, TMIMT College of Management continues to shape the leaders of tomorrow and empower them for successful and fulfilling careers.
						<br><br>
						Furthermore, we are proud to have established partnerships with renowned international recruiters from top healthcare institutions in the United Kingdom (UK). This global exposure and recognition allow our students to explore international career prospects and broaden their horizons.
						At our institution, we strive to empower our students with the necessary knowledge, skills, and linguistic competence to thrive in the healthcare sector, both locally and internationally.
					</p>
				</div>
				<div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<h3>Curriculum</h3>
					<p>The College offers value-added courses with the help of highly experienced faculty. For each course, VAC Coordinator is designated who takes responsibility for the smooth conduction of the course. The objective of the value-added courses is to help the students to enrich their professional standards.
						<br><br>
						Value-added courses are intended to provide the students with advanced skills that will be useful in their curriculum and placement. The college also offers CTLD Courses with the help of outside experts and experienced in-house faculty.
						<br><br>
						CTLD focuses on developing quantitative ability, reasoning ability and verbal ability and developing the students' personalities by encouraging and nurturing their soft skills to be productive to meet the demands of the employers and clearing the placement interview, which will pave the way to their dream company. These training programs also upgrade the students; social and professional skills, which are required for their future workspace.
						<br><br>
						Choice-Based Credit System (CBCS) is promoted so that the College of Nursing should offer different open elective courses. This interdisciplinary learning allows open elective courses for students providing them with learning awareness and job-oriented benefits.
					</p>
				</div>
				<div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<h3>Simulation Lab:</h3>
					<p>The College of Nursing has a Simulation lab equipped with the latest simulators to provide training in critical nursing skills that mirrors real-situation and scenarios. This enables the nursing students to apply knowledge and skills into practice not just by reading books on theory or listening to lectures but through physical, hands-on activity, “learning by doing.”
						<br><br>
					<h3>Labs:</h3>
					Nursing Foundation, Community Health Nursing, Maternal and Child Health Nursing, Nutrition, Pre-clinical lab, A.V. Aids room, Simulation Lab, and OSCE Lab-Objective Structured Clinical Examination. Labs are well equipped with the latest articles and Simulators, which provide conducive practical learning to students with what they have learned theoretically under constant guidance.
					<br><br>
					<h3>Library:</h3>
					The College of Nursing has a spacious in-house library with numerous nursing books, National & International research journals, and periodicals that provide information related to recent advancements in Nursing. There is a free Wi-Fi facility for all the students inside the library.The e-Library with EBESCO database imbibed with Med-line, CINAHL enables students and research scholars to refer to e-journals for citation and research work and development.
					<br><br>
					<h3>Hospital:</h3>
					Hands-on training is given to the nursing students at our 1000-bedded super-speciality hospital of the University Medical College and allied urban and rural health centres. Nursing students attend OPD sessions in the hospital. During these visits, students visit different places under community connect and provide primary health services. Students actively participate in health awareness programs as well.
					The College of Nursing is also an inceptor of an authorized International Training Centre (ITC) in collaboration with GHPL (Medanta the Medicity) for the American Heart Association with initiatives aimed at training the healthcare fraternity on Basic Life Support (BLS) & Advanced Cardiovascular Life Support (ACLS). Students regularly interact with faculty members, doctors, and students from medical, dental, and management colleges to hone their technical and managerial skills and are groomed as competent nurses.
					Labs (Nursing Foundation, Community Health Nursing, Maternal and Child Health Nursing, Nutrition, Pre-clinical lab, A.V. Aids room, Simulation Lab, OSCE Lab-Objective Structured Clinical Examination Lab).
					</p>
				</div>
			</div>
		</div>

		<!-- Collab Modal -->
		<div id="collabModal" class="tmu-modal">
			<div class="overlay" onclick="closeCollabModal()"></div>
			<div class="tmu-modal-box">
				<div class="close-btn" onclick="closeCollabModal()">x</div>
				<div class="card collab-card">
					<img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/EPCH logo.png" alt="TMU collaboration with epch">
					<div class="card-body">
						<h3 class="collab-card-title">MBA (HANDICRAFTS EXPORT MANAGEMENT)</h3>
						<p class="collab-card-text">
							This collaborative program is a joint venture program with the Export Promotion Council for Handicrafts (EPCH) that provides specialisation in Handicraft Export Management.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-----Courses section Start-->
	<section id="content" class="prog-bm">
            <div class="content-wrap py-0" style="overflow: visible;">
                <!-- Code for the Desktop view -->
                <div class="container d-none d-lg-block">

                    <div class="col-xl-12 col-xl-10 text-center">
                        <h2 style=" line-height: 64px; color:#001055;" class="mb-5 w-100">
                            PROGRAMMES<span class="color:##FF7900"> OFFERED</span></h2>
                    </div>

                    <div class="row ">
                        <div class="col-md-3">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="programme-fetch-button pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm" id="Undergraduate" data-ProgrammeLevel="UG" data-bs-toggle="list" href="#UG" role="tab" aria-controls="UG"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Undergraduate
                                   
                                </a>
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="Postgraduate" data-ProgrammeLevel="PG" data-bs-toggle="list" href="#PG" role="tab" aria-controls="PG"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Postgraduate
                                   </a>
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="PHD" data-ProgrammeLevel="Doctoral" data-bs-toggle="list" href="#Doctoral" role="tab" aria-controls="Doctoral"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Doctrate
                                  </a>
                                <!-- <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
                                    &nbsp;&nbsp;<span class="badge rounded-pill">05</span></a> -->
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="nav-tabContent">

                                <!-- Home Tab starts here -->
                                <div class="tab-pane fade show programmes-data" id="UG" role="tabpanel" aria-labelledby="Undergraduate">

                                </div>

                                <!-- Home Tab  Ends  here -->


                                <!--  Home tab panel 2 Starts Here  --
								       ----------------------------- -->
                                <div class="tab-pane fade show programmes-data" id="PG" role="tabpanel" aria-labelledby="Postgraduate">
                                

                                </div>
                                <!-- 
									/////Home tab 2 Ends Here/////
								 -->

                                <!-- 
									/////Home tab 3 Starts Here/////
								 -->

                                <div class="tab-pane fade" id="Doctoral" role="tabpanel" aria-labelledby="PHD">
                                
                                </div>

                                <!-- 
									/////Home tab 3 Ends Here/////
										 -->

                                <!-- 
											/////Home tab 4 Starts Here/////
								 	-->
                                <!-- <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Law image ">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">BA - LLB (Hons.)</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card shadow-sm progcard">
                                                <img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">BBA - LLB (Hons.)</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" height="178px">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">LLM</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- 
									/////Home tab 4 Ends Here/////
								 -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Code for the Desktop view Ends -->




                <!-- Code for the Mobile View Starts Here -->
                <div class="container d-block d-lg-none">





                    <div class="container mb-5 mt-5">
                        <div class="col-xl-12 col-lg-10 text-center">
                            <h1 class="h1 fw-bold tmu-text-primary text-uppercase" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
                                <span>Programmes</span> <span>Offered</span>
                            </h1>
                        </div>

                        <button class="careers-accordion" data-ProgrammeLevel="UG"><span> <i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmeUG">
                                

                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <button class="careers-accordion" data-ProgrammeLevel="PG" ><span><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmePG">
                                
                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                        <button class="careers-accordion" data-ProgrammeLevel="Doctoral"><span><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctrate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmeDoctoral">
                                

                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <!-- <hr class="horizontal-line">
                        <button class="careers-accordion">
                            <span><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Law image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">BA - LLB (Hons.)</h4>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </li>


                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" height="178px" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">BBA - LLB (Hons.)</h4>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>

                                </li>



                                <li class="progli">

                                    <div class="card shadow-sm progcard">
                                        <img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">LLM</h4>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </div> -->
                        <!-- Below code is sample if you need to add new column -->
                        <!-- <hr class="horizontal-line">
                        <button class="careers-accordion">Are there opportunities for international students to study at the college?<span class="icon">+</span></button>
                        <div class="panel">
                            <p>Yes, the College welcomes applications from international students and offers various programmes and services to support their academic and personal success. International students are encouraged to reach out to the college's admissions office for more information on the application process and available resources.</p>
                        </div> -->
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                    </div>



                    <!-- Code for the Mobile View Ends Here -->

                </div>
        </section>
		<!-----Courses section completed-->


	<section>
        <div class="container-fluid mt-5 ">
            <h2 class="tmu-text-primary text-center">
                <span>Our </span><span> Recruiters</span>
            </h2>
            <div class="marquee my-5 py-5 pt-4">
                
            
                <section class="marquee-content">
                        @foreach($recruiters as $recruiter)
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                    </div>
                   @endforeach
                </section>
                <section class="marquee-content">
                        @foreach($recruiters as $recruiter)
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                    </div>
                   @endforeach
                </section>
            </div>
        </div>
    </section>

		<section>
			<div class="container-xl tmu-testimonial mt-5 mb-3">

				<h2 class="tmu-text-primary my-0 mb-3"> <span>Students </span> <span>Testimonial</span></h2>

				<div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card" style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true" data-autoplay="200000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">

					<div class="oc-item text-start">
						<div class="media ">
							<img src="https://www.tmu.ac.in/uploads/testimonial/Nidhi.jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Nidhi Choudhary</b>, B.Sc. Nursing</p>
									<p>My time at TMU has been truly wonderful. It&#39;s been 5 incredible years since I joined Teerthaker Mahaveer College of Nursing, and the experience has been life-changing. I&#39;ve learned so much, not just academically but in every aspect of my career growth. The faculty members have been like support pillars, always motivating and guiding me. I&#39;m proud to be a part of the TMU family.
									</p>
								</div>
							</div>
							<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>

						</div>
					</div>

					<div class="oc-item text-start">
						<div class="media">
							<img src="https://www.tmu.ac.in/uploads/testimonial/akansha_upadhyay_(1).jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Akansha Upadhyay</b>, B.Sc. Nursing</p>
									<p>I've been part of TMU since 2021 when I started my journey as a nursing student. I joined for my BSc Nursing where I learned a lot about different subjects. The best part was the hands-on training at TMU Hospital, where I spent 6 months in clinical areas. I even got to do BLS Training, which was a great experience. TMU's focus on practical training really helped me become a better nurse.</p>
								</div>
								<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
							</div>
						</div>
					</div>

					<div class="oc-item text-start">
						<div class="media">
							<img src="https://www.tmu.ac.in/uploads/testimonial/Nishika_sharma.jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Nishika Sharma</b>, B.Sc. Nursing</p>
									<p>Being a third-year student at TMU’s Nursing College, I&#39;m learning so much about nursing, and the lecturers are really supportive. We get to practice what we learn in real hospitals, which is super cool. I feel like I&#39;m on the right path to becoming a great nurse, and I&#39;m proud to be a part of TMU’s Nursing College.
									</p>
								</div>
								<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
							</div>
						</div>
					</div>

					<div class="oc-item text-start">
						<div class="media">
							<img src="https://www.tmu.ac.in/uploads/alumni_speak/Cindrella_Burge1.jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Cindrella Burge</b>, M.Sc. Nursing (Psychiatry Nursing)</p>
									<p>If nursing is your professional choice I will recommend you to be a part of this institute. TMU owns a super specialty hospital where nursing professionals explore experiential learning through practical exposure to patients according to the specialty. The mentors and faculty members are understanding and helpful making the students be free and explore more in their specialties. </p>
								</div>
								<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
							</div>
						</div>
					</div>

					<div class="oc-item text-start">
						<div class="media">
							<img src="https://www.tmu.ac.in/uploads/alumni_speak/Bhawna_Upadhyay.jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Bhawna Upadhyay</b>, M.Sc. Nursing (Psychiatry Nursing)</p>
									<p>As a Masters pursuing student I am so glad that I am a part of TMU's Nursing College (TMCON) where I am getting a lot of clinical exposure as TMU hospital has a comprehensive unit inside its premises. Adding on, the college arranges academic meets with prominent industry experts, orientation sessions, cultural sports and what not to ensure the overall development of the student. My time here has been a ride of growth as a professional and fun as a student.
									</p>
								</div>
								<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
							</div>
						</div>
					</div>
					<div class="oc-item text-start">
						<div class="media">
							<img src="https://www.tmu.ac.in/uploads/alumni_speak/Shagufta_Naaz.jpg" class="mr-3" alt="">
							<div class="media-body">
								<div class="testimonial">
									<p class="overview mb-3"><b>Shagufta Naaz</b>, Post Basic B.Sc. Nursing</p>
									<p>My first year here at TMU Campus and it's Nursing College (TMCON) has been thrilling & memorable. The college provides a uniquely positive environment for the students to grow in all spheres and make us understand the beauty of our profession. The compassion that our profession needs is what the university inherits and extends to all the professions of the university. I love my college and find it a great place to pursue nursing studies.</p>
								</div>
								<button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>

		<!-- Testimonial Modal -->
		<div id="testimonialModal" class="tmu-modal">
			<div class="overlay" onclick="closeTestimonialModal()"></div>
			<div class="tmu-modal-box">
				<div class="close-btn" onclick="closeTestimonialModal()">x</div>
				<div class="tmu-testimonial bg-light">
					<div class="media">
						<img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp" class="mr-3" alt="">
						<div class="media-body">
							<div class="testimonial">
								<p class="overview mb-3 testimonial-user-name"><b>Abdul Malik Khan</b>, MBA</p>
								<p class="testimonial-content">TMU, for me, is not just an MBA destination, it's the crucible where my leadership skills
									were forged. Beyond textbooks and case studies, TMU offered a dynamic learning
									environment where theories met practical challenges. It's a journey where I honed the
									skills that set me apart in the dynamic landscape of business and management.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->

<div class="container mb-5 mt-5">
<h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
            <hr class="horizontal-line">

            <button class="careers-accordion">Why TMU is the Best Choice for You <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>UGC-Approved with </span><span> NAAC A Accreditation</span></h3> 
			<p>TMU Nursing College is UGC-approved and has received NAAC A accreditation, a mark of excellence and quality in education. This recognition ensures that the college meets high standards in teaching, research, and infrastructure.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Experiential Learning by </span><span> Highly Qualified Faculties</span></h3> 
			<p>The college prides itself on its team of highly qualified faculties who bring a wealth of experience and knowledge to the classroom. They focus on experiential learning, ensuring that students gain hands-on experience that is crucial in the nursing field.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Centre for Teaching, </span><span> Learning, and Development</span></h3> 
			<p>The Centre for Teaching, Learning, and Development at TMU fosters an environment of continuous improvement and innovation in teaching methods. It supports faculty development and ensures that students receive the best possible education.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Global Career </span><span> Prospects</span></h3> 
			<p>Graduating from TMU Nursing College opens doors to global career opportunities. The college&rsquo;s strong industry connections and international collaborations help students secure placements and internships worldwide.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>On-Campus </span><span> Hostel Facilities</span></h3> 
			<p>TMU offers comfortable on-campus hostel facilities, providing a home away from home for students. The hostels are well-maintained and equipped with all the necessary amenities, ensuring a comfortable living environment.</p>

            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Academic Excellence <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Modern Classrooms for </span><span>Interactive Sessions</span></h3>
			<p>The college boasts modern classrooms equipped with the latest technology to facilitate interactive learning sessions. This ensures that students are engaged and can actively participate in their education.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Educational Seminars </span><span> and Conferences</span></h3>
			<p>Regular educational seminars and conferences are held at TMU, providing students with the opportunity to learn from experts in the field, stay updated with the latest advancements, and network with professionals.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Strong Focus on </span><span> Practical Knowledge</span></h3>
			<p>At TMU, the emphasis is on practical knowledge. The curriculum is designed to provide students with hands-on experience through practical training in well-equipped laboratories and real-world settings.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Campus Life at TMU Nursing College <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Extracurricular </span><span> Clubs</span></h3>
			<p>Extracurricular activities are a vital part of student life at TMU. The college has a variety of clubs that cater to different interests, helping students develop well-rounded personalities and leadership skills.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Electrifying Concerts and </span><span> Dynamic Events</span></h3>
			<p>The campus is always buzzing with events, from electrifying concerts to dynamic cultural and sports events. These activities provide a vibrant and engaging campus life for students.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Gym and  </span><span> Fitness Centre</span></h3>
			<p>TMU&rsquo;s gym and fitness centre are well-equipped, promoting a healthy lifestyle among students. Regular physical activity is encouraged, helping students maintain their physical well-being.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Shopping Stores and </span><span>  Cafeterias</span></h3>
			<p>Convenience is key at TMU, with on-campus shopping stores and cafeterias that cater to students' daily needs. These facilities ensure that students have everything they need within the campus.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Anti-Ragging </span><span>  Campus</span></h3>
			<p>Safety is a top priority at TMU. The campus is strictly anti-ragging, ensuring a safe and welcoming environment for all students.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Fully Wi-Fi  </span><span> Enabled Campus</span></h3>
			<p>Staying connected is essential, and TMU provides a fully Wi-Fi enabled campus. This ensures that students have access to the internet for academic and personal use at all times.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Placement and Career Opportunities <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Explore Top-Notch </span><span>Placement Opportunities</span></h3>
			<p>TMU Nursing College offers top-notch placement opportunities, with a dedicated placement cell that works tirelessly to ensure that students secure positions in reputed organizations.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>100% Placement Assistance with </span><span> an Outstanding Track Record</span></h3>
			<p>The college boasts a 100% placement assistance record, with graduates finding positions in leading healthcare institutions and organizations. The outstanding track record speaks volumes about the quality of education and training provided.</span></p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Strong Industry Connections</span><span> with Top Companies</span></h3>
			<p>TMU&rsquo;s strong connections with top companies in the healthcare industry provide students with invaluable insights and opportunities. These connections facilitate internships, placements, and collaborative projects.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">State-of-the-Art Facilities <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Well-Maintained Landscapes for a </span><span> Conducive Learning Environment </span></h3>
			<p>The campus is adorned with well-maintained landscapes, creating a serene and conducive learning environment. The greenery and open spaces contribute to a positive and healthy atmosphere.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Well-Equipped </span><span> Nursing Laboratories </span></h3>
			<p>The college&rsquo;s nursing laboratories are equipped with the latest technology and instruments, providing students with hands-on training that is essential for their professional development.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Global Exposure and Opportunities <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>International Nursing </span><span> Internships</span></h3>
			<p>TMU Nursing College provides opportunities for international internships, allowing students to gain global exposure and experience different healthcare systems.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Placement Opportunities in </span><span> Leading Nursing Industries</span></h3>
			<p>The college&rsquo;s placement cell works diligently to secure opportunities in leading nursing industries, ensuring that graduates find positions that match their skills and aspirations.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Global Nursing </span><span> Research Opportunities</span></h3>
			<p>Research is a critical component of TMU&rsquo;s academic environment. Students have the chance to engage in global nursing research opportunities, contributing to advancements in the field.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Robust Nursing Industry Affiliations</span><span> for Invaluable Insights</span></h3>
			<p>TMU&rsquo;s affiliations with various nursing industry leaders provide students with insights and exposure that are invaluable for their professional growth.</p>
            </div>
			<hr class="horizontal-line">
            <button class="careers-accordion">Research and Development <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span> In-House Research Journal - </span><span> TMU Journal of Nursing</span></h3>
			<p>TMU publishes its own research journal, the TMU Journal of Nursing, which features scholarly articles and research findings. This encourages students and faculty to contribute to the body of knowledge in nursing.</p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span> Research and Entrepreneurial </span><span> Development Programmes</span></h3>
			<p>The college offers research and entrepreneurial development programs, fostering innovation and encouraging students to pursue research projects and entrepreneurial ventures.</p>
			</div>
			<hr class="horizontal-line">
            <button class="careers-accordion">Accommodation and Amenities <span class="icon">+</span></button>
            <div class="panel">
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Comfortable On-Campus</span><span> Hostel Facilities</span></h3>
			<p>TMU provides comfortable on-campus hostel facilities, ensuring that students have a safe and convenient place to stay. The hostels are equipped with all the necessary amenities and provide a supportive living environment.</span></p>
			<h3 class="tmu-text-primary fs-16 mb-1"><span>Stores and </span><span> Cafeterias</span></h3>
			<p>For students, TMU offers stores and cafeterias that cater to their needs. These facilities make it easy for students to find the supplies they need and enjoy a variety of food options.</span></p>
			</div>
			<hr class="horizontal-line">
            <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMU Nursing College offers a comprehensive education experience, combining academic excellence, practical training, and a vibrant campus life. With state-of-the-art facilities, global opportunities, and strong industry connections, TMU Nursing College is the best choice for aspiring nurses. The college’s commitment to quality education, student support, and holistic development ensures that graduates are well-prepared for successful careers in nursing.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">FAQs<span class="icon">+</span></button>
            <div class="panel">
            <p><strong>Q1: What accreditation does TMU Nursing College have?</strong></p>
			<p><strong>Ans:</strong> TMU Nursing College is UGC-approved and has received NAAC A accreditation, indicating high standards in education, research, and infrastructure.</p>
			<p><strong>Q2: Are there on-campus accommodation facilities at TMU Nursing College?</strong></p>
			<p><strong>Ans: </strong>Yes, TMU provides comfortable on-campus hostel facilities equipped with all necessary amenities.</p>
			<p><strong>Q3: What are the global opportunities available for TMU Nursing College students?</strong></p>
			<p><strong>Ans: </strong>Students at TMU Nursing College have access to international internships, global nursing research opportunities, and placement opportunities in leading nursing industries.</p>
			<p><strong>Q4: How does TMU Nursing College support student placement?</strong></p>
			<p><strong>Ans: </strong>TMU Nursing College offers 100% placement assistance with an outstanding track record, strong industry connections, and a dedicated placement cell that ensures students secure positions in reputed organizations.</p>

            </div>
            <hr class="horizontal-line">
        </div>



<br /><br />
<script src="{{asset('/assets/js/tmimt.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


$(document).ready(function() {
    // Click event for navbar buttons
    $('.programme-fetch-button').click(function() {
        
        var programme_level = this.getAttribute('data-ProgrammeLevel');

        // Ajax call to fetch programs of selected type
        $.ajax({
            url: '{{ route("fetch_programmes_by_level") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cd_id: 4,
                programme_level:programme_level 
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
                $('#'+programme_level).html(programListHtml);
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
        var programme_level = this.getAttribute('data-ProgrammeLevel');
        // Ajax call to fetch programs of selected type
        $.ajax({
            url: '{{ route("fetch_programmes_by_level") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cd_id: 4,
                programme_level: programme_level
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
                $('#programme'+programme_level).html(programListHtml);
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