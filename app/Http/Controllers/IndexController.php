<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){
        return view('index');
    }

    public function welcome(){
        return view('welcome');
    }

    public function place(){
        return view('place');
    }

    public function detail($id){
        return view('detail', ['id' => $id]);
    }
    
    public function office(){
        return view('office');
    }
}
