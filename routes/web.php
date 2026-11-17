<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Home Page
Route::get('/', [PageController::class, 'index'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Customer Management
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

// User Management
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');