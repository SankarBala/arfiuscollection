@extends('admin.layouts.app')
@section('pagename', 'Categories')
@section('breadcrumb')
    <li class="breadcrumb-item active">Categories</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">

                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6"> <a href="{{ route('admin.category.create') }}"
                                        class="card-title float-right">Create New</a></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Slug
                                        </th>
                                        <th>
                                            Parent
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    {{ $category->id }}
                                                </td>
                                                <td>
                                                    {{ $category->name }}
                                                </td>
                                                <td>
                                                    {{ $category->slug }}
                                                </td>
                                                <td>
                                                    {{ optional($category->parent)->name }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('admin.category.destroy', $category->id) }}"
                                                        method="POST" style="display: inline-block">
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
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
