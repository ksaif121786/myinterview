<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegisterController extends Controller
{
    //

    public function index()
    {
    if(Auth::check()) { return redirect('dashboard'); }
    
     return view('register'); 	


    }


    public function register_post(Request $request)
    {
    	$validateData = $request->validate([

         'name'=>'required',
         'email'=>'required|unique:users',
         'password'=>'required'

    	]);
        
        $validateData['password'] = bcrypt($request->password);

    	$user = User::create($validateData);
        // Auth::login($user->id);

        // print_r(Auth::id()); die;
    	return redirect('/')->with('flash_message','Please login here');


    }
}
