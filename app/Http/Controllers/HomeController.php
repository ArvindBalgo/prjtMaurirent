<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
    }


    public function checkUser(){
        return json_encode(Auth::check());
        /* if(Auth::check()){
             return 'USer logged in';
         }
         else {
             return 'User not logged';
     }*/
        //return 'CHECKING USER';
    }
}
