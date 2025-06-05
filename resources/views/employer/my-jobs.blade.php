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
								<li class="active"><a href="employer-jobs.html"><i class="fa-solid fa-business-time me-2"></i>My Jobs</a></li>
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
								<h1 class="mb-1 fs-3 fw-medium">Manage jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Employer</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="text-primary">My Jobs</a></li>
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
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <div class="col-xl-12">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-0">Upgrade Package - 10 Days Left</h6>
                                                    <span>Total Jobs: {{ $jobs->count() }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gx-3 gy-4">
                                            @forelse($jobs as $job)
                                            <div class="col-xl-12">
                                                <div class="jbs-list-box border">
                                                    <div class="jbs-list-head">
                                                        <div class="jbs-list-head-thunner">
                                                            <div class="jbs-list-emp-thumb jbs-verified">
                                                                <a href="#"><img src="{{ asset($job->company->logo ?? 'assets/img/l-1.png') }}" class="img-fluid" alt=""></a>
                                                            </div>
                                                            <div class="jbs-list-job-caption">
                                                                <div class="jbs-job-employer-wrap"><span>{{ $job->company->name ?? 'My Company' }}</span></div>
                                                                <div class="jbs-job-title-wrap">
                                                                    <h4><a href="#" class="jbs-job-title">{{ $job->title }}</a></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="jbs-list-applied-users">
                                                            <span class="text-sm-muted text-light bg-warning label">{{ $job->applications_count ?? 0 }} Applicants</span>
                                                        </div>
                                                        <div class="jbs-list-postedinfo">
                                                            <p class="m-0 text-sm-muted"><strong>Posted:</strong><span class="text-success">{{ $job->created_at->format('d M Y') }}</span></p>
                                                            <p class="m-0 text-sm-muted"><strong>Expired:</strong><span class="text-danger">{{ \Carbon\Carbon::parse($job->deadline)->format('d M Y') }}</span></p>
                                                        </div>
                                                        <div class="jbs-list-head-last">
                                                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button onclick="return confirm('Are you sure?')" class="rounded btn-md text-danger bg-light-danger px-3">
                                                                    <i class="fa-solid fa-trash-can"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <div class="col-12">
                                                <p>No jobs posted yet.</p>
                                            </div>
                                            @endforelse
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