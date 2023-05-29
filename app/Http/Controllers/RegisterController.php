<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerUser (Request $request){

    //    return $request->name;
       $request->validate(
               [
            'name'=>'required|string|min:2',
           'email'=>'required|email',
           'pass'=>'required|string|min:6'
               ]
       );
        // return "ok";
        return back()->withSuccess('Register Successful');


    }  
}

