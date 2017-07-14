<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelEmpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:travelagencyemployee');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.travelagent2');
    }
}
