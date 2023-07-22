<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Randevu;
use App\Models\User;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    public function create(Car $car){
        return view('randevu',[
            'car' => $car
        ]);
    }

    public function store(Car $car){
        $attributes = \request()->validate([
            'date' => 'required',
            'clock' => 'required'
        ]);
        $attributes['clock'] = $attributes['clock'].".00";
        $attributes['car_id'] = $car->id;
        $attributes['user_id'] = auth()->id();
        Randevu::create($attributes);
        return back()->with('success', 'Randevunuz başarıyla alındı.');
    }

    public function destroy(Car $car){
        $randevu = Randevu::where('user_id', auth()->id())->where('car_id', $car->id)->get();
        $randevu[0]->delete();
        return back()->with('success', 'Randevunuz başarıyla iptal edildi.');
    }
}
