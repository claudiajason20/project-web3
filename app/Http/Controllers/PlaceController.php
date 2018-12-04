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
        $places = \App\Place::find($id);
        
        return view('detail', ['places' => $places]);
    }
}
