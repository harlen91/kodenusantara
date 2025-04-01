<?php

use App\Http\Controllers\admin\BankController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProyekController;
use App\Http\Controllers\admin\TimController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WorkshopController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllersHomeController::class, 'index']);
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');

    Route::get('/workshop', [WorkshopController::class, 'index'])->name('admin.workshop');
    Route::get('/workshop/create', [WorkshopController::class, 'create'])->name('admin.workshop.create');
    Route::post('/workshop', [WorkshopController::class, 'store'])->name('admin.workshop.store');
    Route::get('/workshop/{id}/edit', [WorkshopController::class, 'edit'])->name('admin.workshop.edit');
    Route::put('/workshop/update/{id}', [WorkshopController::class, 'update'])->name('admin.workshop.update');
    Route::delete('/workshop/delete/{id}', [WorkshopController::class, 'destroy'])->name('admin.workshop.delete');

    Route::get('/proyek', [ProyekController::class, 'index'])->name('admin.proyek');
    Route::get('/proyek/create', [ProyekController::class, 'create'])->name('admin.proyek.create');
    Route::post('/proyek', [ProyekController::class, 'store'])->name('admin.proyek.store');
    Route::get('/proyek/{id}/edit', [ProyekController::class, 'edit'])->name('admin.proyek.edit');
    Route::put('/proyek/update/{id}', [ProyekController::class, 'update'])->name('admin.proyek.update');
    Route::delete('/proyek/delete/{id}', [ProyekController::class, 'destroy'])->name('admin.proyek.delete');

    Route::get('/tim', [TimController::class, 'index'])->name('admin.tim');
    Route::get('/tim/create', [TimController::class, 'create'])->name('admin.tim.create');
    Route::post('/tim', [TimController::class, 'store'])->name('admin.tim.store');
    Route::get('/tim/{id}/edit', [TimController::class, 'edit'])->name('admin.tim.edit');
    Route::put('/tim/update/{id}', [TimController::class, 'update'])->name('admin.tim.update');
    Route::delete('/tim/delete/{id}', [TimController::class, 'destroy'])->name('admin.tim.delete');

    Route::get('/bank', [BankController::class, 'index'])->name('admin.bank');
    Route::get('/bank/create', [BankController::class, 'create'])->name('admin.bank.create');
    Route::get('/bank/{id}/edit', [BankController::class, 'edit'])->name('admin.bank.edit');
    Route::put('/bank/update/{id}', [BankController::class, 'update'])->name('admin.bank.update');
    Route::delete('/bank/delete/{id}', [BankController::class, 'destroy'])->name('admin.bank.delete');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'proses'])->name('login.proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
