<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index(){
        //echo "Welcome to Index of MyController";
        return view('about');
    }
}
