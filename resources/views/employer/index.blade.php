@extends('layouts.main')
@section('content')

<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero-header" style="background:url(assets/img/slider-5.jpg) no-repeat;" data-overlay="6">
				<div class="container">

					<div class="inner-banner-text text-center">
						<h1>Discover Great Job Offer<br>With Job Stock</h1>
						<p class="fs-6">Getting a new job is never easy. Check what new jobs we have in store for you on Job Stock.</p>
					</div>
					
					<div class="full-search-2 mt-5">
						<div class="hero-search-content search-shadow colored">
							
							<div class="row classic-search-box m-0 gx-2">
									
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
									<div class="form-group briod">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Skills, Designations, Keyword">
											<i class="fa-solid fa-magnifying-glass text-primary"></i>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
										<div class="form-group briod">
											<div class="input-with-icon">
												<select class="form-control">
													<option value="1">Job Category</option>
													<option value="2">Accounting & Finance</option>
													<option value="3">Automotive Jobs</option>
													<option value="4">Business Services</option>
													<option value="5">Education Training</option>
													<option value="6">Software Application</option>
													<option value="7">Restaurant & Food</option>
													<option value="8">Healthcare</option>
													<option value="9">Transportation</option>
													<option value="10">Telecommunications</option>
												</select>
												<i class="fa-solid fa-briefcase text-primary"></i>
											</div>
										</div>
									</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
									<div class="form-group">
										<div class="input-with-icon">
											<select class="form-control">
												<option value="1">Select City</option>
												<option value="2">Huntingdon</option>
												<option value="3">Fenland</option>
												<option value="4">United State</option>
												<option value="5">United Kingdom</option>
												<option value="6">California</option>
												<option value="7">Canada</option>
												<option value="8">New York</option>
											</select>
											<i class="fa-solid fa-location-crosshairs text-primary"></i>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
									<div class="fliox-search-wiop">
										<div class="form-group me-2">
											<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-filter-search"><i class="fa-solid fa-filter"></i>Filter</a>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary full-width">Search</button>
										</div>
									</div>
								</div>
										
							</div>
							
						</div>
					</div>
						
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			
			<!-- ================= Explore Categories Start ================= -->
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Best Categories</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row gx-4 gy-4 justify-content-center">
						
                    @foreach($categories as $category)
						<!-- Single Item -->
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
							<div class="category-box">
								<div class="category-desc">
									<div class="category-icon">
										<i class="{{ $category->icon }} text-primary"></i>
										<i class="{{ $category->icon }} abs-icon"></i>
									</div>
									<div class="category-detail category-desc-text">
										<h4 class="fs-5"><a href="browse-jobs-grid.html">{{ $category->name }}</a></h4>
										<p class="block">{{ $category->active_jobs_count }} Active Jobs</p>
									</div>
								</div>
							</div>
						</div>
                    @endforeach				
					
					</div>
					
				</div>	
			</section>
			<!-- ================================= Explore Categories End =============================== -->
			
			
			
			<!-- ============================ Valuable Step Start ================================== -->
			<section class="primary-bg-dark">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center light">
								<h2>Choose What You Need</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center gx-4 gy-4">
					
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="jobstock-posted-box-y78 colored">
								<div class="jobstock-posted-body-y78">
									<div class="serv-ctr-title"><h2 class="primary-2-cl">01.</h2></div>
									<div class="serv-ctr-subtitle"><h5 class="text-light">Create An Account</h5></div>
									<div class="serv-ctr-decs"><p class="text-light opacity-75">Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers Find Place Best. Nor again is there anyone who loves.</p></div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="jobstock-posted-box-y78 colored">
								<div class="jobstock-posted-body-y78">
									<div class="serv-ctr-title"><h2 class="primary-2-cl">02.</h2></div>
									<div class="serv-ctr-subtitle"><h5 class="text-light">Search Jobs</h5></div>
									<div class="serv-ctr-decs"><p class="text-light opacity-75">Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers Find Place Best. Nor again is there anyone who loves.</p></div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="jobstock-posted-box-y78 colored">
								<div class="jobstock-posted-body-y78">
									<div class="serv-ctr-title"><h2 class="primary-2-cl">03.</h2></div>
									<div class="serv-ctr-subtitle"><h5 class="text-light">Save & Apply Jobs</h5></div>
									<div class="serv-ctr-decs"><p class="text-light opacity-75">Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers Find Place Best. Nor again is there anyone who loves.</p></div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Valuable Step End ================================== -->
			
			
			<!-- ============================ Featured Jobs Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Featured Jobs</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center gx-xl-3 gx-3 gy-4">
                        @foreach($featuredJobs as $job)
                        <!-- Single Item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="job-instructor-layout border">
                                <!-- Featured/Urgent Tags -->
                                <div class="left-tags-capt">
									@if($job->is_featured)
                                    <span class="featured-text">Featured</span>
                                    @endif
                                    @if($job->is_urgent)
                                    <span class="urgent">Urgent</span>
                                    @endif
								</div>
                                
                                <!-- Job Type Badge -->
                                <div class="brows-job-type">
                                    <span class="{{ str_replace('-', '', $job->type) }}">
                                        {{ ucfirst($job->type) }}
                                    </span>
                                </div>
                                
                                <!-- Company Logo -->
                                <div class="job-instructor-thumb">
                                    <a href="">
                                        <img src="{{ $job->company->logo }}" 
                                            class="img-fluid" 
                                            alt="{{ $job->company->name }}">
                                    </a>
                                </div>
                                
                                <!-- Job Details -->
                                <div class="job-instructor-content">
                                    <h4 class="instructor-title">
                                        <a href="">{{ $job->title }}</a>
                                    </h4>
                                    <div class="instructor-skills">
                                        {{ $job->technologies ?? 'PHP, Laravel, MySQL' }}
                                    </div>
                                </div>
                                
                                <!-- Footer with Salary and Apply Button -->
                                <div class="job-instructor-footer">
                                    <div class="instructor-students">
                                        <h5 class="instructor-scount">
                                            @if($job->salary)
                                                ${{ number_format($job->salary/1000) }}K
                                                @if($job->salary_max)
                                                    - ${{ number_format($job->salary_max/1000) }}K
                                                @endif
                                            @else
                                                Negotiable
                                            @endif
                                        </h5>
                                    </div>
                                    <div class="instructor-corses">
                                        <a href="" class="c-counting">Apply Job</a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        @endforeach
                    </div>                  
					
				</div>
			</section>
			<!-- ============================ Featured Jobs End ================================== -->
			
			
			<!-- ============================ Explore Top Companies Start ================================== -->
			<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Explore Top Companies</h2>
                    <p>Discover leading companies offering exciting career opportunities</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center gx-xl-3 gx-3 gy-4">
            @foreach($companies as $company)
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="emp-grid-blocs">
                    <!-- Company Logo -->
                    <div class="emp-grid-thumbs">
                        <a href="">
                            <figure>
                                <img src="{{ asset($company->logo ?? 'assets/img/l-4.png') }}" 
                                     class="img-fluid" 
                                     alt="{{ $company->name }}">
                            </figure>
                        </a>    
                    </div>
                    
                    <!-- Company Details -->
                    <div class="emp-grid-captions">
                        <div class="emplors-job-types-wrap">
                            <span class="text-sm-muted">
                                {{ $company->email }}
                            </span>
                        </div>
                        <div class="emplors-job-title-wrap mb-1">
                            <h4>
                                <a href="" 
                                   class="emplors-job-title">
                                   {{ $company->name }}
                                </a>
                            </h4>
                        </div>
                        <div class="emplors-job-mrch-lists">
                            <div class="single-mrch-lists">
                                <span>
                                    <i class="fa-solid fa-location-dot me-1"></i>
                                    {{ $company->location }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Open Positions -->
                    <div class="emp-grid-footrs">
                        <div class="emp-flexio">
                            <span class="label px-4 py-2 text-primary bg-light-primary">
                                {{ $company->jobs_count }} Open position
                            </span>
                        </div>
                    </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>        
</section>
			<!-- ============================ Explore Top Companies End ================================== -->
			
			
			<!-- ============================ Hire Experts Start ================================== -->
		
			<!-- ============================ Hire Experts End ================================== -->
			
			
			<!-- ============================ Side Caption Start ================================== -->
			<div class="position-relative">
				<div class="container">
					<div class="row justify-content-end align-items-md-center">
					
						<div class="d-none d-lg-block col-lg-6 position-absolute top-0 start-0 bg-cover h-100 rounded-end" style="background-image: url(assets/img/banner-1.jpg);"></div>
						<div class="d-lg-none mb-5 mb-md-0">
							<img class="img-fluid rounded" src="assets/img/banner-1.jpg" alt="Image Description">
						</div>

						<div class="col-lg-6 align-self-center">
							<div class="p-lg-5 p-md-0 pt-md-5">
								<!-- Heading -->
								<div class="mb-4 mb-sm-7">
									<span class="fw-medium label-light-success px-3 py-2 rounded mb-2">Explore Showcase</span>
									<h2 class="mt-2 lh-base">Best Job Search platform<br>Experience for you</h2>
									<p class="fw-light fs-5">Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip rounded commodo consequat.</p>
								</div>
								<!-- End Heading -->
								
								<div class="features-groupss my-4">
									<ul class="row gx-3 gy-4 p-0">
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Corporate Business jobs</li>
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Company Showcase</li>
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Creative Services</li>
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Easy To Upload Resume</li>
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Online E-commerce</li>
										<li class="fw-medium col-xl-6 col-lg-6 col-6"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Hire Expert Candidates</li>
									</ul>
								</div>
							
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<a class="btn btn-primary fw-medium px-4" href="#">Explore Candidates</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Col -->
					  
					</div>
					<!-- End Row -->
				</div>
			</div>
			<!-- ============================ Side Caption End ================================== -->
			
			
			<!-- ============================ Good Reviews By Customers ================================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Good Reviews By Customers</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center gx-4 gy-4">
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="jobstock-reviews-box">
								<div class="jobstock-reviews-desc">
									<h6 class="review-title-yui">"The best useful website"</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								</div>
								<div class="jobstock-reviews-flex">
									<div class="jobstock-reviews-thumb">
										<div class="jobstock-reviews-figure"><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></div>
									</div>
									<div class="jobstock-reviews-caption">
										<div class="jobstock-reviews-title"><h4>Lucia E. Nugent</h4></div>
										<div class="jobstock-reviews-designation"><span>CEO of Climber</span></div>
										<div class="jobstock-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star deactive"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="jobstock-reviews-box">
								<div class="jobstock-reviews-desc">
									<h6 class="review-title-yui">"Ranking is the #1"</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								</div>
								<div class="jobstock-reviews-flex">
									<div class="jobstock-reviews-thumb">
										<div class="jobstock-reviews-figure"><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></div>
									</div>
									<div class="jobstock-reviews-caption">
										<div class="jobstock-reviews-title"><h4>Brenda R. Smith</h4></div>
										<div class="jobstock-reviews-designation"><span>Founder of Yeloower</span></div>
										<div class="jobstock-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="jobstock-reviews-box">
								<div class="jobstock-reviews-desc">
									<h6 class="review-title-yui">"The website is eco friendly"</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								</div>
								<div class="jobstock-reviews-flex">
									<div class="jobstock-reviews-thumb">
										<div class="jobstock-reviews-figure"><img src="assets/img/team-3.jpg" class="img-fluid circle" alt=""></div>
									</div>
									<div class="jobstock-reviews-caption">
										<div class="jobstock-reviews-title"><h4>Brian B. Wilkerson</h4></div>
										<div class="jobstock-reviews-designation"><span>CEO of Mark Soft</span></div>
										<div class="jobstock-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="jobstock-reviews-box">
								<div class="jobstock-reviews-desc">
									<h6 class="review-title-yui">"100% save and secure website"</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								</div>
								<div class="jobstock-reviews-flex">
									<div class="jobstock-reviews-thumb">
										<div class="jobstock-reviews-figure"><img src="assets/img/team-4.jpg" class="img-fluid circle" alt=""></div>
									</div>
									<div class="jobstock-reviews-caption">
										<div class="jobstock-reviews-title"><h4>Miguel L. Benbow</h4></div>
										<div class="jobstock-reviews-designation"><span>Founder of Mitche LTD</span></div>
										<div class="jobstock-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star deactive"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="jobstock-reviews-box">
								<div class="jobstock-reviews-desc">
									<h6 class="review-title-yui">"Very developer friendly website"</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
								</div>
								<div class="jobstock-reviews-flex">
									<div class="jobstock-reviews-thumb">
										<div class="jobstock-reviews-figure"><img src="assets/img/team-5.jpg" class="img-fluid circle" alt=""></div>
									</div>
									<div class="jobstock-reviews-caption">
										<div class="jobstock-reviews-title"><h4>Hilda A. Sheppard</h4></div>
										<div class="jobstock-reviews-designation"><span>CEO of Doodle</span></div>
										<div class="jobstock-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>	
			</section>
			<!-- ============================ Good Reviews By Customers ================================== -->
			
			
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-cover primary-bg-dark" style="background:url(assets/img/footer-bg-dark.png)no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
							
							<div class="call-action-wrap">
								<div class="sec-heading center">
									<h2 class="lh-base mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For You</h2>
									<p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
								</div>
								<div class="call-action-buttons mt-3">
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-primary fw-medium px-xl-5 px-lg-4 me-2">Upload resume</a>
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Join Our Team</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
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




@endsection
