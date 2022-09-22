<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeIndex;
use App\Model\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/about', [AboutController::class, 'index']);
Route::get('/signup', [AboutController::class, 'SignUp']);

Route::get('/signup2', [AboutController::class, 'new']);
Route::post('/signup2', [AboutController::class, 'DataSubmit']);


Route::get('/oldcontact', function () {
    return view('contact');
});


Route::get('/', [HomeIndex::class, 'index']);
Route::get('/confirm', [HomeIndex::class, 'success']);
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