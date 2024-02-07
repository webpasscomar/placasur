<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoveltiesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;

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

// Protege el acceso al registro desde la barra de navegación del navegador
Auth::routes(
    ['register' => false]
);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa');
Route::get('/servicios', [ServicesController::class, 'index'])->name('servicios');

Route::get('/productos/{categoria}', [ProductosController::class, 'mostrar'])->name('productos.mostrar');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/novedades', [NoveltiesController::class, 'index'])->name('novedades');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

// Ruta prueba para detalle
Route::view('/producto/detalle', 'productos-detalle')->name('productos.detalle');
