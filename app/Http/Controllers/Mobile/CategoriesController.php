<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{

    public function index(){
        $categories=Category::all();
        return response()->json(['data' => $categories]);
    }
}
