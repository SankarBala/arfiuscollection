@extends('layouts.app')
@section('pagename', 'Profile')
@section('breadcrumb')
    <li class="active">profile</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-white shadow-md rounded p-4">
                        <h4 class="mb-4">Personal Information</h4>
                        <hr class="mx-n4 mb-4">
                        <div class="row">
                            <div class="col-lg-8">

                                <form id="personalInformation" method="post">
                                    <div class="mb-3">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input id="male" name="gender" class="custom-control-input" checked="" required
                                                type="radio" value="male">
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input id="female" name="gender" class="custom-control-input" required
                                                type="radio" value="female">
                                            <label class="custom-control-label" for="female">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" value="{{$user->name}}" class="form-control"id="fullName" required placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobileNumber">Mobile Number</label>
                                        <input type="text" value="{{$user->mobile}}" class="form-control" id="mobileNumber" required
                                            placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailID">Email ID</label>
                                        <input type="text" value="{{$user->email}}" class="form-control" id="emailID" disabled placeholder="Email ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthDate">Date of Birth</label>
                                        <input id="birthDate" value="{{$user->dob}}" type="date" class="form-control" required placeholder="Date of Birth">
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit">Update Now</button>
                                </form>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0 ">
                                <!-- Privacy Information
           ============================================= -->
                                <div class="bg-light-2 rounded p-4">
                                    <h3 class="text-4 mb-2">We value your Privacy</h3>
                                    <p class="mb-0">We will not sell or distribute your contact information. Read
                                        our <a href="#">Privacy Policy</a>.</p>
                                </div>
                                <!-- Privacy Information end -->
                            </div>
                        </div>
                        <!-- Personal Information end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}" />
@endpush


@push('beforeScripts')
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script>
        $(function() {
            'use strict';
            // Birth Date
            $('#birthDate').daterangepicker({
                singleDatePicker: true,
                autoApply: true,
                showDropdowns: true,
                autoUpdateInput: false,
                maxDate: moment().add(0, 'days'),
            }, function(chosen_date) {
                $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));
            });
        });
    </script>
@endpush
