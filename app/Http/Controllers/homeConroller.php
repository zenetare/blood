<?php

namespace App\Http\Controllers;

use App\blood;
use App\city;
use App\countyCity;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeConroller extends Controller
{
    public function index() {

        $countrys = DB::table('county_cities')->where('active', '=', 1)->get();
        return view('webhome.pages.home.index', compact('countrys'));

    }

    public function blood(Request $request){

        $bloods = DB::table('bloods')->where('case', '=', 1)->where('country', '=', $request->input('country'))->where('city', '=', $request->input('town'))->where('bloodType', '=', $request->input('blood_type'))->get();

        return response()->json(['data' => $bloods]);

    }
    public function add()
    {
        $countrys = DB::table('county_cities')->where('active', '=', 1)->get();
        return view('webhome.pages.adduser.index', compact('countrys'));

    }
    public function create(Request $request)
    {
        if($request->ajax()) {


            $country = countyCity::find($request->input('country'));
            $city    = city::find($request->input('city'));

            $blood = new blood();
            $blood->name = $request->input('name');
            $blood->country = $request->input('country');
            $blood->city    = $request->input('city');
            $blood->tel = $request->input('tel');
            $blood->bloodType = $request->input('bloodType');
            if(empty($request->input('email'))) {
                $blood->email = 'none';
            } else {
                $blood->email = $request->input('email');
            }
            if($request->input('callType') == 0) {
                $blood->callType = 'اتصال';
            } else {
                $blood->callType = 'رسائل نصية';
            }
            $blood->case = 0;
            $blood->callTime = $request->input('callTime');
            $blood->nameCountry = $country->country;
            $blood->nameCity    = $city->city;
            $blood->save();

            return response()->json(['data' => true]);
            

        }
    }


}
