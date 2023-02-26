<?php

namespace App\Http\Controllers\Api\Braintree;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){

        $orders = Order::all();

        return response()->json($orders, 200);

    }
}
