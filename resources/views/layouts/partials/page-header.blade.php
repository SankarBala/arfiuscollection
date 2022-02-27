<section class="page-header page-header-text-light bg-danger">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h1>@yield('pagename')</h1>
            </div>
            <div class="col-md-8">
                <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    @yield('breadcrumb')
                </ul>
            </div>
        </div>
    </div>
</section>
