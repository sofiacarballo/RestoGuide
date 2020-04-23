<?php

namespace App\Http\Controllers;

use App\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{

    public function index()
    {
        $plates = Plate::all();
        return view('plate.index', compact('plates'));
    }


    public function create()
    {
        return view('plate.create');
    }


    public function store(Request $request)
    {
        Plate::create($request->all());
        return redirect(route('plate.index'));
    }


    public function show(Plate $plate)
    {
        return view('plate.show', compact('plate'));
    }


    public function edit(Plate $plate)
    {
        return view('plate.edit',['plate'=>$plate]);
    }


    public function update(Request $request, Plate $plate)
    {
        $plate->update($request->all());
        return redirect(route('plate.index'));
    }


    public function destroy(Plate $plate)
    {
        $plate->delete();
        return redirect(route('plate.index'));
    }
}
