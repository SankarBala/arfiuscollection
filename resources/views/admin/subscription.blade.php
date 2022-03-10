@extends('admin.layouts.app')
@section('pagename', 'Subscriber')
@section('breadcrumb')
    <li class="breadcrumb-item active">Subscriber</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Subscriber</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $subscriber->id }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>{{ $subscriber->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $subscribers->links() }}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
