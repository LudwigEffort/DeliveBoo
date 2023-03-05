<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    {{-- Style --}}

    <script src="{{ asset('js/front.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="backend row">
        @if (Route::has('login'))
            <div class="row">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <form method="POST" action="/logout">
                        @csrf
                        <!-- inserisce il token di sicurezza -->
                        <input type="submit" value="Logout">
                    </form>
                @else
                    <div >
                        <div>
                            <div class='button'>
                                <a class="logbuttons" href="{{ route('login') }}">LOGIN</a>
                            </div>
                        </div>
                        <div class='button'>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">REGISTRATI</a>
                        </div>
            @endif
        @endauth
        @endif
    </div>
    </div>


    </div>

    <div id="root" class="container-fluid appvue"></div>
</body>

</html>


<!-- Styles -->
<style lang="scss">

 
    .button a {
        color: black;
    }

    .button a:hover {
        color: white;
        background-color: blue;
        padding: 5px;
        border-radius: 10px;
        transition: 1s;
    }

    .row {
        display: flex;
    }

    .appvue {
        position: relative;
    }

    .backend {
        position: absolute;
        z-index: 3;
        right: 20rem;
        display: flex;
        gap: 30px;
        margin-top: 50px;
    }
</style>
