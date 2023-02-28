<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
{
    $query = User::with(['dishes', 'categories']);

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->input('search') . '%');
    }

    $users = $query->get();

    return response()->json([
        'success' => true,
        'results' => $users,
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
