<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- <script>
    window.addEventListener("beforeunload", function() {
        // Clear the browser cache
        window.location.reload(true);
    });
</script> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- to avoid browser caching (press back button and the nav bar still show the username) --}}
    {{--
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!-- footer CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <style>
        .food:hover {
            transform: scale(110%);
            transition: 0.4s;
        }

        #card-link {
            text-decoration: none;
            color: inherit;
        }

        .w-5 {
            display: none
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div style="position:fixed; top:0; width:100%; z-index:1">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('favourites') }}">{{ __('Favourites') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('company') }}">{{ __('About us') }}</a>
                            </li>
                            
                            
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4" style="margin-top:50px">
            @yield('content')
        </main>

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About Us</h3>
                            <ul>
                                <li><a href="{{ route('company') }}">Company</a></li>
                                <li><a href="{{ route('team') }}">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>FoodBank</h3>
                            <p>Welcome to our food recipe website! We are dedicated to providing a vast collection of
                                delicious and easy-to-follow recipes that are perfect for any occasion. Our website is a
                                go-to resource for home cooks of all levels, offering a diverse range of recipes from
                                around the world, including appetizers, main courses, desserts, and more. With our
                                step-by-step instructions, photos, and videos, you can master any dish with confidence
                                and impress your family and friends with your culinary skills. Whether you're a seasoned
                                chef or a beginner in the kitchen, we have something for everyone.</p>
                        </div>
                        <div class="col item social">
                            <a href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.snapchat.com/en-US"><i class="icon ion-social-snapchat"></i></a>
                            <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
                        </div>
                    </div>
                    <p class="copyright">FoodBank © 2023</p>
                </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        
    </div>
</body>

</html>
