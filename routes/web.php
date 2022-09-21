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
Route::get('/signup', [AboutController::class, 'SignUp']);
Route::post('/data-submit', [AboutController::class, 'DataSubmit']);

Route::get('/signup2', [AboutController::class, 'new']);



Route::get('/oldcontact', function () {
    return view('contact');
});


Route::get('/', [HomeIndex::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});