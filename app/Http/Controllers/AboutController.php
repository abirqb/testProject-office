<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artical;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function SignUp(){
        return view('sign_up');
    }

    public function new(){
        return view('designed_form');
    }
    

    // public function DataSubmit(Request $data){

    //     return $data; //->fname
    // }

    public function DataSubmit(Request $data){

        //return $data->name;

        $article = new Artical;
        $article->fname = $data->fname;
        $article->lname = $data->lname;
        $article->phone = $data->phn;
        $article->email = $data->email;
        $article->birth = $data->dob;
        $article->password = $data->pass;
         
        $article->save();
        return redirect('/signup2');
    }


}
