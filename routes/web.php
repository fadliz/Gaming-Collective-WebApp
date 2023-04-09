<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Models\Forum;
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
})->middleware('guest');

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
    return view('Forum',['post' => Forum::all()]);
});

Route::get('/Category', function () {
    return view('Category');
});

Route::get('/Admin', function () {
    return view('/admin/dashboard');
});

Route::get('/AdminProduct', function () {
    return view('/admin/product');
});

Route::get('/AdminAddProduct', function () {
    return view('/admin/addproduct');
});

Route::post('/Forum',[ForumController::class,'store']);

Route::post('/reply',[ReplyController::class,'store']);

Route::get('/adminDashboard',function () {
    return view('admin.dashboard');
});

Route::get('/products',function () {
    return view('admin.product');
});

Route::get('/Profile',function(){
    return view('ProfilePage');
});

Route::post('/change-profile-pic/{id}',[UserController::class,'editProfilepPic']);
Route::resource('items', ItemController::class);
