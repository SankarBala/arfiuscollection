@extends('admin.layouts.app')
@section('pagename', 'Permission')
@section('breadcrumb')
    <li class="breadcrumb-item active">Edit Permission</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Edit Permission</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="{{ route('admin.permission.update', $permission) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="permission">Name</label>
                                        <input type="text" name="permission" class="form-control"
                                            value="{{ $permission->name }}">
                                        @error('permission')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="guard">Guard</label>
                                        <select name="guard_name" class="form-control" id="guard" required>
                                            <option value="">Select Guard</option>
                                            @foreach ($guards as $guard)
                                                <option value="{{ $guard }}"
                                                    {{ $permission->guard_name == $guard ? 'selected' : '' }}>
                                                    {{ $guard }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('guard_name')
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
