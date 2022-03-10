<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <h3 class="brand-text text-center">{{ env('APP_NAME') }}</h3>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="" class="img-circle elevation-2" alt="Image">
            </div> --}}
            <div class="info ml-3">
                <a href="#" class="d-block m-auto">
                    <h5>{{ auth()->user()->name }} </h5>
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @can('create-post')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Posts
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.post.create') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-edit mr-2"> </i>
                                    <p> Create post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.post.index') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-list-alt mr-2"> </i>
                                    <p> All post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.category.index') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-layer-group mr-2"></i>
                                    <p> Categories</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('index-comment')
                    <li class="nav-item">
                        <a href="{{ route('admin.comment.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>Comments</p>
                        </a>
                    </li>
                @endcan
                @can('file-manager')
                    <li class="nav-item">
                        <a href="{{ route('admin.file-manager') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>File Manager</p>
                        </a>
                    </li>
                @endcan
                @can('access-control')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Roles
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.role.create') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-edit mr-2"> </i>
                                    <p> Create role</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.role.index') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-list-alt mr-2"> </i>
                                    <p> Roles </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Permissions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.permission.create') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-edit mr-2"> </i>
                                    <p>New Permission</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.permission.index') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-list-alt mr-2"> </i>
                                    <p> ALl Permissions </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('user-control')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.user.create') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-user mr-2"> </i>
                                    <p>New User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.user.index') }}" class="nav-link ml-4">
                                    <i class="nav-icon fas fa-users mr-2"> </i>
                                    <p> ALl Users </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('see-subscribers')
                    <li class="nav-item">
                        <a href="{{ route('admin.subscription') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Subscriber</p>
                        </a>
                    </li>
                @endcan
            </ul>
        </nav>

    </div>

</aside>
