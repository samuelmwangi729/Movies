<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trailer;
class TrailersController extends Controller
{
    public function index(){
        $trailers=Trailer::all();
        return response()->json(['data'=>$trailers],200);
    }
}
