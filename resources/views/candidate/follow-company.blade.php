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
									<a href="candidate-detail.html"><figure><img src="assets/img/team-2.jpg" class="img-fluid circle" alt=""></figure></a>
								</div>
							</div>
							<div class="jbs-grid-usrs-caption mb-3">
								<div class="jbs-kioyer">
									<div class="jbs-kioyer-groups">
										<span class="fa-solid fa-star active"></span>
										<span class="fa-solid fa-star active"></span>
										<span class="fa-solid fa-star active"></span>
										<span class="fa-solid fa-star active"></span>
										<span class="fa-solid fa-star"></span>
										<span class="aal-reveis">4.7</span>
									</div>
								</div>
								<div class="jbs-tiosk">
									<h4 class="jbs-tiosk-title"><a href="candidate-detail.html">Linda D. Strong</a></h4>
									<div class="jbs-tiosk-subtitle"><span>Front-End Developer</span></div>
								</div>
							</div>
						</div>
						<div class="dashboard-inner">
							<ul data-submenu-title="Main Navigation">
								<li><a href="candidate-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li><a href="candidate-profile.html"><i class="fa-regular fa-user me-2"></i>My Profile </a></li>
								<li><a href="candidate-resume.html"><i class="fa-solid fa-file-pdf me-2"></i>My Resumes</a></li>
								<li><a href="candidate-applied-jobs.html"><i class="fa-regular fa-paper-plane me-2"></i>Applied jobs</a></li>
								<li><a href="candidate-alert-job.html"><i class="fa-solid fa-bell me-2"></i>Alert Jobs<span class="count-tag bg-warning">4</span></a></li>
								<li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark me-2"></i>Shortlist Jobs</a></li>
								<li class="active"><a href="candidate-follow-employers.html"><i class="fa-solid fa-user-clock me-2"></i>Following Employers</a></li>
								<li><a href="candidate-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages<span class="count-tag">4</span></a></li>
								<li><a href="candidate-change-password.html"><i class="fa-solid fa-unlock-keyhole me-2"></i>Change Password</a></li>
								<li><a href="candidate-delete-account.html"><i class="fa-solid fa-trash-can me-2"></i>Delete Account</a></li>
								<li><a href="index.html"><i class="fa-solid fa-power-off me-2"></i>Log Out</a></li>
							</ul>
						</div>					
					</div>
				</div>
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-4">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="mb-1 fs-3 fw-medium">Following Employers</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Following Employers</a></li>
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
										<form method="GET" action="{{ route('candidate.followed.companies') }}">
										<div class="_mp-inner-content elior">
											<div class="_mp-inner-first">
												<div class="search-inline">
													<input type="text" name="search" class="form-control" placeholder="Company name, keywords etc." value="{{ request('search') }}">
													<button type="submit" class="btn btn-primary">Search</button>
												</div>
											</div>
										</div>
									</form>
									</div>
									<div class="card-body">
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
									
											<!-- Single Item -->
                                                @foreach($companies as $company)
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                    <div class="emplors-list-box border">
                                                        <div class="emplors-list-head">
                                                            <div class="emplors-list-head-thunner">
                                                                <div class="emplors-list-emp-thumb">
                                                                    <a href="{{ route('company.show', $company->slug) }}">
                                                                        <figure>
                                                                            <img src="{{ asset($company->logo ?? 'assets/img/default-company.png') }}" class="img-fluid" alt="{{ $company->name }}">
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                                <div class="emplors-list-job-caption">
                                                                    <div class="emplors-job-types-wrap mb-1">
                                                                        <span class="label text-light bg-success">{{ $company->jobs->count() }} Openings</span>
                                                                    </div>
                                                                    <div class="emplors-job-title-wrap mb-1">
                                                                        <h4>
                                                                            <a href="{{ route('company.show', $company->slug) }}" class="emplors-job-title">{{ $company->name }}</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div class="emplors-job-mrch-lists">
                                                                        <div class="single-mrch-lists">
                                                                            <span>{{ $company->industry ?? 'N/A' }}</span>.
                                                                            <span><i class="fa-solid fa-location-dot me-1"></i>{{ $company->location ?? 'Location N/A' }}</span>.
                                                                            <span>Est: {{ $company->established_year ?? 'N/A' }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="emplors-list-head-last">
                                                                <a href="{{ route('company.show', $company->slug) }}" class="btn btn-md btn-light-primary px-3">View Company</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                                @if($companies->isEmpty())
                                                    <div class="col-12">
                                                        <p class="text-center text-muted">You haven't followed any companies yet.</p>
                                                    </div>
                                                @endif
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- Header Wrap -->
	
					</div>		
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->


@endsection