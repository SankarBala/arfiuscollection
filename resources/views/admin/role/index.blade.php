@extends('admin.layouts.app')
@section('pagename', 'Roles')
@section('breadcrumb')
    <li class="breadcrumb-item active">Roles</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">All Roles</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Guard</th>
                                            <th>Permissions</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->guard_name }}</td>
                                                <td>{{ str_replace(['[', ']', '"'], '', $role->permissions()->pluck('name')) }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.role.edit', $role) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('admin.role.destroy', $role) }}" method="post"
                                                        style="display: inline-block">
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
                            {{$roles->links() }}

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
