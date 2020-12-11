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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div></div>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('category.index') }}">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('client.index') }}">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('product.index') }}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('provider.index') }}"> Provider</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('sale.index') }}">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('config') }}">Settings </a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" target="_blank" href="//parzibyte.me/blog">{{env("APP_NAME")}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    id="botonMenu" aria-label="Mostrar u ocultar menú">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Registro
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("home")}}">Home&nbsp;<i class="fa fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("category.index")}}">Category&nbsp;<i class="fas fa-cube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("product.index")}}">Product&nbsp;<i class="fas fa-dumpster"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("provider.index")}}">Provider&nbsp;<i class="fas fa-truck"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("sale.index")}}">Sale&nbsp;<i class="fas fa-cart-arrow-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("config")}}">Config&nbsp;<i class="fas fa-cog"></i></a>
                        </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" > <i class="fas fa-share-square"></i>     
                                Logout ({{Auth::user()->name}})
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endauth
                    
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route("soporte.index")}}">Soporte&nbsp;<i
                                class="fa fa-hands-helping"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("acerca_de.index")}}">Acerca de&nbsp;<i class="fa fa-info"></i></a>
                    </li> --}}
                </ul>
            </div>
        </nav><br><br><br>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
</body>
</html>
