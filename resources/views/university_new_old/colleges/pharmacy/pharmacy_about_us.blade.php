@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')

<link rel="stylesheet" href="assets/css/college_overview.css">


<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded"
            style="height: 20vh; background-color: #001055;">
            <h2 style="color: #fff;">College Overview</h2>
        </div>

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU College</span><span> of Pharmacy</span></h1>
                    <p class="about-p mb-4">The College of Pharmacy was established in year 2008. The college grooms professionals by providing diplomas, graduate, post-graduate and doctorate level programs, equipping the students with innovative techniques to resolve problems in drug industries and clinical areas.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/112.jpg')}}" alt="Learning and Teaching">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4">The College of Pharmacy is committed to excellence in pharmaceutical education, research, and practice. As the best pharmacy college in UP, we strive to shape the next generation of pharmacy professionals and equip them with innovative techniques to resolve problems in drug industries and clinical areas.</p>

                    <p class="about-p mb-4">The revised syllabus of the Pharmacy Council of India, New Delhi, is thoughtfully designed to steer the next generation of young minds towards the clinical forefront. Pharmaceutical industries and hospitals have been eagerly employing graduates from this discipline, and the future landscape is expected to present a continuous demand for such skilled professionals. Across the globe, there is a keen observation of the significant role played by duly qualified and technically adept individuals in ensuring the success of patient care and public health systems in India and abroad.</p>

                    <p class="about-p mb-4">College of Pharmacy, the best private pharmacy college in UP, envisions a world where pharmaceutical innovation, compassionate care, and academic excellence converge to create a healthier and brighter future. Our commitment to shaping exceptional pharmacy professionals who lead with knowledge, empathy, and a dedication to improving lives sets us apart as a beacon of transformation in the field of pharmacy education. Our mission is to provide a transformative educational experience that empowers our students with the knowledge, skills, and ethical principles necessary to excel as pharmacy professionals. We are dedicated to fostering a culture of lifelong learning, research, and innovation, driven by a commitment to improving global health outcomes and addressing emerging challenges in pharmaceutical sciences</p>

                    <p class="about-p mb-4">The college features the one and only Drug Information Centre in UP to provide drug-related information to healthcare professionals and consumers, resulting in medication advancement. The well-equipped laboratories, sophisticated instruments and Central Animal House with breeding facility supported with academic and industrial collaborations enable our students to gain hands-on experience in diverse pharmacy settings.Join us at the best pharmacy college, and experience a transformative educational journey that equips you with cutting-edge knowledge, hands-on training, and a supportive community that celebrates diversity and fosters innovation.</p>

                </div>
            </div>
        </section>

    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection