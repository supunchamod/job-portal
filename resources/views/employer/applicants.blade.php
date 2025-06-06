@extends('layouts.main')
@section('content')

<!-- ======================= dashboard Detail ======================== -->
			<div class="dashboard-wrap bg-light">
				<a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
					<i class="fas fa-bars mr-2"></i>Dashboard Navigation
				</a>
				 <div class="collapse" id="MobNav">
					<div class="dashboard-nav">
						<div class="dash-user-blocks pt-5">
							<div class="jbs-grid-usrs-thumb">
								<div class="jbs-grid-yuo">
									<a href="candidate-detail.html"><figure><img src="assets/img/l-12.png" class="img-fluid circle" alt=""></figure></a>
								</div>
							</div>
							<div class="jbs-grid-usrs-caption mb-3">
								<div class="jbs-kioyer">
									<span class="label text-light theme-bg">05 Openings</span>
								</div>
								<div class="jbs-tiosk">
									<h4 class="jbs-tiosk-title"><a href="candidate-detail.html">Instagram App</a></h4>
									<div class="jbs-tiosk-subtitle"><span><i class="fa-solid fa-location-dot me-2"></i>Canada</span></div>
								</div>
							</div>
						</div>
						<div class="dashboard-inner">
							<ul data-submenu-title="Main Navigation">
								<li><a href="employer-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li><a href="employer-profile.html"><i class="fa-regular fa-user me-2"></i>User Profile </a></li>
								<li><a href="employer-jobs.html"><i class="fa-solid fa-business-time me-2"></i>My Jobs</a></li>
								<li><a href="employer-submit-job.html"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
								<li class="active"><a href="employer-applicants-jobs.html"><i class="fa-solid fa-user-group me-2"></i>Applicants Jobs</a></li>
								<li><a href="employer-shortlist-candidates.html"><i class="fa-solid fa-user-clock me-2"></i>Shortlisted Candidates</a></li>
								<li><a href="employer-package.html"><i class="fa-solid fa-wallet me-2"></i>Package</a></li>
								<li><a href="employer-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages</a></li>
								<li><a href="employer-change-password.html"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
								<li><a href="employer-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete Account</a></li>
								<li><a href="index.html"><i class="fa-solid fa-power-off me-2"></i>Log Out</a></li>
							</ul>
						</div>					
					</div>
				</div>
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Manage Applicants</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">All Applicants</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						
						<!-- Header Wrap -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div class="_mp-inner-content elior">
											<div class="_mp-inner-first">
												<div class="search-inline">
													<input type="text" class="form-control" placeholder="Job title, Keywords etc.">
													<button type="button" class="btn btn-primary">Search</button>
												</div>
											</div>
											<div class="_mp_inner-last">
												<div class="item-shorting-box-right">
													<div class="shorting-by me-2 small">
														<select>
															<option value="0">Short by (Default)</option>
															<option value="1">Short by (Featured)</option>
															<option value="2">Short by (Urgent)</option>
															<option value="3">Short by (Post Date)</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
									
										<!-- Row -->
										<div class="row mb-3">
											 @forelse($applications as $app)
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                <div class="jbs-list-box border">
                                                    <div class="jbs-list-head m-0">
                                                        <div class="jbs-list-head-thunner">
                                                            <div class="jbs-list-usrs-thumb jbs-verified">
                                                                <a href="">
                                                                    <figure>
                                                                        <img src="{{ asset('storage/profile_images/' . ($app->user->information->profile_image ?? 'default.png')) }}" class="img-fluid circle" alt="">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="jbs-list-job-caption">
                                                                <div class="jbs-job-title-wrap">
                                                                    <h4><a href="" class="jbs-job-title">{{ $app->user->name ?? 'Unknown' }}</a></h4>
                                                                </div>
                                                                <div class="jbs-job-mrch-lists">
                                                                    <div class="single-mrch-lists">
                                                                        <span>{{ $app->job->title ?? 'N/A' }}</span>
                                                                        <span><i class="fa-solid fa-location-dot me-1"></i>{{ $app->user->location ?? 'Location N/A' }}</span>
                                                                        <span>Applied: {{ \Carbon\Carbon::parse($app->applied_at)->format('d M Y') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jbs-list-head-last">
                                                            <a href="#" class="rounded btn-md text-success bg-light-success px-3 me-2" title="Approve Candidate"><i class="fa-solid fa-check-double"></i></a>
                                                            <a href="#" class="rounded btn-md text-info bg-light-info px-3 me-2" title="Reload"><i class="fa-solid fa-arrow-rotate-right"></i></a>
                                                            @if($app->resume_path)
                                                                <a href="{{ asset('storage/' . $app->resume_path) }}" class="rounded btn-md text-warning bg-light-warning px-3 me-2" title="Download Resume"><i class="fa-solid fa-download"></i></a>
                                                            @endif
                                                            <a href="#" class="rounded btn-md text-danger bg-light-danger px-3" title="Remove Candidate"><i class="fa-solid fa-trash-can"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-12">
                                                <div class="alert alert-warning">No applicants found.</div>
                                            </div>
                                        @endforelse
										</div>
										<!-- End Row -->
										
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
																
										</div>
										<!-- End All Job List -->
										
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3 text-center">© 2015 - 2025 Job Stock® Themezhub.</div>
						</div>
					</div>
		
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
             
@endsection