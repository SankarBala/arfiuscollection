@extends('admin.layouts.app')
@section('pagename', 'Home')
@section('breadcrumb')
    <li class="breadcrumb-item active">Starter Page</li>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $posts->count() }}</h3>
                            <p>Total Posts</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.post.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $categories->count() }}</h3>
                            <p>Total Categories</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.category.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $users->count() }}</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.user.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $posts->sum('view') }}</h3>
                            <p>Total Visit</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>



            <div class="row">
                <section class="col-lg-7 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file mr-1"></i>
                                Recent Posts
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                @foreach ($posts->take(10) as $post)
                                    <li>
                                        <span class="handle">
                                            <i class="fas fa-ellipsis-v"></i>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </span>
                                        <span class="text">{{ $post->title }}</span>
                                        <div class="tools">
                                            @can('view-post', $post)
                                                <a href="{{ route('admin.post.show', $post) }}"><i
                                                        class="fas fa-eye text-dark"></i></a>
                                            @endcan
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-footer clearfix">
                            @can('create-post')
                                <a href="{{ route('admin.post.create') }}" class="btn btn-primary float-right">
                                    <i class="fas fa-plus"></i>
                                    Create post</a>
                            @endcan
                        </div>
                    </div>

                </section>
                <section class="col-lg-5 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-key mr-1"></i>
                                Access
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                @foreach ($roles as $role)
                                    <li>
                                        <h4 class="px-3">{{ $role->name }}</h4>

                                        @foreach ($role->getAllPermissions() as $permission)
                                            <label class="badge badge-info p-2">{{ $permission->name }}</label>
                                        @endforeach
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @can('access-control')
                            <div class="card-footer clearfix">
                                <a href="{{ route('admin.role.index') }}" class="btn btn-primary">
                                    Roles</a>
                                <a href="{{ route('admin.role.index') }}" class="btn btn-primary float-right">
                                    Permissions</a>
                            </div>
                        @endcan
                    </div>

                </section>


            </div>
        </div>
    </div>
@endsection
