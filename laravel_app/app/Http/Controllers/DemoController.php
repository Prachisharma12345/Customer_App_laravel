<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index($lang=null){
        \App::setLocale($lang);
        return view('home');
    }
    public function about(){
        return view('layouts.about');
    }
}
