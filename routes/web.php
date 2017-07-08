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
//
//Route::get('/', function () {
//    return view('w');
//});
//
//Auth::routes();
//
////Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/', 'roller@index')->name('home');
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//hotel test routes
//hotel 1
Route::get('/hotel1',function(){
    return view('backend.hotel1');
});
//hotel 2
Route::get('/hotel2',function(){
    return view('backend.hotel2');
});

//Travel agents est routes
// TA1
Route::get('/travelagent1',function(){
    return view('backend.travelagent1');
});
//TA2
Route::get('/travelagent2',function(){
    return view('backend.travelagent2');
});