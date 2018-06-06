<!DOCTYPE html>
@include('include.styles')
<html lang="{{ app()->getLocale() }}">
<head>
    @include('include.styles')
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
            <a class="nav-link lead text-light txshad" href="{{ url('/favourites') }}">Favoriti</a>
            <a class="nav-link lead text-light txshad" href="{{ url('/category') }}">Vaše kategorije</a>
            <a class="nav-link lead text-light txshad" href="{{ url('/insertcomic') }}">Unesi strip</a>
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
                            <li><a class="nav-link fa fa-user lead text-light txshad" href="{{ url('/profile') }}" style="position:relative; padding-left:60px;">
                                  <img class="whiteborder woah" src="images/avatars/{{ Auth::user() -> avatar }}" style="width:42px; height:42px; position:absolute; bottom: 1px;left:10px; border-radius:50%;">
                                  {{ Auth::user()->name }} <span class="caret"></span></a>


                                <!-- OVO JE ZA LOGOUT -->
                                    <li style="border-left: solid; border-width: 2px;"><a class="nav-link fa fa-user lead texthighlight txshad" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
