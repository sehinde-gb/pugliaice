<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatepickerController extends Controller
{
    public function create()
    {
        return view('datepicker');
    }


    public function store(Request $request)
    {
        $datepicker = new \App\Datepicker;
        $datepicker->name = $request->get('name');
        $datepicker->date = $request->get('date');
        
        $datepicker->save();
        
        return redirect('datepicker')->with('success', 'Name and Date has been added in to the database');

    }
}
