<?php

use App\Http\Controllers\equiposController;
use App\Http\Controllers\torneosController;
use App\Http\Controllers\juegosController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [juegosController::class, 'index'])->middleware(['auth', 'verified'])->name('juegos.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/equipos/{equipo}/jugadores/{user}', [equiposController::class, 'inscribirse']);
    Route::get('/equipos/{equipo}/jugadores/{user}/borrar', [equiposController::class, 'desinscribirse']);
    Route::get('/torneos/{torneo}/equipos/{equipo}', [torneosController::class, 'inscribirse']);
    Route::get('/torneos/{torneo}/equipos/{equipo}/borrar', [torneosController::class, 'desinscribirse']);

    Route::get('/dashboard', [juegosController::class, 'index'])->name('dashboard');

});

//Rutas sin login

Route::get('/juegos', [juegosController::class, 'index'])->name('juegos.index');
Route::get('/torneos', [torneosController::class, 'index'])->name('torneos.index');
Route::get('/torneos/{torneo}', [torneosController::class, 'show'])->name('torneos.show');
Route::get('/equipos', [equiposController::class, 'index'])->name('equipos.index');
Route::get('/equipos/{equipo}', [equiposController::class, 'show'])->name('equipos.show');

require __DIR__.'/auth.php';
