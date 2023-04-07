<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/homepage', function () {
    return view('Homepage');
});

Route::get('/login',function(){
    return view('login');
})->name('login')->middleware('guest');

Route::get('/signup',function(){
    return view('SignUp');
})->name('login')->middleware('guest');

Route::post('/login',[UserController::class,'store']);

Route::post('/',[UserController::class,'authenticate']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/Homepage', function () {
    return view('Homepage');
});

Route::get('/ProductDetail', function () {
    return view('ProductDetail');
});

Route::get('/Cart', function () {
    return view('Cart');
});

Route::get('/Forum', function () {
    return view('Forum');
});

Route::get('/Category', function () {
    return view('Category');
});
