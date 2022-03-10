@extends('admin.layouts.app')
@section('pagename', 'Permissions')
@section('breadcrumb')
    <li class="breadcrumb-item active">Permission</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">All Permission</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                               
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Permission</th>
                                        <th>Guard Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->guard_name }}</td>
                                            <td>
                                                <a href="{{ route('admin.permission.edit', $permission) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('admin.permission.destroy', $permission) }}" method="post" style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{ $permissions->links() }}
                            
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
