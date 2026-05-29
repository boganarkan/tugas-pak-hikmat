<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

Route::view('/login', 'auth.login');

Route::view('/register', 'auth.register');

Route::view('/forgot', 'auth.forgot');

Route::view('/dashboard', 'dashboard');

Route::view('/task', 'task');

Route::view('/profile', 'profile');

Route::view('/settings', 'settings');