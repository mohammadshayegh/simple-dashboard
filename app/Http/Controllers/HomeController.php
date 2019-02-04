<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mobile;
use App\Sell;
use phpDocumentor\Reflection\Types\Array_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $filtered_mobile = \DB::table('sells')->select('mobile_id')->get();
        $ids = [];
        foreach ($filtered_mobile as $item)
        {
            $ids[count($ids)] = $item->mobile_id;
        }
        $mobiles = Mobile::where('s_id' , '!=' , $ids)->get();

        return view('home',compact(['mobiles']));
    }
}
