<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function contact(){
        $name = 'Arvind';
        $location = "Mauritius";
        //return view('contact')->with('name', $name)->with('location', $location);
        $data = false;
        return view('contact', compact('data'));
        //return view('contact', compact('name', 'location'));
    }
}
