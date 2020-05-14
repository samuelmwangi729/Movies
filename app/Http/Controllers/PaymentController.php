<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\{CatSubscriber, Vpayment, PaymentMethod, Video, Totals, PaymentRequests};
use Session;
// use Stripe\Stripe;
// use Stripe\Charge;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->category);
        $isExist = CatSubscriber::where([
            ['Subscriber', '=', Auth::user()->email],
            ['Category', '=', $request->category]
        ])->get()->first();
        if (is_null($isExist) || $isExist->count() == 0) {
            $today = date('Y-m-d');
            $endDate = date('Y-m-d', strtotime($today . '+30 days'));
            CatSubscriber::create([
                'Subscriber' => Auth::user()->email,
                'Category' => $request->category,
                'EndDate' => $endDate
            ]);
            Session::flash('success', 'Payments Successfully Received, You are now Susbcribed');
            return back();
        }
        if ($isExist->Status == 1) {
            $today = date('Y-m-d');
            $endDate = date('Y-m-d', strtotime($today . '+30 days'));
            $isExist->Subscriber = Auth::user()->email;
            $isExist->category = $request->category;
            $isExist->EndDate = $endDate;
            $isExist->Status = 0;
            $isExist->save();
            Session::flash('success', 'Subscription Successfully Renewed for 30 Days');
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'paymentMethod' => 'required',
            'paymentAddress' => 'required',
        ]);
        Vpayment::create([
            'Username' => Auth::user()->email,
            'paymentMethod' => $request->paymentMethod,
            'paymentAddress' => request()->paymentAddress,
        ]);
        Session::flash('success', 'Payment Method Successfully Added');
        return back();
    }
    public function payments()
    {
        $payments = PaymentMethod::all();
        return view('Payments.Index')->with('payments', $payments);
    }
    public function sPayment(Request $request)
    {
        $this->validate($request, [
            'PaymentMethod' => 'required|unique:payment_methods'
        ]);
        PaymentMethod::create(request()->all());
        Session::flash('success', 'The Payment Method has Been Successfully Added');
        return back();
    }
    public function destroy($id)
    {
        $method = PaymentMethod::find($id);
        if ($method->count() == 0) {
            Session::flash('error', 'Payment Method Does Not Exist');
            return back();
        }
        $method->destroy($id);
        Session::flash('success', 'Payment Method Successfully Deleted');
        return back();
    }
    public function requests()
    {
        if (Auth::user()->isAdmin == 1) {
            $requests = PaymentRequests::all();
        } else {
            $requests = PaymentRequests::where('Username', Auth::user()->email)->get();
        }
        return view('Payments.Requests')->with('requests', $requests);
    }
    public function Payout(Request $request)
    {
        $user = Vpayment::where('Username', Auth::user()->email)->get()->first();
        if (is_null($user)) {
            Session::flash('error', 'Please Update your Payment Details Under User Profile then Request for Payout');
            return back();
        }
        //check for the views in the videos
        $views = Video::where('PostedBy', Auth::user()->email)->get();
        $totalAmount = 0;
        for ($i = 0; $i < count($views); $i++) {
            //find the total views
            $totalAmount = $totalAmount + ($views[$i]->Views * 0.015);
        }
        //check if they have ever withdrew
        $wAmount = Totals::where('Username', Auth::user()->email)->get()->first();
        if (is_null($wAmount)) {
            //then post the value and withdraw
            if ($totalAmount < 15) {
                $bal = 15 - $totalAmount;
                Session::flash('error', 'You can not request payout for amount less than $15. More $' . $bal . ' remaining');
                return back();
            } else {
                Totals::create([
                    'Username' => Auth::user()->email,
                    'Amount' => $totalAmount
                ]);
                PaymentRequests::create([
                    'Username' => Auth::user()->email,
                    'PaymentMethod' => $user->paymentMethod,
                    'PaymentAddress' => $user->paymentAddress,
                    'Amount' => $totalAmount,
                ]);
                Session::flash('success', 'Your Payout Request for $' . $totalAmount . ' Has Been received');
                return back();
            }
        } else {
            //get the totals and then subtract the withdrawn amount
            $totalsRequested = Totals::where('Username', Auth::user()->email)->get();
            $sum = 0;
            for ($i = 0; $i < count($totalsRequested); $i++) {
                $sum = $sum + $totalsRequested[$i]->Amount;
            }
            $balance = $totalAmount - $sum;
            $withdrawable = $totalAmount + 15;
            if ($balance <= 0) {
                Session::flash('error', 'you can only request payout if your balance is $' . $withdrawable . ' ');
                return redirect()->back();
            } else {
                $wAmount = Totals::where('Username', Auth::user()->email)->get()->first();
                $om = $wAmount->Amount;
                $wAmount->Amount = $om + $balance;
                $wAmount->save();
                PaymentRequests::create([
                    'Username' => Auth::user()->email,
                    'PaymentMethod' => $user->paymentMethod,
                    'PaymentAddress' => $user->paymentAddress,
                    'Amount' => $balance,
                ]);
                Session::flash('success', 'Your Payout Request has been has been received for $' . $balance . ' ');
                return back();
            }
        }
    }
}