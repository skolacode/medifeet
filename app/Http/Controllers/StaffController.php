<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\getItems;
use Auth;
use App\Item;

class StaffController extends Controller
{
	
	use getItems;

	/*
		Return Staff landing page
	*/
    public function index()
    {
    	$items = $this->allItems();

        return view('staffs.index', compact('items')); 
    }
}
