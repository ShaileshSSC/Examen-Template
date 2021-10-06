<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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
    return redirect('home');
});

Route::view('/home', 'home')->name('home');

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/logout', [UserController::class, 'destroy'])->name('logout');
Route::post('/login', [UserController::class, 'index']);

Route::resource('cart', CartController::class);


// Route::group(['middleware' => 'userAuth'], function(){
    
// });

Route::view('/error', 'error/error')->name('error');