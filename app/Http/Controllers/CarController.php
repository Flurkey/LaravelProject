<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        if (!request('manufacturer_id')) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        return view('cars.index', compact('cars', 'manufacturers'));
    }

    function save(Request $toSave) {
        $toSave->validate([
            'model'=>'required',
            'year'=>'required|digits:4',
            'salesperson_email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'
        ]);
    
        $manufacturerId = $toSave->input('manufacturer_id', 1);
    
        Car::create(array_merge($toSave->all(), ['manufacturer_id' => $manufacturerId]));
    
        return redirect()->route('cars.index')->with('message', 'Car added successfully');
    }

    function create() {
        $manufacturers = Manufacturer::all();
        return view('cars.create', compact('manufacturers'));
    }

    function show($id) {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }
}