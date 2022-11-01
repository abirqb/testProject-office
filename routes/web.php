<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeIndex;
use App\Http\Controllers\DBController;
use App\Model\Article;
use App\Model\Feedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/about', [AboutController::class, 'index']);
Route::get('/signup', [AboutController::class, 'SignUp']);
Route::post('/signup', [AboutController::class, 'Comments']);

Route::get('/signup2', [AboutController::class, 'new']);
Route::post('/signup2', [AboutController::class, 'DataSubmit']);


Route::get('/oldcontact', function () {
    return view('contact');
});


Route::get('/', [HomeIndex::class, 'index']);
Route::get('/confirm', [HomeIndex::class, 'success']);
Route::get('/confirm2', [HomeIndex::class, 'get_success']);
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

Route::get('dblist', [DBController::class, 'Database']);
Route::get('delete/{id}', [DBController::class, 'Delete']);
Route::get('edit/{id}', [DBController::class, 'Edit']);

//laptop_in