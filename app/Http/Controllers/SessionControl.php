<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SessionControl extends Controller
{
    public function store(){
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::firstWhere('email', $attributes['email']);
        if($user == null){
            return redirect('/')->with('error', 'E-mail bulunamadı.');
        }
        if($attributes['password'] == $user->password){
            session()->regenerate();//session fixation
            auth()->login($user);
            return back()->with('success', $user->name.' Hoşgeldiniz.');
        }
        return redirect('/')->with('error', 'Parolanız yanlış.');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Başarıyla Çıkış Yaptınız.');
    }
}
