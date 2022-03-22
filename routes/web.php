<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Http\Controllers\Products;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Cart;

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

FacadesAuth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('user/profle', [UserController::class, 'index'])->name('user');

Route::prefix('user')->group(function() {
    Route::get('/profile/{id}', [UserController::class, 'edit'])->name('user')->middleware('profile');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update-user');
    Route::post('addcart',[UserController::class, 'addcart'])->name('addcart')->middleware('auth');
    Route::get('cart', [UserController::class, 'cart'])->name('cart')->middleware('auth');
});

Route::prefix('admin')->group(function() {
    Route::get('/profile',[AdminController::class, 'index'])->name('profile');
    Route::get('/add', [Products::class, 'add'])->name('addmenu');
    Route::post('/add', [Products::class, 'store'])->name('store');
    Route::get('/listmenu', [Products::class, 'index'])->name('listmenu');
    Route::get('/listmenu/edit/{id}', [Products::class, 'edit'])->name('edit-product');
    Route::post('/listmenu/update/{id}', [Products::class, 'update'])->name('update-product');
    Route::post('/listmenu/delete/{id}', [Products::class, 'delete'])->name('del-product');
});

Route::get('product/{id}', [Products::class, 'detail'])->name('pro-detail');

Route::get('listuser', [AdminController::class, 'listuser'])->name('list-user');

Route::get('cartuser/{id}',[AdminController::class, 'cart'])->name('cartuser');

Route::post('cart/delete/{id}', [CartController::class, 'delete'])->name('del-cart');

Route::post('search', [Products::class, 'search'])->name('search');
