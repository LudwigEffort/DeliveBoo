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

    <!-- Styles -->
    <style lang="scss">
        button {
            appearance: none;
            background-color: transparent;
            border: 0.125em solid #1A1A1A;
            border-radius: 0.9375em;
            box-sizing: border-box;
            color: #3B3B3B;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            margin: 0;
            outline: none;
            padding: 1em 2.3em;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            will-change: transform;
        }

        button:disabled {
            pointer-events: none;
        }

        button:hover {
            color: white background-color: #1A1A1A;
            transform: translateY(-2px);
        }

        button:active {
            box-shadow: none;
            transform: translateY(0);
        }



        a {
            text-decoration: none !important;
            color: black;
        }

        .appvue {
            position: relative;
        }

        .backend {
            position: absolute;
            z-index: 3;
            right: 20rem;
            display: flex;

        }
    </style>
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
                    <div class=" col-12 logbuttons py-2 ps-3">
                        <div class="col-6">
                            <button class="mb-3">
                                <a class="logbuttons" href="{{ route('login') }}"> Log in Dining</a>
                            </button>

                        </div class="col-6">
                        <button class="">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Apri il tuo ristorante </a>
                        </button>
            @endif
        @endauth
        @endif
    </div>
    </div>


    </div>

    <div id="root" class="container-fluid appvue"></div>
</body>

</html>
