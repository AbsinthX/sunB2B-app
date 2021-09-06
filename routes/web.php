<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterStep2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CalculatorController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aktualności', [HomeController::class, 'index'])->name('news');

Route::get('register-step2', [RegisterStep2Controller::class, 'showForm'])->middleware('auth');
Route::post('register-step2', [RegisterStep2Controller::class, 'postForm'])->name('register.step2')->middleware('auth');


Route::get('/users/list', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('auth'); 

Route::get('/users/list', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::post('/users/list', [UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('auth');
Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete')->middleware('auth');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit')->middleware('auth');

Route::get('/products/list', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::post('/products/list', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.delete')->middleware('auth');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');



Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator')->middleware('auth');


Auth::routes();


