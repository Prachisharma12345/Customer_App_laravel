<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        return view('customer');
    }

    public function store (Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'password',
                'cpassword'=>'required_with:password|same:password',
                'country'=>'required',
                'state'=>'required',
                'dob'=>'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
