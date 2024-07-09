<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart'])->name('home.cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('home.checkout');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');




Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});
