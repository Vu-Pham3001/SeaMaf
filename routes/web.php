<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/profile',[App\Http\Controllers\AdminController::class, 'index'])->name('profile')->middleware('profile');

Route::get('user/profle', [App\Http\Controllers\AdminController::class, 'user'])->name('userprofile');

Route::get('admin/add', [App\Http\Controllers\Products::class, 'add'])->name('addmenu');

Route::post('admin/add', [App\Http\Controllers\Products::class, 'store'])->name('store');

Route::get('admin/listmenu', [App\Http\Controllers\Products::class, 'index'])->name('listmenu');

Route::DELETE('admin/listmenu', [App\Http\Controllers\Products::class, 'delete'])->name('del-product');
