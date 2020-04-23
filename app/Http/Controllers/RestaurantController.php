<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Auth;

class RestaurantController extends Controller
{

    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant.index',['restaurants'=>$restaurants]);
    }


    public function create()
    {
        return view('restaurant.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth::user()->id;
        Restaurant::create($data);
        return redirect(route('restaurant.index'));
    }


    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', compact('restaurant'));
    }


    public function edit(Restaurant $restaurant)
    {
        return view('restaurant.edit',['restaurant'=>$restaurant]);
    }


    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->update($request->all());
        return redirect(route('restaurant.index'));
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect(route('restaurant.index'));
    }
}
