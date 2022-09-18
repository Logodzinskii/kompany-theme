<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/calculate/{id}', [\App\Http\Controllers\ProductsController::class, 'listProducts']);

Route::get('/admin/',[\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth');

Route::post('order/user/store', [\App\Http\Controllers\OrderForm::class, 'orderUserStore'])->name('order.user.store');

Route::post('ajax/data/resp', [\App\Http\Controllers\CalculateContentController::class, 'ajaxDataResp'])->name('ajax.data.resp');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart/', [\App\Http\Controllers\UsersControllers::class, 'cartShow'])->middleware('auth');

Route::get('/calculate/', [\App\Http\Controllers\CalculateContentController::class, 'showKitchen']);

Route::get('/calcv2/', function (){
    return view('/calculator/calcForm');
});
