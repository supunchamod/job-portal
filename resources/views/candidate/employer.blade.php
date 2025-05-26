@extends('layouts.main')
@section('content')

	<!-- ============================ Page Title Start================================== -->
			<div class="page-title primary-bg-dark" style="background:url(assets/img/bg2.png) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Employer List Style 01</h2>
							<div class="breadcrumbs light">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Home</a></li>
										<li class="breadcrumb-item"><a href="JavaScript:Void(0);">Employer</a></li>
										<li class="breadcrumb-item active" aria-current="page">Employer List 01</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All List Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row">
					
						<!-- Search Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="side-widget-blocks">							
							
								<div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
									<h4 class="fs-bold fs-lg mb-0">Search Filter</h4>
									<div class="ssh-header">
										<a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
										<a href="#search_open" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="fa-solid fa-filter"></i></a>
									</div>
								</div>
								
								<!-- Find New Property -->
								<div class="sidebar-widgets collapse miz_show" id="search_open" data-bs-parent="#search_open">
									<div class="search-inner">
										<div class="side-widget-inner">
										
											<div class="form-group">
												<label>Search By Keyword</label>
												<div class="form-group-inner">
													<input type="text" class="form-control" placeholder="Search by keywords...">
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Category</label>
												<div class="form-group-inner">
													<select>
														<option value="0">Choose category</option>
														<option value="1">Health & Medical</option>
														<option value="2">Bank & Advisory</option>
														<option value="3">Design & UI</option>
														<option value="4">Development</option>
														<option value="5">Automotive Jobs</option>
														<option value="6">Software & Consultancy</option>
														<option value="7">Other Services</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label>Radius in Miles</label>
												<div class="form-group-inner">
													<div class="rg-slider">
														 <input type="text" class="js-range-slider" name="my_range" value="">
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Experience Level</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="d1" class="form-check-input" name="ADA" type="checkbox" checked="">
																<label for="d1" class="form-check-label">Beginner (54)</label>
															</li>
															<li>
																<input id="d2" class="form-check-input" name="Parking" type="checkbox">
																<label for="d2" class="form-check-label">1+ Year (32)</label>
															</li>
															<li>
																<input id="d3" class="form-check-input" name="Coffee" type="checkbox">
																<label for="d3" class="form-check-label">2 Year (09)</label>
															</li>
															<li>
																<input id="d4" class="form-check-input" name="Mother" type="checkbox">
																<label for="d4" class="form-check-label">3+ Year (16)</label>
															</li>
															<li>
																<input id="d5" class="form-check-input" name="Outdoor" type="checkbox">
																<label for="d5" class="form-check-label">4+ Year (17)</label>
															</li>
															<li>
																<input id="d6" class="form-check-input" name="Pet" type="checkbox">
																<label for="d6" class="form-check-label">5+ Year (22)</label>
															</li>
															<li>
																<input id="d7" class="form-check-input" name="Beauty" type="checkbox">
																<label for="d7" class="form-check-label">10+ Year (32)</label>
															</li>
														</ul>
													</div>	
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Type</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="e2" class="form-check-input" name="jtype" type="radio">
																<label for="e2" class="form-check-label">Full time</label>
															</li>
															<li>
																<input id="e3" class="form-check-input" name="jtype" type="radio">
																<label for="e3" class="form-check-label">Part Time</label>
															</li>
															<li>
																<input id="e4" class="form-check-input" name="jtype" type="radio" checked="">
																<label for="e4" class="form-check-label">Contract Base</label>
															</li>
															<li>
																<input id="e5" class="form-check-input" name="jtype" type="radio">
																<label for="e5" class="form-check-label">Internship</label>
															</li>
															<li>
																<input id="e6" class="form-check-input" name="jtype" type="radio">
																<label for="e6" class="form-check-label">Regular</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Job Lavel</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="f1" class="form-check-input" name="ADA" type="checkbox" checked="">
																<label for="f1" class="form-check-label">Team Leader</label>
															</li>
															<li>
																<input id="f2" class="form-check-input" name="Parking" type="checkbox">
																<label for="f2" class="form-check-label">Manager</label>
															</li>
															<li>
																<input id="f3" class="form-check-input" name="Coffee" type="checkbox">
																<label for="f3" class="form-check-label">Junior</label>
															</li>
															<li>
																<input id="f4" class="form-check-input" name="Coffee" type="checkbox">
																<label for="f4" class="form-check-label">Senior</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Posted Date</label>
												<div class="form-group-inner">
													<div class="inner_widget_link">
														<ul class="no-ul-list filter-list">
															<li>
																<input id="l1" class="form-check-input" name="hour" type="checkbox" checked="">
																<label for="l1" class="form-check-label">Last Hour</label>
															</li>
															<li>
																<input id="l2" class="form-check-input" name="days" type="checkbox">
																<label for="l2" class="form-check-label">Last 24 hour</label>
															</li>
															<li>
																<input id="l3" class="form-check-input" name="week" type="checkbox">
																<label for="l3" class="form-check-label">Last Week</label>
															</li>
															<li>
																<input id="l4" class="form-check-input" name="month" type="checkbox">
																<label for="l4" class="form-check-label">Last 30 Days</label>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="form-group mb-1">
												<button type="button" class="btn btn-lg btn-primary fs-6 fw-medium full-width">Search job</button>
											</div>
										
										</div>

									</div>							
								</div>
							</div>							
						</div>
						<!-- Sidebar End -->
						
						<!-- Job List Wrap -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							
							<!-- Start All List -->
							<div class="row justify-content-start gx-3 gy-4">
						
								@foreach ($companies as $company)
								<div class="col-xl-12 col-lg-12 col-md-12 col-12">
									<div class="emplors-list-box border">
										<div class="emplors-list-head mb-0">
											<div class="emplors-list-head-thunner">
												<div class="emplors-list-emp-thumb">
													<a href="{{ route('company.show', $company->slug) }}">
														<figure>
															<img src="{{ asset($company->logo ?? 'assets/img/l-1.png') }}" class="img-fluid" alt="{{ $company->name }}">
														</figure>
													</a>
												</div>
												<div class="emplors-list-job-caption">
													<div class="emplors-job-types-wrap mb-1">
														{{-- Example: show number of openings if you track it, else hide or static --}}
														<span class="label text-light bg-success">
															{{ $company->jobs->count() }} Openings
														</span>
													</div>
													<div class="emplors-job-title-wrap mb-1">
														<h4><a href="{{ route('company.show', $company->slug) }}" class="emplors-job-title">{{ $company->name }}</a></h4>
													</div>
													<div class="emplors-job-mrch-lists">
														<div class="single-mrch-lists">
															<span>{{ $company->company_type ?? 'Software & Consultancy' }}</span>.
															<span><i class="fa-solid fa-location-dot me-1"></i>{{ $company->location }}</span>.
															<span>Est: {{ $company->established }}</span>
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
							</div>
							<!-- End All Job List -->
							
							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<nav aria-label="Page navigation example">
										  <ul class="pagination">
											<li class="page-item">
											  <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											  </a>
											</li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
											<li class="page-item active"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
											<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
											<li class="page-item">
											  <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											  </a>
											</li>
										  </ul>
									</nav>
								</div>
							</div>
					
						</div>
						<!-- Job List Wrap End-->
						
					</div>
				</div>		
			</section>
			<!-- ============================ All List Wrap ================================== -->

@endsection