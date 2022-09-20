<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [AboutController::class, 'index']);

Route::get('/oldcontact', function () {
    return view('contact');
});

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
});