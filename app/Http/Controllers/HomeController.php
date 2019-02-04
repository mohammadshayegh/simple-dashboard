<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mobile;
use App\Sell;

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

        $mobiles = Mobile::all();

        return view('home',compact(['mobiles']));
    }
}
