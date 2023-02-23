@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li class="show-text">Order ID : {{ $order->id }}</li>
            <li class="show-text">First Name : {{ $order->f_name }}</li>
            <li class="show-text">Last Name : {{ $order->l_name }}</li>
            <li class="show-text">Email : {{ $order->email}}</li>
            <li class="show-text">Phone Number : {{ $order->phone_number }}</li>
            <li class="show-text">Address : {{ $order->address }}</li>
            <li class="show-text">Order Date : {{ $order->order_date}}</li>
            <li class="show-text">Pickup Date : {{ $order->pickup_date}}</li>
            <li class="show-text">Payment Date : {{ $order->payment_date}}</li>
            <li class="show-text">Amount : {{ $order->amount }}€</li>
            {{-- !L'amount é da aggiornare traformandolo in decimali--}}
        </ul>
        <h2>Piatti ordinati</h2>
        <ul>
            @foreach ($order->dishes as $dish)
            <li>{{$dish->name}} - {{$dish->price}}$</li>
            @endforeach
        </ul>

        <h2>Totale: {{$order->amount}}</h2>

    </div>
@endsection
