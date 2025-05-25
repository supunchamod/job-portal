@extends('layouts.main')
@section('content')

		
			<!-- ============================ Header Top Start================================== -->
			<section class="bg-cover bg-dark position-relative py-4">
				<div class="position-absolute end-0 top-0 bottom-0 d-lg-block d-none"><img src="{{ asset('assets/img/banner-1.jpg') }}" class="img-fluid rounded-start-pill h-100" alt=""></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-9 col-md-12">
							<div class="bread-wraps breadcrumbs light">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html">Home</a></li>
										<li class="breadcrumb-item"><a href="grid-style-1.html">Career</a></li>
										<li class="breadcrumb-item active" aria-current="page">{{ $job->title }}</li>
								  </ol>
								</nav>
							</div>
							
							<div class="jbs-head-bodys-top my-5">
								<div class="jbs-roots-y1 flex-column justify-content-start align-items-start">
									<div class="jbs-roots-y1-last">
										<div class="jbs-urt mb-2"><span class="label text-light primary-2-bg">{{ ucfirst($job->type) }}</span></div>
										<div class="jbs-title-iop mb-1"><h2 class="m-0 fs-2 text-light">{{ $job->title }}</h2></div>
										<div class="jbs-locat-oiu text-sm-muted text-light d-flex align-items-center">
											<span><i class="fa-solid fa-location-dot opacity-75 me-1"></i>{{ $job->company->location }}</span>
											<div class="jbs-kioyer-groups ms-3">
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star active"></span>
												<span class="fa-solid fa-star"></span>
												<span class="aal-reveis text-light opacity-75">4.6</span>
											</div>
										</div>
									</div>
									<div class="jbs-roots-y6 py-3">
										<p class="text-light">{{ $job->short_description }}</p>
									</div>
									<div class="jbs-roots-y6 py-3">
										<button class="btn btn-primary fw-medium px-lg-5 px-4 me-3" type="button" data-bs-toggle="modal" data-bs-target="#applyjob">Apply Job</button>
										<button class="btn btn-whites fw-medium px-lg-5 px-4" type="button">Save job</button>
									</div>
								</div>
							</div>
							
							<div class="explot-info-details d-inline-flex flex-wrap">
								<div class="single-explot d-flex align-items-center me-md-5 me-3 my-2">
									<div class="single-explot-first">
										<i class="fa-solid fa-business-time text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Department</span>
										<p class="text-light fw-bold fs-6 m-0">{{ $job->category->name }}</p>
									</div>
								</div>
								<div class="single-explot d-flex align-items-center me-md-5 me-3 my-2">
									<div class="single-explot-first">
										<i class="fa-solid fa-location-dot text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Location</span>
										<p class="text-light fw-bold fs-6 m-0">{{ $job->company->location }}</p>
									</div>
								</div>
								<div class="single-explot d-flex align-items-center">
									<div class="single-explot-first">
										<i class="fa-solid fa-sack-dollar text-primary fs-1"></i>
									</div>
									<div class="single-explot-last ps-2">
										<span class="text-light opacity-75">Sallary</span>
										<p class="text-light fw-bold fs-6 m-0">@if($job->salary)
                                                    ${{ number_format($job->salary/1000) }}
                                                    @if($job->salary_max)
                                                        - ${{ number_format($job->salary_max/1000) }}
                                                    @endif
                                                @else
                                                    Negotiable
                                                @endif
                                        </p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Header Top End ================================== -->

		<!-- ================================  Job Detail ========================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							
							<div class="jbs-blocs style_03 b-0 mb-md-4 mb-sm-4">
								<div class="jbs-blocs-body px-4 py-4">
									<div class="jbs-content mb-4">
										<h5>Job Description</h5>
										<p>{{ $job->description }}</p>
									</div>
									<div class="jbs-content-body mb-4">
										<h5 class="mb-3">Job Requirements</h5>
										<div class="jbs-content mb-3">
											<h6>Requirements:</h6>
											<ul class="simple-list">
												<li>Candidate must have a Bachelors or Masters degree in Computer. (B.tech, Bsc or BCA/MCA)</li>
												<li>Candidate must have a good working knowledge of Javascript and Jquery.</li>
												<li>Good knowledge of HTML and CSS is required.</li>
												<li>Experience in Word press is an advantage</li>
												<li>Jamshedpur, Jharkhand: Reliably commute or planning to relocate before starting work (Required)</li>
											</ul>
										</div>
										
										<div class="jbs-content mb-4">
											<h6>Responsibilities:</h6>
											<ul class="simple-list">
												<li>Write clean, maintainable and efficient code.</li>
												<li>Design robust, scalable and secure features.</li>
												<li>Collaborate with team members to develop and ship web applications within tight timeframes.</li>
												<li>Work on bug fixing, identifying performance issues and improving application performance</li>
												<li>Write unit and functional testcases.</li>
												<li>Continuously discover, evaluate, and implement new technologies to maximise development efficiency. Handling complex technical iss</li>
											</ul>
										</div>
										
										<div class="jbs-content">
											<h6>Qualifications and Skills</h6>
											<ul class="colored-list">
												<li>Bachelor's degree</li>
												<li>BCA/MCA</li>
												<li>BSC IT/Msc IT</li>
												<li>Or any other equivalent degree</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="jbs-blox-footer">
									<div class="blox-first-footer">
										<div class="ftr-share-block">
											<ul>
												<li><strong>Share This Job:</strong></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
												<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="col-lg-4 col-md-12">
							<!-- Modal Trigger -->
							<!-- Modal -->
							<div class="modal fade" id="applyjob" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<form method="POST" action="{{ route('jobs.apply.form', $job->id) }}" enctype="multipart/form-data">
											@csrf
											<div class="modal-header">
												<h5 class="modal-title">Apply for Job</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<div class="modal-body">

												<div class="form-floating mb-3">
													<input type="text" class="form-control" name="name" placeholder="" value="{{ auth()->user()->name }}" required>
													<label>Name:</label>
												</div>
												<div class="form-floating mb-3">
													<input type="email" class="form-control" name="email" placeholder="" value="{{ auth()->user()->email }}" required>
													<label>Email:</label>
												</div>
												<div class="form-group mb-3">
													<label>Upload Resume</label>
													<input type="file" class="form-control" name="resume" required>
												</div>
												<div class="form-check mb-3">
													<input class="form-check-input" type="checkbox" name="create_alert" value="1" id="jobalert">
													<label class="form-check-label" for="jobalert">Create Job Alert</label>
												</div>

											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Submit Application</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							
							<div class="side-jbs-info-blox bg-white mb-4">
								<div class="side-jbs-info-header">
									<div class="side-jbs-info-thumbs">
										<figure><img src="assets/img/l-12.png" class="img-fluid" alt=""></figure>
									</div>
									<div class="side-jbs-info-captionyo ps-3">
										<div class="sld-info-title">
											<h5 class="rtls-title mb-1">Google Inc.</h5>
											<div class="jbs-locat-oiu text-sm-muted">
												<span class="me-1"><i class="fa-solid fa-location-dot me-1"></i>California, USA</span>.<span class="ms-1">Software & Consultancy</span>
											</div>
										</div>
									</div>
								</div>
								<div class="side-jbs-info-middle">
									<div class="side-full-info-groups">
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Company Founder:</span>
											<h6 class="sld-title">Mr. Daniel Mark</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Industry:</span>
											<h6 class="sld-title">Technology</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Founded:</span>
											<h6 class="sld-title">1997</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Head Office:</span>
											<h6 class="sld-title">London, UK</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Revenue</span>
											<h6 class="sld-title">$70B+</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Company Size:</span>
											<h6 class="sld-title">20,000+ Emp.</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Min Exp.</span>
											<h6 class="sld-title">02 Years</h6>
										</div>
										<div class="single-side-info">
											<span class="text-sm-muted sld-subtitle">Openings</span>
											<h6 class="sld-title">06 Openings</h6>
										</div>
									</div>
								</div>
							</div>
							
							<div class="side-rtl-jbs-block">
								<div class="side-rtl-jbs-head">
									<h5 class="side-jbs-titles">Related Jobs</h5>
								</div>
								<div class="side-rtl-jbs-body">
									<div class="side-rtl-jbs-groups">
										
										<div class="single-side-rtl-jbs">
											<div class="single-fliox">
												<div class="single-rtl-jbs-thumb">
													<a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a>
												</div>
												<div class="single-rtl-jbs-caption">
													<div class="hjs-rtls-titles">
														<div class="jbs-types mb-1"><span class="label text-success bg-light-success">Full Time</span></div>
														<h5 class="rtls-title"><a href="joob-detail.html">Sr. Front-end Designer</a></h5>
														<div class="jbs-locat-oiu text-sm-muted">
															<span><i class="fa-solid fa-location-dot me-1"></i>California, USA</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-rtl-jbs-hot">
												<div class="single-tag-rtls"><span class="label text-warning bg-light-warning"><i class="fa-brands fa-hotjar me-1"></i>New</span></div>
												<div class="single-tag-rtls"><span class="label text-success bg-light-success"><i class="fa-solid fa-star me-1"></i>Featured</span></div>
											</div>
										</div>
										
										<div class="single-side-rtl-jbs">
											<div class="single-fliox">
												<div class="single-rtl-jbs-thumb">
													<a href="job-detail.html"><figure><img src="assets/img/l-2.png" class="img-fluid" alt=""></figure></a>
												</div>
												<div class="single-rtl-jbs-caption">
													<div class="hjs-rtls-titles">
														<div class="jbs-types mb-1"><span class="label text-success bg-light-success">Full Time</span></div>
														<h5 class="rtls-title"><a href="joob-detail.html">Jr. PHP Developer</a></h5>
														<div class="jbs-locat-oiu text-sm-muted">
															<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-rtl-jbs-hot">
												<div class="single-tag-rtls"><span class="label text-success bg-light-success"><i class="fa-solid fa-star me-1"></i>Featured</span></div>
											</div>
										</div>
										
										<div class="single-side-rtl-jbs">
											<div class="single-fliox">
												<div class="single-rtl-jbs-thumb">
													<a href="job-detail.html"><figure><img src="assets/img/l-3.png" class="img-fluid" alt=""></figure></a>
												</div>
												<div class="single-rtl-jbs-caption">
													<div class="hjs-rtls-titles">
														<div class="jbs-types mb-1"><span class="label text-danger bg-light-danger">Internship</span></div>
														<h5 class="rtls-title"><a href="joob-detail.html">Project Manager For PHP</a></h5>
														<div class="jbs-locat-oiu text-sm-muted">
															<span><i class="fa-solid fa-location-dot me-1"></i>Liverpool, UK</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-rtl-jbs-hot">
												<div class="single-tag-rtls"><span class="label text-warning bg-light-warning"><i class="fa-brands fa-hotjar me-1"></i>New</span></div>
												<div class="single-tag-rtls"><span class="label text-success bg-light-success"><i class="fa-solid fa-star me-1"></i>Featured</span></div>
											</div>
										</div>
										
										<div class="single-side-rtl-jbs">
											<div class="single-fliox">
												<div class="single-rtl-jbs-thumb">
													<a href="job-detail.html"><figure><img src="assets/img/l-5.png" class="img-fluid" alt=""></figure></a>
												</div>
												<div class="single-rtl-jbs-caption">
													<div class="hjs-rtls-titles">
														<div class="jbs-types mb-1"><span class="label text-warning bg-light-warning">Full Time</span></div>
														<h5 class="rtls-title"><a href="joob-detail.html">Sr. Magento Developer 2.0</a></h5>
														<div class="jbs-locat-oiu text-sm-muted">
															<span><i class="fa-solid fa-location-dot me-1"></i>California, USA</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-rtl-jbs-hot">
												<div class="single-tag-rtls"><span class="label text-success bg-light-success"><i class="fa-solid fa-star me-1"></i>Featured</span></div>
											</div>
										</div>
										
										<div class="single-side-rtl-jbs">
											<div class="single-fliox">
												<div class="single-rtl-jbs-thumb">
													<a href="job-detail.html"><figure><img src="assets/img/l-6.png" class="img-fluid" alt=""></figure></a>
												</div>
												<div class="single-rtl-jbs-caption">
													<div class="hjs-rtls-titles">
														<div class="jbs-types mb-1"><span class="label text-danger bg-light-danger">Internship</span></div>
														<h5 class="rtls-title"><a href="joob-detail.html">Shopify Developer Fresher</a></h5>
														<div class="jbs-locat-oiu text-sm-muted">
															<span><i class="fa-solid fa-location-dot me-1"></i>New York, USA</span>
														</div>
													</div>
												</div>
											</div>
											<div class="single-rtl-jbs-hot">
												<div class="single-tag-rtls"><span class="label text-warning bg-light-warning"><i class="fa-brands fa-hotjar me-1"></i>New</span></div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
										
						</div>
					</div>
				</div>
			</section>
			<!-- =============================== Job Detail ================================== -->
									
			
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
	

@endsecction