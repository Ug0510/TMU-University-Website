@extends('layouts.university.main')
@section('content')


<!-- Font Imports -->
<link rel="stylesheet" href="https://use.typekit.net/gmv6nzn.css">

<!-- Core Style -->
<link rel="stylesheet" href="{{asset('/style.css')}}">

<!-- Font Icons -->
<link rel="stylesheet" href="{{asset('/css/font-icons.css')}}">

<!-- Plugins/Components CSS -->
<link rel="stylesheet" href="{{asset('/css/swiper.css')}}">

<!-- Niche Demos -->
<link rel="stylesheet" href="{{asset('/demos/speaker/speaker.css')}}">


<style>
	.yt-frame {
		position: relative;
		width: 57.75vw;
		height: 30.9vw;
		background-color: black;
		overflow: hidden;
		cursor: pointer;
	}

	.yt-frame::after {
		content: "";
		width: 70px;
		height: 70px;
		background-image: url('https://cdn-icons-png.flaticon.com/128/1384/1384060.png');
		background-size: cover;
		/* Adjust as needed */
		background-position: center;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.yt-frame.disabled::after {
		display: none;
	}

	.event-btn {
		position: relative;
	}

	.event-box.active {
		border: 6px solid #fe8d00;
		border-radius: 0px;
	}

	.event-box {
		padding: 0;
		border: 6px solid transparent;
	}

	.event-box.active::before {

		content: '';
		display: none;
		position: absolute;
		z-index: 0;
		width: 0px;
		/* Adjusted width */
		height: 0px;
		/* Adjusted height */
		transform: translate(-80%, 200%) rotate(45deg);
		background-color: #fe8d00;
		border-top: 10px solid transparent;
		border-bottom: 10px solid transparent;
		border-right: 20px solid #fe8d00;


	}

	#m-event-box {
		overflow-x: auto;
	}

	.event-box {
		min-width: 150px;
	}

	.mbox-card {
		height: 200px;
		background-color: grey;
		margin: 20px 0px;
	}

	@media screen and (max-width:1024px) {
		.event-box.active {
			border: 3px solid #fe8d00;
		}

		.event-box {
			position: relative !important;
		}

		.event-box.active::before {
			display: block;
			transform: translate(-50%, -60%) rotate(45deg);
			bottom: auto;
			top: 0%;
			left: 50%;
			border-top: 5px solid transparent;
			border-bottom: 5px solid transparent;
			border-right: 10px solid #fe8d00;
		}

		.yt-frame {
			width: 80vw;
			height: 44vw;
			background-color: red;
			overflow: hidden;
		}
	}

	@media screen and (max-width:480px) {
		.event-box {
			min-width: 20vw;
			/* padding:5px; */
		}

		#m-event-box {
			overflow-x: scroll;
		}

		.event-box.active::before {
			transform: translate(-50%, 50%) rotate(45deg);
			bottom: 0%;
			top: auto;
		}
	}
</style>

<!-- CSS FOR CONVOCATION CARD -->
<style>
	.entry-title {
		height: 60px;
		/* Adjust the height based on your design */
		overflow: hidden;
		/* Hide any overflowing text */
		display: -webkit-box;
		-webkit-line-clamp: 2;
		/* Limits to 2 lines */
		-webkit-box-orient: vertical;
		text-overflow: ellipsis;
		/* Adds "..." to cut-off text */
		white-space: normal;
		/* Ensures proper text wrapping */
	}

	.big-card {
		width: 70vw;
		box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.3);
		height: auto;
		margin: auto;
		position: relative;
		padding-bottom: 50px;
	}

	.big-card-heading {
		width: 95%;
		height: 4rem;
		position: absolute;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: white;
		border: 2px solid #0010551e;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.big-card-heading p {
		color: #001055;
		margin-bottom: 0;
		text-transform: uppercase;
		font-weight: 400;
	}

	.big-card h4 {
		font-weight: 400;
	}

	.big-card .min-text {
		color: #fe8d00;
		font-size: 12px;
		margin: 0;
		padding: 0;
		width: fit-content;
	}

	.big-card .main-text {
		font-size: 18px;
		text-align: justify;
	}

	.m-custom-card {
		height: 150px;
		box-shadow: 4px 4px 10px 6px rgba(0, 0, 0, 0.07);
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* background: linear-gradient(115deg, rgba(251, 215, 134, 0.3), rgba(198, 255, 221, 0.3)); */
		background-color: rgba(205, 205, 205, 0.2);
		/* border:1px solid rgba(0, 0, 0, 0.01);  */
		transition: 0.2s all;
	}

	.m-custom-card img {
		width: 20%;
	}

	.m-custom-card span {
		text-transform: uppercase;
		font-size: 12px;
		margin-top: 20px;
		width: fit-content;
		font-weight: 500;
		text-align: center;
	}

	.m-custom-card:hover {
		scale: 0.99;
		box-shadow: 1px 1px 4px 2px rgba(0, 0, 0, 0.05);
		cursor: pointer;
	}

	@media screen and (max-width:992px) {
		.big-card {
			width: 90vw;
		}
	}

	@media screen and (max-width:480px) {
		.big-card {
			width: 90vw;
		}

		.big-card-heading {
			width: 85%;
		}

		.big-card-heading p {
			font-size: 19px;
		}

		.big-card .main-text {
			font-size: 14px;
		}

		.m-custom-card span {
			font-size: 15px;
		}
	}
