<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CityController extends Controller
{
    public function view()
    {
        $cities = \App\City::all();
        return view('city', ['cities' => $cities]);
    }
    public function detail($id){
        $city = DB::table('cities')->where('id',$id)->first();
        // $places = DB::table('places')->where('id_city',$city->id);

        $places = \App\Place::where('id_city', $city->id)->get();

        return view('citydetail', ['city' => $city, 'places' => $places]);
    }
}
