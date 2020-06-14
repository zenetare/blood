<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\countyCity;

class countryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countrys = countyCity::all(); 

        return view('webAdmin/pages/country/index', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('webAdmin/pages/country/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'country' => 'required'

        ]);

        if($request->input('active') == 1) {

            $active = $request->input('active');

        } else {

            $active = 0;

        }

        $country = new countyCity();
        $country->country = $request->input('country');
        $country->active  = $active;
        $country->save();

        return redirect('adminPanel/country')->with('success', 'The information has been successfully floated');

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
        $country = countyCity::find($id); 

        return view('webAdmin/pages/country/edit', compact('country'));
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

            'country' => 'required'

        ]);

        if($request->input('active') == 1) {

            $active = $request->input('active');

        } else {

            $active = 0;

        }

        $country = countyCity::find($id);
        $country->country = $request->input('country');
        $country->active  = $active;
        $country->save();

        return redirect('adminPanel/country')->with('success', 'The information has been modified successfully');
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
