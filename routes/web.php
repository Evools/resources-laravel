<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{category}', [CategoryController::class, 'filter'])->name('category');

Route::get('/admin', fn() => app(AdminController::class)->index())->middleware('auth')->name('admin');

Route::post('/submit-resource', [PostController::class, 'store']);

Route::get('/seecreetreg', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/seecreetreg', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/seecreetlog', [loginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/seecreetlog', [loginController::class, 'store'])->middleware('guest');

Route::post('/logout', [loginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/logout', fn() => redirect()->route('home'));


