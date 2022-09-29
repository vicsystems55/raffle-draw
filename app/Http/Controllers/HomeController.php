<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LotteryTicketOrder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $lottery_order = LotteryTicketOrder::latest()->get()->count();


        return view('welcome', [
            'count' => $lottery_order
        ]);
    }


    public function success()
    {
        return view('success');
    }
}
