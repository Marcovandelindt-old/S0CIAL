<?php

namespace App\Http\Controllers;

class HomeController extends Controller 
{
	/** 
	 * Index action
	 */
	public function index ()
	{
		return view('home/index');
	}
}