<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemCategoryController;

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

    Route::middleware('only_admin')->group(function() {
        Route::get('dashboard', [DashboardController::class, 'index']);
    
        Route::get('items', [ItemController::class, 'list']);
        Route::get('item-add', [ItemController::class, 'add']);
        Route::post('item-add', [ItemController::class, 'store']);

        Route::get('item-edit/{id}', [ItemController::class, 'edit']);
        Route::post('item-edit/{id}', [ItemController::class, 'update']);

        Route::get('item-delete/{id}', [ItemController::class, 'delete']);
        Route::get('item-destroy/{id}', [ItemController::class, 'destroy']);
        Route::get('item-deleted', [ItemController::class, 'deletedBook']);
        Route::get('item-restore/{id}', [ItemController::class, 'restore']);

        Route::get('category-list', [ItemCategoryController::class, 'list']);

        Route::get('users', [UserController::class, 'list']);
    });
});

Route::controller(ItemController::class)->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('item.index');
    Route::get('/detail/{id}', [ItemController::class, 'detail'])->name('item.detail');
    Route::get('/categories', [ItemController::class, 'categories'])->name('item.categories');
    Route::get('/category/{id}', [ItemController::class, 'category'])->name('item.category');
    Route::get('/search', [ItemController::class, 'search'])->name('item.search');
});

Route::middleware('auth')->group(function() {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'store'])->name('cart.add');
    Route::get('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.remove');
    Route::post('/order/create', [OrderController::class, 'store'])->name('order.create');
});