</style>

<!-- Carousel CSS Code  -->
<style>
	#owl-demo .owl-nav button {
		bottom: 0;
		top: auto;
		left: 0;
		right: auto;
	}

	#owl-demo .owl-nav button.owl-next {
		transform: translateX(110%);
	}

	#owl-demo .owl-nav button span {
		font-size: 2rem;
	}

	@media screen and (max-width:480px) {
		#owl-demo .owl-item {
			box-shadow: 4px 4px 10px 4px rgba(0, 0, 0, 0.05);
		}

	}
</style>

<style>
	.tmu-text-primary {
		font-size: 48px;
	}

	.ceremony-title {
		font-size: 32px !important;
	}

	@media screen and (max-width:991px) {
		.tmu-text-primary {
			font-size: 36px;
		}
	}

	@media screen and (max-width:480px) {
		.tmu-text-primary {
			font-size: 30px;
		}

		.ceremony-title {
			font-size: 18px !important;
		}

		.news-title {
			text-align: center;
		}
	}
</style>

<div class="section py-0 mt-0 slider-element swiper_wrapper bg-dark dark customjs noice-effect mb-0">


	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('/assets/img/banner/convocation/banner1.webp')}}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('/assets/img/banner/convocation/banner2.webp')}}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('/assets/img/banner/convocation/banner3.webp')}}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('/assets/img/banner/convocation/banner4.webp')}}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('/assets/img/banner/convocation/banner5.webp')}}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{asset('/assets/img/banner/convocation/banner6.webp')}}" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

<section class="pt-3 mb-3 ">
	<div class="container-fluid px-2 px-lg-5 pt-5">
		<div class="big-card pb-3">
			<div class="big-card-heading positive-relative">
				<h1 class="tmu-text-primary pb-0 pt-4 text-uppercase ceremony-title fw-bold"><span>Convocation </span> <span> Ceremony </span></h1>
				<!-- <img src="./assets/image/corner-handle.png" class="w-100" alt="" style="max-width:40px; position:absolute; top:2px; right:2px; transform:scale(1,-1)"> -->
			</div>
			<div class="pt-5 px-4 px-md-5 text-justify">
				<h4 style="line-height: 1.6; ">
					The Convocation Ceremony at Teerthanker Mahaveer University is a distinguished event where we gather to honour the academic accomplishments of our graduates. This significant occasion marks the culmination of years of hard work, dedication, and academic excellence. During the ceremony, we confer degrees, recognise outstanding achievements, and provide a platform for esteemed speakers to offer guidance to our graduating class. It is a momentous occasion that symbolises the transition of our students into alumni. </h4>
				<!-- <p class="min-text d-block mx-auto">(Click icons below to fill forms)</p> -->


			</div>
		</div>
	</div>
</section>


