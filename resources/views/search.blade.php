@extends('layouts.app')
@section('pagename', 'Search results')
@section('breadcrumb')
    <li class="active">Search</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">


                <!-- Right Sidebar ========= -->
                <aside class="col-lg-4 col-xl-3">
                    <!-- Search ======== -->
                    <div class="input-group shadow-sm mb-4">
                        <input class="form-control shadow-none border-0 pr-0" type="search" id="search-input"
                            placeholder="Search" value="">
                        <div class="input-group-append"> <span class="input-group-text bg-white border-0 p-0">
                                <button class="btn text-muted shadow-none px-3 border-0" type="button"><i
                                        class="fa fa-search"></i></button>
                            </span> </div>
                    </div>

                    <!-- Categories ========= -->
                    <div class="bg-white shadow-sm rounded p-3 mb-4">
                        <h4 class="text-5">Categories</h4>
                        <hr class="mx-n3">
                        <ul class="list-item">
                            <li><a href="#">Recharge & Bill<span>(24)</span></a></li>
                            <li><a href="#">Booking<span>(14)</span></a></li>
                            <li><a href="#">Enterprise Hub<span>(6)</span></a></li>
                            <li><a href="#">How To<span>(8)</span></a></li>
                            <li><a href="#">Finance & Management<span>(4)</span></a></li>
                            <li><a href="#">Offers & Discounts<span>(10)</span></a></li>
                            <li><a href="#">Industry Experts<span>(9)</span></a></li>
                        </ul>
                    </div>

                    <!-- Recent Posts ========== -->
                    <div class="bg-white shadow-sm rounded p-3 mb-4">
                        <h4 class="text-5">Recent Posts</h4>
                        <hr class="mx-n3">
                        <div class="side-post">
                            <div class="item-post">
                                <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                            src="images/blog/post-2-65x65.jpg" title="" alt=""></a></div>
                                <div class="caption"> <a href="blog-single.html">Staggering Sites to Visit Near
                                        United Airport to Break..</a>
                                    <p class="date-post">April 24, 2020</p>
                                </div>
                            </div>
                            <div class="item-post">
                                <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                            src="images/blog/post-1-65x65.jpg" title="" alt=""></a></div>
                                <div class="caption"> <a href="blog-single.html">3 simple ways to recharge a mobile
                                        in less than 1 minute...</a>
                                    <p class="date-post">April 24, 2020</p>
                                </div>
                            </div>
                            <div class="item-post">
                                <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                            src="images/blog/post-3-65x65.jpg" title="" alt=""></a></div>
                                <div class="caption"> <a href="blog-single.html">Minimise Your Risk. Maximise Your
                                        Returns</a>
                                    <p class="date-post">April 24, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Tags ========== -->
                    <div class="bg-white shadow-sm rounded p-3 mb-4">
                        <h4 class="text-5">Popular Tags</h4>
                        <hr class="mx-n3">
                        <div class="tags"> <a href="#">Recharge</a> <a href="#">Tips</a> <a href="#">2021</a> <a
                                href="#">Booking</a> <a href="#">Marketing</a> <a href="#">Bill</a> <a href="#">How To</a>
                            <a href="#">Payment</a> <a href="#">Offers</a>
                        </div>
                    </div>
                </aside>
                <!-- Right Sidebar End -->


                <!-- Middle Panel ========== -->
                <div class="col-lg-8 col-xl-9">
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-1-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">3 simple ways to recharge a
                                            mobile in less than 1 minute</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-2-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">Staggering Sites to Visit Near
                                            United Airport to Break The Monotony</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-4-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">List of Countries Offering Visa
                                            on Arrival for Indians in 2021</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-3-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">Minimise Your Risk. Maximise
                                            Your Returns</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-5-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">How to start a mobile top-up
                                            recharge business?</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post card shadow-sm border-0 mb-4">
                        <div class="row no-gutters p-3">
                            <div class="col-md-5"> <a href="blog-single.html"><img class="card-img d-block"
                                        src="images/blog/post-6-540x390.jpg" alt=""></a> </div>
                            <div class="col-md-7">
                                <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                    <h4 class="title-blog text-5"><a href="blog-single.html">5 Tips to Protect from Online
                                            Travel Booking Scams</a></h4>
                                    <ul class="meta-blog">
                                        <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                                        <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                                        <li><a href=""><i class="fas fa-comments"></i> 10</a></li>
                                    </ul>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                        content. Lorem ipsum dolor consectetur adipiscing elit, eiusmod tempor
                                        incididunt.....</p>
                                    <a href="blog-single.html" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination ========= -->
                    <ul class="pagination justify-content-center mt-5 mb-5">
                        <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-angle-left"></i></a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-flex align-content-center flex-wrap text-muted text-5 mx-1">......</li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item"> <a class="page-link" href="#"><i
                                    class="fas fa-angle-right"></i></a> </li>
                    </ul>
                    <!-- Paginations end -->

                </div>
                <!-- Middle Panel End -->


            </div>
        </div>
    </div>
@endsection
