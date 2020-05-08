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
        Twocheckout::privateKey('5EE6AC35-CC52-4714-A3A3-B810EA1B2DEF'); //Private Key
        Twocheckout::sellerId('250350404436'); // 2Checkout Account Number
        Twocheckout::username('demotestuser');
        Twocheckout::password('P!@#four5sam');
        Twocheckout::sandbox(false); // Set to false for production accounts.


        //end class
        try {
            $charge = Twocheckout_Charge::auth(array(
                "merchantOrderId" => "123",
                "token"      => $_POST['token'],
                "currency"   => 'USD',
                "total"      => '1',
                "billingAddr" => array(
                    "name" => Auth::user()->name,
                    "addrLine1" => $request->addrLine1,
                    "city" => $request->city,
                    "state" => $request->state,
                    "zipCode" => $request->zipCode,
                    "country" => $request->country,
                    "email" => Auth::user()->email,
                    "phoneNumber" => $request->phone
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
                    $today=date('Y-m-d');
                    $endDate=date('Y-m-d',strtotime($today. '+30 days'));
                    CatSubscriber::create([
                        'Subscriber'=>Auth::user()->email,
                        'Category'=>$request->category,
                        'EndDate'=>$endDate
                    ]);
                    Session::flash('success','Payments Successfully Received, You are now Susbcribed');
                    return back();
                }
                if($isExist->Status==1){
                    $today=date('Y-m-d');
                    $endDate=date('Y-m-d',strtotime($today. '+30 days'));
                    $isExist->Subscriber=Auth::user()->email;
                    $isExist->category=$request->category;
                    $isExist->EndDate=$endDate;
                    $isExist->Status=0;
                    $isExist->save();
                    Session::flash('success','Subscription Successfully Renewed');
                    return back();
                }


            }
        }catch (Twocheckout_Error $e) {
            Session::flash('error',$e->getMessage());
            return back();
        }
    }
}
