<?php

namespace App\Http\Controllers;
use App\Models\Sparts;
use Illuminate\Http\Request;

class SpartsController extends Controller
{
  
   

    public function update(Request $request, Sparts $Sparts)
    {
       
        $sp = Sparts::find(intval($request->input('id')));
        $sp ->pn = $request->input('pn');
        $sp ->color = $request->input('color');
        $sp ->product_name=$request->input('product_name');
        $sp ->model = $request->input('model');
        $sp->save();
        return redirect()->route('splist');


    }




    public function create(Request $request, Sparts $Sparts)
    {
       
        $sp = new Sparts;
        $sp ->pn = $request->input('pn');
        $sp ->color = $request->input('color');
        $sp ->product_name=$request->input('product_name');
        $sp ->model = $request->input('model');
        $sp->save();
        return redirect()->route('sparts_create_form');

        
    }




















}
