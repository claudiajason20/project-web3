<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function view()
    {
        $cities = \App\City::all();
        return view('city', ['cities' => $cities]);
    }
    
    public function detail($id){
        $city = \App\City::find($id);
        $places = \App\Place::where('id_city', $city->id)->get();

        return view('citydetail', ['city' => $city, 'places' => $places]);
    }

    public function edit(Request $request, $id){
        $city = \App\City::where('id', $id)->first();
        $places = \App\Place::where('id_city', $city->id)->get();

        return view('citydetail', ['city' => $city, 'places' => $places]);
    }
}
