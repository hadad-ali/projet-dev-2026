<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// localhost:8000/
Route::get('/', function () {
    return view('home');
})->name('hm');

// localhost:8000/about-us
Route::get('/qui-sommes-nous', function () {
    return view('about');
})->name('abt');



Route::get('/bonjour', function () {
    return view('bonjour');
});

Route::get('/bonjour/{nom}', function ($nom) {
    return view('bonjour', compact('nom'));
});

//Routes ,  Model(BD) View(blade @) Controller (MVC)


// php artisan make:controller PagesController
Route::get(
    '/bonjour/{gender}/{nom}',
    [PagesController::class, 'bonjourGender']
);
