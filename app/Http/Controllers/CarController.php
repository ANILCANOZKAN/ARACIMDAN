<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comment;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show(Car $car){
        return view('car',[
            'car' => $car,
            'comments' => Comment::where('car_id', $car->id)->latest()->simplepaginate(3)
        ]);
    }
}
