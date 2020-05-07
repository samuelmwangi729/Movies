<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Payments\Twocheckout;
use App\Http\Controllers\Payments\Twocheckout\Twocheckout_Charge;
use App\Http\Controllers\Payments\Twocheckout\Api\Twocheckout_Error;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        Twocheckout::privateKey('F0BBF918-4961-4FE8-97DD-6F9540C45A4B'); //Private Key
        Twocheckout::sellerId('901423410'); // 2Checkout Account Number
        Twocheckout::sandbox(true); // Set to false for production accounts.


        //end class
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
        }catch (Twocheckout_Error $e) {
            print_r($e->getMessage());
        }
    }
}
