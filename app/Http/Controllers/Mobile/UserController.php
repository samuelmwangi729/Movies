<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\PhoneUser;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return response()->json(['data'=>$users],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules=[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6'
        ];
        //then validate the values 
        $this->validate($request,$rules);
        $name=$request->name;
        $email=$request->email;
       $password=$data['password']=bcrypt($request->password);
        $user=User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ]);
        PhoneUser::create([
            'email'=>$email,
            'password'=>sha1($request->password)
        ]);
        
        return response()->json(['data'=>$user],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //the id is the email of the user who wants to update their passwords and emails 
        $user=User::where('email','=',$id)->get()->first();
        if(is_null($user)){
            return response()->json(['data'=>'Bad Request','StatusCode'=>400],400);
        }
        return response()->json(['data'=>$user],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
