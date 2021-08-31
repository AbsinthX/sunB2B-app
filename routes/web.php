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

Route::get('register-step2', [RegisterStep2Controller::class, 'showForm'])->middleware('auth');
Route::post('register-step2', [RegisterStep2Controller::class, 'postForm'])->name('register.step2')->middleware('auth');


Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::get('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');
Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('auth'); 


Route::get('/products/list', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::post('/products/list', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware('auth');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');

Route::get('/calculator', [CalculatorController::class, 'index'])->middleware('auth');


Auth::routes();


