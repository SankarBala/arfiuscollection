@extends('layouts.app')
@section('pagename', 'Contact Us')
@section('breadcrumb')
    <li class="active">Contact-us</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-white shadow-md rounded h-100 p-3">
                        <form class="form-horizontal" method="post" action="{{ route('contact-request') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                    value={{ old('name') }}>
                                @error('name')
                                    <span class="text-danger text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"
                                    value={{ old('email') }}>
                                @error('email')
                                    <span class="text-danger text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Enter Subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <span class="text-danger text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message"
                                    rows="3">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger text-sm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <p class="text-sm text-success mt-0 mb-3">
                                {{ session('success') }}
                            </p>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="bg-white shadow-md rounded p-4">
                        <h2 class="text-6 mb-4">Get in touch</h2>
                        <hr class="mx-n4 mb-4">

                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="fas fa-map-marker-alt"></i></div>
                            <h3>{{ env('APP_NAME') }}</h3>
                            <p>35/2, Monipuri Para<br>
                                Dhaka-1215<br>
                                Bangladesh<br> </p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="fas fa-phone"></i> </div>
                            <h3>Telephone</h3>
                            <p>+88017-59-198763</p>
                        </div>
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="fas fa-envelope"></i> </div>
                            <h3>Personal Inquiries</h3>
                            <p>arfiusaldin.official@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
