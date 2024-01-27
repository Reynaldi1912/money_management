<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\ProfileController;

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

Route::post('/logout', [AuthControllers::class, 'logout'])->name('logout');

Route::get('/login', [AuthControllers::class, 'login_page'])->name('page.login');
Route::get('/register', [AuthControllers::class, 'register_page'])->name('page.register');
Route::get('/forget-password', [AuthControllers::class, 'forget_password_page'])->name('page.forget_password');

Route::post('/update-profile', [HomeControllers::class, 'update_profile'])->name('update.profile');

Route::post('/register', [AuthControllers::class, 'register'])->name('register');
Route::post('/login', [AuthControllers::class, 'login'])->name('login');
Route::post('/step1-post', [AuthControllers::class, 'forget_password_post'])->name('post.step1');
Route::post('/step2-post', [AuthControllers::class, 'forget_password2_post'])->name('post.step2');
Route::post('/step3-post', [ProfileController::class, 'forget_password3_post'])->name('post.step3');
Route::post('/post-transaction', [HomeControllers::class, 'post_transaction'])->name('post.transaction');
Route::post('/udpate-transaction', [HomeControllers::class, 'update_transaction'])->name('update.transaction');

Route::get('/', [HomeControllers::class, 'dashboard_page'])->name('page.dashboard');
Route::get('/delete-transaction/{id}', [HomeControllers::class, 'delete_transaction'])->name('delete.transaction');
