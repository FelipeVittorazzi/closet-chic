<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="row structure">

            <div class="col-2 p-0">
                <div class="sidebar">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark w-100">
                        <a href="/"
                            class="d-flex align-items-center text-white text-decoration-none">
                            <span class="fs-4">Closet Chic</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="home" class="nav-link active" aria-current="page">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    Estoque
                                </a>
                            </li>
                            <li>
                                <a href="products" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#grid"></use>
                                    </svg>
                                    Produtos
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle"></use>
                                    </svg>
                                    Categorias
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle"></use>
                                    </svg>
                                    Clientes
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle"></use>
                                    </svg>
                                    Consignados
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                    class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10 p-0">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="p-4">
                    @yield('content')
                </main>

            </div>

        </div>

    </div>
</body>

</html>
