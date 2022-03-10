<header id="header" class="bg-light header-text-dark">
    <div class="container">
        <div class="header-row">
            <div class="header-column justify-content-start">

                <!-- Logo ======== -->
                <div class="logo">
                    <a href="{{ route('index') }}" class="d-flex" title="Home">
                        {{-- <img src="" alt="Quickai" /> --}}
                        <h3>Arfius Collection</h3>
                    </a>
                </div>
                <!-- Logo end -->

            </div>
            <div class="header-column justify-content-end">

                <!-- Primary Navigation ========= -->
                <nav class="primary-menu navbar navbar-expand-lg">
                    <div id="header-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class=""><a class=""
                                    href="{{ route('index') }}">Home</a>
                            </li>
                            <li class=""><a class=""
                                    href="{{ route('admin.post.create') }}">Write a blog</a>
                            </li>
                            <li class=""><a class=""
                                    href="{{ route('categories') }}">categories</a></li>
                            <li class=""><a class=""
                                    href="{{ route('contact') }}">Contact Us</a></li>
                            <li class=""><a class="" href="{{ route('privacyPolicies') }}">Privacy Policy</a>
                            </li>
                            <li class=""><a class="" href="{{ route('about') }}">About Us</a>
                            </li>
                            @guest
                                <li class=""><a class="" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class=""><a class=""
                                        href="{{ route('register') }}">Register</a></li>
                            @endguest
                            @auth
                                <li class="dropdown"> <a class="dropdown-toggle"
                                        href="#">{{ auth()->user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('profile') }}">My Profile</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST" id="logout-form"
                                                class="d-none">
                                                @csrf
                                            </form>
                                            <a class="dropdown-item" href="javascript:void(0)"
                                                onclick="$('#logout-form').submit();">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                @endauth
                        </ul>
                    </div>
                </nav>
                <!-- Primary Navigation end -->

                <!-- Collapse Button ========== -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
                    <span></span> <span></span> <span></span> </button>

                <!-- Login Signup ======= -->
                {{-- <nav class="login-signup navbar navbar-expand separator ml-sm-2 pl-sm-2">
                    <ul class="navbar-nav">
                        <li class="profile"><a class="pr-0" data-toggle="modal"
                                data-target="#login-modal" href="#" title="Login / Sign up"><span
                                    class="d-none d-sm-inline-block">Login / Sign up</span> <span
                                    class="user-icon ml-sm-2"><i class="fas fa-user"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
</header>
