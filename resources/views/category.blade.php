@extends('layouts.app')
@section('pagename', 'Category')
@section('breadcrumb')
    <li class="active">Category</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">

                @include('layouts.partials.sidebar')


                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        @if ($posts->isNotEmpty())
                            @foreach ($posts as $post)
                                <div class="col-md-6 mb-4">
                                    <div class="blog-post card shadow-sm border-0 h-100"> <a
                                            href="{{ route('post', $post) }}"><img class="card-img-top"
                                                src="{{ $post->image }}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="title-blog text-5"><a
                                                    href="{{ route('post', $post) }}">{{ $post->title }}</a></h4>
                                            <ul class="meta-blog">
                                                <li><i
                                                        class="fas fa-calendar-alt"></i>{{ $post->updated_at->format('Y-m-d') }}
                                                </li>
                                                <li><a href=""><i
                                                            class="fas fa-user"></i>{{ optional($post->user)->name }}</a>
                                                </li>
                                                <li><a href=""><i
                                                            class="fas fa-comments"></i>{{ $post->comments->count() }}</a>
                                                </li>
                                            </ul>
                                            <div class="text-justify">{{ Str::words($post->content, 20, ' ...') }}</div>
                                            <a href="{{ route('post', $post) }}" class="btn btn-primary btn-sm mt-2">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center mt-5 w-100">
                                <h4>No Post Found</h4>
                            </div>
                        @endif
                    </div>

                    <ul class="pagination justify-content-center mt-4 mb-5">
                        {{ $posts->links() }}
                    </ul>

                </div>

            </div>
        </div>
    </div>
@endsection
