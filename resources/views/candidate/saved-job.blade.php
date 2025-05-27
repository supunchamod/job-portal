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
								<li class="active"><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark me-2"></i>Shortlist Jobs</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Saved jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Candidate</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">Shortlisted jobs</a></li>
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
                                            <form method="GET" action="{{ route('candidate.saved.jobs') }}">
                                                <div class="search-inline">
                                                    <input type="text" class="form-control" name="search" placeholder="Job title, Keywords etc." value="{{ request('search') }}">
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </form>
                                        </div>
										</div>
									</div>
									<div class="card-body">
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
									
											<!-- Single Item -->
                                            @foreach ($jobs as $job)
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="jbs-list-box border">
                                                    <div class="jbs-list-head mb-0">
                                                        <div class="jbs-list-head-thunner">
                                                            <div class="jbs-list-emp-thumb jbs-verified">
                                                                <a href="{{ route('jobs.show', $job->slug) }}">
                                                                    <figure>
                                                                        <img src="{{ asset($job->company->logo ?? 'assets/img/l-1.png') }}" class="img-fluid" alt="">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                            <div class="jbs-list-job-caption">
                                                                <div class="jbs-job-types-wrap mb-1">
                                                                    <span class="label text-success bg-light-success">{{ $job->job_type ?? 'N/A' }}</span>
                                                                </div>
                                                                <div class="jbs-job-title-wrap">
                                                                    <h4><a href="{{ route('jobs.show', $job->slug) }}" class="jbs-job-title">{{ $job->title }}</a></h4>
                                                                </div>
                                                                <div class="jbs-job-mrch-lists">
                                                                    <div class="single-mrch-lists">
                                                                        <span>{{ $job->company->name ?? 'Company' }}</span>.
                                                                        <span><i class="fa-solid fa-location-dot me-1"></i>{{ $job->location }}</span>.
                                                                        <span>{{ $job->created_at->format('d M Y') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="jbs-list-head-middle">
                                                            <div class="elsocrio-jbs">
                                                                <span class="text-sm-muted">{{ $job->applications_count ?? '0' }} Applied</span>
                                                            </div>
                                                        </div>

                                                        <div class="jbs-list-head-middle">
                                                            <div class="elsocrio-jbs">
                                                                <span class="text-sm-muted text-light {{ $job->is_active ? 'bg-success' : 'bg-danger' }} py-2 px-3 rounded">
                                                                    {{ $job->is_active ? 'Active' : 'Inactive' }}
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="jbs-list-head-last">
                                                            <div class="d-flex">
                                                                <form id="unsave-form-{{ $job->id }}" action="{{ route('job.unsave', $job->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="btn btn-md btn-light-danger px-3 me-2 unsave-btn" data-job-id="{{ $job->id }}">
                                                                        <i class="fa-solid fa-xmark"></i>
                                                                    </button>
                                                                </form>
                                                                <a href="{{ route('jobs.show', $job->slug) }}" class="btn btn-md btn-light-primary px-3">View Detail</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

											
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
             <script>
    document.querySelectorAll('.unsave-btn').forEach(button => {
        button.addEventListener('click', function () {
            const jobId = this.getAttribute('data-job-id');

            Swal.fire({
                title: 'Are you sure?',
                text: "Remove this saved job?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, remove it!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`unsave-form-${jobId}`).submit();
                }
            });
        });
    });
</script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif

@endsection