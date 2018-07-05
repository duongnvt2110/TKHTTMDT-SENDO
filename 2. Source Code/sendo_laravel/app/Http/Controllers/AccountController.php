<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\shop;
use App\account_seller;
use App\Classes\sendo;

class AccountController extends Controller
{

	public function get_account()
	{
		$account=shop::all();
		return view('view.account',compact('account'));
	}
	public function index()
	{
		return view('view.login');
	}
	public function login(Request $rq)
	{
		$timestamps = false;
		$name=$rq->post('uname');
		$pasword=urlencode($rq->post('psw'));
		$GLOBAL['$http']=new sendo();
		$cookie=$GLOBAL['$http']->get_cookie();
		$login=$GLOBAL['$http']->login_sendo($name,$pasword,$cookie);
		preg_match('/IsError\"\:(.*?)\,/',$login,$result);
		// print_r($result[1]);
		if($result[1]==='false')
		{
			$check_account=account_seller::all();
			$row=$check_account;
			if (empty($row)===true)
			{
				$query=account_seller::insertGetId(array('username' =>$name, 'password' => $pasword));
			}
			else
			{
				foreach ($row as $value) {
					if($value['username']===$name)
					{
						$count=1;
						break;
					}
				}
				if($count!==1)
				{
					$query=account_seller::insertGetId(array('username' =>$name, 'password' => $pasword));
				}
				else
				{
					$query=account_seller::where('username',$name)->update(array('username' =>$name, 'password' => $pasword));
				}
			}
			$query=account_seller::where('username',$name)->first();
			$query=json_decode(json_encode($query), true);
			$sellerId=$query['sellerId'];
			$count=0;
			$shopId=$GLOBAL['$http']->getshopId();
			$shopName=$GLOBAL['$http']->getshopName();
			$check_shop=shop::all();
			$row=$check_shop;
			if (empty($row)===true)
			{
				$query=shop::insertGetId(array('shopId'=>$shopId,'shopName'=>$shopName,'sellerId'=>$sellerId));
			}
			else
			{
				foreach ($row as $value) {
					if($value['shopId']===$shopId)
					{
						$count=1;
						break;
					}
				}
				if($count!==1)
				{
					$query=shop::insertGetId(array('shopId'=>$shopId,'shopName'=>$shopName,'sellerId'=>$sellerId));
				}
				else
				{
					$query=shop::where('shopId',$shopId)->update(array('shopName'=>$shopName));
				}

			}
			return Redirect('view-account');
			// header('Location: http://localhost/Sendo/class/login_success.php',true,307);
		}
		else
		{
			return Redirect('view-account');
			// header('Location: http://localhost/Sendo/class/login_failed.php',true,301);
		}
		return Redirect('view-account');
	}
}
