<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Arfius Collection</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}" />
    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    @include('components.preloader')
    <!-- Preloader End -->

    <!-- Document Wrapper ========== -->
    <div id="main-wrapper" style="background-color: skyblue;">
        <!-- Content ======= -->
        @yield('content')
        <!-- Content end -->
    </div>
    <!-- Document Wrapper end -->


    <!-- Script -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>


</body>

</html>
