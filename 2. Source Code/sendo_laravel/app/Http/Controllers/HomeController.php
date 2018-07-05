<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function get_index()
	{
		 return view('view.index');
	}
	public function get_view_item()
	{
		 return view('view.view_item');
	}
}
