@extends('layouts.main')

@section('content')

<!-- ============================ Page Title Start================================== -->
			<section class="bg-cover primary-bg-dark" style="background:url(assets/img/bg2.png)no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title text-light">Create An Account</h2>
							<span class="text-light opacity-75">Create an account or signin</span>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="vesh-detail-bloc">
                    <div class="vesh-detail-bloc-body pt-3">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="true">Login Account</button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Create Account</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab" tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">

                                        {{-- Display Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        {{-- Login Form --}}
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            
                                            <div class="form-floating mb-4">
                                                <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="name@example.com">
                                                <label for="email">User Name</label>
                                            </div>
                                            
                                            <div class="form-floating mb-4">
                                                <input type="password" name="password" required class="form-control" placeholder="Password">
                                                <label for="password">Password</label>
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                            </div>
                                            
                                            <div class="modal-flex-item mb-3">
                                                <div class="modal-flex-first">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                                        <label class="form-check-label" for="remember_me">Save Password</label>
                                                    </div>
                                                </div>
                                                <div class="modal-flex-last">
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}">Forget Password?</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="social-login">
                                        <ul>
                                            <li><a href="#" class="btn connect-fb"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                                            <li><a href="#" class="btn connect-google"><i class="fa-brands fa-google"></i> Google+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- /.tab-pane -->
                        </div> <!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection
