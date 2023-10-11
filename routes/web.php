<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/crear-cuenta', [RegisterController::class, 'crear']);