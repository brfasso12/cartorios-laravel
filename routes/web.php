<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartorioController;

Route::get('/', function () {
    return redirect('/cartorios');
});

Route::get('/cartorios', [CartorioController::class, 'index'])->name('cartorios.index');
Route::get('/cartorios/create', [CartorioController::class, 'create'])->name('cartorios.create');
Route::post('/cartorios', [CartorioController::class, 'store'])->name('cartorios.store');
Route::get('/cartorios/{id}/edit', [CartorioController::class, 'edit'])->name('cartorios.edit');
Route::put('/cartorios/{id}', [CartorioController::class, 'update'])->name('cartorios.update');
Route::delete('/cartorios/{id}', [CartorioController::class, 'destroy'])->name('cartorios.destroy');
Route::post('/cartorios', [CartorioController::class, 'store']);