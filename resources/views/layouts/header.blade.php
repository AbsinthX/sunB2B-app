<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-sun text-warning">{{ config('app.name', 'Laravel') }}</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}"><i class="far fa-newspaper"></i> {{ __('Strona główna') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('calculator') }}"><i class="fas fa-calculator"></i> {{ __('Kalkulator') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}"><i class="fas fa-cart-arrow-down"></i> {{ __('Sklep') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i> {{ __('Użytkownicy') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-warehouse"></i> {{ __('Produkty') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orders.index') }}"><i class="fas fa-cart-arrow-down"></i> {{ __('Zamówienia') }}</a></li>

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i>{{ __('Logowanie') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fa-solid fa-arrow-up-right-from-square"></i>{{ __('Rejestracja') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i>{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="{{ route('home') }}"><i class="far fa-newspaper"></i> {{ __('Aktualności') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('calculator') }}"><i class="fas fa-calculator"></i> {{ __('Kalkulator') }} </a></li>
                                <li><a class="dropdown-item" href="{{ route('shop') }}"><i class="fas fa-cart-arrow-down"></i> {{ __('Sklep') }} </a></li>
                                <li><a class="dropdown-item" href="{{ route('users.index') }}"><i class="fas fa-users"></i> {{ __('Użytkownicy') }} </a></li>
                                <li><a class="dropdown-item" href="{{ route('products.index') }}"><i class="fas fa-warehouse"></i> {{ __('Produkty') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('products.index') }}"><i class="fas fa-cart-arrow-down"></i> {{ __('Zamówienia') }}</a></li>
                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off"></i> {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</main>
