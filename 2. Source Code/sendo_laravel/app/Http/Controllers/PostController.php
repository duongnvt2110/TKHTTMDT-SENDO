<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\sendo;
use App\shop;
use App\account_seller;
class PostController extends Controller
{
	public function get_index()
	{
		$shop=shop::all();
		return view('view.post_item',compact('shop'));
	}
	public function get_shopid(Request $req)
	{
		$output='';
		$option = $req->post('search');
		$data=shop::where('sellerId',$option)->get();
		$data=json_decode($data,true);
		$output= '<input type="text" name="shopid" value="'.$data[0]['shopId'].'">';
		echo $output;	
	}
	public function post_product(Request $req)
	{
		// get info product
		$http=new sendo();

		$shopid=$req->post('shopid');
		$name=$req->post('name');
		$Code_Model=$req->post('sku');
		$Prices=$req->post('prices');
		$UnitId='Single';
		$Weight=$req->post('volume');
		$StockQuantity=$req->post('amount');
		$Description=htmlspecialchars($req->post('contact_list'));

		$account=shop::select('username','password')
		->join('account_seller', 'shop.sellerId', '=', 'account_seller.sellerId')
		->where('shopId',$shopid)
		->get();
		$account=json_decode($account,true);
		// get account
		// $query="SELECT username,password FROM shop INNER JOIN account_seller ON shop.sellerId=account_seller.sellerId WHERE shopId='".$shopid."'";
		// $account=$db->get_Row($query);

		// getCookie
		$getcookie=$http->get_cookie();
		// Login
		$http->login_sendo($account[0]['username'], $account[0]['password'],$getcookie);

		//Post
		$http->post_product($name,$Code_Model,$Prices,$UnitId,$Weight,$StockQuantity,$Description);
		return Redirect('view-item');
	}
}
