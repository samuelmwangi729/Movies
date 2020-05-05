<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Video;

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
}
