<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->middleware('check');


Route::get('/myname', function () {
     echo "This is Syscon..." ;
});

Route::get('/oldcontact', function () {
    return view('contact');
});

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/home', function () {
    echo 'We are at 2nd Home page, cheers!';
});