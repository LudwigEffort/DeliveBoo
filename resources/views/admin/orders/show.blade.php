@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li scope="row">{{ $order->id }}</li>
            <li>{{ $order->f_name }}</li>
            <li>{{ $order->l_name }}</li>
            <li>{{ $order->email}}</li>
            <li>{{ $order->phone_number }}</li>
            <li>{{ $order->address }}</li>
            <li>{{ $order->order_date}}</li>
            <li>{{ $order->pickup_date}}</li>
            <li>{{ $order->payment_date}}</li>
            <li>{{ $order->amount}}</li>
        </ul>
    </div>
@endsection
