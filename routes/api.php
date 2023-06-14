<?php

use App\Http\Controllers\CartAPIController;
use App\Http\Controllers\ItemAPIController;
use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\WishlistAPIController;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',[UserAPIController::class,'login']);
Route::post('/register',[UserAPIController::class,'register']);
Route::get('/avatar/{id}',[UserAPIController::class,'profpic']);
Route::get('/items',[ItemAPIController::class,'index']);
Route::get('/gambarBarang/{id}',[ItemAPIController::class,'imgItem']);
Route::post('/addCart/{id}/{userid}',[CartAPIController::class,'store']);
Route::get('/cartPage/{userid}',[CartAPIController::class,'index']);
Route::delete('/deleteCart/{id}',[CartAPIController::class,'destroy']);
Route::post('/addWishlist/{id}/{userid}',[WishlistAPIController::class,'store']);
