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
                                <form method="post" action="{{ route('admin.permission.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="permission">Permission</label>
                                        <input type="text" name="permission" class="form-control" id="permission" placeholder="Permission">
                                        @error('permission')
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

                                    <button type="submit" class="btn btn-primary">Submit</button>
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
