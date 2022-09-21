<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function SignUp(){
        return view('sign_up');
    }

    public function DataSubmit(Request $data){

        return $data; //->fname
    }
}
