<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PerpustakaanController::class, 'loginform'])->name('loginform');

Route::post('/login', [PerpustakaanController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->name('dashboard');

Route::get('/pengelolaan', [PerpustakaanController::class, 'pengelolaan'])->name('pengelolaan');

Route::get('/profile', function () {
    return view('main.profile');
})->name('profile');



Route::get('/logout', function () {
    return redirect('/login');
})->name('logout');