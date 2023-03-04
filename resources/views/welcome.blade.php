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
        <style lang="scss">

            .logbuttons {

            }
            .logbuttons button {
                font-weight: bold;
                color: black;
                border: none;
                background-color: #3653F8;
                display: flex;
                justify-content: center;
                align-items: center;
                font-variant: small-caps
            }

            a {
                text-decoration: none !important;
                color:  black;
            }

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
                    <div class="logbuttons py-2 ps-3">
                        <div class="col-6">
                            <button class="mb-3">
                                <a class="logbuttons" href="{{ route('login') }}"> Log in  Dining</a>
                            </button>
                        </div>
                        <button class="">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Apri il tuo ristorante  </a>
                        </button>
                        @endif
                        @endauth
                        @endif
                    </div>
                    </div>
            <div id="root" class=""></div>
    </body>
</html>
