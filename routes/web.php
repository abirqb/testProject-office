<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeIndex;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------



Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/about', [AboutController::class, 'index']);

Route::get('/oldcontact', function () {
    return view('contact');
});


Route::get('/', [HomeIndex::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
