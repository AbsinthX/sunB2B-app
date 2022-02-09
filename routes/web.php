<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterStep2Controller;

use App\Http\Controllers\{CartController,
    ShopController,
    UserController,
    HomeController,
    ProductController,
    CalculatorController,
    OrderController};


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

Route::get('/sklep', [ShopController::class, 'shop'])->name('shop');

Route::post('/sklep', [CartController::class, 'store'])->name('cart.store');


Route::resource('users', UserController::class);

Route::resource('products', ProductController::class);

Route::resource('orders', OrderController::class);

Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/ordersummary', [CalculatorController::class, 'summary'])->name('calculator.summary');
Route::get('/calculator/calculate', [CalculatorController::class, 'calculate'])->name('calculator.calculate');
Route::post('/calculator/ordercomplete', [CalculatorController::class, 'orderComplete'])->name('calculator.orderComplete');
});

Auth::routes();


