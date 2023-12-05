<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DescargasController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresupuestosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServicesController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa');

Route::get('/servicios', [ServicesController::class, 'index'])->name('services-front');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/presupuestos', [PresupuestosController::class, 'index'])->name('presupuestos');
Route::get('/descargas', [DescargasController::class, 'index'])->name('descargas');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
