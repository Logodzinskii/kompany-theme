<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainPageContent;

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
$nameMaster = 'ivanov-ivan';
Route::get('/', [mainPageContent::class, 'nullPage']);
Route::get('/' . $nameMaster, [mainPageContent::class, 'master']);
Route::get('/main', [mainPageContent::class, 'allMasters']);
Route::get('/registration',[mainPageContent::class, 'registration']);
Route::get('/bot', [mainPageContent::class, 'botmain']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
