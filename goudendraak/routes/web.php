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
    Route::get('/menu/download', [HomeController::class, 'downloadMenu'])->name('getDownloadMenu');
});


Route::get('/kassa', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    Route::get('klant', [CustomerController::class, 'index'])->name('getIndex');
    Route::get('/categorie/favoriet', [CustomerController::class, 'favorite'])->name('getFavorite');
    Route::get('/categorie/{id}', [CustomerController::class, 'category'])->name('getCategory');
    Route::get('/bestel', [CustomerController::class, 'viewOrder'])->name('getOrder');
    Route::post('/bestel', [CustomerController::class, 'placeOrder'])->name('postOrder');
});
