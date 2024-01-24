<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\HomeControllers;

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

Route::get('/', [HomeControllers::class, 'index'])->name('page.index');
Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');

Route::get('/login', [AuthControllers::class, 'login_page'])->name('page.login');
Route::get('/register', [AuthControllers::class, 'register_page'])->name('page.register');
Route::get('/forget-password', [AuthControllers::class, 'forget_password_page'])->name('page.forget_password');

Route::post('/register', [AuthControllers::class, 'register'])->name('register');
Route::post('/login', [AuthControllers::class, 'login'])->name('login');
