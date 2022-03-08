@extends('layouts.sky')

@section('content')
    <div class="container">
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-body py-4 px-0">
                            <div class="row">
                                <div class="col-11 col-md-10 mx-auto">
                                    <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
                                        <li class="nav-item"> <a class="nav-link text-5 line-height-3">Reset Password</a>
                                        </li>
                                    </ul>
                                    <p class="text-4 font-weight-300 text-muted text-center mb-4">Enter new password</p>
                                    </p>
                                    <form id="loginForm" method="post" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="emailAddress" placeholder="Email"
                                                name="email" value="{{ $email ?? old('email') }}" required
                                                autocomplete="email" autofocus />
                                            @error('email')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="loginPassword"
                                                placeholder="Password" name="password" required
                                                autocomplete="new-password" />
                                            @error('password')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="loginPassword"
                                                placeholder="Password Confirm" name="password_confirmation" required
                                                autocomplete="new-password" />
                                        </div>
                                        <button class="btn btn-primary btn-block my-4" type="submit">Reset Password</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- @section('content')
    <div class="container">
        <div class="row d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
