<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [ItemController::class, 'newIndex'])->name('index');
Route::get('/products', [ItemController::class, 'furniture'])->name('product');
Route::get('/product/details/{id}', [ItemController::class, 'show'])->name('details');
Route::get('/add-item/{id}', [ItemController::class, 'addCart'])->name('cart.add')->middleware('auth');

Route::get('/cart', [ItemController::class, 'showCart'])->name('cart')->middleware('auth');
Route::get('/cart/destroy/{id}', [ItemController::class, 'destroyItem'])->name('destroyItem');
Route::get('/cart/update/{id}', [ItemController::class, 'updateItem'])->name('updateItem');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/order', 'order');

