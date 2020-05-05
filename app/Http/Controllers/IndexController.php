<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Video;
use App\User;
use Session;
use Hash;

class IndexController extends Controller
{
    public function index(){
        $categories=Category::all();
        $poster=Video::orderBy('id','desc')->get()->take(2);
        $featured=Video::orderBy('id','desc')->get()->take(5);
        $videos=Video::orderBy('id','asc')->get();
        $videosOld=Video::all();
        return view('welcome')
        ->with('poster',$poster)
        ->with('videosOld',$videosOld)
        ->with('featured',$featured)
        ->with('videos',$videos)
        ->with('categories',$categories);
    }
    public function reset(Request $request){
        $this->validate($request,[
            'Email'=>'required'
        ]);
        $email=$request->Email;
        $user=User::where('email','=',$email)->get()->first();
        if(is_null($user)){
            Session::flash('error','the User does Not Exist');
            return back();
        }
        $newPass=Hash::make($email);
        $user->password=$newPass;
        $user->save();
        Session::flash('success','We have reset your Password to '.$email.'  Kindly Login and Change It Now');
        return back();
    }
}
