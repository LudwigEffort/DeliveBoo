<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    private $validations = [
        'slug'          => [
            'required',
            'string',
            'max:100',
        ],
        'name'          => 'required|string|max:50',
        'description'   => 'required|string',
        'price'         => 'required|integer',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $dishes = $user->dishes;

        // dd($dishes);

        return view('admin.dishes.index', [
            'dishes' => $dishes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        return view('admin.dishes.create', compact($user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validations['slug'][] = 'unique:dishes';

        $request->validate($this->validations);

        $data = $request->all();

        $dish = new Dish;
        $dish->slug             = $data['slug'];
        $dish->user_id          = $request->user()->id;
        $dish->name             = $data['name'];
        $dish->description      = $data['description'];
        $dish->price            = $data['price'];
        $dish->available        = isset($request->$dish->available) ? $request->$dish->available : false;
        $dish->is_visible       = isset($request->$dish->is_visible) ? $request->$dish->is_visible : false;
        $dish->save();

        return redirect()->route('admin.dishes.show', ['dish' => $dish]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        if (Auth::check() && Auth::user()->id == $dish->user_id) {
            return view('admin.dishes.show', ['dish' => $dish]);
        } else {
            return redirect()->route('admin.dishes.index')->with('unable_show', $dish);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        if (Auth::check() && Auth::user()->id == $dish->user_id) {
            return view('admin.dishes.edit', ['dish' => $dish]);
        } else {
            return redirect()->route('admin.dishes.index')->with('unable_edit', $dish);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $this->validations['slug'][] = 'unique:dishes';
        $request->validate($this->validations);

        $data = $request->all();

        $dish->slug             = $data['slug'];
        $dish->name             = $data['name'];
        $dish->description      = $data['description'];
        $dish->price            = $data['price'];
        $dish->available        = $data['available'];
        $dish->is_visible       = $data['is_visible'];
        $dish->update();

        return redirect()->route('admin.dishes.show', ['dish' => $dish]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.dishes.index')->with('success_delete', $dish);
    }
}
