<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @stack('css-content')
    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        <div class="logo">
            <a href="#"><img src="assets/logo.png" alt=""></a>
        </div>

        <nav>
            <ul class="nav_links">
                <li><a class="active" href="/dashboard">Home</a></li>
                <li><a href="#">Favorite</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>

        @auth
            {{-- <a href="/profile">
                <div class="login-profile"> --}}
                    {{-- <a href="/profile"><img src="{{ asset('assets/profileImg.png') }}" alt=></a> --}}
                    {{-- <a href="/profile"><img src={{ auth()->user()->userimage }} alt=""></a> --}}
                        {{-- <img src={{ auth()->user()->userimage }} alt="" style="border-radius:50px">
                    <div class="name-placement">
                        <img src="assets/rectangleUser.png" alt=""> --}}
                        {{-- <div class="text-user">Hi, {{ auth()->user()->username }}</div> --}}
                        {{-- <div class="text-user">Hi, {{ explode(' ', auth()->user()->username)[0] }}</div>
                    </div>
                </div>
            </a> --}}
            <a href="/profile">
                <div class="login-profile">
                    @if(auth()->user()->userimage)
                        <img src="{{ auth()->user()->userimage }}" alt="" style="border-radius:50px">
                    @else
                        <img src="{{ asset('assets/profileImg.png') }}" alt="" style="border-radius:50px">
                    @endif
                    <div class="name-placement">
                        <img src="assets/rectangleUser.png" alt="">
                        <div class="text-user">Hi, {{ explode(' ', auth()->user()->username)[0] }}</div>
                    </div>
                </div>
            </a>
        @else
            <div class="login_button">
                <a href="login" class="login"><button>Login</button></a>
                <div class="border"></div>
                <a href="/register" class="sign_up"><button>Sign Up</button></a>
            </div>
        @endauth

    </header>

    @yield('content')


    @stack('js-content')
</body>

</html>
