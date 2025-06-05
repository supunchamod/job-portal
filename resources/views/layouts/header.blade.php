		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
                        <div class="header header-light">
                            <div class="container">
                                <nav id="navigation" class="navigation navigation-landscape">
                                    <div class="nav-header">
                                        <a class="nav-brand" href="#">
                                            <img src="assets/img/logo.png" class="logo" alt="">
                                        </a>
                                        <div class="nav-toggle"></div>
                                        <div class="mobile_nav">
                                            <ul>
                                                <li class="list-buttons">
                                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Log In</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @if(Auth::check() && Auth::user()->role === 'candidate')
                                    <div class="nav-menus-wrapper">
                                        <ul class="nav-menu">
                                        
                                            <li class="active"><a href="/">Home<span class="submenu-indicator"></span></a>
                                            </li>
                                            
                                            <li><a href="/jobs">Jobs<span class="submenu-indicator"></span></a>
                                            </li>

                                            <li><a href="JavaScript:Void(0);">For Candidate<span class="submenu-indicator"></span></a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li>
                                                        <a href="/candidate-dashboard">Candidate Dashboard<span class="new-update">New</span></a>                                
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="/employer/list">Employers<span class="submenu-indicator"></span></a></li>
                                            
                                            <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="about-us.html">About Us</a></li> 
                                                    <li><a href="404.html">Error Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>										
                                                    <li><a href="blog.html">Blogs Page</a></li>                                    
                                                    <li><a href="blog-detail.html">Blog Detail</a></li>                                    
                                                    <li><a href="privacy.html">Terms & Privacy</a></li> 
                                                    <li><a href="pricing.html">Pricing</a></li>  
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="contact.html">Contacts</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="#">Help</a></li>
                                            
                                        </ul>
                                            <ul class="nav-menu nav-menu-social align-to-right dhsbrd">
                                                <!-- Notifications -->
                                         


                                    <!-- Account Dropdown -->
                                    <li>
                                        <div class="btn-group account-drop">
                                            <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/user-5.png') }}" class="img-fluid circle" alt="">
                                            </button>
                                            <div class="dropdown-menu pull-right animated flipInX">
                                                <div class="drp_menu_headr bg-primary">
                                                    <h4>Hi, {{ Auth::user()->name }}</h4>
                                                    <div class="drp_menu_headr-right">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-whites">Logout</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><a href="{{ route('employer.list') }}"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>                                  
                                                    <li><a href="/my-profile"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
                                                    <li><a href="/candidate/resume"><i class="fa fa-file"></i>My Resume</a></li>
                                                    <li><a href="#"><i class="fa-solid fa-bookmark"></i>Saved Resume</a></li>
                                                    <li><a href="#"><i class="fa fa-envelope"></i>Messages</a></li>
                                                    <li><a href="/password/reset"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                                    <li><a href="/candidate/delete-account"><i class="fa-solid fa-trash-can"></i>Delete Account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-buttons ms-2">
									<a href="employer-submit-job.html"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Post Job</a>
								    </li>
                                </ul>
                            @endif
                            
                            @if(Auth::check() && Auth::user()->role === 'employer')

                                	<div class="nav-menus-wrapper">
                                        <ul class="nav-menu">
                                        
                                            <li class="/employer"><a href="JavaScript:Void(0);">Home<span class="submenu-indicator"></span></a>
                                            </li>
                                            
                                            <li><a href="/candidates/list">Candidate<span class="submenu-indicator"></span></a>
                                            </li>
                                            
                                            <li><a href="JavaScript:Void(0);">For Employer<span class="submenu-indicator"></span></a>
                                                <ul class="nav-dropdown nav-submenu">
                                                        <a href="/employer/dashboard">Employer Dashboard<span class="new-update">New</span></a>                                
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="about-us.html">About Us</a></li> 
                                                    <li><a href="404.html">Error Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>										
                                                    <li><a href="blog.html">Blogs Page</a></li>                                    
                                                    <li><a href="blog-detail.html">Blog Detail</a></li>                                    
                                                    <li><a href="privacy.html">Terms & Privacy</a></li> 
                                                    <li><a href="pricing.html">Pricing</a></li>  
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="contact.html">Contacts</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="#">Help</a></li>
                                            
                                        </ul>
                                        
                                        <ul class="nav-menu nav-menu-social align-to-right dhsbrd">
                                            <li>
                                                <div class="btn-group account-drop">
                                                    <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-regular fa-comments"></i><span class="noti-status"></span>
                                                    </button>
                                                    <div class="dropdown-menu pull-right animated flipInX">
                                                        <div class="drp_menu_headr bg-primary">
                                                            <h4>Notifications</h4>
                                                        </div>
                                                        <div class="ntf-list-groups">
                                                            <div class="ntf-list-groups-single">
                                                                <div class="ntf-list-groups-icon text-purple"><i class="fa-solid fa-house-medical-circle-check"></i></div>
                                                                <div class="ntf-list-groups-caption"><p class="small"><strong>Kr. Shaury Preet</strong> Replied Your Message</p></div>
                                                            </div>
                                                            <div class="ntf-list-groups-single">
                                                                <div class="ntf-list-groups-icon text-warning"><i class="fa-solid fa-envelope"></i></div>
                                                                <div class="ntf-list-groups-caption"><p class="small">Mortin Denver Accepted Your Resume <strong class="text-success">On Job Stock</strong></p></div>
                                                            </div>
                                                            <div class="ntf-list-groups-single">
                                                                <div class="ntf-list-groups-icon text-success"><i class="fa-solid fa-sack-dollar"></i></div>
                                                                <div class="ntf-list-groups-caption"><p class="small">Your Job #456256 Expired Yesterday <strong>View job</strong></p></div>
                                                            </div>
                                                            <div class="ntf-list-groups-single">
                                                                <div class="ntf-list-groups-icon text-danger"><i class="fa-solid fa-comments"></i></div>
                                                                <div class="ntf-list-groups-caption"><p class="small"><strong>Daniel kurwa</strong> Has Been Approved Your Resume!.</p></div>
                                                            </div>
                                                            <div class="ntf-list-groups-single">
                                                                <div class="ntf-list-groups-icon text-info"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                                                                <div class="ntf-list-groups-caption"><p class="small">Khushi Verma Left A Review On <strong class="text-danger">Your Message</strong></p></div>
                                                            </div>
                                                            <div class="ntf-list-groups-single">
                                                                <a href="#" class="ntf-more">View All Notifications</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                        <div class="btn-group account-drop">
                                                            <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="assets/img/user-5.png" class="img-fluid circle" alt="">
                                                            </button>
                                                            <div class="dropdown-menu pull-right animated flipInX">
                                                                <div class="drp_menu_headr bg-primary">
                                                            <h4>Hi, {{ Auth::user()->name }}</h4>
                                                            <div class="drp_menu_headr-right">
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-whites">Logout</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li><a href="candidate-dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>                                  
                                                            <li><a href="candidate-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
                                                            <li><a href="candidate-resume.html"><i class="fa fa-file"></i>My Resume<span class="notti_coun style-2">7</span></a></li>
                                                            <li><a href="candidate-saved-jobs.html"><i class="fa-solid fa-bookmark"></i>Saved Resume</a></li>
                                                            <li><a href="candidate-messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                                                            <li><a href="candidate-change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                                                            <li><a href="candidate-delete-account.html"><i class="fa-solid fa-trash-can"></i>Delete Account</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-buttons ms-2">
                                                <a href="employer-submit-job.html"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Post Job</a>
                                            </li>
                                        </ul>
                                    </div>

                            @endif
							
							@guest
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li>
                                    <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login">
                                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                                    </a>
                                </li>
                                <li class="list-buttons ms-2">
                                    <a href="/register">
                                        <i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Resume
                                    </a>
                                </li>
                            </ul>
                            @endguest

						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->