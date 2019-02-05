<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Sell;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mobileController extends Controller
{
    //


    /**
     * mobileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function sellmobile(Request $request)
    {
        $mobile = Mobile::where('s_id' , $request->s_id)->first();

        return view('Mobile.sellmobile',compact(['mobile']));
    }

    public function sellmobilePost(Request $request)
    {
        $sell = Sell::create([
            'mobile_id' => $request->s_id,
            'user_id'   => \Auth::user()->id,
            'price'     => $request->price,
            'date'      => Carbon::now()
        ]);

        $sell->save();

        return redirect()->route('home');
    }
}
