@extends('layouts.main')
@section('content')


			<!-- ============================ Header Information Start================================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="cndt-head-block">
								
                            <div class="cndt-head-left">
                                <div class="cndt-head-thumb">
                                    <figure>
                                        <img src="{{ $candidate->information && $candidate->information->profile_image ? asset('storage/' . $candidate->information->profile_image) : asset('assets/img/default-profile.png') }}" 
                                            class="img-fluid circle" 
                                            alt="{{ $candidate->name }}">
                                    </figure>
                                </div>
                                <div class="cndt-head-caption">
                                    <div class="cndt-head-caption-top">
                                        <div class="cndt-yior-1">
                                            <span class="label text-sm-muted text-success bg-light-success">
                                                {{ $candidate->is_featured ? 'Featured' : '' }}
                                            </span>
                                        </div>
                                        <div class="cndt-yior-2">
                                            <h4 class="cndt-title">{{ $candidate->name }}</h4>
                                        </div>
                                        <div class="cndt-yior-3">
                                            <span><i class="fa-solid fa-user-graduate me-1"></i>{{ $candidate->information->job_title ?? 'N/A' }}</span>
                                            <span><i class="fa-solid fa-location-dot me-1"></i>{{ $candidate->information->address ?? 'N/A' }}</span>
                                            <span><i class="fa-solid fa-sack-dollar me-1"></i>{{ $candidate->information->salary ?? '$0/PA' }}</span>
                                            <span><i class="fa-solid fa-cake-candles me-1"></i>{{ $candidate->information->dob ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                    <div class="cndt-head-caption-bottom">
                                        <div class="cndt-yior-skills">
                                            @if(!empty($candidate->information->language))
                                                @php
                                                    $skills = explode(',', $candidate->information->language);
                                                @endphp
                                                @foreach($skills as $skill)
                                                    <span>{{ trim($skill) }}</span>
                                                @endforeach
                                            @else
                                                <span>No skills listed</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

								<div class="cndt-head-right">
									<button type="button" class="btn btn-primary">Download CV<i class="fa-solid fa-download ms-2"></i></button>
									<button type="button" class="btn btn-outline-primary ms-2"><i class="fa-solid fa-bookmark"></i></button>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Header Information End ================================== -->
			
			<!-- ============================ Full Candidate Details Start ================================== -->
			<section>
				<div class="container">
					<!-- row Start -->
					<div class="row">

                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="cdtsr-groups-block">

                                        <!-- About Candidate -->
                                        <div class="single-cdtsr-block">
                                            <div class="single-cdtsr-header"><h5>About Candidate</h5></div>
                                            <div class="single-cdtsr-body">
                                                <p>{{ $candidate->information->about ?? 'No about info available.' }}</p>
                                            </div>
                                        </div>

                                        <!-- All Information -->
                                        <div class="single-cdtsr-block">
                                            <div class="single-cdtsr-header"><h5>All Information</h5></div>
                                            <div class="single-cdtsr-body">
                                                <div class="row align-items-center justify-content-between gy-4">

                                                    <!-- Email -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->email }}</h5>
                                                                <p>Mail Address</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Phone -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->phone ?? 'N/A' }}</h5>
                                                                <p>Phone No.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Gender -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-regular fa-user"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->gender ?? 'N/A' }}</h5>
                                                                <p>Gender</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Age -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-cake-candles"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->age ? $candidate->information->age . ' Years' : 'N/A' }}</h5>
                                                                <p>Age</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Salary -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-wallet"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->salary ?? '$0/month' }}</h5>
                                                                <p>Offered Salary</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Experience -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-briefcase"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->experience ?? 'N/A' }}</h5>
                                                                <p>Experience</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Qualification -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-user-graduate"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->education ?? 'N/A' }}</h5>
                                                                <p>Qualification</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Work Type -->
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="cdtx-infr-box">
                                                            <div class="cdtx-infr-icon"><i class="fa-solid fa-layer-group"></i></div>
                                                            <div class="cdtx-infr-captions">
                                                                <h5>{{ $candidate->information->work_type ?? 'Fulltime' }}</h5>
                                                                <p>Work Type</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

								
								<div class="single-cdtsr-block">
                                    <div class="single-cdtsr-header"><h5>Resumes</h5></div>
                                    <div class="single-cdtsr-body">
                                        <div class="resumes-groups-blox">

                                            @forelse ($candidate->resumes as $resume)
                                                <div class="single-resumes-blocks">
                                                    <div class="single-resumes-left">
                                                        <div class="single-resumes-icons">
                                                            <i class="fa-solid fa-file-{{ $resume->file_type === 'pdf' ? 'pdf' : 'word' }}"></i>
                                                        </div>
                                                        <div class="single-resumes-captions">
                                                            <h5>{{ $resume->file_name }}<span>{{ $resume->created_at->diffForHumans() }}</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="single-resumes-right">
                                                        <a href="{{ asset('storage/' . $resume->file_path) }}" download class="btn btn-md btn-light-success">
                                                            Download <i class="fa-solid fa-circle-down ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No resumes uploaded.</p>
                                            @endforelse

                                        </div>
                                    </div>
                                </div>

								
								<div class="single-cdtsr-block">
                                    <div class="single-cdtsr-header"><h5>All Experience</h5></div>
                                    <div class="single-cdtsr-body">
                                        <div class="experinc-usr-groups">
                                            @forelse ($candidate->experiences as $experience)
                                                <div class="single-experinc-block">
                                                    <div class="single-experinc-lft">
                                                        <div class="experinc-thumbs">
                                                            <figure><img src="{{ asset('storage/' . $experience->logo) }}" class="img-fluid" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="single-experinc-rght">
                                                        <div class="experinc-emp-title">
                                                            <h5>{{ $experience->company }}</h5>
                                                            <span class="label text-success bg-light-success">{{ $experience->employment_type }}</span>
                                                        </div>
                                                        <div class="experinc-post-title">
                                                            <h6>{{ $experience->position }}</h6>
                                                            <div class="experinc-infos-list">
                                                                <span class="exp-start">{{ $experience->duration }}</span>
                                                                <span class="work-exp-date">{{ $experience->from }} - {{ $experience->to }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No experience added.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

								
								<div class="single-cdtsr-block">
                                    <div class="single-cdtsr-header"><h5>Educations</h5></div>
                                    <div class="single-cdtsr-body">
                                        <div class="educations-usr-groups">
                                            @forelse ($candidate->educations as $education)
                                                <div class="single-educations-block">
                                                    <div class="single-educations-lft">
                                                        <div class="educations-thumbs">
                                                            <figure><img src="{{ asset('storage/' . $education->logo) }}" class="img-fluid" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="single-educations-rght">
                                                        <div class="educations-emp-title">
                                                            <h5>{{ $education->institution }}</h5>
                                                        </div>
                                                        <div class="educations-post-title">
                                                            <h6>{{ $education->degree }}</h6>
                                                        </div>
                                                        <div class="educations-infos-list">
                                                            <span class="exp-start">{{ $education->start_year }}</span>
                                                            <span class="work-exp-date">{{ $education->location }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No education added.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>

								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Candidate Skills</h5></div>
									<div class="single-cdtsr-body">
										<div class="cndts-all-skills-list">
											<span>Java</span>
											<span>Python</span>
											<span>Bootstrap</span>
											<span>HTML5</span>
											<span>UI/UX</span>
											<span>Laravel</span>
											<span>WordPress</span>
										</div>
									</div>
								</div>
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Portfolio</h5></div>
									<div class="single-cdtsr-body">
										<div class="row gx-3 gy-3">
										
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-prt-block">
													<div class="cndts-prt-thumb">
														<img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="">
													</div>
													<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
												</div>
											</div>
											
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-prt-block">
													<div class="cndts-prt-thumb">
														<img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="">
													</div>
													<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
												</div>
											</div>
											
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-prt-block">
													<div class="cndts-prt-thumb">
														<img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="">
													</div>
													<div class="cndts-prt-link"><a href="JavaScript:Void(0);"><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Language</h5></div>
									<div class="single-cdtsr-body">
										<div class="row gy-4">
										
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-lgs-blocks">
													<div class="cndts-lgs-ico"><h6>JP</h6></div>
													<div class="cndts-lgs-captions">
														<h5>Japanies</h5>
														<p>Basic</p>
													</div>
												</div>
											</div>
											
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-lgs-blocks">
													<div class="cndts-lgs-ico"><h6>EN</h6></div>
													<div class="cndts-lgs-captions">
														<h5>English</h5>
														<p>Advance</p>
													</div>
												</div>
											</div>
											
											<div class="col-xl-4 col-lg-4 col-md-6 col-6">
												<div class="cndts-lgs-blocks">
													<div class="cndts-lgs-ico"><h6>FR</h6></div>
													<div class="cndts-lgs-captions">
														<h5>French</h5>
														<p>Medium</p>
													</div>
												</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Related Candidate</h5></div>
									<div class="single-cdtsr-body">
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
									
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-1.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Kr. Dhananjay Preet</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Sr. Web Designer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>London</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs sm"><div class="ilop-tr"><i class="fa-solid fa-coins"></i></div><h5 class="jbs-list-pack">7 Years Exp.</h5></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">View Detail</a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-6.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Clarence B. Mantooth</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Sr. Content Writer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Canada, USA</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs sm"><div class="ilop-tr"><i class="fa-solid fa-coins"></i></div><h5 class="jbs-list-pack">3 Years Exp.</h5></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">View Detail</a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-7.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Geraldine E. Scott</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Shopify Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>Denver, USA</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs sm"><div class="ilop-tr"><i class="fa-solid fa-coins"></i></div><h5 class="jbs-list-pack">8 Years Exp.</h5></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">View Detail</a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12 col-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head m-0">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-usrs-thumb jbs-verified"><a href="candidate-detail.html"><figure><img src="assets/img/team-8.jpg" class="img-fluid circle" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-title-wrap"><h4><a href="candidate-detail.html" class="jbs-job-title">Donald J. Merrick</a></h4></div>
																<div class="jbs-job-mrch-lists">
																	<div class="single-mrch-lists">
																		<span>Laravel Developer</span>.<span><i class="fa-solid fa-location-dot me-1"></i>California, USA</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="jbs-list-head-middle">
															<div class="elsocrio-jbs sm"><div class="ilop-tr"><i class="fa-solid fa-coins"></i></div><h5 class="jbs-list-pack">5 Years Exp.</h5></div>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="btn btn-md btn-primary px-3">View Detail</a>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<!-- End All Job List -->
									</div>
								</div>
							
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-12">
							<div class="sidefr-usr-block mb-4">
								<div class="sidefr-usr-header">
									<h4 class="sidefr-usr-title">Contact Dhananjay Preet</h4>
								</div>
								<div class="sidefr-usr-body">
									<form>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Your Name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Address">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Phone.">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject">
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Your Message"></textarea>
										</div>
										<div class="form-group m-0">
											<button type="button" class="btn btn-primary fw-medium full-width">Send Message</button>
										</div>
									</form>
								</div>
							</div>
							
							<div class="sidefr-usr-block">
								<div class="cndts-share-block">
									<div class="cndts-share-title">
										<h5>Share Profile</h5>
									</div>
									<div class="cndts-share-list">
										<ul>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus-g"></i></a></li>
											<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- /row -->					
				</div>	
			</section>
			<!-- ============================ Full Candidate Details End ================================== -->						
			
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



@endsection