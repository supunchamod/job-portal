@extends('layouts.main')
@section('content')

			<!-- ============================ Header Information Start================================== -->
			<section class="gray-simple">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="emplr-head-block">

                    {{-- Left Side: Logo, Openings, Name, Type, Location, Rating --}}
                    <div class="emplr-head-left d-flex align-items-center">
                        {{-- Logo --}}
                        <div class="emplr-head-thumb me-4">
                            <figure>
                                <img src="{{ asset($company->logo ?? 'assets/img/l-1.png') }}"
                                     class="img-fluid rounded"
                                     alt="{{ $company->name }}">
                            </figure>
                        </div>

                        {{-- Caption --}}
                        <div class="emplr-head-caption flex-grow-1">
                            {{-- Top row --}}
                            <div class="emplr-head-caption-top">

                                {{-- Openings --}}
                                <div class="emplr-yior-1 mb-2">
                                    <span class="label text-sm-muted text-success bg-light-success">
                                        {{ $company->jobs->count() }} Openings
                                    </span>
                                </div>

                                {{-- Company Name --}}
                                <div class="emplr-yior-2 mb-2">
                                    <h4 class="emplr-title">{{ $company->name }}</h4>
                                </div>

                                {{-- Meta: Type, Location, Rating --}}
                                <div class="emplr-yior-3 d-flex flex-wrap gap-3">
                                    <span><i class="fa-solid fa-building-shield me-1"></i>
                                        {{ $company->company_type ?? 'Software' }}
                                    </span>
                                    <span><i class="fa-solid fa-location-dot me-1"></i>
                                        {{ $company->location }}
                                    </span>
                                 
                                    <span class="text-light opacity-75">
                                        <i class="fa-solid fa-star me-1"></i>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Right Side: Follow & Write Review Buttons --}}
                    <div class="emplr-head-right mt-3 mt-md-0">
                        @auth
                            @if(auth()->user()->followedCompanies->contains($company->id))
                                <form action="{{ route('company.unfollow', $company->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Unfollow
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('company.follow', $company->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        Follow Now
                                    </button>
                                </form>
                            @endif
                        @endauth

                        <button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#review">
                            <i class="fa-solid fa-star me-2"></i>Write Review
                        </button>
                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<!-- ============================ Header Information End ================================== -->
			
			<!-- ============================ Full Candidate Details Start ================================== -->
			<section>
				<div class="container">
					<!-- row Start -->
					<div class="row">

						<div class="col-xl-8 col-lg-8 col-md-12">
							<div class="cdtsr-groups-block">
								
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>About Company</h5></div>
									<div class="single-cdtsr-body">
										<p> {{ $company->description }}</p>
									</div>
								</div>
                                <!-- 
								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>Company Services</h5></div>
									<div class="single-cdtsr-body">
										<div class="cndts-all-skills-list">
											<span>WordPress Developements</span>
											<span>Java Developements</span>
											<span>HTML To WordPress</span>
											<span>PHP Developements</span>
											<span>UI/UX Design</span>
											<span>Laravel</span>
											<span>Magento 2.0</span>
										</div>
									</div>
								</div> -->

								<div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>10 Openings</h5></div>
									<div class="single-cdtsr-body">
										<!-- Start All List -->
										<div class="row justify-content-start gx-3 gy-4">
									
											<!-- Single Item -->
											<div class="row gx-3 gy-4">
                                                @forelse($company->jobs as $job)
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="jbs-list-box border">
                                                            <div class="jbs-list-head d-flex align-items-center justify-content-between">

                                                                {{-- Left: Logo, Type, Title, Company, Location, Date --}}
                                                                <div class="d-flex align-items-center">
                                                                    <div class="jbs-list-emp-thumb jbs-verified me-3">
                                                                        <a href="{{ route('jobs.show', $job->slug) }}">
                                                                            <figure>
                                                                                <img src="{{ asset($company->logo ?? 'assets/img/l-1.png') }}"
                                                                                    class="img-fluid"
                                                                                    alt="{{ $company->name }}">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                    <div class="jbs-list-job-caption">
                                                                        <div class="jbs-job-types-wrap mb-1">
                                                                            <span class="label text-success bg-light-success">{{ ucfirst($job->type) }}</span>
                                                                        </div>
                                                                        <div class="jbs-job-title-wrap mb-1">
                                                                            <h4>
                                                                                <a href="{{ route('jobs.show', $job->slug) }}"
                                                                                class="jbs-job-title">{{ $job->title }}</a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="jbs-job-mrch-lists">
                                                                            <div class="single-mrch-lists">
                                                                                <span>{{ $company->name }}</span>.
                                                                                <span><i class="fa-solid fa-location-dot me-1"></i>{{ $job->location }}</span>.
                                                                                <span>{{ $job->created_at->format('d M Y') }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- Middle: Salary --}}
                                                                <div class="jbs-list-head-middle text-center">
                                                                    <div class="elsocrio-jbs">
                                                                        <div class="ilop-tr"><i class="fa-solid fa-sack-dollar"></i></div>
                                                                        <h5 class="jbs-list-pack">
                                                                            {{ $job->salary ?? 'Negotiable' }}<span class="patype">\PA</span>
                                                                        </h5>
                                                                    </div>
                                                                </div>

                                                                {{-- Right: Buttons --}}
                                                                <div class="jbs-list-head-last">
                                                                    <a href="{{ route('jobs.show', $job->slug) }}"
                                                                    class="btn btn-md btn-gray px-3 me-2">View Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="col-12">
                                                        <p class="text-muted">No current openings.</p>
                                                    </div>
                                                @endforelse
                                            </div>
										
										</div>
										<!-- End All Job List -->
									</div>
								</div>
                                
                                <div class="single-cdtsr-block">
									<div class="single-cdtsr-header"><h5>{{ $company->reviews->count() }} Reviews</h5></div>
									<div class="single-cdtsr-body">
										<!-- single Review -->
										@foreach ($company->reviews as $review)
                                        <div class="singleReviews border-bottom py-4">
                                            <div class="singlerev d-flex align-items-start justify-content-start gap-3">
                                                <div class="singlratebox bg-light rounded-3">
                                                    <div class="px-3 py-4 text-center">
                                                        <h3 class="m-0">{{ number_format($review->rating, 1) }}</h3>
                                                        <div class="d-flex align-items-center justify-content-center gap-1 text-xs">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if($i <= floor($review->rating))
                                                                    <i class="fa-solid fa-star text-warning"></i>
                                                                @elseif($i - $review->rating < 1)
                                                                    <i class="fa-solid fa-star-half text-warning"></i>
                                                                @else
                                                                    <i class="fa-regular fa-star text-warning"></i>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="reviewsCaption">
                                                    <div class="reviewsHeader mb-3">
                                                        <h4>{{ $review->title ?? 'Review' }}</h4>
                                                        <div class="d-flex align-items-center justify-content-start flex-wrap gap-2">
                                                            <div class="text-muted text-md">
                                                                <a href="#" class="text-primary">{{ $review->user->name }}</a>
                                                                ({{ $review->user->role ?? 'Employee' }}).
                                                            </div>
                                                            <div class="text-muted text-md">{{ $company->location ?? 'Location' }}</div>
                                                            <div class="text-muted text-md">{{ $review->created_at->format('F d, Y') }}</div>
                                                        </div>
                                                    </div>

                                                    <div class="reviewsDescription">
                                                        <p><strong>Feedback:</strong> {{ $review->comment }}</p>
                                                    </div>

                                                    <div class="d-block mt-4">
                                                        <div class="text-muted text-md mb-1">Was this review helpful?</div>
                                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                            <div class="d-first">
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-md btn-outline-primary">Yes</button>
                                                                    <button type="button" class="btn btn-md btn-outline-primary">No</button>
                                                                </div>
                                                            </div>
                                                            <div class="d-last d-flex align-items-center justify-content-end gap-3">
                                                                <a href="#" class="text-dark fw-medium"><i class="fa-regular fa-flag me-2"></i>Report</a>
                                                                <a href="#" class="text-dark fw-medium"><i class="fa-solid fa-up-right-from-square me-2"></i>Share</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
										
									</div>
									
									<div class="pagfooter mx-auto mb-3">
                                        <nav aria-label="Page navigation example" class="justify-content-center align-items-center">
                                            <ul class="pagination">
                                                {{-- Previous page link --}}
                                                <li class="page-item {{ $reviews->onFirstPage() ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $reviews->previousPageUrl() ?: 'javascript:void(0)' }}" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                </li>

                                                {{-- Page number links --}}
                                                @foreach ($reviews->getUrlRange(1, $reviews->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $page == $reviews->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                {{-- Next page link --}}
                                                <li class="page-item {{ $reviews->currentPage() == $reviews->lastPage() ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $reviews->nextPageUrl() ?: 'javascript:void(0)' }}" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

									
								</div>
							
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="eflorio-wrap-block mb-4">
                            <div class="eflorio-wrap-group">
                                <div class="eflorio-wrap-body">
                                    <div class="eflorio-list-groups">

                                        {{-- Email Address --}}
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-envelope-circle-check text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Email Address</label>
                                                <h6>{{ $company->email }}</h6>
                                            </div>
                                        </div>

                                        {{-- Contact No. (if you have a phone column) --}}
                                        @if(isset($company->phone))
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-phone-volume text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Contact No.</label>
                                                <h6>{{ $company->phone }}</h6>
                                            </div>
                                        </div>
                                        @endif

                                        {{-- Category (using company_type) --}}
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-layer-group text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Category</label>
                                                <h6>{{ $company->company_type ?? '—' }}</h6>
                                            </div>
                                        </div>

                                        {{-- Company Size --}}
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-user-group text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Company Size</label>
                                                <h6>{{ $company->company_size }}</h6>
                                            </div>
                                        </div>

                                        {{-- Location --}}
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-map-location-dot text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Location</label>
                                                <h6>{{ $company->location }}</h6>
                                            </div>
                                        </div>

                                        {{-- Established --}}
                                        <div class="single-eflorio-list">
                                            <div class="eflorio-list-icons"><i class="fa-solid fa-building-circle-check text-primary"></i></div>
                                            <div class="eflorio-list-captions">
                                                <label>Established</label>
                                                <h6>{{ $company->established }}</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="eflorio-wrap-footer">
                                    <div class="eflorio-footer-body">
                                        <a href="{{ $company->website }}" target="_blank" class="btn btn-primary fw-medium full-width">
                                            View Website
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="sidefr-usr-block">
                            <div class="cndts-share-block">
                                <div class="cndts-share-title">
                                    <h5>Share Profile</h5>
                                </div>
                                <div class="cndts-share-list">
                                    <ul class="d-flex gap-3">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->

                    </div>

						
					</div>
					<!-- /row -->					
				</div>	
			</section>
			<!-- ============================ Full Candidate Details End ================================== -->
             

            		<!-- Review Modal -->
                    <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="reviewmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered filter-popup" role="document">
                            <form action="{{ route('reviews.store') }}" method="POST" class="modal-content" id="reviewmodal">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}">
                                
                                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
                                <div class="modal-header">
                                    <h4 class="modal-header-sub-title">Share Your Feedback for {{ $company->name }}</h4>
                                </div>

                                <div class="modal-body p-0">
                                    <div class="filter-content">
                                        <div class="full-tabs-group">									

                                            <!-- Rating Section -->
                                            <div class="single-tabs-group">
                                                <div class="single-tabs-group-header"><h5>Rating</h5></div>
                                                <div class="single-tabs-group-content">
                                                    <div class="btn-group full-width" role="group" aria-label="Rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <input type="radio" class="btn-check" name="rating" id="rating{{ $i }}" value="{{ $i }}" required>
                                                            <label class="btn btn-md btn-outline-primary" for="rating{{ $i }}">{{ $i }}</label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Comment Section -->
                                            <div class="single-tabs-group">
                                                <div class="single-tabs-group-header"><h5>Write your feedback</h5></div>
                                                <div class="single-tabs-group-content">
                                                    <div class="d-flex flex-wrap">
                                                        <textarea class="form-control ht-150" name="comment" placeholder="Explain your review" required></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="filt-buttons-updates">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close Review</button>
                                        <button type="submit" class="btn btn-primary">Submit Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Modal -->


@endsection