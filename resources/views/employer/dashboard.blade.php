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
								<li class="active"><a href="/employer/dashboard"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li><a href="/employer/profile"><i class="fa-regular fa-user me-2"></i>User Profile </a></li>
								<li><a href="/employer/my-job"><i class="fa-solid fa-business-time me-2"></i>My Jobs</a></li>
								<li><a href="/employer/jobs/create"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
								<li><a href="employer-applicants-jobs.html"><i class="fa-solid fa-user-group me-2"></i>Applicants Jobs</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Employer Dashboard</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Employer Dashboard</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<div class="dashboard-widg-bar d-block">
						
						<!-- Row Start -->
						<div class="row align-items-center gx-4 gy-4 mb-4">
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-success bg-light-success">
											<i class="fa-solid fa-business-time"></i>	
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">760</h5>
											<p>Posted jobs</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-warning bg-light-warning">
											<i class="fa-solid fa-bookmark"></i>	
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">12560</h5>
											<p>Saved Candidates</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-danger bg-light-danger">
											<i class="fa-solid fa-user-clock"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">672</h5>
											<p>Applicants</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
								<div class="dash-wrap-bloud">
									<div class="dash-wrap-bloud-icon">
										<div class="bloud-icon text-info bg-light-info">
											<i class="fa-sharp fa-solid fa-comments"></i>
										</div>
									</div>
									<div class="dash-wrap-bloud-caption">
										<div class="dash-wrap-bloud-content">
											<h5 class="ctr">215</h5>
											<p>Total Review</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->
						
						<!-- Row Start -->
						<div class="row gx-4 gy-4 mb-4">
							<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
								<div class="card d-none d-lg-block">
									<div class="card-header">
										<h4 class="mb-0">Extra Area Chart</h4>
									</div>
									<div class="card-body">
										<ul class="list-inline text-center m-t-40">
											<li>
												<h5><i class="fa fa-circle me-1 text-warning"></i>Active jobs</h5>
											</li>
											<li>
												<h5><i class="fa fa-circle me-1 text-danger"></i>Expired Jobs</h5>
											</li>
											<li>
												<h5><i class="fa fa-circle me-1 text-success"></i>Applied Applicants</h5>
											</li>
										</ul>
										<div class="chart" id="line-chart" style="height:300px;"></div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Notifications</h4>
									</div>
									<div class="ground-list ground-list-hove">
										<div class="ground ground-single-list">
											<a href="JavaScript:Void(0);">
												<div class="btn-circle-40 text-warning bg-light-warning"><i class="fas fa-home"></i></div>
											</a>

											<div class="ground-content">
												<h6><a href="JavaScript:Void(0);"><strong>Kr. Shaury Preet</strong> Replied your message</a></h6>
												<span class="small">Just Now</span>
											</div>
										</div>
										
										<div class="ground ground-single-list">
											<a href="JavaScript:Void(0);">
												<div class="btn-circle-40 text-danger bg-light-danger"><i class="fa-solid fa-comments"></i></div>
											</a>

											<div class="ground-content">
												<h6><a href="JavaScript:Void(0);">Mortin Denver accepted your resume on <strong>Job Stock</strong></a></h6>
												<span class="small">20 min ago</span>
											</div>
										</div>
										
										<div class="ground ground-single-list">
											<a href="JavaScript:Void(0);">
												<div class="btn-circle-40 text-info bg-light-info"><i class="fa-solid fa-heart"></i></div>
											</a>

											<div class="ground-content">
												<h6><a href="JavaScript:Void(0);">Your job #456256 expired yesterday <strong>View More</strong></a></h6>
												<span class="small">1 day ago</span>
											</div>
										</div>
										
										<div class="ground ground-single-list">
											<a href="JavaScript:Void(0);">
												<div class="btn-circle-40 text-danger bg-light-danger"><i class="fa-solid fa-thumbs-up"></i></div>
											</a>

											<div class="ground-content">
												<h6><a href="JavaScript:Void(0);"><strong>Daniel Kurwa</strong> has been approved your resume!.</a></h6>
												<span class="small">10 days ago</span>
											</div>
										</div>
										
										<div class="ground ground-single-list">
											<a href="JavaScript:Void(0);">
												<div class="btn-circle-40 text-success bg-light-success"><i class="fa-solid fa-comment-dots"></i></div>
											</a>

											<div class="ground-content">
												<h6><a href="JavaScript:Void(0);">Khushi Verma left a review on <strong>Your Message</strong></a></h6>
												<span class="small">Just Now</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->
						
						<!-- Header Wrap -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h6 class="mb-0">Recent Posted Jobs</h6>
									</div>
									<div class="card-body">
										
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-1.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Tripadvisor</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Technical Content Writer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-warning label">244 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-2.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Pintrest</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">New Shopify Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">110 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-clock"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-3.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Shopify</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Sr. Magento Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">320 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-4.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Dreezoo</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Sr. Code Ignetor Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">170 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-5.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Photoshop</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Java & Python Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">190 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-6.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Firefox</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Sr. UI/UX Designer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-danger label">Expired</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-clock"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-7.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Airbnb</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Jr. Laravel Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">205 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-8.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Snapchat</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Sr. WordPress Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">320 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-9.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Dribbble</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Exp. Project manager</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-danger label">Expired</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-clock"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Item -->
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="jbs-list-box border">
													<div class="jbs-list-head">
														<div class="jbs-list-head-thunner">
															<div class="jbs-list-emp-thumb jbs-verified"><a href="job-detail.html"><figure><img src="assets/img/l-10.png" class="img-fluid" alt=""></figure></a></div>
															<div class="jbs-list-job-caption">
																<div class="jbs-job-employer-wrap"><span>Skype</span></div>
																<div class="jbs-job-title-wrap"><h4><a href="job-detail.html" class="jbs-job-title">Jr. PHP Developer</a></h4></div>
															</div>
														</div>
														<div class="jbs-list-applied-users">
															<span class="text-sm-muted text-light bg-info label">150 Applicants</span>
														</div>
														<div class="jbs-list-postedinfo">
															<p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">17 Apr 2023</span></p>
															<p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">12 Jun 2024</span></p>
														</div>
														<div class="jbs-list-head-last">
															<a href="JavaScript:Void(0);" class="rounded btn-md text-success bg-light-success px-3"><i class="fa-solid fa-pencil"></i></a>
															<a href="JavaScript:Void(0);" class="rounded btn-md text-danger bg-light-danger px-3"><i class="fa-solid fa-trash-can"></i></a>
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
						<!-- Header Wrap -->
	
					</div>
							
					</div>		
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

@endsection