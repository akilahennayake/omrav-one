<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //middleware
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate the form data

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
            ]);

        //attempt to log in
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
//
        //if successful redirect to location
            return redirect()->route('admin.dashboard');
//intended()
        }else
        //if failed redirect to back to log in with form data
        return redirect()->back()->withInput($request->only('email','remember'));
//
    }
}
