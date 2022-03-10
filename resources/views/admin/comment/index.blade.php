@extends('admin.layouts.app')
@section('pagename', 'Comments')
@section('breadcrumb')
    <li class="breadcrumb-item active">Comments</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Comments</h3>
                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="">ID</th>
                                            <th colspan="">Author</th>
                                            <th colspan="">Body</th>
                                            <th colspan="">Created At</th>
                                            <th colspan="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td colspan="">{{ $comment->id }}</td>
                                                <td colspan="">{{ optional($comment->user)->name }}</td>
                                                <td colspan="" class="w-50">{{ $comment->body }}</td>
                                                <td colspan="">{{ $comment->created_at->diffForHumans() }}</td>
                                                <td colspan="">
                                                    <form class="d-inline" method="post"
                                                        action="{{ route('admin.comment.update', $comment) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        @if ($comment->status == 'spam')
                                                            <button type="submit" name="status" value="approved"
                                                                class="btn btn-success">Approve</button>
                                                        @elseif ($comment->status == 'approved')
                                                            <button type="submit" name="status" value="spam"
                                                                class="btn btn-warning">Reject</button>
                                                        @else
                                                            <button type="submit" name="status" value="spam"
                                                                class="btn btn-warning">Reject</button>
                                                            <button type="submit" name="status" value="approved"
                                                                class="btn btn-success">Approve</button>
                                                        @endif
                                                    </form>
                                                    <form class="d-inline" method="post"
                                                        action="{{ route('admin.comment.destroy', $comment) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $comments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
