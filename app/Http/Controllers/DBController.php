<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class DBController extends Controller
{
    public function Database(){

         $store = Artical::all();
         return view('dblist', ['new'=>$store]);
        //return view('dblist');
    }
    public function Delete($id){
        $store = Artical::find($id);
        $store->delete();
        return redirect('dblist');
    }

    public function Edit($id){
        $data = Artical::find($id);
        return view('editdb', ['hold'=>$data]);
    }
}
