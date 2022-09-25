<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LotteryTicketOrder;

use PDF;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;

use App\Mail\TicketPurchaseMail;

use Paystack;

class LotteryTicketOrderController extends Controller
{
    //

    public function register(Request $request)
    {

        //  $pdf = PDF::loadView('pdf.ticket', [
        //     'name' => 'name',
        //     'lottery_code' => 'lottery code',
        //     'logo_url' => config('app.url').'images/reliance_logo.png',
        // ])->setPaper('a4', 'landscape')->setOptions([
        //     'defaultFont' => 'sans-serif',
        //     'isHtml5ParserEnabled' => true,
        //     'isRemoteEnabled' => true
        
        // ]);

      

        // $file_name = rand(123, 1233);
            
        // return $file = Storage::put('public/receipts/'.$file_name.'.pdf', $pdf->output());

     


        $data = array(
            "amount" => $request->no_tickets * 100000,
            "reference" => '4545jg8gjh'.rand(10000,99999),
            "email" => $request->email,
            "currency" => "NGN",
            "orderID" => 23456,
            "_token" =>  $request->_token,
            "callback_url" => config('app.url').'payment/callback?no_tickets='.$request->no_tickets.'&address='.$request->address.'&name='.$request->name.'&email='.$request->email.'&phone='.$request->phone,
            
        );
    
        return Paystack::getAuthorizationUrl($data)->redirectNow();

        for ($i=0; $i < $request->no_tickets ; $i++) { 

            $lottery_code = 'RELIANCE2022'.rand(1000, 9999);
            
                    $pdf = PDF::loadView('pdf.ticket', [
                        'name' => $request->name,
                        'lottery_code' => $lottery_code
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
    }
}
