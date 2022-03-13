<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('user/profle', [UserController::class, 'index'])->name('user');

Route::prefix('user')->group(function() {
    Route::get('/profile/{id}', [UserController::class, 'edit'])->name('user')->middleware('profile');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update-user');
});

Route::prefix('admin')->group(function() {
    Route::get('/profile',[AdminController::class, 'index'])->name('profile');
    Route::get('/add', [Products::class, 'add'])->name('addmenu');
    Route::post('/add', [Products::class, 'store'])->name('store');
    Route::get('/listmenu', [Products::class, 'index'])->name('listmenu');
    Route::get('/listmenu/edit/{id}', [Products::class, 'edit'])->name('edit-product');
    Route::post('/listmenu/update/{id}', [Products::class, 'update'])->name('update-product');
    Route::DELETE('/listmenu/delete/{id}', [Products::class, 'delete'])->name('del-product');
});
