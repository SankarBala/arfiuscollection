@extends('admin.layouts.app')
@section('pagename', 'Post')
@section('breadcrumb')
    <li class="breadcrumb-item active">Post</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">

                                {!! $post->content !!}

                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-primary">Back</a>

                                @if ($post->status !== 'published')
                                    <form class="d-inline" action="{{ route('admin.post.update-status', $post) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button name="status" value="published" type="submit" class="btn btn-success">
                                            Publish
                                        </button>
                                    </form>
                                @else
                                    <form class="d-inline" action="{{ route('admin.post.update-status', $post) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button name="status" value="draft" type="submit" class="btn btn-warning">
                                            Draft
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('beforeStyles')
@endpush

@push('styles')
@endpush

@push('beforeScripts')
@endpush

@push('scripts')
@endpush
