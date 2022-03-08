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
                                        <li class="nav-item"> <a class="nav-link text-5 line-height-3">Login</a>
                                        </li>
                                    </ul>
                                    <p class="text-4 font-weight-300 text-muted text-center mb-4">We are glad to see you
                                        again!
                                    </p>
                                    <form id="loginForm" method="post" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailAddress" required
                                                placeholder="Email" name="email" />
                                            @error('email')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="loginPassword" required
                                                placeholder="Password" name="password" />
                                        </div>
                                        <div class="row my-4">
                                            <div class="col">
                                                <div class="form-check text-2 custom-control custom-checkbox">
                                                    <input id="remember-me" name="remember" class="custom-control-input"
                                                        type="checkbox">
                                                    <label class="custom-control-label" for="remember-me">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <div class="col text-2 text-right"><a class="btn-link"
                                                    href="{{ route('password.request') }}">Forgot Password ?</a>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block my-4" type="submit">Login</button>
                                    </form>
                                    <div class="d-flex align-items-center my-3">
                                        <hr class="flex-grow-1">
                                        <span class="mx-2 text-2 text-muted">Or Login with Social Profile</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <div class="d-flex  justify-content-center align-items-center mb-3">
                                        <a class="btn btn-primary btn-block my-2 mr-1"
                                            href="{{ route('social-auth', 'facebook') }}">Login with
                                            Facebook</a>
                                        <a class="btn btn-danger btn-block my-2 ml-1"
                                            href="{{ route('social-auth', 'google') }}">Login with
                                            Google</a>

                                    </div>
                                    <p class="text-2 text-center mb-0">New to {{ env('APP_NAME') }} <a
                                            class="btn-link" href="{{ route('register') }}">Sign Up</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
