<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Arfius Collection</title>
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" />
    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    {{-- @include('components.preloader') --}}
    <!-- Preloader End -->

    <!-- Document Wrapper ========== -->
    <div id="main-wrapper">

        <!-- Header ======== -->
        @include('layouts.partials.header')
        <!-- Header end -->

        <!-- Page Header  ===== -->
        {{-- @if ($blade !== 'index') --}}
        @include('layouts.partials.page-header')
        {{-- @endif --}}
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



    <!-- Script -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')

    <div id="subscribe-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body py-4 px-0">
                    {{-- <button type="button" class="close close-outside" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> --}}
                    <div class="row">
                        <div class="col-11 col-md-10 mx-auto">
                            <h3 class="text-center mt-3 mb-4">Subscribe Now</h3>
                            <p class="text-center text-3 text-muted">You will get all the updates from this website.</p>
                            <form id="subscribeForm" class="form-border" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control border-2" id="subscribeEmailAddress"
                                        required placeholder="Enter Email">
                                </div>
                                <button id="subscribe" class="btn btn-primary btn-block my-4"
                                    type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"
        integrity="sha512-wT7uPE7tOP6w4o28u1DN775jYjHQApdBnib5Pho4RB0Pgd9y7eSkAV1BTqQydupYDB9GBhTcQQzyNMPMV3cAew=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            if (!Cookies.get("subscribed")) {
                setTimeout(function() {
                    $('#subscribe-modal').modal('show');
                }, 5000);
            }

            $('#subscribeForm').submit(function(e) {
                e.preventDefault();
                var email = $('#subscribeEmailAddress').val();
                $.ajax({
                    url: "{{ route('subscription') }}",
                    type: "POST",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#subscribe-modal').modal('hide');
                        Cookies.set("subscribed", true, {
                            expires: 365,
                            SameSite: 'Lax'
                        });
                        $('#subscribeEmailAddress').val('');
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            });

        });
    </script>

</body>

</html>
