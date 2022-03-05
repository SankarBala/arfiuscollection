@extends('admin.layouts.app')
@section('pagename', 'Category')
@section('breadcrumb')
    <li class="breadcrumb-item active">Category</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="rows">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Create Category</h3>

                    </div>

                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('admin.category.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Category Name">
                                        <p class="text-danger text-sm">@error('name') {{ $message }} @enderror</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="Enter Slug">
                                        <p class="text-danger text-sm">@error('slug') {{ $message }} @enderror</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Parent</label>

                                        <select class="form-control" id="parent_id" name="parent_id">
                                            <option value="0">Select Parent</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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

@push('beforeScripts')
@endpush

@push('scripts')
    <script type="text/javascript">
        $("#name").keyup(function() {
            var text = $(this).val();
            text= text.trim();
            text = text.toLowerCase();
            text = text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(text);
        });
    </script>
@endpush
