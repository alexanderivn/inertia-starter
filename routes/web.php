<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Front/Index');
})->name('/');

Route::middleware(['auth'])->group(function () {
    {
        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard/Index');
        })->name('dashboard.index');
    }
});


// Middleware guess
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return Inertia::render('Auth/Login');
    })->name('login');
});
// Middleware Admin


// some route here
