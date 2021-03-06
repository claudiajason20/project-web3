<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function logout()
    {
        Auth::logout();
        index();
    }

    public function index(){
        return view('index');
    }

    public function welcome(){
        return view('welcome');
    }
    
    public function office(){
        return view('office');
    }
}
