<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/product'], function () {
    Route::get('/', [ItemController::class, 'index'])->name('product');
    Route::get('/details/{id}', [ItemController::class, 'show'])->name('details');
});
Route::post('/purchase', [UserController::class, 'purchase'])->name('purchase');
