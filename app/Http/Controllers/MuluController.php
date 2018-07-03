<?php

namespace App\Http\Controllers;


class MuluController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
       $url = \Illuminate\Support\Facades\Input::path();
       return view('index',compact('url'));
    }

    public function createfile()
    {
        
    }


    //
}
