<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\GolController;
use App\Http\Controllers\TarjetaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('categorias', CategoriaController::class)->names('categorias');
Route::resource('equipos', EquipoController::class)->names('equipos');
Route::resource('partidos', PartidoController::class)->names('partidos');
Route::resource('goles', GolController::class)->names('goles');
Route::resource('tarjetas', TarjetaController::class)->names('tarjetas');
