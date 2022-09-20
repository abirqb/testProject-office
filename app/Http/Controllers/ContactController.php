<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
class ContactController extends Controller
{
    public function index(){
        echo "This is our Contact page!";
    }
}

or we can load/return from view method to be displayed pages in the same way */

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
}