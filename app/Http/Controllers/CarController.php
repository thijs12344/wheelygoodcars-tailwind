<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function create_step1()
    {
        return view('cars.create_step1');
    }

    public function create_step2(Request $request)
    {
        $request->validate([
            'license_plate' => 'required|string|unique:cars,license_plate',
        ]);

        // Kenteken opslaan in sessie
        $request->session()->put('license_plate', $request->license_plate);

        return view('cars.create_step2', ['license_plate' => $request->license_plate]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|numeric',
            'mileage' => 'required|integer',
        ]);

        // Auto opslaan in de database
        Car::create([
            'user_id' => auth()->id(),
            'license_plate' => session('license_plate'),
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'mileage' => $request->mileage,
        ]);

        return redirect()->route('dashboard')->with('success', 'Auto succesvol toegevoegd!');
    }

    public function index()
    {
    $cars = Car::where('user_id', auth()->id())->get();
    return view('cars.view', compact('cars'));
    }

}
