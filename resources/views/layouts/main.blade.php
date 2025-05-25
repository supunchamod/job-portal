<!doctype html>
<html lang="en">
	
<!-- Mirrored from shreethemes.net/jobstock-landing-2.3/jobstock/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 May 2025 15:53:05 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
		
        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <!-- Colors CSS -->
        <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
		<!-- SweetAlert2 -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


		
    </head>
	
    <body class="green-theme">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

@include('layouts.header')

@yield('content')

@include('layouts.footer')

</div>
    <!-- end page-wrapper -->
<!-- Log In Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                    <div class="modal-content" id="loginmodal">
                        <button type="button" class="mod-close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-header d-flex align-items-center">
                            <div class="mdl-thumb">
                                <img src="{{ asset('assets/img/ico.png') }}" class="img-fluid" width="70" alt="Logo">
                            </div>
                            <div class="mdl-title ms-3">
                                <h4 class="modal-header-title">Hello, Again</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="modal-login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-floating mb-4">
                                        <input 
                                            type="email" 
                                            name="email" 
                                            class="form-control @error('email') is-invalid @enderror" 
                                            id="email" 
                                            placeholder="name@example.com" 
                                            value="{{ old('email') }}" 
                                            required 
                                            autofocus
                                        >
                                        <label for="email">Email Address</label>
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input 
                                            type="password" 
                                            name="password" 
                                            class="form-control @error('password') is-invalid @enderror" 
                                            id="password" 
                                            placeholder="Password" 
                                            required
                                        >
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                    </div>

                                    <div class="modal-flex-item mb-3 d-flex justify-content-between align-items-center">
                                        <div class="modal-flex-first form-check">
                                            <input 
                                                class="form-check-input" 
                                                type="checkbox" 
                                                id="remember" 
                                                name="remember" 
                                                {{ old('remember') ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                        <div class="modal-flex-last">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="social-login">
                                <ul class="list-unstyled d-flex gap-2">
                                    <li>
                                        <a href="JavaScript:Void(0);" class="btn connect-fb">
                                            <i class="fa-brands fa-facebook"></i> Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:Void(0);" class="btn connect-google">
                                            <i class="fa-brands fa-google"></i> Google+
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p>Don't have an account yet?
                                <a href="{{ route('register') }}" class="text-primary font--bold ms-1">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

            <!-- Script to show modal on validation errors -->
            @if($errors->any() && session()->get('_old_input._token'))
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var loginModal = new bootstrap.Modal(document.getElementById('login'));
                    loginModal.show();
                });
            </script>
            @endif

			
			<!-- Filter Modal -->
			<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered filter-popup" role="document">
					<div class="modal-content" id="filtermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<h4 class="modal-header-sub-title">Start Your Filter</h4>
						</div>
						<div class="modal-body p-0">
							<div class="filter-content">
								<div class="full-tabs-group">
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Job Match Score</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msix">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msix">6.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msixfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msixfive">6.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mseven">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mseven">7.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="msevenfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="msevenfive">7.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="meight">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meight">8.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="meightfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="meightfive">8.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mnine">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mnine">9.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mninefive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mninefive">9.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="mten">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="mten">10</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Job Value Score</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsix">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsix">6.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsixfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsixfive">6.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vseven">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vseven">7.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vsevenfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vsevenfive">7.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="veight">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veight">8.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="veightfive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="veightfive">8.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vnine">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vnine">9.0</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vninefive">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vninefive">9.5</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="vten">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="vten">10</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Place Of Work</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="anywhere" checked>
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="anywhere">Anywhere</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="onsite">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="onsite">On Site</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="remote">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="remote">Fully Remote</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Type Of Contract</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="employee1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="employee1">Employee</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="frelancers1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="frelancers1">Freelancer</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="contractor1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="contractor1">Contractor</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="internship1">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="internship1">Internship</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Type Of Employment</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="d-flex flex-wrap">
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="fulltime">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="fulltime">Full Time</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="parttime">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="parttime">Part Time</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="freelance2" checked>
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="freelance2">Freelance</label>
												</div>
												<div class="sing-btn-groups">
													<input type="checkbox" class="btn-check" id="internship2">
													<label class="btn btn-md btn-outline-primary font--bold rounded-5" for="internship2">Internship</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Radius In Miles</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="rg-slider">
												 <input type="text" class="js-range-slider" name="my_range" value="">
											</div>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Explore Top Categories</h5></div>
										
										<div class="single-tabs-group-content">
											<ul class="row p-0 m-0">
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-1" class="form-check-input" name="s-1" type="checkbox">
														<label for="s-1" class="form-check-label">IT Computers</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-2" class="form-check-input" name="s-2" type="checkbox">
														<label for="s-2" class="form-check-label">Web Design</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-3" class="form-check-input" name="s-3" type="checkbox">
														<label for="s-3" class="form-check-label">Web development</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-4" class="form-check-input" name="s-4" type="checkbox">
														<label for="s-4" class="form-check-label">SEO Services</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-5" class="form-check-input" name="s-5" type="checkbox">
														<label for="s-5" class="form-check-label">Financial Service</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-6" class="form-check-input" name="s-6" type="checkbox">
														<label for="s-6" class="form-check-label">Art, Design, Media</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-7" class="form-check-input" name="s-7" type="checkbox">
														<label for="s-7" class="form-check-label">Coach & Education</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-8" class="form-check-input" name="s-8" type="checkbox">
														<label for="s-8" class="form-check-label">Apps Developements</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-9" class="form-check-input" name="s-9" type="checkbox">
														<label for="s-9" class="form-check-label">IOS Development</label>
													</div>
												</li>
												<li class="col-lg-6 col-md-6 p-0">
													<div class="form-check form-check-inline">
														<input id="s-10" class="form-check-input" name="s-10" type="checkbox">
														<label for="s-10" class="form-check-label">Android Development</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									
									<div class="single-tabs-group">
										<div class="single-tabs-group-header"><h5>Keywords</h5></div>
										
										<div class="single-tabs-group-content">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Design, Java, Python, WordPress etc...">
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="filt-buttons-updates">
								<button type="button" class="btn btn-dark">Clear Filter</button>
								<button type="button" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		<!-- Color Switcher -->
		<div class="style-switcher">
			<div class="css-trigger shadow"><a href="#"><i class="fa-solid fa-paintbrush"></i></a></div>
			<div>
				<ul id="themecolors" class="m-t-20">
					<li><a href="javascript:void(0)" data-skin="green-theme" class="green-theme">1</a></li>
					<li><a href="javascript:void(0)" data-skin="red-theme" class="red-theme">2</a></li>
					<li><a href="javascript:void(0)" data-skin="blue-theme" class="blue-theme">3</a></li>
					<li><a href="javascript:void(0)" data-skin="yellow-theme" class="yellow-theme">4</a></li>
					<li><a href="javascript:void(0)" data-skin="purple-theme" class="purple-theme">5</a></li>
					<li><a href="javascript:void(0)" data-skin="orange-theme" class="orange-theme">6</a></li>
					<li><a href="javascript:void(0)" data-skin="brown-theme" class="brown-theme">7</a></li>
					<li><a href="javascript:void(0)" data-skin="cadmium-theme" class="cadmium-theme">8</a></li>			
				</ul>
			</div>
		</div>
		<script>
		@if(session('success'))
			Swal.fire({
				icon: 'success',
				title: 'Success',
				text: '{{ session("success") }}',
			});
		@endif

		@if(session('error'))
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: '{{ session("error") }}',
			});
		@endif
 	</script>

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/cl-switch.js') }}"></script>

		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>

<!-- Mirrored from shreethemes.net/jobstock-landing-2.3/jobstock/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 May 2025 15:54:15 GMT -->
</html>