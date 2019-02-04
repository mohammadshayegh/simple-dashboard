<?php

namespace App\Http\Controllers;

use App\Mobile;
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
        $mobile = Mobile::create([
            's_id'    => $request->s_id,
            'model'   => $request->model,
            'company' => $request->company
        ]);
        $mobile->save();
        return back();
    }
}
