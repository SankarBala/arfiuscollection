@extends('admin.layouts.app')
@section('pagename', 'Roles')
@section('breadcrumb')
    <li class="breadcrumb-item active">Role Edit</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Role Edit</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="{{ route('admin.role.update', $role) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Role Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $role->name }}">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="guard">Guard</label>
                                        <select class="form-control" name="guard_name" id="guard" required>
                                            @foreach ($guards as $guard)
                                                <option value="{{ $guard }}"
                                                    {{ $role->guard_name == $guard ? 'selected' : '' }}>
                                                    {{ $guard }}</option>
                                            @endforeach
                                        </select>
                                        @error('guard_name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="permissions">Permissions</label>
                                        <div class="row">
                                            @foreach ($permissions as $permission)
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="permissions[]"
                                                            value="{{ $permission->id }}" class="form-check-input"
                                                            id="{{ $permission->id }}"
                                                            @foreach ($role->permissions as $rolePermission) @if ($rolePermission->id == $permission->id) checked @endif
                                                            @endforeach>
                                                        <label class="form-check-label"
                                                            for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('permissions')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>

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
