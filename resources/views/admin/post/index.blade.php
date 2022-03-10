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
                        <h3 class="card-title">All Post</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Feature</th>
                                            <th>Status</th>
                                            <th>Posted at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td><img src="{{ $post->image }}" alt="" width="50"></td>
                                                <td>{{ $post->status }}</td>
                                                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    @can('view-post', $post)
                                                        <a href="{{ route('admin.post.show', $post) }}"
                                                            class="btn btn-primary">View</a>
                                                    @endcan
                                                    @can('publish-post', $post)
                                                        @if ($post->status !== 'published')
                                                            <form class="d-inline"
                                                                action="{{ route('admin.post.update-status', $post) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button name="status" value="published" type="submit"
                                                                    class="btn btn-success px-3">&nbsp; Publish&nbsp;</button>
                                                            </form>
                                                        @else
                                                            <form class="d-inline"
                                                                action="{{ route('admin.post.update-status', $post) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <button name="status" value="draft" type="submit"
                                                                    class="btn btn-warning">Unpublish</button>
                                                            </form>
                                                        @endif
                                                    @endcan
                                                    @can('update-post', $post)
                                                        <a href="{{ route('admin.post.edit', $post) }}"
                                                            class="btn btn-info">Edit</a>
                                                    @endcan
                                                    @can('delete-post', $post)
                                                        <form action="{{ route('admin.post.destroy', $post) }}" method="post"
                                                            style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    @endcan

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $posts->links() }}
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
