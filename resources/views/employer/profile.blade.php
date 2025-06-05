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
									<a href="candidate-detail.html"><figure><img src="{{ asset($company->logo ?? 'assets/img/l-5.png') }}" class="img-fluid circle" alt=""></figure></a>
								</div>
							</div>
							<div class="jbs-grid-usrs-caption mb-3">
								<div class="jbs-kioyer">
									<span class="label text-light theme-bg">05 Openings</span>
								</div>
								<div class="jbs-tiosk">
									<h4 class="jbs-tiosk-title"><a href="candidate-detail.html">{{ $company->name }}</a></h4>
									<div class="jbs-tiosk-subtitle"><span><i class="fa-solid fa-location-dot me-2"></i>{{ $company->location }}</span></div>
								</div>
							</div>
						</div>
						<div class="dashboard-inner">
							<ul data-submenu-title="Main Navigation">
								<li><a href="employer-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li class="active"><a href="employer-profile.html"><i class="fa-regular fa-user me-2"></i>User Profile </a></li>
								<li><a href="employer-jobs.html"><i class="fa-solid fa-business-time me-2"></i>My Jobs</a></li>
								<li><a href="employer-submit-job.html"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Update Profile</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">My Profile</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
                        <form action="{{ route('employer.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="dashboard-profle-wrapper mb-4">
                                <div class="dash-prf-start">
                                    <div class="dash-prf-start-upper mb-2">
                                        <div class="dash-prf-start-thumb jbs-verified">
                                            <figure class="mb-0">
                                                <img src="{{ asset($company->logo ?? 'assets/img/l-5.png') }}" class="img-fluid rounded" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="dash-prf-start-bottom">
                                        <div class="upload-btn-wrapper small">
                                            <button class="btn">Change Profile</button>
                                            <input type="file" name="logo">
                                        </div>
                                    </div>
                                </div>

                                <div class="dash-prf-end">
                                    <div class="dash-prfs-caption emplyer">
                                        <div class="dash-prfs-flexfirst">
                                            <div class="dash-prfs-title">
                                                <h4>{{ $company->name }}</h4>
                                            </div>
                                            <div class="dash-prfs-subtitle">
                                                <div class="jbs-job-mrch-lists">
                                                    <div class="single-mrch-lists">
                                                        <span>{{ $company->company_type }}</span>.
                                                        <span><i class="fa-solid fa-location-dot me-1"></i>{{ $company->location }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dash-prf-caption-end">
                                        <div class="dash-prf-infos">
                                            <div class="single-dash-prf-infos">
                                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-envelope-open-text"></i></div>
                                                <div class="single-dash-prf-infos-caption">
                                                    <p class="text-sm-muted mb-0">Email</p>
                                                    <h5>{{ $company->email }}</h5>
                                                </div>
                                            </div>
                                            <div class="single-dash-prf-infos">
                                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-phone-volume"></i></div>
                                                <div class="single-dash-prf-infos-caption">
                                                    <p class="text-sm-muted mb-0">Call</p>
                                                    <h5>{{ $company->phone }}</h5>
                                                </div>
                                            </div>
                                            <div class="single-dash-prf-infos">
                                                <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-briefcase"></i></div>
                                                <div class="single-dash-prf-infos-caption">
                                                    <p class="text-sm-muted mb-0">Emp.</p>
                                                    <h5>{{ $company->company_size }}</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dash-prf-completion">
                                            <p class="text-sm-muted">Profile Completed</p>
                                            <div class="progress" role="progressbar" aria-label="Profile Completion" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-success" style="width: 75%">75%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Basic Details Card -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Basic Detail</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @php
                                            $types = ['Web & Application', 'Banking Services', 'UI/UX Design', 'IOS/App Application', 'Education'];
                                        @endphp

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Employer Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name', $company->name) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email', $company->email) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" class="form-control" name="phone" value="{{ old('phone', $company->phone) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control" name="website" value="{{ old('website', $company->website) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Founded Year</label>
                                                <input type="text" class="form-control" name="established" value="{{ old('established', $company->established) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Company Category</label>
                                                <select name="company_type" class="form-control">
                                                    @foreach($types as $type)
                                                        <option value="{{ $type }}" {{ old('company_type', $company->company_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Company Size</label>
                                                <input type="text" class="form-control" name="company_size" value="{{ old('company_size', $company->company_size) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control" name="location" value="{{ old('location', $company->location) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>About Company</label>
                                                <textarea class="form-control ht-80" name="description">{{ old('description', $company->description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links Card -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Social Links</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link', $company->facebook_link) }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>LinkedIn</label>
                                                <input type="text" class="form-control" name="linkedin_link" value="{{ old('linkedin_link', $company->linkedin_link) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn ft--medium btn-primary">Save Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                            
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
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

        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}",
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ session('error') }}",
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                });
            @endif
        </script>


@endsection