<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller 
{
	/**
	 * Get Signup View
	 */
	public function getSignUp () 
	{
		return view('auth.signup');
	}

	/**
	 * Post Signup form
	 */
	public function postSignUp (Request $request) 
	{
		# Validate the form data
		$this->validate($request, [
			'first_name' => 'required',
			'last_name'  => 'required',
			'email' 	 => 'required|unique:users|email|max:255',
			'password'	 => 'required|min:6',
		]);		

		# Create the user
		User::create([
			'first_name' => $request->input('first_name'),
			'last_name'	 => $request->input('last_name'),
			'email'		 => $request->input('email'),
			'password'	 => bcrypt($request->input('password')),
		]);

		# Redirect back to home
		return redirect()
				->route('home')
				->with('info','Account successfully created!');
	}

	/**
	 * Get Sign In View
	 */
	public function getSignIn ()
	{

	}

	/**
	 * Post Sign In form
	 */
	public function postSignIn (Request $request) 
	{

	}
}