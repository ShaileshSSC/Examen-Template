<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::resource('products', ProductController::class);

Route::get('/logout', [UserController::class, 'destroy'])->name('logout');
Route::post('/login', [UserController::class, 'index']);

Route::resource('cart', CartController::class);


// Route::group(['middleware' => 'userAuth'], function(){
    
// });

Route::group(['middleware' => 'adminAuth'], function(){
    Route::resource('admin/dashboard', DashboardController::class);
});

Route::view('/error', 'error/error')->name('error');