<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/back.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id='nav' class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="display: flex; justify-content:flex-end;">
            <div class="container">
                {{-- bottone che porta a home  --}}
                <a class='button' href="{{ route('welcome') }}">Home</a>

                    <img src="{{ asset('/img/logo.jpg') }}" alt="Descrizione immagine">
                {{-- <a class="navbar-brand" href="{{ url('admin/') }}">
                    {{ config('app.name', 'fui') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


<style lang="scss" scoped>

body {
    font-family: "zurich", sans-serif;
}

.button {
    color: black;
    text-decoration: none;
    text-align: center;
    padding: 10px;
}

.button:hover {
    background-color: blue;
    color: white;
    width: 100%;
    border-radius: 10px;
    transition: 1s;
}
img {
    height: 100px;
}

.container {
    display: flex;
    align-items: space-between;
    gap: 38%;
}

#nav  {
    display: flex;
    justify-content: center;
}
.nav-link {
    color: black;
}

.nav-link:hover {
    background-color: blue;
    color: white;
    width: 100%;
    border-radius: 10px;
    transition: 1s;
}


</style>
