<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');

    Route::get('items', [ItemController::class, 'list']);
    Route::get('item-add', [ItemController::class, 'add']);
    Route::post('item-add', [ItemController::class, 'store']);
});

Route::controller(ItemController::class)->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('item.index');
    Route::get('/detail/{id}', [ItemController::class, 'detail'])->name('item.detail');
    Route::get('/categories', [ItemController::class, 'categories'])->name('item.categories');
    Route::get('/category/{id}', [ItemController::class, 'category'])->name('item.category');
    Route::get('/search', [ItemController::class, 'search'])->name('item.search');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'store'])->name('cart.add');
    Route::get('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');
});

Route::controller(OrderController::class)->group(function () {
    Route::post('/order/create', [OrderController::class, 'store'])->name('order.create');
});