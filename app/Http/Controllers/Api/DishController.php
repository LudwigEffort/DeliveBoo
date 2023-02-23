<?php

namespace App\Http\Controllers\Api;

use App\Dish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dish = Dish::all();
        return response()->json([
            'success' => true,
            'results' => $dish,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {

        //Al momento disattivo questo
        return response()->json([
            'success' => true,
            'results' => $dish,
        ]);
    }
}
