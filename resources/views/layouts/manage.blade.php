<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Library - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>

    @include('_includes.nav.main')

    @include('_includes.nav.manage')

    <div class="management-area" id="app">
      @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('_includes.notifications.toast')
    @yield('scripts')
</body>
</html>


<!--<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
<!--    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Library - MANAGEMENT</title>

    <!-- Styles -->
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav class="navbar-menu has-shadow">
                <div class="container">
                    
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{route('home')}}">
                            
                            <img src ="{{asset('images/library-logo2.png')}}" alt="Library Logo">

                        </a>
                        <a href="" class="navbar-item is-tab is-hidden-mobile m-l-5">Learn</a>
                        <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                        <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                        
                    </div>
                    <div class="navbar-end">
                        @if (Auth::guest())
                            <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                            <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>

                        @else
                            <button class="dropdown is-aligned-right navbar-item is-tab">
                                Hey Peter <span class="icon"><i class="fa fa-caret-down"></i></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
                                        Profile</a></li>
                                    <li><a href="#">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>
                                        Notifications</a></li>
                                    <li><a href="#">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>
                                        Settings</a></li>
                                    <li class="seperator"></li>
                                    <li><a href="#">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                                        Logout</a></li>
                                </ul>
                            </button>

                        @endif

                    </div>
                </div>
            </nav>
            @yield('content')
        
    </div>

    <!-- Scripts -->
<!--    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> -->
