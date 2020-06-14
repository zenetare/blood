<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blood;
use Illuminate\Support\Facades\DB;
use App\city;
use App\countyCity;

class bloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloods = blood::all();
         
        return view('webAdmin.pages.blood.index', compact('bloods'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countrys = DB::table('county_cities')->where('active', '=', 1)->get();
        return view('webadmin.pages.blood.create', compact('countrys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = countyCity::find($request->input('country'));
        $city    = city::find($request->input('city'));
        $this->validate($request, [

            'name'      => 'required',
            'country'   => 'required',
            'city'      => 'required',
            'tel'       => 'required',
            'bloodType' => 'required',
            'email'     => 'required',
            'callTime'  => 'required',

        ]);
        $blood = new blood;

        $blood->name = $request->input('name');
        $blood->country = $request->input('country');
        $blood->city = $request->input('city');
        $blood->tel = $request->input('tel');
        $blood->bloodType = $request->input('bloodType');
        $blood->email= $request->input('email');
        $blood->callTime = $request->input('callTime');
        $blood->callType = $request->input('callType');
        if($request->input('active') == 1) {

            $blood->case = $request->input('active');

        } else {

            $blood->case = 0;

        }
        $blood->nameCountry = $country->country;
        $blood->nameCity    = $city->city;
        $blood->save();

        return redirect('adminPanel')->with('success', 'The information has been successfully floated');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countrys = DB::table('county_cities')->where('active', '=', 1)->get();
        $blood = blood::find($id);
        $citys = DB::table('cities')->where('country_id', '=', $blood->country)->get();
        return view('webadmin.pages.blood.edit', compact('countrys', 'blood', 'citys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $country = countyCity::find($request->input('country'));
        $city    = city::find($request->input('city'));
        $this->validate($request, [

            'name'      => 'required',
            'country'   => 'required',
            'city'      => 'required',
            'tel'       => 'required',
            'bloodType' => 'required',
            'email'     => 'required',

        ]);
        $blood = blood::find($id);

        $blood->name = $request->input('name');
        $blood->country = $request->input('country');
        $blood->city = $request->input('city');
        $blood->tel = $request->input('tel');
        $blood->bloodType = $request->input('bloodType');
        $blood->email= $request->input('email');
        if($request->input('active') == 1) {

            $blood->case = $request->input('active');

        } else {

            $blood->case = 0;

        }
        $blood->nameCountry = $country->country;
        $blood->nameCity    = $city->city;
        $blood->save();

        return redirect('adminPanel')->with('success', 'The information has been modified successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bloods')->where('id', '=', $id)->delete();
        return redirect('adminPanel')->with('success', 'Deletion successful');

    }
}
