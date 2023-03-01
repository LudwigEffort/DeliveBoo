<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
{
    $categories = \App\Category::all();

    $query = User::with(['dishes', 'categories']);

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->input('search') . '%');
    }

    if ($request->has('category')) {
        $query->whereHas('categories', function($q) use ($request) {
            $q->where('name', $request->input('category'));
        });
    }

    $users = $query->get();

    if (!$request->has('search')) {
        $users = $users->take(2);
    }

    return response()->json([
        'success' => true,
        'results' => $users,
        'categories' => $categories,
    ]);
}

}
