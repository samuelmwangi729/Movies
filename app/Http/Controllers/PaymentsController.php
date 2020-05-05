<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function callRPC($Request, $host, $Debug = true) {
        $curl = curl_init($host);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSLVERSION, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
        $RequestString = json_encode($Request);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $RequestString);
        if ($Debug) {
            $RequestString;
        }
        $ResponseString = curl_exec($curl);
        if ($Debug) {
            $ResponseString;
        }
        if (!empty($ResponseString)) {
            var_dump($ResponseString);
            $Response = json_decode($ResponseString);
            if (isset($Response->result)) {
                return $Response->result;
            }
            if (!is_null($Response->error)) {
                var_dump($Request->method, $Response->error);
            }
        } else {
            return null;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $host = 'https://api.avangate.com/rpc/5.0/';

    $merchantCode = "250351993131"; // your account's merchant code available in the 'System settings' area of the cPanel: https://secure.avangate.com/cpanel/account_settings.php
    $key = "_9z(K[yJXdq7Lne6!=o2"; // your account's secret key available in the 'System settings' area of the cPanel: https://secure.avangate.com/cpanel/account_settings.php

    $string = strlen($merchantCode) . $merchantCode . strlen(gmdate('Y-m-d H:i:s')) . gmdate('Y-m-d H:i:s');
    $hash = hash_hmac('md5', $string, $key);

    $i = 1;

    $jsonRpcRequest = new stdClass();
    $jsonRpcRequest->jsonrpc = '2.0';
    $jsonRpcRequest->method = 'login';
    $jsonRpcRequest->params = array($merchantCode, gmdate('Y-m-d H:i:s'), $hash);
    $jsonRpcRequest->id = $i++;

    $sessionID = callRPC($jsonRpcRequest, $host);
    //     dd($request);
    // $d=date_add(date_create(date('y-m-d')),date_interval_create_from_date_string("30 days"));
    // dd(date_format($d,"Y-m-d"));
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
