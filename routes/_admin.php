<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\Categorias;

use App\Http\Livewire\Admin\Products;
use App\Http\Livewire\Admin\Galerias;
use App\Http\Livewire\Admin\Servicios;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/roles', Roles::class)->name('admin.roles');
Route::get('/users', Users::class)->name('admin.users');
Route::get('/servicios', Servicios::class)->name('admin.servicios');
Route::get('/categorias', Categorias::class)->name('admin.categorias');
Route::get('/productos', Products::class)->name('admin.productos');
Route::get('/galerias', Galerias::class)->name('admin.galerias');
