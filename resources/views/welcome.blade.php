@extends('layouts.app')

@section('content')

    <div class="container-fluid c-nav c-nav-scroll-0" id="c-nav-top">
        <div class="row">
            <div class="col-lg-2 font-weight-bold h4 pl-2 m-0">Mobile Shop</div>
            <div class="col-lg-8">
                <ul class="c-navitem">
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Demo</a></li>
                    <li><a href="#">mobile</a></li>
                    <li><a href="#">documents</a></li>
                    <li><a href="#">supports</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <div class="btn loginBtn-navbar">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}" style="color: white;">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="pl-2">Home</span>
                                </a>
                            @else
                                <a href="{{ route('login') }}" style="color: white;">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="pl-2">Login</span>
                                </a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div style="width : 100%;height : 100%">
        <img src="images/Intro-1.jpg" alt="kg" style="width: 100%;height : 100%;">
    </div>
    <div style="width : 100%;height : 100%">
        <img src="images/Intro-1.jpg" alt="kg" style="width: 100%;height : 100%;">
    </div>


@endsection


<!--
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
@auth
        <a href="{{ url('/home') }}">Home</a>
            @else
        <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
                @endif
    @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>


-->
