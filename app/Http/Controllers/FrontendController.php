<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //log in page controller
    public function getLogin(){

        return view('frontend.login');

}

    //landing page controller
    public function getIndex(){

        return view ('frontend.landing');
    }


    //results page controller

    //hotel front end grid page controller

    //travel agents front end grid page controller


}
