<nav class="navbar navbar-expand-md navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link lead text-light" href="/stripapp/public">Početna</a>
          </li>

          <li class="nav-item">
            <a class="nav-link lead text-light" href="/stripapp/public/insertcomic">Unesi strip</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle lead text-light" data-toggle="dropdown" aria-haspopup="true">Kategorije</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/stripapp/public/category">Kategorije</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

        </ul>

        @guest
            <a class="nav-link lead text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="nav-link lead text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
        @else
            <li class="nav-link dropdown-toggle lead text-light">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

      </div>
    </nav>
