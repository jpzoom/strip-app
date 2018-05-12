<!DOCTYPE html>
@include('include.styles')
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >{{ config('app.name', 'Strip preglednik') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

    <nav class="navbar navbar-expand-md lined navmarg">
      <div class="container">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link lead text-light txshad" href="{{ url('/') }}">Početna</a>

@auth
            <a class="nav-link lead text-light txshad" href="{{ url('/insertcomic') }}">Unesi strip</a>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle lead text-light txshad" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorije</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="ddown-item" href="/stripapp/public/category">Kategorije</a>
              <a class="ddown-item" href="/stripapp/public/category">Nešto drugo</a>
            </div>
          </li>
@endauth
        </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link lead text-light txshad" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link lead text-light txshad" href="{{ route('register') }}">{{ __('Registracija') }}</a></li>
                        @else
                            <li><a class="nav-link fa fa-user lead text-light txshad" href="{{ url('/profile') }}">Profil: {{ Auth::user()->name }} <span class="caret"></span></a>


                                <!-- OVO JE ZA LOGOUT -->
                                    <li><a class="nav-link lead text-primary txshad" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Odlogirajte se') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</body>
</html>
