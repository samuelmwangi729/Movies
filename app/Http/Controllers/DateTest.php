<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateTest extends Controller
{
    public function index(){
        // $today=date('Y-m-d');
        // $endDate=date('Y-m-d',strtotime($today. '+2 days'));
        // echo $today=="2020-05-08";
        // // echo $today;
        return view('test');
    }
}
