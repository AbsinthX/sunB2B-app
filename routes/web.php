<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterStep2Controller;

use App\Http\Controllers\{
    UserController,
    HomeController,
    ProductController,
    CalculatorController,
    OrderController
};


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


Route::middleware('auth')->group(function(){
Route::get('register-step2', [RegisterStep2Controller::class, 'showForm']);
Route::post('register-step2', [RegisterStep2Controller::class, 'postForm'])->name('register.step2');



Route::resource('users', UserController::class);
//Route::get('/users/list', [UserController::class, 'index'])->name('users.index');
//Route::post('/users/list', [UserController::class, 'store'])->name('users.store');
//Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
//Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update');
//Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');
//Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');

Route::resource('products', ProductController::class);
//Route::get('/products/list', [ProductController::class, 'index'])->name('products.index');
//Route::post('/products/list', [ProductController::class, 'store'])->name('products.store');
//Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
//Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.delete');
//Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
//

Route::resource('orders', OrderController::class);
//Route::get('/orders/list', [OrderController::class, 'index'])->name('orders.index');
//Route::post('/orders/list', [OrderController::class, 'store'])->name('orders.store');
//Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
//Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
//Route::post('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
//Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.delete');
//Route::get('/orders/edit/{order}', [OrderController::class, 'edit'])->name('orders.edit');



Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/ordersummary', [CalculatorController::class, 'summary'])->name('calculator.summary');
Route::get('/calculator/calculate', [CalculatorController::class, 'calculate'])->name('calculator.calculate');
Route::post('/calculator/order1', [CalculatorController::class, 'order1'])->name('calculator.order1');



});

Auth::routes();


