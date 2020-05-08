<?php

namespace App\Http\Controllers;

use App\{User,Category,Video,CatSubscriber};
use Auth;
use Hash;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get all the subscribed categories by the user 
        $subscribed=CatSubscriber::where('Subscriber',Auth::user()->email)->get();
        if(count($subscribed)>0){
            for($i=0;$i<count($subscribed);$i++){
                if($subscribed[$i]->EndDate <= date('Y-m-d')){
                    $subscribed[$i]->Status=1;
                    $subscribed[$i]->save();
                    Session::flash('error','Your Subscription to some categories has expired. Please consider Renewing it.');
                }
            }
        }
        $categories=Category::count();
        $Allcategories=Category::all();
        $likes=Video::where([
            'PostedBy'=>Auth::user()->email
        ])->get();
        $tLikes=0;
        for($i=0;$i<count($likes);$i++){
            $tLikes=$tLikes+$likes[$i]->Likes;
        }
        $tViews=0;
        for($i=0;$i<count($likes);$i++){
            $tViews=$tViews+$likes[$i]->Views;
        }
        //video for the admin
        $videos=Video::count();
        $history=CatSubscriber::orderBy('id','desc')->where('Subscriber','=',Auth::user()->email)->get()->take(5);
        if(count($history)==0){
            $tAmount=0;
        }else{
            $tAmount=1* count($history);
        }
        //get the total amount spent

        return view('home')
        ->with('mtVideo',count($likes))
        ->with('totalLikes',$tLikes)
        ->with('totalViews',$tViews)
        ->with('totalAmount',$tAmount)
        ->with('histories',$history)
        ->with('totalVideos',$videos)
        ->with('categories',$categories)
        ->with('subscribed',$subscribed)
        ->with('Allcategories',$Allcategories);
    }

    public function users(){
       return response(json_encode(User::all()));
    }
    public function user(){
        return response(json_encode(Auth::user()));
     }
     public function account(){
         return view('Account');
     }
     public function update(Request $request){
         $this->validate($request,[
             'password'=>'required',
             'Confirmpassword'=>'required',
         ]);
         $user=Auth::user()->id;
         $user=User::find($user);
         if($request->password==$request->Confirmpassword){
             $user->password=Hash::make($request->password);
             $user->save();
             Session::flash('success','Password Successfully Changed');
             return redirect()->back();
         }else{
             Session::flash('error','Passwords do not Match. Please try again');
             return back();
         }
     }
}
