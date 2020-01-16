<?php

namespace App\Http\Controllers;
use App\Check;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function store(Request $request)
    {
        $check = new Check;
        $items = implode(",", $request->get('check_items'));

        $check->save();

        return response()->json('Your values has been saved');

    }
}
