<?php

namespace App\Http\Controllers;

use App\Models\Motos;
use Illuminate\Http\Request;

class MotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function show(Motos $motos)
    {
       
    }









    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function edit(Motos $motos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motos $motos)
    {
       //dd($request);

       $msg = "This is a simple message.";
       return response()->json(array('msg'=> $msg), 200);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motos  $motos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motos $motos)
    {
        //
    }




    public function sales_chart(Motos $motos)
    {
       



        $per_model_sold_qty_ass=array();
        $sales_list=Motos::all()->whereNotNull('sold')->where('sold','=',1);
        foreach($sales_list as $moto_sold){
            if (array_key_exists($moto_sold['model'], $per_model_sold_qty_ass)){
         $per_model_sold_qty_ass[$moto_sold['model']]+=1;
             }
             else {
                 $per_model_sold_qty_ass[$moto_sold['model']]=1;
             }
            
        }
        arsort($per_model_sold_qty_ass);
       
        $per_model_sold_qty=array();
    
        $i=0;
        foreach($per_model_sold_qty_ass as $x => $x_value) {
         $per_model_sold_qty[$i]['name']= $x;
         $per_model_sold_qty[$i]['qty']=$x_value;
         $i+=1;
       }
    
//dd($per_model_sold_qty);
       return view('sold_moto_chart')->with('per_model_sold_qty',$per_model_sold_qty);



    }



   












}
