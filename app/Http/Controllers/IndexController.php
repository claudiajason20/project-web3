<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
class IndexController extends Controller
{

    public function index(){
        return view('index');
    }

    public function welcome(){
        return view('welcome');
    }

    public function place(){
        $places = DB::table('places')->get();

        return view('place.index',['places' => $places]);
    }

    public function detail($id){
        $places = DB::table('places')->where('id',$id)->first();
        
        return view('detail', ['places' => $places]);
    }
    
    public function office(){
        return view('office');
    }
}
