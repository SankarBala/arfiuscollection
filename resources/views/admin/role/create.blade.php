@extends('admin.layouts.app')
@section('pagename', 'Create Roles')
@section('breadcrumb')
    <li class="breadcrumb-item active">Roles</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="{{ route('admin.role.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="guards">Guards</label>
                                        <select class="form-control" name="guard_name" id="guards">
                                            @foreach ($guards as $guard)
                                                <option value="{{ $guard }}">{{ $guard }}</option>
                                            @endforeach
                                        </select>
                                        @error('guard_name')
                                            {{$message}}
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
                                                            id="{{ $permission->id }}">
                                                        <label class="form-check-label"
                                                            for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('permissions')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
