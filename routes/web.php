<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PlanillaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Rutas de autenticación
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Solo accesible por usuarios no autenticados
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

// Solo accesible por usuarios autenticados
Route::middleware('auth')->group(function () {
    // Rutas para el panel de administración
    Route::middleware('role:administrador')->group(function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
        Route::resource('users', 'App\Http\Controllers\UserController');
    });

    // Rutas para empleados
    Route::resource('empleados', EmpleadoController::class);

    // Rutas para planillas
    Route::resource('planillas', PlanillaController::class);

    // Rutas para pagos
    Route::resource('pagos', PagoController::class);

    // Puedes agregar más rutas protegidas aquí
});

