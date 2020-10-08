<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    //

   

    public function index(){
      
        if(Auth::check()) { return redirect('dashboard'); }
    	return view('login');
    }

    public function login_post(Request $request)
    {
    	$validateData = $request->validate([

         // 'name'=>'required',
         'email'=>'required|email',
         'password'=>'required'

    	]);

    	$validateData['password'] = bcrypt($request->password);
    	$cradential = $request->only('email','password');
    	if(Auth::attempt($cradential))
    	{
    		return redirect('dashboard');

    	}else{

    		return redirect('/')->with('failed_message','Please check user  id or password');
    	}



    }
}
