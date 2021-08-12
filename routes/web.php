<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterStep2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'main'])->name('main');

Route::get('register-step2', [RegisterStep2Controller::class, 'showForm'])->middleware('auth');
Route::post('register-step2', [RegisterStep2Controller::class, 'postForm'])
  ->name('register.step2');


Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::get('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');
Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');

Route::get('/products/list', [ProductController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
