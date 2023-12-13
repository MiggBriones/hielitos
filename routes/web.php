<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MaintenanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteService Provider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Ruta usando closure*/
Route::get('/', function () {
    return view('principal');
});

/* Ruta usando controlador */
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/muro', [PostController::class, 'index'])->name('posts.index');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/client/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/client', [ClientController::class, 'store']);

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/product', [ProductController::class, 'store']);
Route::patch('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');

Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance');
Route::get('/maintenance/create', [MaintenanceController::class, 'create'])->name('maintenance.create');
Route::get('/maintenance/{idClient}', [MaintenanceController::class, 'GetProductsByClient'])->name('maintenance.GetProductsByClient');
Route::post('/maintenance', [MaintenanceController::class, 'store'])->name('maintenance.store');

Route::post('/images', [ImageController::class, 'store'])->name('images.store');