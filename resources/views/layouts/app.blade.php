<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="nav_principale" class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <h2>@yield('title')</h2>
            </div>
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                <li><a class="nav-link" href="{{ route('login') }}">Se connecter</a></li>
                @else
                <li class="nav-item dropdown">
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
                    @auth
                    @if (!Auth::guest() && Auth::user()->adv)
                    <a class="dropdown-item" href="{{ route('users-index') }}">Gestion utilisateurs</a>
                    @else

                    @endif 
                    @endauth
                </div>
            </li>
            @endguest
        </ul>
    </nav>
    <!-- Pour intégrer la sous-nav uniquement sur les pages choisies, l'url entre les quotes -->
    @if (Request::is('nouveau_dso') or Request::is('etiquettes') or Request::is('emballages') or Request::is('a'))
    @include('sous_nav')
    @endif
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
