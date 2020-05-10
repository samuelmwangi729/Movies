<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CatSubscriber;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
class PaymentController extends Controller
{
    public function index(Request $request){
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
            Session::flash('success','Subscription Successfully Renewed for 30 Days');
            return back();
        }
        //api login id  4GBH7zeU2p4K
        //transaction key 54r3BVjeV9y94HZm
        //key Simon
        // Stripe::setApiKey('sk_live_BFaDUjeQ77AoQv0X8Ua50SJd00vbPAKwdI');

        // $customer = \Stripe\Customer::create([
        //     'email' =>Auth::user()->email,
        //     'source' => request()->stripeToken,
        //   ]);

        //   $charge = \Stripe\Charge::create([
        //     'customer' => $customer->id,
        //     'description' => 'Member Payments to Vildstream',
        //     'amount' => 1 * 100 * 76,
        //     'currency' => 'inr',
        //   ]);
        //   if($charge->status=="succeeded"){

        //   }
    }
}
