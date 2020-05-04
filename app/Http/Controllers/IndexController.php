<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('welcome')->with('categories',$categories);
    }
}
