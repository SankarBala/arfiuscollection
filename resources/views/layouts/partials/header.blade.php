<header id="header" class="bg-light header-text-dark">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">

                <!-- Logo ======== -->
                <div class="logo"> <a href="{{route('index')}}" class="d-flex"
                        title="Home"><img src="images/logo-light.png" alt="Quickai" /></a> </div>
                <!-- Logo end -->

            </div>
            <div class="header-column justify-content-end">

                <!-- Primary Navigation ========= -->
                <nav class="primary-menu navbar navbar-expand-lg">
                    <div id="header-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav">

                            <li class="dropdown"> <a class="dropdown-toggle" href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">My
                                            Profile</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="profile.html">Personal Information</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="payment.html">Payment</a></li>
                                </ul>
                            </li>
                            <li class=""><a class="" href="{{route('search')}}">Search</a></li>
                            <li class=""><a class="" href="{{route('category')}}">category</a></li>
                            <li class=""><a class="" href="{{route('categories')}}">categories</a></li>
                            <li class=""><a class="" href="{{route('contact')}}">Contact</a></li>
                            <li class=""><a class="" href="{{route('about')}}">About</a></li>
                            <li class=""><a class="" href="{{route('post')}}">post</a></li>



                        </ul>
                    </div>
                </nav>
                <!-- Primary Navigation end -->

                <!-- Collapse Button ========== -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                    <span></span> <span></span> <span></span> </button>

                <!-- Login Signup ======= -->
                <nav class="login-signup navbar navbar-expand separator ml-sm-2 pl-sm-2">
                    <ul class="navbar-nav">
                        <li class="profile"><a class="pr-0" data-toggle="modal"
                                data-target="#login-modal" href="#" title="Login / Sign up"><span
                                    class="d-none d-sm-inline-block">Login / Sign up</span> <span
                                    class="user-icon ml-sm-2"><i class="fas fa-user"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
