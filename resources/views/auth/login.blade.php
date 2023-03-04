@extends('layouts.app')


@section('content')

<div class="container">

    <div class="card" style="border:1px solid blue">
        {{-- form  --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- email  --}}
            <a class="login">Login</a>
            <div class="inputBox">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                {{-- @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <span class="user">Username</span>
            </div>



            {{-- password  --}}
            <div class="inputBox">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span>Password</span>
            </div>
            <button type="submit" class="enter">login</button>
        </form>
    </div>
</div>
@endsection








<style lang="scss" scoped>
.container {
    display: flex;
    justify-content: center;
}
form {
    display: flex;
    flex-direction: column;
    gap: 25px;
    align-items: center;
    justify-content: center;

}
.login {
    color: blue;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: block;
    font-weight: bold;
    font-size: x-large;
    text-decoration: none;
}

.card {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 350px;
    width: 300px;
    flex-direction: column;
    background: #e3e3e3;
    box-shadow: 16px 16px 32px #c8c8c8,
            -16px -16px 32px #fefefe;
    border-radius: 10px;
    border: 3px solid blue;
}

.inputBox {
    position: relative;
    width: 250px;
}

.inputBox input {
    width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    color: blue;
    font-size: 1em;
    background: transparent;
    border-left: 2px solid blue;
    border-bottom: 2px solid blue;
    transition: 0.1s;
    border-bottom-left-radius: 8px;
}

.inputBox span {
    margin-top: -45px;
    position: absolute;
    left: 0;
    transform: translateY(-4px);
    margin-left: 10px;
    padding: 10px;
    pointer-events: none;
    font-size: 12px;
    color: blue;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 3px;
    border-radius: 8px;
}

.inputBox input:valid~span,
.inputBox input:focus~span {
    transform: translateX(113px) translateY(-15px);
    font-size: 0.8em;
    padding: 5px 10px;
    background: blue;
    letter-spacing: 0.2em;
    border: 2px;
    color: white;
}



.inputBox input:valid,
.inputBox input:focus {
    border: 2px solid blue;
    border-radius: 8px;
}

.enter {
    color: blue;
    height: 45px;
    width: 100px;
    border-radius: 5px;
    border: 2px solid blue;
    cursor: pointer;
    background-color: transparent;
    transition: 0.5s;
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 2px;
    margin-bottom: 1em;
}

.enter:hover {
    background-color: blue;
    color: white;
}



</style>
