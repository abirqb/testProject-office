<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIndex extends Controller
{
    public function index()
    {
        return view('welcome');
        return view('confirm');
    }
    public function success()
    {
        return view('confirm');
    }

}
