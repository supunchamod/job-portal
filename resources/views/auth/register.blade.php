@extends('layouts.main')

@section('content')
<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-12">
                <div class="vesh-detail-bloc">
                    <div class="vesh-detail-bloc-body pt-3">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login Account</a>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-selected="true">Create Account</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                                <div class="row gx-3 gy-4">
                                    <div class="modal-login-form">

                                        {{-- Show validation errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        {{-- Registration Form --}}
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-floating mb-4">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                                                <label>Full Name</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <input type="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required>
                                                <label>Email</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <select name="role" class="form-select" required>
                                                    <option value="candidate" {{ old('role') == 'candidate' ? 'selected' : '' }}>Candidate</option>
                                                    <option value="employer" {{ old('role') == 'employer' ? 'selected' : '' }}>Employer</option>
                                                </select>
                                                <label for="role">Register As</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                <label>Password</label>
                                            </div>

                                            <div class="form-floating mb-4">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password" required>
                                                <label>Confirm Password</label>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
