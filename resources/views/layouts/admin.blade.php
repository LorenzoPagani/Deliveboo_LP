<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu"
                    class="col-md-3 col-lg-2 d-md-block bg-white shadow-lg navbar-white sidebar collapse">
                    <div class="position-sticky pt-3 bg-white">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link rounded" href="/">
                                    <i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mt-2 rounded {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-orange text-white' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mt-2 rounded {{ Route::currentRouteName() == 'admin.restaurants.index' ? 'bg-orange text-white' : '' }}"
                                    href="{{ route('admin.restaurants.index') }}">
                                    <i class="fa-solid fa-building"></i> Restaurant
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mt-2 rounded {{ Route::currentRouteName() == 'admin.orders' ? 'bg-orange text-white' : '' }}"
                                    href="{{ route('admin.orders') }}">
                                    <i class="fa-solid fa-book"></i> Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mt-2 rounded {{ Route::currentRouteName() == 'admin.dishes.index' ? 'bg-orange text-white' : '' }}"
                                    href="{{ route('admin.dishes.index') }}">
                                    <i class="fa-solid fa-utensils fa-lg fa-fw"></i> Dishes
                                </a>
                            </li>


                        </ul>

                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="container-fluid p-2 d-flex justify-content-between align-items-center">
                        <h1>@yield('title')</h1>
                        <div class="dropdown">
                            <i class="fa-solid fa-user dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <p class="ps-3 fs-6">
                                        {{ auth()->user()->name }}
                                    </p>
                                </li>
                                <li>
                                    <a class="dropdown-item link-entry" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>
