@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    @media screen and (max-width: 600px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
            text-align: center;
        }

        th,
        td {
            box-sizing: border-box;
            display: block;
            width: 100%;
        }

        th,
        td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
        }

        tr {
            margin-bottom: 1em;
        }
    }
</style>

<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">

<div class="main-content">
        <div class="container">
            <div class="banner text-white text-center p-4 rounded"
                style="height: 20vh; background-color: #001055;">
                <h2 style="color: #fff; padding:1.5rem!important;">College Overview</h2>
            </div>

            <section class="about-section bg-light mt-4">
                <div class="container">
                    <div class="text-content p-4">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMIMT College </span><span> of Management</span></h1>
                        <p class="about-p mb-4 text-justify">Teerthanker Mahaveer Institute of Management and Technology (TMIMT) is the seed that has grown into a big Banyan tree in the form of Teerthanker Mahaveer University. This top management college, established in 2001, has been contributing to the development of management education, by fostering leadership, nurturing entrepreneurial talent and stimulating research since its inception. Join the 21-years legacy of graduates shaping the business landscape, with the assistance of the exceptionally qualified faculties.</p>
                    </div>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('assets/img/112.jpg')}}" alt="Law about us image">
                    </div>
                    <div class="container p-3">
                        <p class="about-p mb-4 text-justify">TMIMT College of Management consists of two departments namely the Department of Management Studies and the Department of Commerce. The departments are led and mentored by a number of experienced academicians with core industry experience. The Training & Placement cell works around the clock to guarantee that students are placed in credible companies at advantageous terms across a variety of industries. Numerous reputable companies have partnered with TMIMT in order to provide the best industry-sponsored courses and lab facilities in recognition of TMIMT’s high ranking as the premier B-School in Uttar Pradesh and North India.</p>
                        <p class="about-p mb-4 text-justify">In collaboration with the industry, academia, the government, and non-governmental organisations, TMIMT supports sustainable business models that meet the demands of all the diverse stakeholders in society as a whole. The college is a hub of multifaceted academic research and consultancy to equip students with crucial skills and professional ethics needed to succeed in an increasingly interconnected and globalised world. The TMIMT is the only institution in the region to have membership of the International Accreditation Council for Business Education <span class="highlight">(<a href="https://iacbe.org/accreditation/member-status-information/results/" target="_blank">IACBE</a>)</span>, which ensures that it adheres to the highest standards of quality and follows best practices in business education.</p>
                        <p class="about-p mb-4 text-justify">Teerthanker Mahaveer Institute of Management and Technology (TMIMT) gives you an edge by focusing on your practical experiences, boosting your self-confidence, enhancing your earning potential and directing you to an ideal destination. Bring out the best in you by enrolling in the Best Private Management College in Uttar Pradesh.</p>
                    </div>
                </div>
            </section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="section-box p-3">
                            <h3 class="tmu-text-primary mb-2"><span>Vision</span></h3>
                            <p class="text-justify">To be a World Leader in the integration of teaching and learning, advancement of the knowledge base through research & leadership in service and outreach.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-box p-3">
                            <h3 class="tmu-text-primary mb-2"><span>JOURNEY OF </span><span> TMIMT</span></h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sl. No.</th>
                                            <th class="text-center">Ranked by</th>
                                            <th class="text-center">Year</th>
                                            <th class="text-center">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Indian Education Network</td>
                                            <td class="text-center">2017</td>
                                            <td class="text-center">Excellence and Innovation in Entrepreneurship Education</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">All India Technical & Management Council</td>
                                            <td class="text-center">2016</td>
                                            <td class="text-center">Best Institute Industry-Academia Interface</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Business and Management - Chronicle</td>
                                            <td class="text-center">2016</td>
                                            <td class="text-center">In top 5 B-School in North India List – All India B – School Survey</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Career Option (Magazine)</td>
                                            <td class="text-center">2015</td>
                                            <td class="text-center">Outstanding Management Institute (North India)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Times of India</td>
                                            <td class="text-center">2015</td>
                                            <td class="text-center">54 (All India Rank)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">MBA by Choice</td>
                                            <td class="text-center">2014</td>
                                            <td class="text-center">A++</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection