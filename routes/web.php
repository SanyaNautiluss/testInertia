<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/ex', function () {
    return Inertia::render('Example');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
