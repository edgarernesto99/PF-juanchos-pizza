<?php

use App\Http\Controllers\DireccionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PersonaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('productos/addToCart/{producto}', [ProductosController::class, 'addToCart'])->name('productos.addToCart');
Route::get('productos/showCart', [ProductosController::class, 'showCart'])->name('productos.showCart');
Route::delete('productos/removeFromCart/{producto}', [ProductosController::class, 'removeFromCart'])->name('productos.removeFromCart');
Route::resource('productos', ProductosController::class);
Route::resource('personas', PersonaController::class);
Route::resource('direcciones', DireccionController::class);

Route::get('/inicio', function () {
    return view('/inicio');
})->name('inicio');

Route::get('/menu', function () {
    return redirect("/productos");
})->name('menu');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
