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

        //$centAmount = $request->query('amount');

        //$tenthsAmount = Order::amountConvert($centAmount);

        $orders = $orders->map(function ($order) {
            //$user->name = strtoupper($user->name);

            $amountCents = $order->amount;

            $order->amount = Order::amountConvert($amountCents);

            return $order;
        });

        return OrderResource::collection($orders);

    }
}

// public function slug(Request $request){
//         // localhost:8000/admin/categories/slug?title=ciao a tutti
//         $title = $request->query('title');

//         // risponde con il primo slug disponibile restituito in formato JSON per essere usato da JS
//         $slug = Category::getSlug($title);

//         return response()->json([
//             'slug' => $slug,
//         ]);
//     }
