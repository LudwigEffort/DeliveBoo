@extends('layouts.app')

@section('content')
<div class="container">
        @if ($user->id <= 5)
            <img class="img-fluid" src="{{ asset($user->uploaded_img) }}" alt="{{$user->id}}">
        @else
            <img class="img-fluid" src="{{ asset('storage/' . $user->uploaded_img) }}" alt="{{$user->id}}">
        @endif
        <div class="row">
            <h1>{{$user->name}}</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <h4>{{$user->email}}</h4>
                <h4>{{$user->opening_time}}</h4>
                <h4>{{$user->closing_time}}</h4>
            </div>
            <div class="col">
                <ul>
                    @foreach ($user->categories as $category)
                    <ul class="btn btn-primary">{{$category->name}}</ul>
                    @endforeach
                </ul>
            </div>
            <div class="row justify-content-center">
                    <div class="col">
                        <a href="{{ route('admin.dishes.index', ['dishes' => $dishes]) }}" class="btn btn-primary">Menu</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.orders.index', ['orders' => $orders]) }}" class="btn btn-warning">Ordini</a>
                    </div>
            </div>
        </div>
</div>

@endsection

<style lang="scss" scoped>

</style>
