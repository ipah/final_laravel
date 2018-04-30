<?php

namespace App\Http\Controllers;
use Auth;
use App\User;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    function index(){
    	return view('login');
    }

    function login(){
    	$successful = Auth::attempt([
    		'email' => request('email'),
    		'password' => request('password')
    	]); //returns bool

    	if($successful){
    		return redirect('/profile');
    	}
    	else{
    		return redirect('/login');
    	}
    }

    function logout(){
    	Auth::logout(); //destroys user in session
    	return redirect('/login');   
    }
}
