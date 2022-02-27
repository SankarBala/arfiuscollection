@extends('layouts.app')
@section('pagename', 'Posts')
@section('breadcrumb')
    <li class="active">Post</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">

                <!-- Left Sidebar ======== -->
                <aside class="col-lg-4 col-xl-3">
                    <!-- Search ========= -->
                    <div class="input-group shadow-sm mb-4">
                        <input class="form-control shadow-none border-0 pr-0" type="search" id="search-input"
                            placeholder="Search" value="">
                        <div class="input-group-append"> <span class="input-group-text bg-white border-0 p-0">
                                <button class="btn text-muted shadow-none px-3 border-0" type="button"><i
                                        class="fa fa-search"></i></button>
                            </span> </div>
                    </div>

                    <!-- Categories ========== -->
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

                    <!-- Recent Posts ====== -->
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

                    <!-- Popular Tags ======= -->
                    <div class="bg-white shadow-sm rounded p-3 mb-4">
                        <h4 class="text-5">Popular Tags</h4>
                        <hr class="mx-n3">
                        <div class="tags"> <a href="#">Recharge</a> <a href="#">Tips</a> <a href="#">2021</a> <a
                                href="#">Booking</a> <a href="#">Marketing</a> <a href="#">Bill</a> <a href="#">How To</a>
                            <a href="#">Payment</a> <a href="#">Offers</a>
                        </div>
                    </div>
                </aside>
                <!-- Left Sidebar End -->

                <!-- Middle Panel ========= -->
                <div class="col-lg-8 col-xl-9">
                    <div class="blog-post card shadow-sm border-0 mb-4 p-4">
                        <h2 class="title-blog text-7">3 simple ways to recharge a mobile in less than 1 minute</h2>
                        <ul class="meta-blog mb-4">
                            <li><i class="fas fa-calendar-alt"></i> April 24, 2020</li>
                            <li><a href=""><i class="fas fa-user"></i> Admin</a></li>
                            <li><a href="#comments"><i class="fas fa-comments"></i> 03</a></li>
                        </ul>
                        <img class="img-fluid" src="images/blog/post-1.jpg" alt="">
                        <div class="card-body px-0 pb-0">
                            <p>Some quick example text to build on the card title and make up the bulk of the card's
                                content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt
                                ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <p>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor
                                vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis.
                                Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec,
                                rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui.
                            </p>
                            <blockquote>
                                <p class="mb-2">Consultations are slowly gaining immense recognition and are
                                    growing phenomenally with more and more people trading with this digital currency. The
                                    universal acceptance of Consultation.</p>
                                <footer class="blockquote-footer">Ipsum dolor sit</footer>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet,
                                <mark>consectetuer adipiscing</mark>
                                elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis,
                                tempor vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida
                                venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, dapibus dui, eu. Lorem
                                <mark class="bg-secondary text-white px-1">ipsum dolor</mark>
                                sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget,
                                sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus.
                                Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis
                                pellentesque, libero massa dapibus dui eu.
                            </p>
                            <div class="row mb-3">
                                <div class="col-lg-6"><img class="img-fluid" src="images/blog/post-2.jpg" alt="">
                                </div>
                                <div class="col-lg-6"><img class="img-fluid" src="images/blog/post-4.jpg" alt="">
                                </div>
                            </div>
                            <p>Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor
                                vitae, est. Praesent vitae dui. Morbi id tellus. Nullam ac nisi non eros gravida venenatis.
                                Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec,
                                rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui.
                            </p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Ut euismod,
                                turpis sollicitudin lobortis pellentesque, libero massa dapibus dui eu. Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit. </p>
                        </div>
                        <hr class="pb-3">

                        <!-- Tags & Share Social ======== -->
                        <div class="row mb-3">
                            <div class="col-lg-7 col-xl-8">
                                <div class="tags text-center text-lg-left"> <a href="#">Tips</a> <a href="#">2021</a> <a
                                        href="#">Recharge</a> <a href="#">How To</a> <a href="#">Payment</a> </div>
                            </div>
                            <div class="col-lg-5 col-xl-4">
                                <div class="d-flex flex-column">
                                    <ul
                                        class="social-icons social-icons-colored justify-content-center justify-content-lg-end">
                                        <li class="social-icons-facebook"><a data-toggle="tooltip"
                                                href="http://www.facebook.com/" target="_blank" title=""
                                                data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a data-toggle="tooltip"
                                                href="http://www.twitter.com/" target="_blank" title=""
                                                data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-google"><a data-toggle="tooltip"
                                                href="http://www.google.com/" target="_blank" title=""
                                                data-original-title="Google"><i class="fab fa-google"></i></a></li>
                                        <li class="social-icons-linkedin"><a data-toggle="tooltip"
                                                href="http://www.linkedin.com/" target="_blank" title=""
                                                data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="social-icons-instagram"><a data-toggle="tooltip"
                                                href="http://www.instagram.com/" target="_blank" title=""
                                                data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Author ======== -->
                        <div class="row no-gutters bg-light rounded p-4 mb-4 text-center text-sm-left">
                            <div class="col-12 col-sm-auto mr-4 mb-2 mb-sm-0"> <img class="rounded"
                                    src="images/blog/author.jpg" alt=""> </div>
                            <div class="col-12 col-sm">
                                <h4 class="title-blog text-4 mb-2"><a href="#">Simone Olivia</a></h4>
                                <p class="mb-2">Some quick example text to build on the card title and make up the
                                    bulk of the card's content to orem ipsum dolor sit amet, consectetur adipiscing elit,
                                    eiusmod tempor incididunt ut labore consectetur adipiscing incididunt.</p>
                                <div class="d-flex flex-column">
                                    <ul
                                        class="social-icons social-icons-sm social-icons-muted justify-content-center justify-content-sm-start ml-n2">
                                        <li class="social-icons-twitter"><a data-toggle="tooltip"
                                                href="http://www.twitter.com/" target="_blank" title=""
                                                data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-facebook"><a data-toggle="tooltip"
                                                href="http://www.facebook.com/" target="_blank" title=""
                                                data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-linkedin"><a data-toggle="tooltip"
                                                href="http://www.linkedin.com/" target="_blank" title=""
                                                data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Related Posts ========= -->
                        <h5 class="mb-4 mt-3">Related Posts</h5>
                        <div class="side-post">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="item-post">
                                        <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                                    src="images/blog/post-5-65x65.jpg" title="" alt=""></a></div>
                                        <div class="caption"> <a href="blog-single.html">How to start a mobile top-up
                                                recharge business?</a>
                                            <p class="date-post">April 24, 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="item-post">
                                        <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                                    src="images/blog/post-2-65x65.jpg" title="" alt=""></a></div>
                                        <div class="caption"> <a href="blog-single.html">Staggering Sites to Visit
                                                Near United Airport to Break The Monotony</a>
                                            <p class="date-post">April 24, 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="item-post">
                                        <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                                    src="images/blog/post-3-65x65.jpg" title="" alt=""></a></div>
                                        <div class="caption"> <a href="blog-single.html">Minimise Your Risk.
                                                Maximise Your Returns</a>
                                            <p class="date-post">April 24, 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="item-post">
                                        <div class="img-thumb"><a href="blog-single.html"><img class="rounded"
                                                    src="images/blog/post-4-65x65.jpg" title="" alt=""></a></div>
                                        <div class="caption"> <a href="blog-single.html">List of Countries Offering
                                                Visa on Arrival for Indians in 2021</a>
                                            <p class="date-post">April 24, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- Comments ========= -->
                        <h5 id="comments" class="mb-4 mt-3">Comments (03)</h5>
                        <div class="post-comment">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-auto pr-2"> <img class="rounded" alt=""
                                                src="images/blog/user-3.jpg"> </div>
                                        <div class="col">
                                            <h6> <a class="float-right text-2 text-muted btn-link" href="#"><span
                                                        class="mr-1"><i
                                                            class="fas fa-reply-all"></i></span>Reply</a> Ruby Clinton
                                                <span
                                                    class="text-muted text-2 font-weight-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>-
                                                        April 15, 2020</em></span>
                                            </h6>
                                            <p class="mb-0">Some quick example text to build on the card title
                                                and make up the bulk of the card's content to orem ipsum dolor sit amet,
                                                consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing incididunt.</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-auto pr-2"> <img class="rounded" alt=""
                                                        src="images/blog/user-1.jpg"> </div>
                                                <div class="col">
                                                    <h6> <a class="float-right text-2 text-muted btn-link" href="#"><span
                                                                class="mr-1"><i
                                                                    class="fas fa-reply-all"></i></span>Reply</a> James
                                                        Maxwell <span
                                                            class="text-muted text-2 font-weight-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>-
                                                                April 18, 2020</em></span> </h6>
                                                    <p class="mb-0">Some quick example text to build on the card
                                                        title and make up the bulk of the card's content to orem ipsum dolor
                                                        sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut
                                                        labore.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto pr-2"> <img class="rounded" alt=""
                                                src="images/blog/user-2.jpg"> </div>
                                        <div class="col">
                                            <h6> <a class="float-right text-2 text-muted btn-link" href="#"><span
                                                        class="mr-1"><i
                                                            class="fas fa-reply-all"></i></span>Reply</a> Neil Patel <span
                                                    class="text-muted text-2 font-weight-400 d-block d-sm-inline-block mt-2 mt-sm-0"><em>-
                                                        March 22, 2020</em></span> </h6>
                                            <p class="mb-0">Some quick example text to build on the card title
                                                and make up the bulk of the card's content to orem ipsum dolor sit amet,
                                                consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing incididunt.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr class="my-4">
                        <!-- Write a Comment ======== -->
                        <h5 class="mb-4 mt-3">Write a Comment</h5>
                        <form method="post">
                            <div class="row">
                                <div class="form-group col-12 col-md-4">
                                    <label for="yourName">Name</label>
                                    <input type="text" class="form-control" id="yourName" required
                                        aria-describedby="yourName" placeholder="Your Name">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="yourEmail">Email</label>
                                    <input type="email" class="form-control" id="yourEmail" required
                                        aria-describedby="yourName" placeholder="Your Email">
                                </div>
                                <div class="form-group col-12 col-md-4">
                                    <label for="yourWebsite">Website</label>
                                    <input type="text" class="form-control" id="yourWebsite" aria-describedby="yourName"
                                        placeholder="Your Website">
                                </div>
                                <div class="form-group col-12">
                                    <label for="yourComment">Your Comment</label>
                                    <textarea class="form-control" rows="4" id="yourComment" required
                                        placeholder="Your Comment"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Middle Panel End -->

            </div>
        </div>
    </div>
@endsection
