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
								<li class="active"><a href="employer-submit-job.html"><i class="fa-solid fa-pen-ruler me-2"></i>Submit Jobs</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Post Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Post Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

                <div class="dashboard-widg-bar d-block">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <!-- Card Row -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Basic Detail</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jobs.store') }}" method="POST">
                                @csrf
                                
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="title">Job Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <input type="text" class="form-control" name="short_description" id="short_description" value="{{ old('short_description') }}">
                                            @error('short_description') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="description">Job Description</label>
                                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="responsibilities">Responsibilities</label>
                                            <textarea name="responsibilities" id="responsibilities" class="form-control">{{ old('responsibilities') }}</textarea>
                                            @error('responsibilities') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="requirements">Requirements</label>
                                            <textarea name="requirements" id="requirements" class="form-control">{{ old('requirements') }}</textarea>
                                            @error('requirements') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="category_id">Job Category</label>
                                            <div class="select-ops">
                                                <select name="category_id" id="category_id" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="type">Job Type</label>
                                            <div class="select-ops">
                                                <select name="type" id="type" class="form-control">
                                                    <option value="">-- Select Type --</option>
                                                    <option value="full-time" @selected(old('type') == 'full-time')>Full Time</option>
                                                    <option value="part-time" @selected(old('type') == 'part-time')>Part Time</option>
                                                    <option value="freelance" @selected(old('type') == 'freelance')>Freelance</option>
                                                    <option value="internship" @selected(old('type') == 'internship')>Internship</option>
                                                    <option value="contract" @selected(old('type') == 'contract')>Contract</option>
                                                </select>
                                            </div>
                                            @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_place">Job Place</label>
                                            <div class="select-ops">
                                                <select name="job_place" id="job_place" class="form-control">
                                                    <option value="">-- Select Job Place --</option>
                                                    <option value="remote" @selected(old('job_place') == 'remote')>Remote</option>
                                                    <option value="on-site" @selected(old('job_place') == 'on-site')>On-site</option>
                                                    <option value="hybrid" @selected(old('job_place') == 'hybrid')>Hybrid</option>
                                                </select>
                                            </div>
                                            @error('job_place') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_level">Job Level</label>
                                            <div class="select-ops">
                                                <select name="job_level" id="job_level" class="form-control">
                                                    <option value="">-- Select Level --</option>
                                                    <option value="team_leader" @selected(old('job_level') == 'team_leader')>Team Leader</option>
                                                    <option value="manager" @selected(old('job_level') == 'manager')>Manager</option>
                                                    <option value="junior" @selected(old('job_level') == 'junior')>Junior</option>
                                                    <option value="senior" @selected(old('job_level') == 'senior')>Senior</option>
                                                    <option value="other" @selected(old('job_level') == 'other')>Other</option>
                                                </select>
                                            </div>
                                            @error('job_level') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="experience">Experience</label>
                                            <div class="select-ops">
                                                <select name="experience" id="experience" class="form-control">
                                                    <option value="">-- Select Experience --</option>
                                                    <option value="fresher" @selected(old('experience') == 'fresher')>Fresher</option>
                                                    <option value="1+ years" @selected(old('experience') == '1+ years')>1+ Years</option>
                                                    <option value="2+ years" @selected(old('experience') == '2+ years')>2+ Years</option>
                                                    <option value="3+ years" @selected(old('experience') == '3+ years')>3+ Years</option>
                                                    <option value="4+ years" @selected(old('experience') == '4+ years')>4+ Years</option>
                                                    <option value="5+ years" @selected(old('experience') == '5+ years')>5+ Years</option>
                                                </select>
                                            </div>
                                            @error('experience') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="qualification">Qualification</label>
                                            <div class="select-ops">
                                                <select name="qualification" id="qualification" class="form-control">
                                                    <option value="">-- Select Qualification --</option>
                                                    <option value="10th class" @selected(old('qualification') == '10th class')>10th Class</option>
                                                    <option value="12th class" @selected(old('qualification') == '12th class')>12th Class</option>
                                                    <option value="bachelor degree" @selected(old('qualification') == 'bachelor degree')>Bachelor Degree</option>
                                                    <option value="master degree" @selected(old('qualification') == 'master degree')>Master Degree</option>
                                                    <option value="post graduate" @selected(old('qualification') == 'post graduate')>Post Graduate</option>
                                                    <option value="any other" @selected(old('qualification') == 'any other')>Any Other</option>
                                                </select>
                                            </div>
                                            @error('qualification') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div class="select-ops">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="">-- Select Gender --</option>
                                                    <option value="male" @selected(old('gender') == 'male')>Male</option>
                                                    <option value="female" @selected(old('gender') == 'female')>Female</option>
                                                    <option value="other" @selected(old('gender') == 'other')>Other</option>
                                                </select>
                                            </div>
                                            @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="min_salary">Min. Salary</label>
                                            <input type="text" class="form-control" name="min_salary" id="min_salary" value="{{ old('min_salary') }}">
                                            @error('min_salary') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="max_salary">Max. Salary</label>
                                            <input type="text" class="form-control" name="max_salary" id="max_salary" value="{{ old('max_salary') }}">
                                            @error('max_salary') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="total_openings">Total Openings</label>
                                            <div class="select-ops">
                                                <select name="total_openings" id="total_openings" class="form-control">
                                                    <option value="">-- Select Total Openings --</option>
                                                    @foreach(['1', '2', '3', '4', '5', '6', '10+'] as $option)
                                                        <option value="{{ $option }}" @selected(old('total_openings') == $option)>
                                                            {{ $option }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('total_openings') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="expired_date">Job Expired Date</label>
                                            <input type="date" class="form-control" name="expired_date" id="expired_date" value="{{ old('expired_date') }}">
                                            @error('expired_date') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_fee_type">Job Fee Type</label>
                                            <div class="select-ops">
                                                <select name="job_fee_type" id="job_fee_type" class="form-control">
                                                    <option value="">-- Select Fee Type --</option>
                                                    <option value="normal" @selected(old('job_fee_type') == 'normal')>Normal</option>
                                                    <option value="premium" @selected(old('job_fee_type') == 'premium')>Premium</option>
                                                    <option value="urgent" @selected(old('job_fee_type') == 'urgent')>Urgent</option>
                                                </select>
                                            </div>
                                            @error('job_fee_type') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="skills">Skills, Use Commas to separate</label>
                                            <input type="text" class="form-control" name="skills" id="skills" value="{{ old('skills') }}">
                                            @error('skills') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="permanent_address">Permanent Address</label>
                                            <input type="text" class="form-control" name="permanent_address" id="permanent_address" value="{{ old('permanent_address') }}">
                                            @error('permanent_address') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary w-100">Post Job</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>	
				</div>				
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('responsibilities');
    CKEDITOR.replace('requirements');
</script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session("success") }}',
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif

@endsection