<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <h3 class="brand-text text-center">{{ env('APP_NAME') }}</h3>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2" alt="Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <h5>{{ auth()->user()->name }} ({{ auth()->user()->id }}) </h5>
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
                            <a href="#" class="nav-link ml-4">
                                <i class="nav-icon fas fa-edit mr-2"> </i>
                                <p> Create post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ml-4">
                                <i class="nav-icon fas fa-list-alt mr-2"> </i>
                                <p> All post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ml-4">
                                <i class="nav-icon fas fa-layer-group mr-2"></i>
                                <p> Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.file-manager') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>File Manager</p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
