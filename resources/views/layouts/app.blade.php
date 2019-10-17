<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @yield('content')

        @auth
            <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light green">
                <i class="material-icons">apps</i>
            </a>
            <ul>
                <li><a class="btn-floating red tooltipped" data-position="left" data-tooltip="Cerrar Sesión" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">close</i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a></li>
                <li><a class="btn-floating green" href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i></a></li>
            </ul>
        </div>
        @endauth

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/3d376d57db.js" crossorigin="anonymous"></script>   
        <script src="{{ asset('js/app.js') }}"></script>

    </div>
</body>
</html>
