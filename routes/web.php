<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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


// Route::get('/addi',[AuthController::class,"addi"]);
Route::get('/',[PageController::class,"index"]);

Route::get('/logout',[AuthController::class,"logout"]);
Route::get('/admin',[AuthController::class,"admin_login"])->name("login");
Route::post('/admin',[AuthController::class,"admin_login_check"]);

// Admin Route:
Route::get('/admin/product',[AdminController::class,"admin_product"])->middleware('auth');
Route::get('/add',[AdminController::class,"admin_product_add"])->middleware('auth');
Route::post('/add',[AdminController::class,"admin_product_add_create"])->middleware('auth');
Route::get('/edit/{id}',[AdminController::class,"admin_product_edit"])->middleware('auth');
Route::post('/edit/{id}',[AdminController::class,"admin_product_edit_update"])->middleware('auth');
Route::get('/delete/{id}',[AdminController::class,"admin_product_delete"])->middleware('auth');








