<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', function () {
    return view('home');
})->name('hm');

// localhost:8000/about-us
Route::get('/qui-sommes-nous',  [PagesController::class, 'about'])->name('abt');

Route::get('/bonjour', [PagesController::class, 'bonjour']);

Route::get('/bonjour/{nom}', [PagesController::class, 'bonjourNom']);

Route::get(
    '/bonjour/{gender}/{nom}',
    [PagesController::class, 'bonjourGender']
);

Route::get('/users',[PagesController::class,'list']);

Route::get('/products',[ProductsController::class, 'index']);

// a href  /product/1
// a href  /product/2
Route::get('/product/{id}'
,[ProductsController::class, 'show']);

// Product::find(5)
