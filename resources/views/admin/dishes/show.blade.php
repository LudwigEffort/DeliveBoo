@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $dish->name }}</h1>
        <div class="clearfix">
            {{ $dish->description }}
        </div>
        <div class="clearfix">
            <img class="float-start" src="{{ asset('storage/'. $dish->uploaded_img) }}" alt="{{ $dish->name }}">
            {{ $dish->description }}
        </div>
    </div>
@endsection


