@extends('layouts.sky')

@section('content')
    <div class="container">
        <div class="row d-flex flex-column align-items-center justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content border-0">
                            <div class="modal-body py-4 px-0">
                                <div class="row">
                                    <div class="col-11 col-md-10 mx-auto">
                                        <h3 class="text-center mt-3 mb-4">Forgot your password?</h3>
                                        <p class="text-center text-3 text-muted">Enter your Email and we’ll help you
                                            reset your password.</p>
                                        <form id="forgotForm" class="form-border" method="post"
                                            action="{{ route('password.email') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control border-2" id="emailAddress" required
                                                    placeholder="Enter Email Address" name="email" required
                                                    autocomplete="email" autofocus />
                                                @error('email')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                                <p class="text-success text-sm">{{ session('status') }}</p>
                                            </div>
                                            <button class="btn btn-primary btn-block my-4" type="submit">Continue</button>
                                        </form>
                                        <p class="text-center mb-0"><a class="btn-link"
                                                href="{{ route('login') }}">Return to Log In</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
