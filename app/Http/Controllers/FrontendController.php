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

    //hotels list page controller
    public function getHotels(){
        return view('frontend.hotels');
    }


    //travel agents front end grid page controller
    public function getTravelAgents(){
        return view('frontend.travelagents');
    }

    //hoteldetails frontend page controller
    public function getTravelAgentDetails(){
        return view('frontend.travelagentdetails');
    }

    //travelagentdetails frontend page controller
    public function getHotelDetails(){
        return view('frontend.hoteldetails');
    }

    //results page controller




}
