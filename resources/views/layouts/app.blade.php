<html>
    <head>
        <title>App Name - @yield('Accueil')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @section('sidebar')
        <header>
            <h2>@yield('title')</h2>
        </header>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

