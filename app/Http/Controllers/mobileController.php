<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Sell;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mobileController extends Controller
{
    //
    public function addMobile()
    {
        return view('Mobile.addmobile');
    }

    public function addmobilePost(Request $request)
    {
        $validator= $request->validate([
            's_id' => 'required|integer',
            'model' => 'required',
            'company' => 'required'
        ]);


        $mobile = Mobile::create([
            's_id'    => $request->s_id,
            'model'   => $request->model,
            'company' => $request->company
        ]);
        $mobile->save();
        return redirect()->route('home');
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
