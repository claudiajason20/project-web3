<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'TripsAndTips') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">

        <!-- jQuery -->
        <script src="{{ url('js/jquery-3.3.1.min.js') }} "></script>
    </head>
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('') }}">{{ config('app.name', 'TripsAndTips') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::path() ==  '/' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'city' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('city') }}">Cities</a>
                </li>
                <li class="nav-item {{ Request::path() ==  'place' ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('place') }}">Places</a>
                </li>
                <li class="nav-item dropdown{{ Request::path() ==  '/' ? 'active' : ''  }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('office') }}">Our Office</a>
                    <a class="dropdown-item" href="#">Social Media</a>
                    <!--<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>-->
                    </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!-- Content -->
        <div class="main-container">
            @yield('content')
        </div>
        
        <!-- Footer -->

        <script src="{{ url('js/popper.min.js') }} "></script>
        <script src="{{ url('js/bootstrap.min.js') }} "></script>
    </body>
</html>
