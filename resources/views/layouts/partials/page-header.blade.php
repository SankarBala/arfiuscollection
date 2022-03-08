<section class="page-header page-header-text-light" style="background-color:#273755;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h1>@yield('pagename')</h1>
            </div>
            <div class="col-md-8">
                @if ($blade !== 'index')
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        @yield('breadcrumb')
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>
