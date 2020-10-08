<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //
    
   

    public function index()
    {
    	 if(!Auth::check())
    	 {
             return redirect('/');
    	 }

    	 return view('dashboard');
    	
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/');
    }
}
