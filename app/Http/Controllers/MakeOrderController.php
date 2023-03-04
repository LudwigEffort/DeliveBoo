<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class MakeOrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order;
        $order->f_name = $request->input('f_name');
        $order->l_name = $request->input('l_name');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->address = $request->input('address');
        $order->amount = $request->input('amount');
        $order->order_date = $request->input('order_date');
        $order->pickup_date = $request->input('pickup_date');
        $order->payment_date = $request->input('payment_date');
        $order->save();

        $dishes = $request->input('dishes');
        $order->dishes()->attach($dishes);

        return response()->json(['success' => true]);
    }
}
