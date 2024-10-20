<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    // Rutas de Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas de Mesas
    Route::resource('mesas', MesaController::class);
    
    // Rutas de Clientes
    Route::resource('clientes', ClienteController::class);

    // Rutas de Reservas
    Route::resource('reservas', ReservaController::class);
});

// Requiere autenticación
require __DIR__.'/auth.php';

