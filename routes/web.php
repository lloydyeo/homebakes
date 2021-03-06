<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/merchants/onboarding', [HomeController::class, 'onboarding'])->name('onboarding');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{article:slug}', [BlogController::class, 'showArticle'])->name('blog.show-article');

Route::get('/bakers', [ShopController::class, 'index'])->name('shop.index');
Route::get('/baker/{shop:slug}', [ShopController::class, 'showShop'])->name('shop.showShop');

Route::get('/products/{product:id}', [ShopController::class, 'showProduct'])->name('shop.showProduct');


//Route::domain('admin.homebakers.sg')->group(function () {
//    Route::get('/', [DashboardController::class, 'index']);
//});

