<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\LotteryTicketOrder;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketPurchaseMail;


class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);

        // return $request->all();

        for ($i=0; $i < $request->no_tickets ; $i++) { 

            $lottery_code = 'RELIANCE2022'.rand(1000, 9999);
            
                    $pdf = PDF::loadView('pdf.ticket', [
                        'name' => $request->name,
                        'lottery_code' => $lottery_code,
                        'logo_url' => config('app.url').'images/reliance_logo.png',
                    ])->setPaper('a4', 'landscape')->setOptions(['defaultFont' => 'sans-serif']);
            
                    $file_name = rand(123, 1233);
            
                    $file = Storage::put('public/receipts/'.$file_name.'.pdf', $pdf->output());

                    $order = LotteryTicketOrder::create([
                        'email' => $request->email,
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'address' => $request->address,
                        'lottery_code' => $lottery_code,
                        'lottery_ticket_url' => config('app.url').'storage/receipts/'.$file_name.'.pdf'
                    ]);
            # code...
        }

        $user_order = LotteryTicketOrder::where('email', $request->email)->get();

        $datax = [
            'data' => $user_order,

            'name' => $request->name
        ];

        Mail::to($request->email)
        ->send(new TicketPurchaseMail($datax));


        // return $order;


        
        

        return redirect('/success');
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}