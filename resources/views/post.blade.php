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
                @include('layouts.partials.sidebar')
                <!-- Left Sidebar End -->

                <!-- Middle Panel ========= -->
                <div class="col-lg-8 col-xl-9">
                    <div class="blog-post card shadow-sm border-0 mb-4 p-4">
                        <h2 class="title-blog text-7">{{ $post->title }}</h2>
                        <ul class="meta-blog mb-4">
                            <li><i class="fas fa-calendar-alt"></i> {{ $post->updated_at->format('Y-m-d') }}</li>
                            <li><a href=""><i class="fas fa-user"></i> Arfius Collection </a></li>
                            <li><a href="#comments"><i class="fas fa-comments"></i> {{ $post->comments->count() }}</a>
                            <li><a href="#read"><i class="fas fa-eye"></i> {{ $post->view }}</a>
                            <li class="fb-share-button d-inline" data-href="{{ route('post', $post) }}"
                                data-layout="button_count" data-size="large"></li>
                        </ul>
                        <img class="img-fluid" src="images/blog/post-1.jpg" alt="">
                        <div class="card-body px-0 pb-0 text-justify">
                            {{ $post->content }}
                        </div>
                        <hr class="pb-0">
                        <div class="d-flex pb-4 mt-0">
                            <div class="mr-auto mt-1">
                                @if ($previousPost)
                                    <a href="{{ route('post', $previousPost) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-arrow-left"></i>
                                        Previous Post </a>
                                @endif
                            </div>
                            {{-- <div class="mr-auto mt-1">
                                <div class="d-inline mr-4 btn btn-info btn-sm">Views: {{ $post->view }}</div>
                            </div>
                            <div class="mr-auto d-inline-block rounded p-1"
                                style="width:110px; height:38px; background-color:#1877F2;">
                                <div class="fb-share-button d-inline mr-4" data-href="{{ route('post', $post) }}"
                                    data-layout="button_count" data-size="large">
                                </div>
                            </div> --}}
                            <div class="mt-1">
                                @if ($nextPost)
                                    <a href="{{ route('post', $nextPost) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-arrow-right"></i>
                                        Next Post </a>
                                @endif
                            </div>
                        </div>



                        <!-- Tags & Share Social ======== -->
                        {{-- <div class="row mb-3">
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
                        </div> --}}

                        <!-- Author ======== -->
                        {{-- <div class="row no-gutters bg-light rounded p-4 mb-4 text-center text-sm-left">
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
                        </div> --}}

                        <!-- Related Posts ========= -->
                        <h5 class="mb-4 mt-3">Related Posts</h5>
                        <div class="side-post">
                            <div class="row">
                                @foreach ($related_posts as $related_post)
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="item-post">
                                            <div class="img-thumb">
                                                <a href="{{ route('post', $related_post) }}">
                                                    <img class="rounded w-100 h-100" src="{{ $related_post->image }}"
                                                        title="" alt=""></a>
                                            </div>
                                            <div class="captions"> <a class="text-info"
                                                    href="{{ route('post', $related_post) }}">
                                                    {{ $related_post->title }}
                                                </a>
                                                <p class="date-post">{{ $related_post->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>

                        <!-- Comments ========= -->
                        <h5 id="comments" class="mb-4 mt-3">Comments ({{ $post->comments->count() }})</h5>
                        <div class="post-comment">
                            <ul>
                                @foreach ($post->comments as $comment)
                                    @include('layouts.partials.comment', [
                                        'children' => $comment,
                                    ])
                                @endforeach

                            </ul>
                        </div>

                        <div>
                            <hr class="my-4">
                            <!-- Write a Comment ======== -->
                            <h5 class="mb-4 mt-3">Write a Comment</h5>
                            <form method="post" action="{{ route('comment-post') }}">
                                @csrf
                                <input type="hidden" name="commentable_id" value="{{ $post->id }}" />
                                <input type="hidden" name="commentable_type" value="App\Models\Post" />
                                <div class="row">
                                    <div class="form-group col-12 col-md-4">
                                        <label for="yourName">Name</label>
                                        <input type="text" class="form-control" id="yourName" required
                                            aria-describedby="yourName" placeholder="Your Name" name="name"
                                            value="{{ optional(auth()->user())->name }}" @auth readonly @endauth />
                                    </div>
                                    <div class="form-group col-12 col-md-8">
                                        <label for="yourEmail">Email</label>
                                        <input type="email" class="form-control" id="yourEmail" required
                                            aria-describedby="yourName" placeholder="Your Email" name="email"
                                            value="{{ optional(auth()->user())->email }}" @auth readonly @endauth>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="yourComment">Your Comment</label>
                                        <textarea class="form-control" rows="4" id="yourComment" required
                                            placeholder="Your Comment" name="body"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Middle Panel End -->

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endpush
