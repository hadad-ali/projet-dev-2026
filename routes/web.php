<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', function () {
    return view('home');
})->name('hm');

// localhost:8000/about-us
Route::get('/qui-sommes-nous', [PagesController::class, 'about'])->name('abt');

Route::get('/bonjour', [PagesController::class, 'bonjour']);

Route::get('/bonjour/{nom}', [PagesController::class, 'bonjourNom']);

Route::get(
    '/bonjour/{gender}/{nom}',
    [PagesController::class, 'bonjourGender']
);

Route::get('/users', [PagesController::class, 'list']);

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::get('/product/{id}', [ProductsController::class, 'show'])->name('products.show');

// afficher le formulaire d'ajout
Route::get('/products/add', [ProductsController::class, 'create'])->name('products.create');

// recoit data du formulaire apres submit
Route::post('/products/store',
    [ProductsController::class, 'store'])->name('products.store');
