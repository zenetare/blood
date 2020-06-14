<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cityJson extends Controller
{
    
    public function index(Request $request)
    {
        
        if($request->ajax()) {


            $city = DB::table('cities')->where('active', '=', 1)->where('country_id', '=', $request->input('countryID'))->get();

            return response()->json(['data' => $city ]);


        }

    }

}
