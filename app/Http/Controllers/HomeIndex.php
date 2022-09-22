<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIndex extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function success()
    {
        return view('confirm');
    }
    public function get_success()
    {
        return view('confirm2');
    }

}
