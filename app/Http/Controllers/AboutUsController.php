<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        return view('pages.about.index');
    }
    //
    public function rodo(){
        return view('pages.about.rodo');
    }
    //
}
