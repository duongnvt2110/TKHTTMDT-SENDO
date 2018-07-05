<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\account_seller;
// use App\Classes\sendo;
use App\Classes\view_item;



class ProductController extends Controller
{

	public function get_index()
	{
		$shop=shop::all();
		return view('view.view_item',compact('shop'));
	}
	public function show_item(Request $req)
	{
		$data=new view_item();
		$txt=$req->post('search');
		$output=$data->show_item($txt);	
		echo $output;
	}
}
