<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
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



    public function fetch_user_info(Request $request)
    {
        $userid = intval($request->input('userid'));
        $user_current = DB::table('users')->where('id', $userid)->first();
//dd( $moto_current);
        return view('user_edit_form')->with('user_current',$user_current);
    }








   
    public function fetch_moto_info(Request $request) //old
    {
        $motoid = intval($request->input('motoid'));
        $moto_current = DB::table('motos')->where('id', $motoid)->first();
//dd( $moto_current);
        return view('moto_edit_form')->with('moto_current',$moto_current);


        
    }

    public function fetch_moto_info_modal(Request $request)
    {
        $motoid = intval($request->input('motoid'));
        $moto_current = DB::table('motos')->where('id', $motoid)->first();
        return response()->json(['data'=>$moto_current]);
     }














    public function fetch_sp_info(Request $request)
    {
        $spid = intval($request->input('spid'));
        $spid_current = DB::table('sparts')->where('id', $spid)->first();
//dd( $moto_current);
        return view('sparts_sale_form')->with('spid_current',$spid_current);
    }



    public function update_user(Request $request, User $users)
    {
       
        $user = User::find(intval($request->input('id')));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role=$request->input('role');
       
        $user->save();
        return redirect()->route('user_list');


    }




    public function create_user(Request $request, User $users)
    {
       
        $user = new User;
        $user ->name = $request->input('name');
        $user ->email = $request->input('email');
        $user ->password=Hash::make($request->input('password'));
        $user ->role = $request->input('role');
        $user->save();
        return redirect()->route('user_list');

        
    }














}
