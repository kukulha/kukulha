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
    <nav class="black show-on-small hide-on-large-only">
        <a href="#" data-target="slide-out" class="sidenav-trigger white-text right"><i class="material-icons">menu</i></a>
    </nav>
    <div id="dashboard">
        <ul id="slide-out" class="sidenav sidenav-fixed black">
                <li>
                    <div class="user-view">
                        <a href="{{ route('home') }}" class="brand-logo white-text"><img src="/img/logo.png" class="responsive-img" alt=""></a>
                    </div>
                </li>
                <li><a href="{{ route('home') }}"class="white-text">Ver Página</a></li>
                <li><a href="{{ route('dashboard') }}"class="@if(Request::is('dashboard')) green-text  @endif white-text">Panel de Control</a></li>
                @can('users.index')
                <li><a href="{{ route('users.index') }}"class="@if(Request::is('users')) green-text  @endif white-text">Usuarios</a></li>
                @endcan
                @can('roles.index')
                <li><a href="{{ route('roles.index') }}"class="@if(Request::is('roles')) green-text  @endif white-text">Roles</a></li>
                @endcan
                @can('categories.index')
                <li><a href="{{ route('categories.index') }}"class="@if(Request::is('categories')) green-text  @endif white-text">Categorías</a></li>
                @endcan
                @can('posts.index')
                <li><a href="{{ route('posts.index') }}"class="@if(Request::is('posts')) green-text  @endif white-text">Artículos</a></li>
                @endcan
                @can('images.index')
                <li><a href="{{ route('images.index') }}"class="@if(Request::is('images')) green-text  @endif white-text">Imagenes</a></li>
                @endcan
                @can('messages.index')
                <li><a href="{{ route('messages.index') }}"class="@if(Request::is('messages')) green-text  @endif white-text">Mensajes</a></li>
                @endcan
                <li>
                    <a class="btn red tooltipped" data-position="left" data-tooltip="Cerrar Sesión" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar Sesión
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li> 
        </ul>


        @if(session('info'))
            <div class="container section center dashboard">
                <div class="row">
                    <div class="col s12 green lighten-5 ">
                        <p class="green-text">{{ session('info') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container section dashboard">
                <div class="row">
                    <div class="col s12 red lighten-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="red-text text-accent-4">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/3d376d57db.js" crossorigin="anonymous"></script>   
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

    </div>
</body>
</html>
