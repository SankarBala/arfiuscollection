@extends('layouts.app')
@section('pagename', 'Site Maps')
@section('breadcrumb')
    <li class="active">Site Maps</li>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
             @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="p-2 m-2">
                            <a href="{{ route('post', $post) }}" class="text-dark">{{ $post->title }}</a>
                    </div>
                </div>
             @endforeach

            </div>
        </div>
    </div>
@endsection
