<?php

namespace App\Http\Controllers\Mobile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PhoneUser;
use Str;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //set the rules to be used to validate sent data

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
        //set the rules to be used to  validate the data sent 
        $rules=[
            'email'=>'required',
            'password'=>'required|min:6'
        ];
        //validate the request to login
        $this->validate($request,$rules);
        //check if the user exist
        $user=User::where('email','=',$request->email)->get()->first();
        if(is_null($user)){
            return response()->json(['data'=>'Wrong Email/Password','token'=>null,'response'=>'failed'],404);

        }
        //check for the password in another table 
        $phoneUser=PhoneUser::where('email','=',$request->email)->get()->first();
        if(is_null($phoneUser)){
            return response()->json(['data'=>'Please Check your Details.','code'=>'422'],422);

        }
        //compare the passwords 
        $phonePassword=$phoneUser->password;
        $inputPass=sha1($request->password);
        if($phonePassword==$inputPass){
            //the passwords aer okay
            //generate the auth token
            $token=Str::random(26);
            $phoneUser->token=$token;
            $phoneUser->save();
            return response()->json(['data'=>'Successfully Logged In','token'=>$token,'response'=>'success'],200);

        }
        return response()->json(['data'=>'Wrong Email/Password','token'=>null,'response'=>'failed'],400);
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
        //
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
