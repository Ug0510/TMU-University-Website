@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')


<div class="main-content">
	<div class="container">
		<h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> Syllabus </span><span> </span></h1>
		<div class="card">
			<div class="form-widget card-body" data-alert-type="inline">
				<div class="form-result"></div>
				<form id="form-cleaning" name="form-cleaning" action="include/form.php" method="post"
					class="row form-cleaning mt-2">
					<div class="form-process">
						<div class="form-cleaning-loader css3-spinner" style="position: absolute;">
							<div class="css3-spinner-double-bounce1"></div>
							<div class="css3-spinner-double-bounce2"></div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="input-group form-group">
							<select class="required form-select" name="" id="">
								<option value="167">B.Tech. (CSE) (Computer Sciences and Engineering)</option>
								<option value="70">B.Tech. (CSE) Specialization in ArtificialIntelligence, Machine Learning &Deep Learning</option>
								<option value="180">B.Tech.(CSE)-Cloud Technology & InformationSecurity (CTIS)(In Collaboration with i-Nurture) </option>
								<option value="179">B.Tech. (CSE)-Data Science (In Collaboration with i-Nurture) </option>
								<option value="181">B.Tech.(CSE)-Cyber Security (In Collaboration with i-Nurture) </option>
								<option value="185">B.Tech.(CSE)-specialisation in Artificial Intelligence (In Collaboration with i-Nurture) </option>
								<option value="182">B.Tech.(CSE)-Application Development usingCloud & Analytics Platform (In Collaboration with IBM) </option>
								<option value="183">B.Tech.(CSE)-Data Science (In Collaboration with TCS iON)</option>
								<option value="67">BCA (Bachelor of Computer Applications)</option>
								<option value="171">BCA-Mobile Applications & WebTechnologies (MAWT)(in collaboration with i-Nurture) </option>
								<option value="184">BCA- Cloud Technology & InformationSecurity (CTIS)(in collaboration with i-Nurture) </option>
								<option value="169">BCA (Hons.) with Research (From Session 2023-24 Onwards)</option>
								<option value="68">B.Sc. (Animation)</option>
								<option value="69">B.Sc.(Computer Science)</option>
								<option value="99">B.Sc. (Hons.) Compute Science with Research (From Session 2023-24 Onwards)</option>
								<option value="72">M.Tech. (Computer Sciences and Engineering)</option>
								<option value="71">MCA (Master of Computer Applications)-Software Development</option>
								<option value="186">MCA (Master of Computer Applications)-Machine Learning</option>
								<option value="187">MCA (Master of Computer Applications)-Network Technologies</option>
								<option value="188">MCA (Master of Computer Applications)-Data Science & Analytics</option>
								<option value="189">MCA (Master of Computer Applications)-Advance Technologies</option>
								<option value="112">M.Sc.-Artificial Intelligence (From Session 2023-24 Onwards)</option>
								<option value="190">M.Sc.- Data Science (From Session 2023-24 Onwards)</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="input-group form-group">
							<select class="required form-select" name="" id="">
								<option value="2023-24">2023-24</option>
								<option value="2022-23">2022-23</option>
								<option value="2021-22">2021-22</option>
								<option value="2020-21">2020-21</option>
								<option value="2019-20">2019-20</option>
								<option value="2018-19">2018-19</option>
								<option value="2017-18">2017-18</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="container d-none d-sm-block">
							<div style="text-align:center">
								<iframe src="{{asset('/assets/pdf/BTECH-001_2023-24.pdf')}}" frameborder="0"
									height="700px" width="100%"></iframe>
							</div>
						</div>
						<div class="container d-block d-sm-none mb-3">
							<div style="text-align:center" class="mt-sm-5">
								<a href="{{asset('/assets/pdf/BTECH-001_2023-24.pdf')}}"
									class="tmu-btn btn-4" download>Download PDF</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection