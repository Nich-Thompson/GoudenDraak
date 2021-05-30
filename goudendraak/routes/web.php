<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

//home pagina
Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'home'])->name('getHome');
    Route::get('contact', [HomeController::class, 'contact'])->name('getContact');
    Route::get('/nieuws', [HomeController::class, 'news'])->name('getNews');
    Route::get('/menu', [HomeController::class, 'menu'])->name('getMenu');
});


Route::get('/kassa', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    Route::resource('klant', CustomerController::class);
    Route::get('/categorie/{id}', [CustomerController::class, 'category'])->name('getCategory');
});
