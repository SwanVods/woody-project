<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ItemController::class, 'index'])->name('index');
Route::get('/products', [ItemController::class, 'furniture'])->name('products');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/product/details', 'details')->name('details');
Route::view('/cart', 'cart')->name('cart');

Route::group(['prefix' => '/product'], function () {
    Route::get('/', [ItemController::class, 'index'])->name('product');
    Route::get('/create', [ItemController::class, 'create']);
    Route::post('/store', [ItemController::class, 'store']);
    Route::get('/details/{id}', [ItemController::class, 'details']);
    Route::get('/edit/{id}', [ItemController::class, 'edit']);
    Route::post('/update/{id}', [ItemController::class, 'update']);
    Route::get('/destroy/{id}', [ItemController::class, 'destroy']);
});

Route::get('/order', function (){
    return view('order');
});