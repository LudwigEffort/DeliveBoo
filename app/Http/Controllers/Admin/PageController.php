<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $dishes = Dish::all();
        $orders = Order::all();
        return view('admin.home', [
            'user' => $user,
            'dishes' => $dishes,
            'orders' => $orders,
        ]);
    }
}
