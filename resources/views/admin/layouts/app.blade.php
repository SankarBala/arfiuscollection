<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arfius Collection</title>
    @stack('filemanagerstyles')
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min2167.css?v=3.2.0') }}">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.partials.top-nav')
        @include('admin.layouts.partials.sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('pagename')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/adminlte.min2167.js') }}"></script>
    @stack('scripts')
</body>

</html>
