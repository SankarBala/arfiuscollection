@extends('admin.layouts.app')
@section('pagename', 'User')
@section('breadcrumb')
    <li class="breadcrumb-item active">Create User</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">User</h3>

                    </div>

                    <div class="card-body" style="display: block;">

                        <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter Email">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Enter Password">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="Enter Confirm Password">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="role">Roles</label>
                                        <div class="row">
                                            @foreach ($roles as $role)
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                            class="form-check-input" id="{{ $role->id }}">
                                                        <label class="form-check-label"
                                                            for="{{ $role->id }}">{{ $role->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @error('roles')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>



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
