<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Video;
use App\User;
use Session;
use Hash;
use Str;
use App\Trailer;
use App\Newsletter;

class IndexController extends Controller
{
    public function index(){
        $videosOld=Video::orderBy('id','desc')->get()->take(3);
        $trailers=Trailer::all();
        $editors=Trailer::orderBy('id','asc')->get();
        $categories=Category::all();
        $poster=Video::orderBy('id','desc')->get()->take(2);
        $featured=Video::orderBy('id','desc')->get()->take(5);
        $videos=Video::orderBy('id','asc')->get();
        return view('welcome')
        ->with('editors',$editors)
        ->with('trailers',$trailers)
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
        $randomPass=Str::random(12);
        $newPass=Hash::make($randomPass);
        $user->password=$newPass;
        $user->save();
        Session::flash('success','Kindly Login and Change Your Password Now. We have reset your Password to '.$randomPass);
        return back();
    }
    public function subscribe(Request $request){
        $this->validate($request,[
            'Name'=>'required',
            'Email'=>'required|unique:newsletters'
        ]);
        Newsletter::create($request->all());
        Session::flash('success','You have been successfully subscribed to our Newsletter');
        return back();
    }
}
