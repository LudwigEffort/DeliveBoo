<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with(['dishes', 'categories'])->get();
        return response()->json([
            'success' => true,
            'results' => $user,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::where('id', $user->id)->with(['dishes','categories'])->first();
        return response()->json([
            'success' => true,
            'results' => $user,
        ]);
    }
}
