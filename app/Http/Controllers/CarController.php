<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create_step1()
    {
        return view('cars.create');
    }
}
