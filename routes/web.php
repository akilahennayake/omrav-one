<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//////////////////////////////////////////////////////////////
///////////////////ROUTES FOR THE FRONTEND////////////////////
//////////////////////////////////////////////////////////////
//home route
Route::get('/','FrontendController@getIndex');
//Contact us route
Route::get('/contact','FrontendController@getContact');
//log in route
Route::get('/login','FrontendController@getLogin');
//hotels list route
Route::get('/hotels','FrontendController@getHotels');
//travel agents list route
Route::get('/travelagents','FrontendController@getTravelAgents');
//travel agent details route
Route::get('/travelagentdetails','FrontendController@getTravelAgentDetails');
//Hotel details route
Route::get('/hoteldetails','FrontendController@getHotelDetails');


//Results route
//just to check, should be dynamic
Route::get('/results','FrontendController@getResults');

////////////////////////////////////////////////////////////////////
///////////////////ROUTES FOR THE AUTHENTICATION////////////////////
////////////////////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index');
Route::get('/hotel','HotelController@index');
Route::get('/travelagency','TravelAgencyController@index');
Route::get('/hotelemp','HotelEmpController@index');
Route::get('/travelemp','TravelEmpController@index');


Route::get('auth/logout','Auth\LoginController@logout')->name('logout');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


////////////////////////////////////////////////////////////////////
///////////////////BACKEND TEST ROUTES//////////////////////////////
////////////////////////////////////////////////////////////////////
//hotel 1
Route::get('/hotel1',function(){
    return view('backend.hotel1');
});
//hotel 2
Route::get('/hotel2',function(){
    return view('backend.hotel2');
});

// TA1
Route::get('/travelagent1',function(){
    return view('backend.travelagent1');
});
//TA2
Route::get('/travelagent2',function(){
    return view('backend.travelagent2');
});