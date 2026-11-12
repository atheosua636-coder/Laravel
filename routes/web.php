<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'today'])->name('home');
Route::get('/pos', [PageController::class, 'home'])->name('pos.home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
