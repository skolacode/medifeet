<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
	/*
		Return Staff landing page
	*/
    public function index()
    {
    	return view('staffs.index');
    }
}
