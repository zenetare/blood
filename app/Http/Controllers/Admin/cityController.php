<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\city;
use App\countyCity;
use Illuminate\Support\Facades\DB;

class cityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $citys = DB::table('cities')->where('country_id', '=', $id)->get();
        $country = countyCity::find($id);
        return view('webAdmin.pages.city.index', compact('citys', 'country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $country = countyCity::find($id);
        return view('webAdmin.pages.city.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [

            'city' => 'required'

        ]);

        if($request->input('active') == 1) {

            $active = $request->input('active');

        } else {

            $active = 0;

        }

        $country = new city();
        $country->city = $request->input('city');
        $country->country_id = $id;
        $country->active  = $active;
        $country->save();

        return redirect('/adminPanel/' . $id . '/city')->with('success', 'The information has been successfully floated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = city::find($id);
        $country = countyCity::find($city->country_id);
        return view('webAdmin.pages.city.edit', compact('city', 'country'));
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
        $this->validate($request, [

            'city' => 'required'

        ]);

        if($request->input('active') == 1) {

            $active = $request->input('active');

        } else {

            $active = 0;

        }

        $country = city::find($id);
        $country->city = $request->input('city');
        $country->active  = $active;
        $country->save();

        return redirect('/adminPanel/' . $country->country_id . '/city')->with('success', 'The information has been successfully floated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
