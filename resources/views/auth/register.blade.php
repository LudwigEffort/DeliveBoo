@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:0px">
        <div class="col-md-5">
            {{-- card generale  --}}
            <div class="card" style=" border: 1px solid #2001e5">
                {{-- header card --}}
                <div class="card-header"
                style="border-bottom: 1px solid #2001e5;
                background-color:blue;
                color: white;
                display:flex;
                justify-content:center;
                ">{{ __('REGISTER') }}</div>

                {{-- resto della card  --}}
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- nome --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOME') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- categoria  --}}
                        <div class="mb-3" style="margin-top: 20px;">
                            <label for="category_id" class="form-label">CATEGORIA</label>
                            <select multiple class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id[]">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>{{ $category->name }} @if(is_array(old('category_id')) && in_array($category->id, old('category_id'))) checked @endif</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('category_id')
                                    <ul>
                                        @foreach ($errors->get('category_id') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @enderror
                            </div>
                        </div>


                        {{-- immagine  --}}
                        <div class="form-group row">
                            <label for="uploaded_img" class="form-label" >CARICA IMMAGINE</label>
                            <input class="form-control @error('uploaded_img') is-invalid @enderror"
                            type="file" id="uploaded_img" name="uploaded_img">
                            <div class="invalid-feedback">
                                @error('uploaded_img')
                                    <ul>
                                        @foreach ($errors->get('uploaded_img') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @enderror
                            </div>
                        </div>


                        {{-- email  --}}
                        <div class="form-group row " style="margin-top: 20px;">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMAIL') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- vat number  --}}
                                <label style="margin-top: 30px;" for="vat_number" class="col-md-4 col-form-label text-md-right">{{ __('PARTITA IVA') }}</label>
                                <div class="col-md-6" style="margin-top: 30px;">
                                    <input id="vat_number" type="text" class="form-control @error('vat_number') is-invalid @enderror" name="vat_number" value="{{ old('vat_number') }}">
                                    @error('vat_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- password --}}
                        <div class="form-group row" style="margin-top: 30px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('PASSWORD') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- conferma  --}}
                        <div class="form-group row" style="margin-top: 30px;">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('CONFERMA PASSWORD') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- BOTTONE  --}}
                        <div class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style=" color: white; background-color:#2001e5;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




{{-- nuovo form  --}}



<div class="container">
    <div class="card">
        {{-- form  --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- email  --}}
            <a class="login">Log in</a>
            <div class="inputBox">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror>
                <span class="user">Username</span>
            </div>



            {{-- password  --}}
            <div class="inputBox">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror>
                <span>Password</span>
            </div>
            <button class="enter">Enter</button>
        </form>
    </div>
</div>


