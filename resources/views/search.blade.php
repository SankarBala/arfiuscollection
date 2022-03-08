@extends('layouts.app')
@section('pagename', 'Search results')
@section('breadcrumb')
    <li class="active">Search</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">

                @include('layouts.partials.sidebar')

                <div class="col-lg-8 col-xl-9">
                    @if ($posts->isNotEmpty())
                        @foreach ($posts as $post)
                            <div class="blog-post card shadow-sm border-0 mb-4">
                                <div class="row no-gutters p-3">
                                    <div class="col-md-5">
                                        <a href="{{ route('post', $post) }}">
                                            <img class="card-img d-block border h-100" src="{{ $post->image }}" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body pb-0 pt-3 pt-md-0 pl-0 pl-md-4 pr-0">
                                            <h4 class="title-blog text-5"><a
                                                    href="{{ route('post', $post) }}">{{ $post->title }}</a>
                                            </h4>
                                            <ul class="meta-blog">
                                                <li><i
                                                        class="fas fa-calendar-alt"></i>{{ $post->updated_at->format('Y-m-d') }}
                                                </li>
                                                <li><a href="#"><i class="fas fa-user"></i>
                                                        {{ optional($post->user)->name }}</a></li>
                                                <li><a href=""><i
                                                            class="fas fa-comments"></i>{{ $post->comments->count() }}</a>
                                                </li>
                                            </ul>
                                            <p class="text-justify">{{ Str::words($post->content, 20, ' ...') }}</p>
                                            <a href="{{ route('post', $post) }}" class="btn btn-primary btn-sm">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <ul class="pagination justify-content-center mt-5 mb-5">
                            {{ $posts->links() }}
                        </ul>
                    @else
                        <div class="text-center mt-5">
                            <h4>No results found</h4>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection
