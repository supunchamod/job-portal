@extends('layouts.main')
@section('content')

			<!-- ============================ Page Title Start================================== -->
			<div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Jobs</h2>
							<div class="breadcrumbs light">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Job</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All List Wrap ================================== -->
			<section class="gray-simple">
			
				<div class="container">
					
					<div class="row">
					
						<!-- Search Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<div class="bg-white rounded mb-3">							
							
								<div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
									<h4 class="fs-bold fs-5 mb-0">Search Filter</h4>
									<div class="ssh-header">
										<a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
										<a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
									</div>
								</div>
								
								<!-- Find New Property -->
                            <form method="GET" action="{{ route('jobs.index') }}">
								<div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open">
									
									<div class="search-inner">
										
										<div class="filter-search-box px-4 pt-3">
											<div class="form-group">
												<input type="text" class="form-control" name="keyword" placeholder="Search by keywords..." value="{{ request('keyword') }}">
											</div>
											<div class="form-group">
                                                <input type="text" name="location" class="form-control" placeholder="Location, Zip..."
                                                    value="{{ request('location') }}">
                                            </div>
										</div>
										
										<div class="filter_wraps">
											
											<!-- Job categories Search -->
											<div class="single_search_boxed px-4 pt-0 br-bottom">
												<div class="widget-boxed-header">
													<h4>
														<a href="#categories" class="ft-medium fs-md" data-bs-toggle="collapse" aria-expanded="true" role="button">Job Categories</a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse show" id="categories" data-bs-parent="#categories">
                                                <div class="side-list no-border">
                                                    <div class="single_filter_card">
                                                        <div class="card-body p-0">
                                                            <div class="inner_widget_link">
                                                                <ul class="no-ul-list filter-list">
                                                                    @foreach ($categories as $category)
                                                                        <li>
                                                                            <input
                                                                                type="checkbox"
                                                                                class="form-check-input"
                                                                                id="cat{{ $category->id }}"
                                                                                name="categories[]"
                                                                                value="{{ $category->id }}"
                                                                                {{ in_array($category->id, request()->get('categories', [])) ? 'checked' : '' }}
                                                                            >
                                                                            <label for="cat{{ $category->id }}" class="form-check-label">
                                                                                {{ $category->name }} ({{ $category->jobs_count }})
                                                                            </label>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											</div>								
										</div>
										
										<div class="form-group filter_button pt-3 pb-3 px-4">
											<button type="submit" class="btn btn-primary full-width">Search job</button>
										</div>
                                </form>
									</div>							
								</div>
							</div>
							
							<!-- Alert Box -->
							<div class="alert-jbemail-box bg-cover" style="background:#016551 url(assets/img/alert-bg.png)no-repeat;" overlay="0">
								<div class="alert-bxr-wrap">
									<div class="alert-bxr-captions mb-3">
										<h3 class="text-light">Get The Latest Jobs Right Into Your Inbox!</h3>
										<p class="text-light opacity-75">We just want your email address!</p>
									</div>
									<div class="alert-bxr-forms">
										<form>
											<div class="newsltr-form">
												<input type="text" class="form-control" placeholder="Enter Your email">
												<button type="button" class="btn btn-subscribe bg-dark">Subscribe</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
						<!-- Sidebar End -->
						
						<div class="col-lg-8 col-md-12 col-sm-12">
						
							<div class="row justify-content-center mb-4">
								<div class="col-lg-12 col-md-12">
									<div class="item-shorting-box">
										<div class="item-shorting clearfix">
											<div class="left-column"><h4 class="m-sm-0 mb-2">Showing 1 - 10 of 20 Results</h4></div>
										</div>
										<div class="item-shorting-box-right">
											<div class="shorting-by me-2 small">
												<select>
													<option value="0">Short by (Default)</option>
													<option value="1">Short by (Featured)</option>
													<option value="2">Short by (Urgent)</option>
													<option value="3">Short by (Post Date)</option>
												</select>
											</div>
											<div class="shorting-by small">
												<select>
													<option value="0">10 Per Page</option>
													<option value="1">20 Per Page</option>
													<option value="2">50 Per Page</option>
													<option value="3">10 Per Page</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row justify-content-center gx-xl-3 gx-3 gy-4">
                        @foreach($jobs as $job)
                        <!-- Single Item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="job-instructor-layout border">
                                <!-- Featured/Urgent Tags -->
                                <div class="left-tags-capt">
									@if($job->is_featured)
                                    <span class="featured-text">Featured</span>
                                    @endif
                                    @if($job->is_urgent)
                                    <span class="urgent">Urgent</span>
                                    @endif
								</div>
                                
                                <!-- Job Type Badge -->
                                <div class="brows-job-type">
                                    <span class="{{ str_replace('-', '', $job->type) }}">
                                        {{ ucfirst($job->type) }}
                                    </span>
                                </div>
                                
                                <!-- Company Logo -->
                                <div class="job-instructor-thumb">
                                    <a href="">
                                        <img src="{{ $job->company->logo }}" 
                                            class="img-fluid" 
                                            alt="{{ $job->company->name }}">
                                    </a>
                                </div>
                                
                                <!-- Job Details -->
                                <div class="job-instructor-content">
                                    <h4 class="instructor-title">
                                        <a href="{{ route('jobs.show', $job->slug) }}">{{ $job->title }}</a>
                                    </h4>
                                    <div class="instructor-skills">
                                        {{ $job->technologies ?? 'PHP, Laravel, MySQL' }}
                                    </div>
                                </div>
                                
                                <!-- Footer with Salary and Apply Button -->
                                <div class="job-instructor-footer">
                                    <div class="instructor-students">
                                        <h5 class="instructor-scount">
                                            @if($job->salary)
                                                ${{ number_format($job->salary/1000) }}K
                                                @if($job->salary_max)
                                                    - ${{ number_format($job->salary_max/1000) }}K
                                                @endif
                                            @else
                                                Negotiable
                                            @endif
                                        </h5>
                                    </div>
                                    <div class="instructor-corses">
                                        <a href="{{ route('jobs.show', $job->slug) }}" class="c-counting">Apply Job</a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        @endforeach
                    </div> 
							
						<!-- Custom Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">

                                    {{-- Previous Page Link --}}
                                    <li class="page-item {{ $jobs->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $jobs->previousPageUrl() ?? '#' }}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    {{-- Pagination Elements --}}
                                    @for ($i = 1; $i <= $jobs->lastPage(); $i++)
                                        <li class="page-item {{ $jobs->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $jobs->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    {{-- Next Page Link --}}
                                    <li class="page-item {{ !$jobs->hasMorePages() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $jobs->nextPageUrl() ?? '#' }}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

					
						</div>
						
					</div>
				</div>		
			</section>
			<!-- ============================ All List Wrap ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-cover primary-bg-dark" style="background:url(assets/img/footer-bg-dark.png)no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
							
							<div class="call-action-wrap">
								<div class="sec-heading center">
									<h2 class="lh-base mb-3 text-light">Find The Perfect Job<br>on Job Stock That is Superb For You</h2>
									<p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
								</div>
								<div class="call-action-buttons mt-3">
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-primary fw-medium px-xl-5 px-lg-4 me-2">Upload resume</a>
									<a href="JavaScript:Void(0);" class="btn btn-lg btn-whites fw-medium px-xl-5 px-lg-4 text-primary">Join Our Team</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
						
@endsection