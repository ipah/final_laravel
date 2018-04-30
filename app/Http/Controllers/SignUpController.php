<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;

class SignUpController extends Controller
{
    //
    function index(){
    	return view('signup');
    }

    function signup(){
    	$user = new User();
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = Hash::make(request('password')); //using bcrypt

    	$user->save();

    	return redirect('/login');
    }
}
