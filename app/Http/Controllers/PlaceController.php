<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function view()
    {
        $places = \App\Place::all();
        return view('place', ['places' => $places]);
    }

    public function detail($id){
        $place = \App\Place::where('id', $id)->first();
        return view('placedetail', ['place' => $place]);
    }
}
