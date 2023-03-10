@extends('layouts.app')

@section('content')
<div class="container">
{{-- !AGGIUSTARE MESSAGGIO RISORSA ELIMINATA --}}
    {{-- @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Post with id {{ session('success_delete')->id }} was delete!
        </div>
    @endif --}}
    @if (session('unable_show'))
        <div class="alert alert-warning" role="alert">
            You are not able to see the order with id {{ session('unable_show')->id }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Order Date</th>
                <th scope="col">Pickup Date</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->f_name }}</td>
                    <td>{{ $order->l_name }}</td>
                    <td>{{ $order->email}}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->order_date}}</td>
                    <td>{{ $order->pickup_date}}</td>
                    <td>{{ $order->payment_date}}</td>
                    <td>{{ $order->amount}}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', ['order' => $order]) }}" class="btn btn-danger btn-delete-me">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
