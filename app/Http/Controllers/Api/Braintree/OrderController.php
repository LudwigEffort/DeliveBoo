<?php

namespace App\Http\Controllers\Api\Braintree;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){

        $orders = Order::all();

        return OrderResource::collection($orders);

    }
}
