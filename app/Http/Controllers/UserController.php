<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function show($name){

        return "Hi ".$name." welcome to show function";
    }

    function loadview($val = 'tes'){

        // return view("contacts", ['val'=>$val]);

        if(view()->exists("contact")){
            return view("contact", ['val'=>$val]);
        }
        
    }
}
