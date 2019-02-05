<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Sell;

class AdminController extends Controller
{
    //

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {

        $filtered_mobile = \DB::table('sells')->select('mobile_id')->get();
        $ids = [];
        foreach ($filtered_mobile as $item)
        {
            $ids[count($ids)] = $item->mobile_id;
        }
        if ($ids == null)
        {
            $mobiles = Mobile::all();
        } else
        {
            $mobiles = Mobile::where('s_id', '!=', $ids)->get();
        }


        return view('Admin.adminHome', compact(['mobiles']));
    }


    public function addMobile()
    {
        return view('Admin.addmobile');
    }

    public function addmobilePost(Request $request)
    {
        $validator = $request->validate([
            's_id' => 'required|integer',
            'model' => 'required',
            'company' => 'required'
        ]);

        $bool = Mobile::where('s_id', $request->s_id)->first();
        if ($bool)
            return view('Admin.addmobile');

        $mobile = Mobile::create([
            's_id' => $request->s_id,
            'model' => $request->model,
            'company' => $request->company
        ]);
        $mobile->save();
        return redirect()->route('adminHome');
    }

    public function editmobile(Request $request)
    {
        $mobile = Mobile::where('s_id', $request->s_id)->first();


        return view('Admin.editmobile', compact(['mobile']));
    }

    public function editmobilePost(Request $request)
    {

        $mobile = Mobile::where('s_id', $request->s_id)->first();


        $mobile->model = $request->model;
        $mobile->company = $request->company;
        $mobile->save();

        return redirect()->route('adminHome');

    }

    public function deletemobile(Request $request)
    {
        $mobile = Mobile::where('s_id', $request->s_id)->first();

        $mobile->delete();
        return redirect()->route('adminHome');
    }


}
