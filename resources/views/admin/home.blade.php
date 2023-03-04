@extends('layouts.app')

@section('content')
<div class="container">
        @if ($user->id <= 5)
            <img src="{{ asset($user->uploaded_img) }}" alt="{{$user->id}}">
        @else
            <img src="{{ asset('storage/' . $user->uploaded_img) }}" alt="{{$user->id}}">
        @endif
        <h1>{{$user->name}}</h1>
        <p>{{$user->description}}</p>
        <div>{{$user->email}}</div>
        <div>{{$user->vat_number}}</div>
        @foreach ($user->categories as $category)
        <div>{{$category->name}}</div>
        @endforeach
        <div>{{$user->opening_time}}</div>
        <div>{{$user->closing_time}}</div>

        <td>
            <a href="{{ route('admin.dishes.index', ['dishes' => $dishes]) }}" class="btn btn-primary">Menu</a>
        </td>
        <td>
            <a href="{{ route('admin.orders.index', ['orders' => $orders]) }}" class="btn btn-warning">Ordini</a>
        </td>
@endsection

<style lang="scss" scoped>
* {
    color: red;
}
</style>
