@extends('layouts.app')

@section('content')
<div class="container">
        <h1>{{$user->name}}</h1>
        <img src="{{ asset('storage/' . $user->uploaded_img) }}" alt="{{$user->id}}">
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
</div>
@endsection

