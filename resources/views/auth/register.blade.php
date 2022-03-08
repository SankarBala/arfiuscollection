@extends('layouts.sky')

@section('content')
    <div class="container">
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body py-4 px-0">
                            <div class="row">
                                <div class="col-11 col-md-10 mx-auto">
                                    <ul class="nav nav-tabs nav-justified mb-4" role="tablist">

                                        <li class="nav-item"> <a class="nav-link text-5 line-height-3">Sign
                                                Up</a> </li>
                                    </ul>
                                    <p class="text-4 font-weight-300 text-muted text-center mb-4">Looks like you're new
                                        here!
                                    </p>
                                    <form id="signupForm" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control border-2" id="fullName" required
                                                placeholder="Your Name" name="name" />
                                            @error('name')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control border-2" id="emailAddress" required
                                                placeholder="Email Id" name="email" />
                                            @error('email')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control border-2" id="loginPassword" required
                                                placeholder="Password" name="password" />
                                            @error('password')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control border-2" id="confirmPassword"
                                                required placeholder="Confirm Password" name="password_confirmation" />

                                        </div>
                                        <div class="form-group my-4">
                                            <div class="form-check text-2 custom-control custom-checkbox">
                                                <input id="agree" name="agree" class="custom-control-input" type="checkbox"
                                                    required />
                                                <label class="custom-control-label" for="agree">I agree to the
                                                    and <a href="{{ route('privacyPolicies') }}">Privacy
                                                        Policy</a>.</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block my-4" type="submit">Sign Up</button>
                                    </form>
                                    <div class="d-flex align-items-center my-3">
                                        <hr class="flex-grow-1">
                                        <span class="mx-2 text-2 text-muted">Or Sign Up with Social Profile</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <div class="d-flex  justify-content-center align-items-center mb-3">
                                        <a class="btn btn-primary btn-block my-2 mr-1"
                                            href="{{ route('social-auth', 'facebook') }}">Register with
                                            Facebook</a>
                                        <a class="btn btn-danger btn-block my-2 ml-1"
                                            href="{{ route('social-auth', 'google') }}">Register with
                                            Google</a>

                                    </div>
                                    <p class="text-2 text-center mb-0">Already have an account? <a class="btn-link"
                                            href="{{ route('login') }}">Log
                                            In</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
