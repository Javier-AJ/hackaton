<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;


Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
Route::get('/invitado', [PersonasController::class, 'invitado'])->name('personas.invitado');
Route::get('/alert/{id}', [PersonasController::class, 'alert'])->name('personas.alert');
Route::put('/alertUpdate/{id}', [PersonasController::class, 'alertUpdate'])->name('personas.alertUpdate');

