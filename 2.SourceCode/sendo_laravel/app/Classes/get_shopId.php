<?php
namespace App\Classes;

use App\Clases\sendo;
use shop;

class get_shopid
{
	public function get_shopid($req)
	{
		$GLOBALS['$http']=new sendo();
		$output='';
		$option = $req;
		$query='SELECT * FROM shop WHERE sellerId="'.$option.'"';
		$data=$DB->get_Row($query);
		$output= '<input type="text" name="shopid" value="'.$data[0].'">';
		echo $output;	
	}

}