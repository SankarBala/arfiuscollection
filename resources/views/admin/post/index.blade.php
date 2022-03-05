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
                                                    <a href="{{ route('admin.post.edit', $post->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('admin.post.show', $post->id) }}"
                                                        class="btn btn-success">View</a>
                                                    <form action="{{ route('admin.post.destroy', $post->id) }}"
                                                        method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
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
