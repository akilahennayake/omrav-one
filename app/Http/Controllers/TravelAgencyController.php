<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelAgencyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:travelagency');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.travelagent1');
    }
}
