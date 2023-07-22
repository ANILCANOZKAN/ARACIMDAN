<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionControl;
use App\Models\Car;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'powerfullCars' => Car::where('segment', 1)->get(),
        'cars' => Car::where('segment', 0)->get(),
        'comments' => Comment::where('pin', true)->get()
    ]);
});

//Session
Route::post('/login', [SessionControl::class, 'store']);
Route::get('/logout', [SessionControl::class, 'destroy']);

//Register
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

//Car
Route::get('/cars/{car:id}', [CarController::class, 'show']);

//Comment
Route::post('/commentStore/{car:id}', [CommentController::class, 'store']);
Route::post('/commentPin/{comment:id}', [CommentController::class, 'pin']);
Route::post('/commentUnPin/{comment:id}', [CommentController::class, 'Unpin']);

//Randevu
Route::get('/randevu/{car:id}', [RandevuController::class, 'create']);
Route::post('/randevu/{car:id}', [RandevuController::class, 'store']);
Route::get('/randevuDestroy/{car:id}', [RandevuController::class, 'destroy']);