<!-- Youtube videos section Desktop View-->
<section class="d-none d-md-block">
	<div class="container-fluid">
		<div class="row">
			<h2 class="tmu-text-primary text-uppercase text-center fw-bold text-center d-block mx-auto pt-4 pb-1 mb-0 text-uppercase ">
				<span>
					Historic
				</span>

				<span>
					Convocations
				</span>
			</h2>
		</div>
		<div class="row d-flex align-items-center">
			<div class="col-12">
				<div class="row">
					<div class="col-12 d-flex justify-content-center align-items-center">
						<div class="yt-frame shadow my-4" id="hr-yt-frame" onclick="playHrVideo(this,0)">
							<img src="{{asset('/assets/img/department/convocation/thumb/1.jpeg')}}" alt="" class="w-100 event-btn" id="hrframevideo1">
						</div>
					</div>
					<div class="col-12">
						<div class="d-flex position-relative p-1" id="m-event-box">
							<div class="m-1 m-sm-3 event-box  active" onclick="toggleActivate(this,1)">
								<img src="{{asset('/assets/img/department/convocation/thumb/1.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,1)">
								<img src="{{asset('/assets/img/department/convocation/thumb/2.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,2)">
								<img src="{{asset('/assets/img/department/convocation/thumb/3.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,3)">
								<img src="{{asset('/assets/img/department/convocation/thumb/4.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,4)">
								<img src="{{asset('/assets/img/department/convocation/thumb/5.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,5)">
								<img src="{{asset('/assets/img/department/convocation/thumb/6.jpeg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this,6)">
								<img src="{{asset('/assets/img/department/convocation/thumb/7.jpg')}}" alt="" class="w-100 shadow event-btn">
							</div>
							<!-- <div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this)">
								<img src="./assets/image/placement/P.K. RAJPUT.webp" alt="" class="w-100 shadow event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box " onclick="toggleActivate(this)">
								<img src="./assets/image/placement/P.K. RAJPUT.webp" alt="" class="w-100 shadow event-btn">
							</div> -->

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Youtube videos section Mobile and Tablet View -->
<section class="d-block d-md-none">

	<div class="container-fluid">
		<div class="row">
			<h2 class="tmu-text-primary text-uppercase text-center fw-bold text-center d-block mx-auto pt-4 pb-1 mb-0 text-uppercase">
				<span>
					Historic
				</span>
				<span>
					Convocations
				</span>
			</h2>
		</div>
		<div class="row d-flex align-items-center">
			<div class="col-12">
				<div class="row">
					<div class="col-12">
						<div class="d-flex position-relative p-1" id="m-event-box">
							<div class="m-1 m-sm-3 event-box active" onclick="toggleActivate(this,0)">
								<img src="{{asset('/assets/img/department/convocation/thumb/1.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,1)">
								<img src="{{asset('/assets/img/department/convocation/thumb/2.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,2)">
								<img src="{{asset('/assets/img/department/convocation/thumb/3.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,3)">
								<img src="{{asset('/assets/img/department/convocation/thumb/4.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,4)">
								<img src="{{asset('/assets/img/department/convocation/thumb/5.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,5)">
								<img src="{{asset('/assets/img/department/convocation/thumb/6.jpeg')}}" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this,6)">
								<img src="{{asset('/assets/img/department/convocation/thumb/7.jpg')}}" alt="" class="w-100 event-btn">
							</div>
							<!-- <div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this)">
								<img src="./assets/image/placement/P.K. RAJPUT.webp" alt="" class="w-100 event-btn">
							</div>
							<div class="m-1 m-sm-3 event-box" onclick="toggleActivate(this)">
								<img src="./assets/image/placement/P.K. RAJPUT.webp" alt="" class="w-100 event-btn">
							</div> -->

						</div>
					</div>
					<div class="col-12 d-flex justify-content-center align-items-center">
						<div class="yt-frame " id="hr-yt-frame2" onclick="playHrVideo(this)">
							<img src="{{asset('/assets/img/department/convocation/thumb/1.jpeg')}}" alt="" class="w-100 event-btn" id="hrframevideo1">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<script>
	function toggleActivate(e, id) {
		const imgSrc = e.querySelector('img').getAttribute('src');
		const eventParent = e.parentNode;
		// Remove 'active' class from all elements with the class 'event-box'
		const allEventBoxes = eventParent.querySelectorAll('.event-box');
		allEventBoxes.forEach(function(box) {
			box.classList.remove('active');
		});

		// Add 'active' class to the clicked element
		e.classList.add('active');

		boxId = 'hr-yt-frame'

		if (innerWidth < 480) {
			boxId = "hr-yt-frame2"
		}
		document.getElementById(boxId).innerHTML = '<img alt="" class="w-100 event-btn"/>'
		document.getElementById(boxId).querySelector('img').setAttribute('src', imgSrc);
		document.getElementById(boxId).querySelector('img').setAttribute('img-id', `${id}`);
		document.getElementById(boxId).classList.remove('disabled');

		console.log(document.getElementById(boxId));
	}
</script>

