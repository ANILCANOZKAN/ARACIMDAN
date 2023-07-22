<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('/register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'phone' => ['required', 'numeric', 'digits:10', Rule::unique('users', 'phone')],
            'password' => 'required|max:20|min:8'
        ]);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/');
    }
}
