<script>

    document.addEventListener('DOMContentLoaded', () => {
      const searchIcon = document.getElementById('searchIcon');
      const searchModal = document.getElementById('searchModal');
      const closeModal = document.getElementById('closeModal');
      const searchInput = document.getElementById('searchInput');
      const suggestions = document.getElementById('suggestions');
  
      searchIcon.addEventListener('click', () => {
          searchModal.style.display = 'block';
          searchInput.focus();
      });
  
      closeModal.addEventListener('click', () => {
          searchModal.style.display = 'none';
      });
  
      window.addEventListener('click', (event) => {
          if (event.target == searchModal) {
              searchModal.style.display = 'none';
          }
      });
  
      
  
  
  });
  
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var activePanel = document.querySelector('.panel.active');
        if (activePanel) {
            var activeAccordion = activePanel.previousElementSibling;
            activePanel.style.display = "block";
            activeAccordion.querySelector(".icon").innerHTML = "-";
            activeAccordion.classList.add("clicked");
        }
    });
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
    $(document).ready(function() {
        let searchRequest = null; // Store the current AJAX request

        $('#searchInput').on('keyup', function() {
            let query = $(this).val();
            console.log(query);

            let suggestions = $('#suggestions');
            suggestions.empty(); // Clear suggestions immediately

            // If query length is 0, stop further processing
            if (query.length === 0) {
                suggestions.empty(); // Clear results
                return;
            }

            // Abort previous request if it's still in progress
            if (searchRequest !== null) {
                searchRequest.abort();
            }

            if (query.length > 2) {
                searchRequest = $.ajax({
                    url: '{{ route("search") }}',
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}',
                        query: query
                    },
                    dataType: 'json',
                    success: function(response) {
                        // Check if input value still matches query before showing results
                        if ($('#searchInput').val() !== query) {
                            return;
                        }

                        if (response.error) {
                            console.error('Search Error:', response.error);
                        } else {
                            $.each(response, function(index, data) {
                                let url = 'https://tmuhospital.com/';
                                let final_slug;
                                let slug1 = data.slug1;
                                let slug2 = data.slug2;
                                let slug3 = data.slug3;
                                let slug4 = data.slug4;
                                let slug5 = data.slug5;

                                function isValidSlug(slug) {
                                    return slug !== undefined && slug !== null && slug !== '' && slug !== 'na';
                                }

                                if (isValidSlug(slug1) && !isValidSlug(slug2)) {
                                    final_slug = `${url}${slug1}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && !isValidSlug(slug3)) {
                                    final_slug = `${url}${slug1}/${slug2}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && isValidSlug(slug3) && !isValidSlug(slug4)) {
                                    final_slug = `${url}${slug1}/${slug2}/${slug3}`;
                                } else if (isValidSlug(slug1) && isValidSlug(slug2) && isValidSlug(slug3) && isValidSlug(slug4) && !isValidSlug(slug5)) {
                                    final_slug = `${url}${slug1}/${slug2}/${slug3}/${slug4}`;
                                }

                                if (final_slug) {
                                    if ($.trim(data.disp_attribute_1) !== '' && $.trim(data.disp_attribute_2) !== '') {
                                        suggestions.append(`<a href="${final_slug}"><div style="font-weight:600">${data.disp_attribute_1}<br><span style="font-size:12px;font-weight:400">${data.disp_attribute_2}</span></div></a>`);
                                    }
                                }
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        if (status !== 'abort') {
                            console.error('AJAX Error:', error);
                        }
                    }
                });
            }
        });
    });
</script>
<footer id="footer" class="dark" style="background-color: #001055;margin-top:0 !important;">
	<div class="container">
		<!-- Footer Widgets
										============================================= -->
		<div class="footer-widgets-wrap">

			<div class="row col-mb-50">
				<div class="col-md-12">
					<div class="widget">

						<!-- <img src="https://www.smart2020.tmu.ac.in/image/tmu-logo.png" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A; height: 120px;">
						
														<p>Teerthanker Mahaveer University, the Best Private University in UP, established by an 'Act' (No. 30) of 2008 of the Government of Uttar Pradesh, approved by the University Grants Commission (UGC) in 2008, vide letter No. F. 9-31/2008 (CPP-1) dated October 2008. <br> On National Highway 9, 144 Km from New Delhi, TMU stands committed to the ideals of Lord Mahaveer - Right Philosophy, Right Knowledge and Right Conduct in all spheres of activity and aspires to be the ultimate destination for world-class education.</p> -->

						<div class="line" style="margin: 30px 0;"></div>

						<div class="row col-mb-30">


							<div class="col-lg-6 widget_links">
								<div class="widget">

									<img style="width: 40%;" alt="Teertahnker mahaveer university logo with name" class="img-fluid" src="{{asset('images/logo/logo-footer.png')}}">


									<!-- <div style="background: url('') no-repeat center center; background-size: 100%;">
																		<address>
																			<strong>Delhi Office</strong>
																		</address>
																		<abbr title="Address"><strong>Address:</strong></abbr> 1004-1005-1006, 10th Floor, <br> Mercantile House, <br> 15 Kasturba Gandhi Marg, <br> New Delhi-110001<br>
																		<abbr title="contactus"><strong>Contact Us:</strong></abbr> 1800-270-1490<br>
																		<abbr title="Email Address"><strong>Email:</strong></abbr> admissions@tmu.ac.in
																	</div> -->
									<br>
									<div style="margin-top:30px;">
										<address>
											<strong style="font-weight: 300;">TMU stands committed to the ideals of Lord Mahaveer - Right
												Philosophy, Right Knowledge and Right Conduct in all spheres of
												activity and aspires to be the ultimate destination for
												world-class education.</strong>

										</address>
										<p style="margin-bottom: 0px;"><strong style="font-size: 16px; font-weight: 600; color:#FF7900;">Address: </strong> N.H.-9, Delhi
											Road, Moradabad - 244001, <br> Uttar Pradesh</p>
										<p style="margin-bottom: 0px;"><strong style="font-size: 16px; font-weight: 600; color:#FF7900;">Contact Us: </strong></abbr>
											1800-270-1490</p>
										<p style="margin-bottom: 0px;"><strong style="font-size: 16px; font-weight: 600; color:#FF7900;">Email: </strong></abbr>
											university@tmu.ac.in</p>
									</div>
								</div>
							</div>

							<div class="col-6 col-lg-2 widget_links">
								<h4>Apply Now</h4>
								<ul>
									<li><a href="{{route('application.form')}}">Application Form</a></li>
									<!--<li><a href="#">Entrance Test</a></li>-->
									<li><a href="{{route('tmu.loan')}}">Education Loan</a></li>
									<li><a href="{{route('tmu.scholarship')}}">Scholarships</a></li>
									<li><a href="{{route('how.to.apply')}}">How to Apply</a></li>
							
									<li><a href="{{route('campus.view')}}">Campus View</a></li>
									<li><a href="{{route('tmu.faqs')}}">FAQs</a></li>

								</ul>
							</div>

							<!--<div class="col-6 col-lg-2 widget_links">-->
							<!--	<h4>Programmes</h4>-->
							<!--	<ul>-->
							<!--		<li><a href="#">Under Graduate</a></li>-->
							<!--		<li><a href="#">Post Graduate</a></li>-->
							<!--		<li><a href="#">Doctratre Programs</a></li>-->
							<!--		<li><a href="#">Diploma Programs</a></li>-->
							<!--	</ul>-->
							<!--</div>-->

							<div class="col-6 col-lg-2 widget_links">
								<h4>Student Life</h4>
								<ul>
									<li><a href="{{route('campus.view')}}">University Campus</a></li>
									<li><a href="{{route('faculty.accomodation')}}">Faculty Accommodation</a></li>
									<li><a href="{{route('guest.house')}}">Guest House</a></li>
									<li><a href="{{route('banking.facility')}}">Banking Facility</a></li>
									<li><a href="{{route('sports')}}">Sports</a></li>
									<li><a href="{{route('auditorium')}}">Auditorium</a></li>
									<li><a href="{{route('jinalaya')}}">Mahaveer Ji Jainalya</a></li>
									<li><a href="{{route('yoga.and.meditation')}}">Yoga & Meditation</a></li>
									<li><a href="https://hospital.tmu.ac.in/" target="_blank">Hospital</a></li>
									<li><a href="{{route('library')}}">Library</a></li>
											<li><a href="{{route('music.and.dance.room')}}">Music & Dance</a></li>
													<li><a href="{{route('tmu.transport')}}">Transport</a></li>

								</ul>
							</div>

							<div class="col-6 col-lg-2 widget_links">
								<h4>Useful Links</h4>
								<ul>
									<li><a href="{{route('tmu.convocation')}}">Convocation</a></li>
						
									<li><a href="{{route('all_news')}}">News</a></li>
									<li><a href="{{route('tmu.careers')}}">Join TMU</a></li> <!--- CAREERS -->
									<!-- <li><a href="#">About City</a></li> -->
									<li><a href="{{route('iqac.about')}}">IQAC</a></li>
									<li><a href="http://portal.tmu.ac.in/">ERP Login</a></li>
									<li><a href="{{route('all_blogs')}}">Blogs</a></li>
									<li><a href="#">Sitemap</a></li>
									<li><a href="{{route('iqac.student.feedback')}}">Feedback</a></li>
									<li><a href="{{route('tmu.disclaimer')}}">Disclaimer</a></li>
									<li><a href="{{route('tmu.privacy.policy')}}">Privacy Policy</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="widget">

						<div class="row col-mb-30">

						</div>

					</div>


				</div>
			</div><!-- .footer-widgets-wrap end -->
		</div>

	</div>
	<!-- Copyrights
									============================================= -->
	<div id="copyrights">
		<div class="container">

			<div class="row justify-content-between col-mb-30">
				<div class="col-12 col-lg-auto text-center text-lg-start">
					<div class="copyrights-menu copyright-links">
						<a href="{{route('university.anti.ragging.committee')}}">Anti Ragging</a>/<a href="{{route('nirf.home')}}">NIRF</a>/<a href="{{route('naac.home')}}">NAAC</a>/<a href="{{route('ctld.home')}}">CTLD</a>/<a href="{{route('crc.home')}}">Placement</a>/<a href="{{route('iqac.about')}}">IQAC</a>
						</div>
					Copyrights &copy; 2024 All Rights Reserved by Teerthanker Mahaveer University, Moradabad.
				</div>

				<div class="col-md-6 text-center text-md-end pb-5 pb-md-2 mb-5 mb-md-0">
					<div class="d-flex justify-content-center justify-content-md-end mb-2">
						<a target="_blank" href="https://www.facebook.com/tmumbd/" class="social-icon border-transparent si-small h-bg-facebook">
							<i class="fa-brands fa-facebook-f"></i>
							<i class="fa-brands fa-facebook-f"></i>
						</a>



						<a target="_blank" href="https://x.com/Tmumbd" class="social-icon border-transparent si-small h-bg-twitter">
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-twitter"></i>
						</a>

						<a target="_blank" href="https://www.linkedin.com/school/tmuuni/" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
							<i class="fa-brands fa-linkedin"></i>
							<i class="fa-brands fa-linkedin"></i>
						</a>

				

						<a target="_blank" href="https://www.youtube.com/channel/UCSdJPj_8DCXkGY6SOmo_0ow" class="social-icon border-transparent si-small me-0 h-bg-youtube">
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-youtube"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div><!-- #copyrights end -->
</footer><!-- #footer end -->





</div><!-- #wrapper end -->

<!-- Go To Top============================================= -->
<div id="gotoTop" class="uil uil-angle-up"></div>





<!-- JavaScripts
							============================================= -->


<script src="{{asset('js/functions.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/swipe-content.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- <script src="{{asset('assets/js/owl_slider.js')}}"></script> --}}
<script src="{{asset('js/components/bs-datatable.js')}}"></script>

<script src="{{asset('assets/js/college_menubar.js')}}"></script>




<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</div>


</body>

</html>