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
								<li class="active"><a href="candidate-resume.html"><i class="fa-solid fa-file-pdf me-2"></i>My Resumes</a></li>
								<li><a href="candidate-applied-jobs.html"><i class="fa-regular fa-paper-plane me-2"></i>Applied jobs</a></li>
								<li><a href="candidate-alert-job.html"><i class="fa-solid fa-bell me-2"></i>Alert Jobs<span class="count-tag bg-warning">4</span></a></li>
								<li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark me-2"></i>Shortlist Jobs</a></li>
								<li><a href="candidate-follow-employers.html"><i class="fa-solid fa-user-clock me-2"></i>Following Employers</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">My Resume</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">My Resume</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						
						<!-- Row Start -->
						    <div class="card">
                    <div class="card-header">
                        <h4>My Resume</h4>
                    </div>
                    <div class="card-body">

                        {{-- Display uploaded resumes --}}
                        <div class="row gx-4 gy-4 mb-3">
                            @foreach($resumes as $resume)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="cd-resume-wraps">
                                        <div class="cd-resume-cancel">
                                            <form action="{{ route('resume.destroy', $resume->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="cancel-link"><i class="fa-solid fa-xmark"></i></button>
                                            </form>
                                        </div>
                                        <div class="cd-resume-caption">
                                            <div class="cd-resume-content">
                                                <p>{{ $resume->file_name }}</p>
                                                <h5>{{ strtoupper($resume->file_type) }}</h5>
                                            </div>
                                            <div class="cd-resume-icon">
                                                @if($resume->file_type == 'pdf')
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                @else
                                                    <i class="fa-regular fa-file-word"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Upload resume --}}
                        <div class="row gx-4 gy-4">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                            <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="upload-btn-wrapper">
                                    <label for="resume" class="btn">Upload a file</label>
                                    <input type="file" name="resume" id="resume" style="display:none;" required onchange="this.form.submit()">
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

						</div>	
						<!-- End Row -->
						
						<!-- Row Start -->
						<div class="card">
							<div class="card-header">
								<h4>Education</h4>
							</div>
							<div class="card-body">
								@foreach($educations as $education)
								<div class="single-edc-wrap">
									<div class="single-edc-box">
										<div class="single-edc-remove-box">
											<div class="cd-resume-cancel">
												<form method="POST" action="{{ route('education.delete', $education->id) }}">
													@csrf
													@method('DELETE')
													<button type="submit" class="cancel-link btn p-0 text-danger"><i class="fa-solid fa-xmark"></i></button>
												</form>
											</div>
										</div>
										<div class="single-edc-title-box">
											<a class="btn btn-collapse" data-bs-toggle="collapse" href="#edu-{{ $education->id }}">{{ $education->title }}</a>
										</div>
									</div>
									<div class="single-edc-caption">
										<div class="collapse" id="edu-{{ $education->id }}">
											<div class="card card-body">
												<p><strong>Academy:</strong> {{ $education->academy_name }}</p>
												<p><strong>Year:</strong> {{ \Carbon\Carbon::parse($education->passing_year)->format('Y') }}</p>
												<p><strong>Description:</strong><br>{{ $education->description }}</p>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								<div class="single-edc-wrap">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#education" class="add-light-btn">Add More Education</a>
								</div>
								
							</div>
						</div>	
						<!-- End Row -->
						
					<!-- Row Start -->
						<div class="card">
							<div class="card-header">
								<h4>Experience</h4>
							</div>
							<div class="card-body">
								<!-- Loop through experiences -->
								@foreach ($experiences as $index => $experience)
									<div class="single-edc-wrap">
										<div class="single-edc-box">
											<div class="single-edc-remove-box">
												<div class="cd-resume-cancel">
													<form action="{{ route('experience.destroy', $experience->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this experience?')">
														@csrf
														@method('DELETE')
														<button type="submit" class="cancel-link btn btn-sm btn-danger"><i class="fa-solid fa-xmark"></i></button>
													</form>
												</div>
											</div>
											<div class="single-edc-title-box">
												<a class="btn btn-collapse" data-bs-toggle="collapse" href="#exp{{ $index }}" role="button" aria-expanded="false" aria-controls="exp{{ $index }}">
													{{ $experience->job_title }}
												</a>
											</div>
										</div>
										<div class="single-edc-caption">
											<div class="collapse" id="exp{{ $index }}">
												<div class="card card-body">
													<form method="POST" action="">
														@csrf
														@method('PUT')

														<div class="row mb-3">
															<label class="col-md-2 col-form-label">Job Title</label>
															<div class="col-md-10">
																<input type="text" name="job_title" class="form-control" value="{{ $experience->job_title }}">
															</div>
														</div>
														<div class="row mb-3">
															<label class="col-md-2 col-form-label">Joining Date</label>
															<div class="col-md-10">
																<input type="date" name="joining_date" class="form-control" value="{{ $experience->joining_date }}">
															</div>
														</div>
														<div class="row mb-3">
															<label class="col-md-2 col-form-label">End Date</label>
															<div class="col-md-10">
																<input type="date" name="end_date" class="form-control" value="{{ $experience->end_date }}">
															</div>
														</div>
														<div class="row mb-3">
															<label class="col-md-2 col-form-label">Company Name</label>
															<div class="col-md-10">
																<input type="text" name="company_name" class="form-control" value="{{ $experience->company_name }}">
															</div>
														</div>
														<div class="row mb-3">
															<label class="col-md-2 col-form-label">Description</label>
															<div class="col-md-10">
																<textarea name="description" class="form-control ht-80">{{ $experience->description }}</textarea>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col-md-10 offset-md-2">
																<button type="submit" class="btn btn-sm btn-success">Update</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								@endforeach

								<!-- Add More Button -->
								<div class="single-edc-wrap">
									<a href="JavaScript:void(0);" data-bs-toggle="modal" data-bs-target="#experience" class="add-light-btn">Add More Experience</a>
								</div>
							</div>
						</div>
						<!-- End Row -->

						
						<!-- Row Start -->
						<div class="card">
							<div class="card-header">
								<h4>Award</h4>
							</div>					
								<!-- Single Award Wrap -->
								<div class="single-edc-wrap">
									<div class="single-edc-box">
										<div class="single-edc-remove-box"><div class="cd-resume-cancel"><a href="JavaScript:Void(0);" class="cancel-link"><i class="fa-solid fa-xmark"></i></a></div></div>
										<div class="single-edc-title-box">
											<a class="btn btn-collapse" data-bs-toggle="collapse" href="#FIFFA" role="button" aria-expanded="false" aria-controls="FIFFA">FIFFA Award</a>
										</div>
									</div>
									<div class="single-edc-caption">
										<div class="collapse" id="FIFFA">
											<div class="card card-body">
												<form>
													<div class="row mb-3">
														<label class="col-md-2 col-form-label">Award Title</label>
														<div class="col-md-10">
															<input type="text" class="form-control" value="FIFFA ICL">
														</div>
													</div> 
													<div class="row mb-3">
														<label class="col-md-2 col-form-label">Award Year</label>
														<div class="col-md-10">
															<input type="text" class="form-control" value="01-12-2022">
														</div>
													</div>
													<div class="row mb-3">
														<label class="col-md-2 col-form-label">Description</label>
														<div class="col-md-10">
															<textarea class="form-control ht-80">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</textarea>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
								<div class="single-edc-wrap">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#award" class="add-light-btn">Add More Award</a>
								</div>
							</div>
						</div>	
						<!-- End Row -->        
					</div>
					<!-- Submit Busston -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="btn ft--medium btn-primary">Save Resume</button>
							</div>	
						</div>
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<!-- education Modal -->
			<!-- Education Modal -->
			<div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered education-pop-form" role="document">
					<div class="modal-content" id="educationmodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-body">
							<div class="text-center">
								<h4 class="mb-3">Add your Education</h4>
							</div>
							<div class="added-form">
								<form action="{{ route('education.store') }}" method="POST">
									@csrf
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Education Title</label>
										<div class="col-md-12">
											<input type="text" name="title" class="form-control" required>
										</div>
									</div> 
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Academy Name</label>
										<div class="col-md-12">
											<input type="text" name="academy_name" class="form-control" required>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Passing Year</label>
										<div class="col-md-12">
											<input type="text" name="passing_year" class="form-control" placeholder="e.g. 2022" required>
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Description</label>
										<div class="col-md-12">
											<textarea name="description" class="form-control ht-80" rows="4" required></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-12">
											<button type="submit" class="btn full-width btn-primary">Save Education</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- End Modal -->
			
			
		    <!-- Experience Modal -->
			<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered experience-pop-form" role="document">
				<div class="modal-content" id="experiencemodal">
				<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
				<div class="modal-body">
					<div class="text-center">
					<h4 class="mb-3">Add your Experience</h4>
					</div>
					<div class="added-form">
					<form method="POST" action="{{ route('experience.store') }}">
						@csrf
						<div class="row mb-3">
						<label class="col-md-12 col-form-label" for="job_title">Job Title</label>
						<div class="col-md-12">
							<input type="text" id="job_title" name="job_title" class="form-control" required>
						</div>
						</div> 
						<div class="row mb-3">
						<label class="col-md-12 col-form-label" for="joining_date">Joining Date</label>
						<div class="col-md-12">
							<input type="date" id="joining_date" name="joining_date" class="form-control" required>
						</div>
						</div>
						<div class="row mb-3">
						<label class="col-md-12 col-form-label" for="end_date">End Date</label>
						<div class="col-md-12">
							<input type="date" id="end_date" name="end_date" class="form-control" required>
						</div>
						</div>
						<div class="row mb-3">
						<label class="col-md-12 col-form-label" for="company_name">Company Name</label>
						<div class="col-md-12">
							<input type="text" id="company_name" name="company_name" class="form-control" required>
						</div>
						</div>
						<div class="row mb-3">
						<label class="col-md-12 col-form-label" for="description">Description</label>
						<div class="col-md-12">
							<textarea id="description" name="description" class="form-control ht-80" required></textarea>
						</div>
						</div>
						<div class="row mb-3">
						<div class="col-md-12">
							<button type="submit" class="btn full-width btn-primary">Save Experience</button>
						</div>
						</div>
					</form>
					</div>
				</div>
				</div>
			</div>
			</div>
			<!-- End Modal -->

			<!-- Award Modal -->
			<div class="modal fade" id="award" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered award-pop-form" role="document">
					<div class="modal-content" id="awardmodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-body">
							<div class="text-center">
								<h4 class="mb-3">Add your Award</h4>
							</div>
							<div class="added-form">
								<form>
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Award Title</label>
										<div class="col-md-12">
											<input type="text" class="form-control">
										</div>
									</div> 
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Award Year</label>
										<div class="col-md-12">
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="row mb-3">
										<label class="col-md-12 col-form-label">Description</label>
										<div class="col-md-12">
											<textarea class="form-control ht-80"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-12">
											<button type="submit" class="btn full-width btn-primary">Save Award</button>
										</div>
									</div>
								</form>
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


@endsection