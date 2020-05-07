<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payments\Twocheckout;
use Illuminate\Http\Request;
use App\Http\Controller\Payments\Twocheckout_Charge;
use App\Http\Controller\Twocheckout_Error;
class PaymentsController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        require(dirname(__FILE__).'/Payments/TwocheckoutCharge.php');
Twocheckout::privateKey('sandbox-private-key'); //Private Key
Twocheckout::sellerId('sandbox-seller-id'); // 2Checkout Account Number
Twocheckout::sandbox(true); // Set to false for production accounts.

try {
    $charge = Twocheckout_Charge::auth(array(
        "merchantOrderId" => "123",
        "token"      => $_POST['token'],
        "currency"   => 'USD',
        "total"      => '10.00',
        "billingAddr" => array(
            "name" => 'Testing Tester',
            "addrLine1" => '123 Test St',
            "city" => 'Columbus',
            "state" => 'OH',
            "zipCode" => '43123',
            "country" => 'USA',
            "email" => 'example@2co.com',
            "phoneNumber" => '555-555-5555'
        )
    ));

    if ($charge['response']['responseCode'] == 'APPROVED') {
        echo "Thanks for your Order!";
        echo "<h3>Return Parameters:</h3>";
        echo "<pre>";
        print_r($charge);
        echo "</pre>";

    }
} catch (Twocheckout_Error $e) {
    print_r($e->getMessage());
}

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
