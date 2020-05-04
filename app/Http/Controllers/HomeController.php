<?php

namespace App\Http\Controllers;

use App\{User,Category};
use Auth;
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
        $categories=Category::count();
        return view('home')->with('categories',$categories);
    }

    public function users(){
       return response(json_encode(User::all()));
    }
    public function user(){
        return response(json_encode(Auth::user()));
     }
}
