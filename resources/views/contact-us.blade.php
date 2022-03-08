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
                    
                        
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="bg-white shadow-md rounded p-4">
                        <h2 class="text-6 mb-4">Get in touch</h2>
                        <hr class="mx-n4 mb-4">
                      
                        <div class="featured-box style-1">
                            <div class="featured-box-icon text-primary"> <i class="fas fa-map-marker-alt"></i></div>
                            <h3>{{env('APP_NAME')}}</h3>
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
