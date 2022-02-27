<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Arfius Collection</title>
    <meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
    <meta name="author" content="harnishdesign.net">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    @include('components.preloader')
    <!-- Preloader End -->

    <!-- Document Wrapper ========== -->
    <div id="main-wrapper">

        <!-- Header ======== -->
        @include('layouts.partials.header')
        <!-- Header end -->

        <!-- Page Header  ===== -->
        @if ($blade !== 'index')
            @include('layouts.partials.page-header')
        @endif
        <!-- Page Header end -->

        <!-- Content ======= -->
        @yield('content')
        <!-- Content end -->

        <!-- Footer ====== -->
        @include('layouts.partials.footer')
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    <!-- Back to Top ========== -->
    @include('components.gototop')
    <!-- Login Modal ===== -->
    @include('components.login')
    <!-- Login Modal End -->

    <!-- Sign Up Modal ====== -->
    @include('components.signup')
    <!-- Sign Up Modal End -->

    <!-- Forgot Password Modal ====== -->
    @include('components.forgot')
    <!-- Forgot Password Modal End -->

    <!-- Script -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
    @stack('scripts')

</body>

</html>
