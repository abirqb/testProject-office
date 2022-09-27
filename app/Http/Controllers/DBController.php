<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class DBController extends Controller
{
    public function Database(){

        return Artical::all();
        //return view('dblist');
    }
}
