<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{-- Style --}}

        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-braintree/dist/vue-braintree.umd.min.js"></script>

        <script src="{{ asset('js/front.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

            @if (Route::has('login'))
                <div class="row">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <form method="POST" action="/logout">
                            @csrf <!-- inserisce il token di sicurezza -->
                            <input type="submit" value="Logout">
                        </form>
                    @else
                    <div class="logbuttons">
                        <div class="col-6">
                            <button class="bg-light">
                                <a class="logbuttons" href="{{ route('login') }}"> Log in  Dining</a>
                            </button>
                        </div>
                        <button class="bg-light">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Apri il tuo ristorante  </a>
                        </button>

                        @endif
                        @endauth
                        @endif
                    </div>
                    </div>

            <div id="root" class="container-fluid"></div>
    </body>
</html>
