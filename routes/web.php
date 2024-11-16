<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ReservaController;

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PratoController;

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


Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'index']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/reservas', [PageController::class, 'reservas']);

Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
Route::get('/contacto', [PageController::class, 'contacto']);

Route::get('/contacto', [ContatoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContatoController::class, 'send'])->name('contacto.send');

Route::get('/pratos/create', [PratoController::class, 'create'])->name('pratos.create');
Route::post('/pratos/store', [PratoController::class, 'store'])->name('pratos.store');
