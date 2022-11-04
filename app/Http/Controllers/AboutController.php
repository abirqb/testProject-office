<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artical;
use App\Models\Feedback;
use App\Models\Member;

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


    /*
    Testing from here 
    */

    public function Info(Request $data){
        $member = new Member;
        $member->name = $data->name;
        $member->email = $data->email;
        $member->id = $data->id;
        $member->password = $data->password;
        $member->save();
        return redirect('field');
    }

    public function Database(){
        $store = Member::all();
        return view('test5' , ['new'=>$store]); 
    }

    public function Delete($id)
    {
        $store = Member::find($id);
        $store->delete();
        return redirect('field3');
        //$store = save();
    }

    public function Update($id)
    {
        $store = Member::find($id);
        return view('test2update', ['data'=>$store]);
    }
    public function UpdatePost(Request $req)
    {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
        return redirect('field3');
    }


}
