@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:0px">
        <div class="col-md-5">
            {{-- card generale  --}}
            <div class="card" style="border:1px solid blue">
                {{-- header card --}}
                <div class="card-header" style="color:blue;">{{ ('REGISTER') }}</div>

                {{-- resto della card  --}}
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf




                        {{-- PROVA  --}}


                        {{-- nome --}}
                        <div class="inputBox">
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
                        <div  class="inputBox">
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
                        <div  class="inputBox">
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
                            <div  class="inputBox">
                                <label  for="vat_number" class="col-md-4 col-form-label text-md-right">{{ __('PARTITA IVA') }}</label>
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
                        <div class="inputBox">
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
                        <div  class="inputBox">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('CONFERMA PASSWORD') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- BOTTONE  --}}
                        <div>
                            <button type="submit" class="enter">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style lang="scss" scoped>

form {
    color: blue;
    display: flex;
    flex-direction: column;
    justify-content: center;

    gap: 30px;
}
.card-header {
    background-color: white;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: block;
    font-weight: bold;
    font-size: x-large;
    text-decoration: none;
}



/* prova  */


.inputBox {
    position: relative;
    width: 200px;
}

.inputBox input {
    width: 30vw;
    padding: 10px;
    outline: none;
    border: none;
    color: blue;
    font-size: 1em;
    background: transparent;
    transition: 0.1s;
    border: 2px solid blue;
}


.inputBox label {
    width: 200px;
}


.enter {
    margin-top: 20px;
    color: blue;
    height: 45px;
    width: 100%;
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





