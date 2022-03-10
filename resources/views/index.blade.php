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
                                <div class="blog-post card shadow-sm border-0 mb-4"> <a
                                        href="{{ route('post', $post) }}"><img class="card-img-top"
                                            src="{{ $post->image }}" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="title-blog"><a
                                                href="{{ route('post', $post) }}">{{ $post->title }}</a></h4>
                                        <ul class="meta-blog">
                                            <li><i class="fas fa-calendar-alt"></i>
                                                {{ $post->updated_at->format('Y-m-d') }}</li>
                                            <li><a href=""><i class="fas fa-user"></i> Arfius Collection </a></li>
                                            <li><a href=""><i class="fas fa-comments"></i>
                                                    {{ $post->comments->count() }}</a></li>
                                        </ul>
                                        <div class="text-justify">
                                            {{ Str::words($post->content, 60, '...') }}
                                        </div>
                                        <a href="{{ route('post', $post) }}" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <ul class="pagination justify-content-center mt-4 mb-5">
                        {{ $posts->links() }}
                    </ul>
                </div>

                @include('layouts.partials.sidebar')

            </div>
        </div>
    </div>
@endsection
