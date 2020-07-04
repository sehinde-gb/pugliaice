<?php

namespace app\Http\Controllers;
use app\Check;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    

    public function store(Request $request)
    {
       
        //dd($request->all());
        
        $check = new Check;
       
        $items = implode(",", $request->get('flavour'));
        //$cones = implode(",", $request->get('cone_type'));
        $check->flavour = $items;
        $check->cone_type = $request->get('cone_type');
        $check->biscuit_type = $request->get('biscuit_type');
        $check->review = $request->get('review');
        $check->save();
     

        return response()->json('Your values has been saved');

       
    }
}
