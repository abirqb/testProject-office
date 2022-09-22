<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artical;
use App\Models\Feedback;

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
        return redirect('confirm');
    }

    public function Comments(Request $data){
        $paper = new Feedback;
        $paper->user = $data->name;
        $paper->email = $data->email;
        $paper->comments = $data->message;
        $paper->save();
        return redirect('confirm2');
    }


}
