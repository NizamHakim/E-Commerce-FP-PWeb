<?php

use App\Http\Controllers\CartController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function (){
    return view('index');
})->name('home');

Route::controller(ItemController::class)->group(function () {
    Route::get('/detail', [ItemController::class, 'detail'])->name('item.detail');
    Route::get('/categories', [ItemController::class, 'categories'])->name('item.categories');
    Route::get('/category/{id}', [ItemController::class, 'category'])->name('item.category');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/add/{id}', [CartController::class, 'store'])->name('cart.add');
    Route::get('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');