<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        <b-navbar toggleable="lg" type="dark" variant="primary">
            <b-container>
                <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
            
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            
                <b-collapse id="nav-collapse" is-nav>
            
                    <!-- Right aligned nav items -->
                    <b-navbar-nav class="ml-auto">
                
                        <b-navbar-nav>
                            @guest
                                @if (Route::has('login'))
                                    <b-nav-item href="{{ route('login') }}">Login</b-nav-item>
                                @endif
                                @if (Route::has('register'))
                                    <b-nav-item href="{{ route('register') }}">Registro</b-nav-item>
                                @endif
                            @else
                            <b-nav-item-dropdown text="User" right>
                                <b-dropdown-item href="#">Cerrar sesión</b-dropdown-item>
                            </b-nav-item-dropdown>
                            @endguest
                        </b-navbar-nav>
                        
                    </b-navbar-nav>
                </b-collapse>
            </b-container>
        </b-navbar>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
