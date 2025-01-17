@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')




<div class="main-content">
	<div class="container">
		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading"><span> Academic </span> <span> Calendars</span></h1>
			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2024-25</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-calenders/TMU-Academic-Calendar-2024-25-R.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2023-24</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-calenders/University-Academic-Calendar-2023-24-1.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2022-23</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-calenders/Academic_Calendar_2022-23_R.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2021-22</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/academic_calendar_2021_22.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2020-21 (First Year Only)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/Academic-Calendar-2020-21-First-Year_compressed.pdf')}}">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2020-21 (All Except First Year)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/Academic-Calendar-2020-21-Except_First-Year_compressed.pdf')}}">View
							PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2019-20</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-Calendar-2019-20.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2018-19</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-Calendar-2018-19.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">Academic Calendar 2017-18</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
							href="{{asset('assets/pdf/academic_calendars/University-Academic-Calendar-2017-18.pdf')}}">View PDF</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




@endsection