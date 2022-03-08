@extends('layouts.app')
@section('pagename', 'Home')
@section('breadcrumb')
    {{-- <li class="active">Post</li> --}}
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">

                
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-12">
                                <div class="blog-post card shadow-sm border-0 mb-4"> <a href="blog-single.html"><img
                                            class="card-img-top" src="images/blog/post-1.jpg" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="title-blog"><a href="blog-single.html">3 simple ways to recharge a
                                                mobile
                                                in less than 1 minute</a></h4>
                                        <ul class="meta-blog">
                                            <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                            <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                            <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                        </ul>
                                        <p>Some quick example text to build on the card title and make up the bulk of the
                                            card's
                                            content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor
                                            incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua....</p>
                                        <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                  
                    <ul class="pagination justify-content-center mt-4 mb-5">
                        {{$posts->links()}}
                    </ul>
                </div>
              
                @include('layouts.partials.sidebar')

            </div>
        </div>
    </div>
@endsection
