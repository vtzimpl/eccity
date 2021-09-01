<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('home');
    }


   
    public function fetch_moto_info(Request $request)
    {
        $motoid = intval($request->input('motoid'));
        $moto_current = DB::table('motos')->where('id', $motoid)->first();
//dd( $moto_current);
        return view('moto_edit_form')->with('moto_current',$moto_current);
    }












}
