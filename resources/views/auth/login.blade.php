@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:150px">
    <div class="row justify-content-center " >
        <div class="col-md-5">
            {{-- card generale del login  --}}
        <div class="card" style=" border: 1px solid #2001e5">
            {{-- header della card  --}}
                <div class="card-header"
                style="border-bottom: 1px solid #2001e5;
                background-color:blue;
                color: white;
                display:flex;
                justify-content:center;
                ">
                {{ __('LOGIN') }}</div>

                {{-- resto della card  --}}
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- email --}}
                        <div class="form-group row" style="margin-bottom: 10px;">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMAIL') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- password  --}}
                        <div class="form-group row" style="margin-bottom: 20px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('PASSWORD') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- checkbox  --}}
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricorda informazioni') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- bottone login --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"
                                style="background-color: #2001e5;
                                margin-top:20px;
                                font-size:20px;
                                color:white;
                                border-color: #2001e5;">
                                {{ __('Accedi') }}
                                </button>

                                {{-- passowrd dimenticata --}}
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-top:20px; color:#2001e5;">
                                        {{ __('Password dimenticata?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        {{-- fine form  --}}
                    </form>
                </div>
            </div>
        </div>
        {{-- fine card  --}}
    </div>
</div>
@endsection


