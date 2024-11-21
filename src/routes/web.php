<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('dashboard_page');
});

Route::get('/login', [userController::class, 'showLoginForm'])->name('login');
