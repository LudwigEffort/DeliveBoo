<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amount = 0;
        $user = auth()->user();
        $orders = Order::whereHas('dishes.user',
        function ($query) use ($user) {
                                $query->where('id', $user->id);
        })->get();

        foreach ($orders as $order) {
            foreach ($order->dishes as $dish) {
                $amount += $dish->price;
            }
        }
            return view('admin.orders.index', [
                'orders' => $orders,
                'amount' => $amount,
            ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $dishes = Dish::findOrFail('user_id');

        if (Auth::check() && Auth::user()->id == $dishes->user_id) {
            return view('admin.orders.show', ['order' => $order]);
        } else {
            return redirect()->route('admin.orders.index')->with('unable_show', $order);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
