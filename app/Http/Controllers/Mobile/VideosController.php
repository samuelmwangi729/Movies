<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
class VideosController extends Controller
{
    public function index(){
        $videos=Video::all();
        return response()->json(['data'=>$videos],200);
    }
}
