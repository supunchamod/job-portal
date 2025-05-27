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
								<li><a href="candidate-follow-employers.html"><i class="fa-solid fa-user-clock me-2"></i>Following Employers</a></li>
								<li class="active"><a href="candidate-messages.html"><i class="fa-solid fa-comments me-2"></i>Messages<span class="count-tag">4</span></a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Message Inbox</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Chat & Messages</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Convershion -->
						<div class="messages-container margin-top-0">
							<div class="messages-headline">
								<h4>Connor Griffin</h4>
								<a href="#" class="message-action"><i class="ti-trash"></i> Delete Conversation</a>
							</div>

							<div class="messages-container-inner">

								<!-- Messages -->
								<div class="dash-msg-inbox">
									<ul>
										@foreach($inboxUsers as $partnerId => $msgs)
											@php
												$latest = $msgs->last();
												$partner = $latest->sender_id == auth()->id() ? $latest->receiver : $latest->sender;
												$active = $partner->id == $userId ? 'active-message' : '';
											@endphp
											<li class="{{ $active }}">
												<a href="{{ route('messages.show', $partner->id) }}">
													<div class="dash-msg-avatar">
														<img src="{{ $partner->profile_image ? asset('storage/' . $partner->profile_image) : asset('assets/img/default.png') }}" alt="">
														<span class="_user_status {{ $partner->is_online ? 'online' : 'offline' }}"></span>
													</div>
													<div class="message-by">
														<div class="message-by-headline">
															<h5>{{ $partner->name }}</h5>
															<span>{{ $latest->created_at->diffForHumans() }}</span>
														</div>
														<p>{{ \Illuminate\Support\Str::limit($latest->message, 40) }}</p>
													</div>
												</a>
											</li>
										@endforeach
									</ul>
								</div>		
								<!-- Messages / End -->

								<!-- Message Content -->
								<div class="dash-msg-content">
									@foreach($messages as $msg)
										<div class="message-plunch {{ $msg->sender_id == auth()->id() ? 'me' : '' }}">
											<div class="dash-msg-avatar">
												<img src="{{ $msg->sender->profile_image ?? 'assets/img/default.png' }}" alt="">
											</div>
											<div class="dash-msg-text">
												<p>{{ $msg->message }}</p>
												<small>{{ $msg->created_at->diffForHumans() }}</small>
											</div>
										</div>
									@endforeach

									<!-- Reply Area -->
									<div class="clearfix"></div>
									<form action="{{ route('messages.store') }}" method="POST">
										@csrf
										<input type="hidden" name="receiver_id" value="{{ $userId }}">
										<div class="message-reply">
											<textarea name="message" cols="40" rows="3" class="form-control with-light" placeholder="Your Message"></textarea>
											<button type="submit" class="btn btn-primary">Send Message</button>
										</div>
									</form>
								</div>

								<!-- Message Content -->

							</div>

						</div>
	
					</div>
					
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
					
@endsection