<script>
	//Function to play Hr conclave video after clicking on banner 
	function playHrVideo(e) {

		let id = e.querySelector('img').getAttribute('img-id');
		console.log(id);
		let frameDiv;

		switch (id) {
			case '1':
				frameDiv = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/H15nsymKUXs?si=2EIsIa0ElJNk1P_u&controls=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
				break;
			case '2':
				frameDiv = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/_UZ4TQFhlAc?si=bKii0LxoNDLoKqaO?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
				break;
			case '3':
				frameDiv = `<iframe width="100" height="100" src="https://www.youtube.com/embed/_UZ4TQFhlAc?si=_FftLxcKUrdwQqh5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
				break;
			case '4':
				frameDiv = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/jJ9v__La3ps?autoplay=1" allow='autoplay' title="Mega HR Conclave | Mr. Krishna Kumar, Head HR, Maruti Suzuki India | TMU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
				break;
			case '5':
				frameDiv = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/zSBp1I82jZY?autoplay=1" allow='autoplay' title="Dr. P.K Rajput, Vertical Head, Cadila Pharmaceuticals Ltd. | Mega HR Conclave | TMU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;
				break;
			case '6':
				frameDiv = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GLDZHn8SEY8?si=QUxfiD8bDiSbAPCz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>`;
				break;
		}

		const iFrame = document.getElementById('hr-yt-frame');

		iFrame.innerHTML = frameDiv;
		iFrame.classList.add('disabled');
	}
</script>

<div class="section bg-transparent my-0 mt-5 pt-2 pb-4 py-lg-5">
	<div class="container">

		<div class="row justify-content-between col-mb-50">
			<div class="col-lg-4">
				<!-- <h4 class="color mb-2 fw-normal">Convocation <span style="color:#001055;">News</span></h4> -->
				<!-- <h2 class="d-none d-md-block display-5 font-body fw-medium mt-4 mb-1" style="color:#001055">Convocation <span class="d-inline-block d-md-block" style="color:#fe8d00;">News</span></h2>
				<h2 style="font-size: 2.4vmax; color:#fe8d00; font-weight: 700;" class="text-center d-block d-md-none mx-auto pt-4 pb-1 mb-0 text-uppercase"><span style="color:#001055;">Convocation</span> News</h2> -->

				<h2 class="tmu-text-primary fw-bold news-title"><span>CONVOCATION</span> <span>NEWS</span></h2>

			</div>

			<div class="col-lg-8">
				<div class="dotted-bg" style="--cnvs-dotted-opacity: .5; --cnvs-dotted-top: -10px; --cnvs-dotted-size: 150px; "></div>
				<div id="owl-demo" class="owl-carousel ">

					@foreach($convocation_newses as $convocation_news)

					<div class="item entry mx-2">
						<div class="entry-image">
							<img src="{{asset($convocation_news->ei1_path)}}" alt="...">
						</div>
						<div class="entry-meta mb-2 fw-normal">
							<ul>
								<li> <b> <a href="#">{{ \Carbon\Carbon::parse($convocation_news->event_date)->format('F d, Y') }}</a> </b> </li>
							</ul>
						</div>
						<div class="entry-title title-sm mb-3">
							<h3 class="text-transform-none ls-0 fw-medium font-body"><a href="#">{{ $convocation_news->event_title }}</a></h3>
						</div>
						<a href="{{ url('news/' . $convocation_news->n_slug) }}" class="read-more stretched-link h-color h-op-08">Read More <i class="bi-arrow-up-right transform-ts"></i></a>
					</div>
					@endforeach


				</div>

				

			</div>
		</div>
	</div>
</div>
</div>




<script>
	window.addEventListener('pluginSwiperReady', () => {
		var swiperThumb = new Swiper(".swiper-thumb", {
			spaceBetween: 10,
			slidesPerView: 4,
			allowTouchMove: true,
			freeMode: true,
			watchSlidesProgress: true,
		});
		var swiperContainer = new Swiper(".swiper-container", {
			spaceBetween: 10,
			allowTouchMove: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			thumbs: {
				swiper: swiperThumb,
			},
		});

		//GotoTop
		var cssPosGotoTop = getComputedStyle(document.querySelector('#gotoTop'));
		var canvasPageScrollPos = (cssPosGotoTop.getPropertyValue('--cnvs-gotoTop-scroll'));
		var canvasbodyHeight = document.body.offsetHeight;

		window.addEventListener('scroll', function() {
			var scrollPercent = (jQuery(window).scrollTop()) / ((jQuery(document).height()) - (jQuery(window).height()));
			var getPercent = Math.round(scrollPercent * 100);

			document.querySelector('#gotoTop').style.setProperty('--cnvs-gotoTop-scroll', (260 - (2.6 * getPercent)));
		});
	});

	window.onload = () => {
		const container = document.getElementById("speakerModal");
		const modal = new bootstrap.Modal(container);
		modal.show();
	};
</script>


@endsection