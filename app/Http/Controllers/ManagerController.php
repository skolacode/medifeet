<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class ManagerController extends Controller
{

	/* Get all the functions for registration */
	use RegistersUsers;


	/*
		Return Manager landing page
	*/
    public function index()
    {
    	return view('managers.index');
    }

}
