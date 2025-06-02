@extends('layouts.main')
@section('content')


			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Candidate Grid Style 01</h2>
							<div class="breadcrumbs light">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Candidate</a></li>
										<li class="breadcrumb-item active" aria-current="page">Candidate Grid 01</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All List Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<!-- Search Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="side-widget-blocks">							
							
								<div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
									<h4 class="fs-bold fs-5 mb-0">Search Filter</h4>
									<div class="ssh-header">
										<a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
										<a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
									</div>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open">
									<div class="search-inner">
										<div class="side-widget-inner">
										
											<div class="form-group">
												<label>Search By Keyword</label>
												<div class="form-group-inner">
													<input type="text" class="form-control" placeholder="Search by keywords...">
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Category</label>
												<div class="form-group-inner">
													<select>
														<option value="0">Choose category</option>
														<option value="1">Health & Medical</option>
														<option value="2">Bank & Advisory</option>
														<option value="3">Design & UI</option>
														<option value="4">Development</option>
														<option value="5">Automotive Jobs</option>
														<option value="6">Software & Consultancy</option>
														<option value="7">Other Services</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label>Radius in Miles</label>
												<div class="form-group-inner">
													<div class="rg-slider">
														 <input type="text" class="js-range-slider" name="my_range" value="">
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Experience Level</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="d1" class="form-check-input" name="ADA" type="checkbox" checked="">
																<label for="d1" class="form-check-label">Beginner (54)</label>
															</li>
															<li>
																<input id="d2" class="form-check-input" name="Parking" type="checkbox">
																<label for="d2" class="form-check-label">1+ Year (32)</label>
															</li>
															<li>
																<input id="d3" class="form-check-input" name="Coffee" type="checkbox">
																<label for="d3" class="form-check-label">2 Year (09)</label>
															</li>
															<li>
																<input id="d4" class="form-check-input" name="Mother" type="checkbox">
																<label for="d4" class="form-check-label">3+ Year (16)</label>
															</li>
															<li>
																<input id="d5" class="form-check-input" name="Outdoor" type="checkbox">
																<label for="d5" class="form-check-label">4+ Year (17)</label>
															</li>
															<li>
																<input id="d6" class="form-check-input" name="Pet" type="checkbox">
																<label for="d6" class="form-check-label">5+ Year (22)</label>
															</li>
															<li>
																<input id="d7" class="form-check-input" name="Beauty" type="checkbox">
																<label for="d7" class="form-check-label">10+ Year (32)</label>
															</li>
														</ul>
													</div>	
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Type</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="e2" class="form-check-input" name="jtype" type="radio">
																<label for="e2" class="form-check-label">Full time</label>
															</li>
															<li>
																<input id="e3" class="form-check-input" name="jtype" type="radio">
																<label for="e3" class="form-check-label">Part Time</label>
															</li>
															<li>
																<input id="e4" class="form-check-input" name="jtype" type="radio" checked="">
																<label for="e4" class="form-check-label">Contract Base</label>
															</li>
															<li>
																<input id="e5" class="form-check-input" name="jtype" type="radio">
																<label for="e5" class="form-check-label">Internship</label>
															</li>
															<li>
																<input id="e6" class="form-check-input" name="jtype" type="radio">
																<label for="e6" class="form-check-label">Regular</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Lavel</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="f1" class="form-check-input" name="ADA" type="checkbox" checked="">
																<label for="f1" class="form-check-label">Team Leader</label>
															</li>
															<li>
																<input id="f2" class="form-check-input" name="Parking" type="checkbox">
																<label for="f2" class="form-check-label">Manager</label>
															</li>
															<li>
																<input id="f3" class="form-check-input" name="Coffee" type="checkbox">
																<label for="f3" class="form-check-label">Junior</label>
															</li>
															<li>
																<input id="f4" class="form-check-input" name="Coffee" type="checkbox">
																<label for="f4" class="form-check-label">Senior</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Posted Date</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="l1" class="form-check-input" name="hour" type="checkbox" checked="">
																<label for="l1" class="form-check-label">Last Hour</label>
															</li>
															<li>
																<input id="l2" class="form-check-input" name="days" type="checkbox">
																<label for="l2" class="form-check-label">Last 24 hour</label>
															</li>
															<li>
																<input id="l3" class="form-check-input" name="week" type="checkbox">
																<label for="l3" class="form-check-label">Last Week</label>
															</li>
															<li>
																<input id="l4" class="form-check-input" name="month" type="checkbox">
																<label for="l4" class="form-check-label">Last 30 Days</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group mb-1">
												<button type="button" class="btn btn-lg btn-primary fs-6 fw-medium full-width">Search job</button>
											</div>
										
										</div>

									</div>							
								</div>
							</div>							
						</div>
						<!-- Sidebar End -->
						
						<!-- Job List Wrap -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							<!-- Shorting Box -->
							<div class="row justify-content-center mb-4">
								<div class="col-lg-12 col-md-12">
									<div class="item-shorting-box">
										<div class="item-shorting clearfix">
											<div class="left-column"><h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4></div>
										</div>
										<!-- <div class="item-shorting-box-right">
											<div class="shorting-by me-2 small">
												<select>
													<option value="0">Short by (Default)</option>
													<option value="1">Short by (Featured)</option>
													<option value="2">Short by (Urgent)</option>
													<option value="3">Short by (Post Date)</option>
												</select>
											</div>
											<div class="shorting-by small">
												<select>
													<option value="0">10 Per Page</option>
													<option value="1">20 Per Page</option>
													<option value="2">50 Per Page</option>
													<option value="3">10 Per Page</option>
												</select>
											</div>
										</div> -->
									</div>
								</div>
							</div>
							<!-- Shorting Wrap End -->
							
							<!-- Start All List -->
							<div class="row justify-content-center gx-3 gy-4">
						
								@foreach ($candidates as $candidate)
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                        <div class="jbs-grid-usrs-block border">
                                            <div class="jbs-grid-usrs-thumb">
                                                <div class="jbs-grid-yuo jbs-verified">
                                                    <a href="{{ route('candidate.detail', $candidate->slug) }}">
                                                        <figure>
                                                            <img src="{{ asset('storage/profile_images/' . ($candidate->information->profile_image ?? 'default.png')) }}" class="img-fluid circle" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="jbs-grid-usrs-caption">
                                                <div class="jbs-kioyer">
                                                    <div class="jbs-kioyer-groups">
                                                        {{-- Optional: Generate stars based on rating if available --}}
                                                        @php $rating = $candidate->information->rating ?? 4.6; @endphp
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <span class="fa-solid fa-star {{ $i <= floor($rating) ? 'active' : '' }}"></span>
                                                        @endfor
                                                        <span class="aal-reveis">{{ number_format($rating, 1) }}</span>
                                                    </div>
                                                </div>
                                                <div class="jbs-tiosk">
                                                    <h4 class="jbs-tiosk-title">
                                                        <a href="{{ route('candidate.detail', $candidate->slug) }}">{{ $candidate->name }}</a>
                                                    </h4>
                                                    <div class="jbs-tiosk-subtitle">
                                                        <span>{{ $candidate->information->job_title ?? 'N/A' }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="jbs-grid-usrs-info">
                                                <div class="jbs-info-ico-style bold">
                                                    <div class="jbs-single-y1 style-2">
                                                        <span><i class="fa-solid fa-sack-dollar"></i></span>
                                                        {{ $candidate->information->education ?? 'N/A' }}/H
                                                    </div>
                                                    <div class="jbs-single-y1 style-3">
                                                        <span><i class="fa-solid fa-coins"></i></span>
                                                        {{ $candidate->information->experience ?? 'N/A' }} Years exp.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="jbs-grid-usrs-contact">
                                                <div class="jbs-btn-groups">
                                                    <a href="#" class="btn btn-md btn-gray px-4">Message</a>
                                                    <a href="{{ route('candidate.detail', $candidate->slug) }}" class="btn btn-md btn-primary px-4">View Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

								

						</div>
						<!-- Job List Wrap End-->
						
					</div>
				</div>		
			</section>
			<!-- ============================ All List Wrap ================================== -->
			
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