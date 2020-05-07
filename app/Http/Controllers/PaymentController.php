<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Payments\Twocheckout;
use App\Http\Controllers\Payments\Twocheckout_Charge;
use App\Http\Controllers\Payments\Twocheckout\Api\Twocheckout_Error;
use Illuminate\Http\Request;
use Auth;
use App\CatSubscriber;
use Session;
class PaymentController extends Controller
{
    public function index(Request $request){
        Twocheckout::privateKey('F0BBF918-4961-4FE8-97DD-6F9540C45A4B'); //Private Key
        Twocheckout::sellerId('901423410'); // 2Checkout Account Number
        Twocheckout::sandbox(true); // Set to false for production accounts.


        //end class
        try {
            $charge = Twocheckout_Charge::auth(array(
                "merchantOrderId" => "123",
                "token"      => $_POST['token'],
                "currency"   => 'USD',
                "total"      => '1',
                "billingAddr" => array(
                    "name" => Auth::user()->name,
                    "addrLine1" => '123 Test St',
                    "city" => 'Columbus',
                    "state" => 'OH',
                    "zipCode" => '43123',
                    "country" => 'USA',
                    "email" => Auth::user()->email,
                    "phoneNumber" => '555-555-5555'
                )
            ));

            if ($charge['response']['responseCode'] == 'APPROVED') {
                // dd($charge);
                // echo "Thanks for your Order!";
                // echo "<h3>Return Parameters:</h3>";
                // echo "<pre>";
                // print_r($charge);
                // echo "</pre>";
                $isExist=CatSubscriber::where([
                    ['Subscriber','=',Auth::user()->email],
                    ['Category','=',$request->category]
                ])->get()->first();
                if(is_null($isExist) || $isExist->count()==0){
                    CatSubscriber::create([
                        'Subscriber'=>Auth::user()->email,
                        'Category'=>$request->category
                    ]);
                    Session::flash('success','Payments Successfully Received, You are now Susbcribed');
                    return back();
                }
                if($isExist->Status==1){
                    $isExist->Subscriber=Auth::user()->email;
                    $isExist->category=$request->category;
                    $isExist->Status=0;
                    $isExist->save();
                    Session::flash('success','Subscription Successfully Renewed');
                    return back();
                }


            }
        }catch (Twocheckout_Error $e) {
            print_r($e->getMessage());
        }
    }
}
