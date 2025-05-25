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
                        <a href="{{ route('candidate.profile') }}">
                            <figure>
                                <img src="{{ $info && $info->profile_image ? asset('storage/' . $info->profile_image) : asset('assets/img/team-2.jpg') }}" class="img-fluid circle" alt="User Image">
                            </figure>
                        </a>
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
                        <h4 class="jbs-tiosk-title">
                            <a href="{{ route('candidate.profile') }}">{{ $user->name }}</a>
                        </h4>
                        <div class="jbs-tiosk-subtitle">
                            <span>{{ $info->job_title ?? 'Job Title Not Set' }}</span>
                        </div>
                    </div>
                </div>

						<div class="dashboard-inner">
							<ul data-submenu-title="Main Navigation">
								<li><a href="candidate-dashboard.html"><i class="fa-solid fa-gauge-high me-2"></i>User Dashboard</a></li>
								<li class="active"><a href="candidate-profile.html"><i class="fa-regular fa-user me-2"></i>My Profile </a></li>
								<li><a href="candidate-resume.html"><i class="fa-solid fa-file-pdf me-2"></i>My Resumes</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Candidate Profile</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Candidate Profile</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
				<div class="dashboard-widg-bar d-block">

    <!-- Profile Wrapper -->
    <div class="dashboard-profle-wrapper mb-4">
        <div class="dash-prf-start">
            <div class="dash-prf-start-upper">
                <div class="dash-prf-start-thumb">
                    <figure>
                        <img src="{{ $info && $info->profile_image ? asset('storage/'.$info->profile_image) : asset('assets/img/team-1.jpg') }}" class="img-fluid circle" alt="">
                    </figure>
                </div>
            </div>
            <div class="dash-prf-start-bottom">
                <div class="upload-btn-wrapper small">
                    <button class="btn">Change Profile</button>
                    <input type="file" name="profile_image" form="profile-form">
                </div>
            </div>
        </div>
        <div class="dash-prf-end">
            <div class="dash-prfs-caption">
                <div class="dash-prfs-title">
                    <h4>{{ $user->name }}</h4>  
                </div>
                <div class="dash-prfs-subtitle">
                    <div class="jbs-job-mrch-lists">
                        <div class="single-mrch-lists">
                            <span>{{ $info->job_title ?? '' }}</span>.<span><i class="fa-solid fa-location-dot me-1"></i>{{ $info->address ?? '' }}</span>
                        </div>
                    </div>
                </div>
                <div class="jbs-grid-job-edrs-group mt-1">
                    @if(!empty($info->language))
                        @foreach(explode(',', $info->language) as $lang)
                            <span>{{ trim($lang) }}</span>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="dash-prf-caption-end">
                <div class="dash-prf-infos">
                    <div class="single-dash-prf-infos">
                        <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-envelope-open-text"></i></div>
                        <div class="single-dash-prf-infos-caption">
                            <p class="text-sm-muted mb-0">Email</p>
                            <h5>{{ $user->email }}</h5>
                        </div>
                    </div>
                    <div class="single-dash-prf-infos">
                        <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="single-dash-prf-infos-caption">
                            <p class="text-sm-muted mb-0">Call</p>
                            <h5>{{ $info->phone ?? 'N/A' }}</h5>
                        </div>
                    </div>
                    <div class="single-dash-prf-infos">
                        <div class="single-dash-prf-infos-icons"><i class="fa-solid fa-briefcase"></i></div>
                        <div class="single-dash-prf-infos-caption">
                            <p class="text-sm-muted mb-0">Exp.</p>
                            <h5>{{ $info->experience ?? 'N/A' }}</h5>
                        </div>
                    </div>
                </div>
                <div class="dash-prf-completion">
                    <p class="text-sm-muted">Profile Completed</p>
                    <div class="progress" role="progressbar">
                        <div class="progress-bar bg-success" style="width: 75%">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Form Start -->
    <form method="POST" action="{{ route('candidate-profile.update') }}" enctype="multipart/form-data" id="profile-form">
        @csrf

        <!-- Basic Detail Card -->
        <div class="card mb-3">
            <div class="card-header">
                <h4>Basic Detail</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Name -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                        </div>
                    </div>

                    <!-- Job Title -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $info->job_title ?? '') }}">
                        </div>
                    </div>

                    <!-- Age -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="{{ old('age', $info->age ?? '') }}">
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Education</label>
                            <select name="education" class="form-control">
                                <option value="">Select</option>
                                @foreach(['High School','Intermidiate','Bachelore Degree','Master Degree','Post Graduate'] as $edu)
                                    <option value="{{ $edu }}" {{ (old('education', $info->education ?? '') == $edu) ? 'selected' : '' }}>{{ $edu }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Experience -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Experience</label>
                            <select name="experience" class="form-control">
                                <option value="">Select</option>
                                @foreach(['Fresher','1+ Year','2+ Year','4+ Year','5+ Year'] as $exp)
                                    <option value="{{ $exp }}" {{ (old('experience', $info->experience ?? '') == $exp) ? 'selected' : '' }}>{{ $exp }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Language -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" name="language" class="form-control" value="{{ old('language', $info->language ?? '') }}" placeholder="e.g. English, French">
                        </div>
                    </div>

                    <!-- About -->
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>About Info</label>
                            <textarea name="about" class="form-control ht-80">{{ old('about', $info->about ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Detail Card -->
        <div class="card mb-3">
            <div class="card-header">
                <h4>Contact Detail</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Email -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Phone no.</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone', $info->phone ?? '') }}">
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address', $info->address ?? '') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Detail Card -->
        <div class="card mb-3">
            <div class="card-header">
                <h4>Social Login</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Facebook -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $info->facebook ?? '') }}">
                        </div>
                    </div>

                    <!-- LinkedIn -->
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>Linked In</label>
                            <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $info->linkedin ?? '') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn ft--medium btn-primary">Save Profile</button>
            </div>  
        </div>
    </form>
</div>
	
		
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->

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




@endsecction