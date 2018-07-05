<?php
namespace App\Classes;

use App\Classes\sendo;
use App\account_seller;
use App\shop;


class view_item
{

	public function show_item($req)
	{
		$output='';
		$option = $req;
		
		if ($option==1)
		{
			$http = new sendo();
			$data=account_seller::all();
			foreach ($data as $result) {
				$cookie=$http->get_cookie();
				$check=$http->login_sendo($result['username'],$result['password'],$cookie);
				$row=shop::where('sellerId',$result['sellerId'])->get();
				$row=json_decode($row,true);	
				$s=$http->show_infomation_product();
				foreach ($s as $value) { 
					for($i=0;$i<$value['totalItems'];$i++) {
						$output .='
						<tr>
						<td class="col-ck">
						<div class="checkbox-nice">
						<input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
						<label for="checkbox-all">&nbsp;</label>
						</div>
						</td>
						<td class="col-prod-inf"><span>'.$value['Products'][$i]['ProductSKU'].'</span></td>
						<td class="text-center col-prod-code" aria-controls="tb-product-list">'.$value['Products'][$i]['ProductName'].'</td>
						<td class="text-center col-price"><span>'.$value['Products'][$i]['ProductPrice'].'</span></td>
						<td class="text-center col-status"><span>'.$value['Products'][$i]['ProductStatus'].'</span></td>
						<th class="text-center"><span>'. $value['Products'][$i]['StockQuantity'].'</span></th>
						<th class="text-center"><span>'. $row['0']['shopName'].'</span></th>
					
						';
						// 	<th class="text-center"><span>'. $row['0']['shopId'].'</span></th>
						// </tr>
					}
				}

			}
		}
		else
		{
			$http = new sendo();
			$data=account_seller::where('sellerId',$option)->get();
			foreach ($data as $result) {
				$cookie=$http->get_cookie();
				$check=$http->login_sendo($result['username'],$result['password'],$cookie);;
				$row=shop::where('sellerId',$result['sellerId'])->get();
				$row=json_decode($row,true);
				$s=$http->show_infomation_product();
				if($s[1]['totalItems']!=0)
				{
					foreach ($s as $value) { 
						for($i=0;$i < $value['totalItems'];$i++) {
							$output .='
							<tr>
							<td class="col-ck">
							<div class="checkbox-nice">
							<input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
							<label for="checkbox-all">&nbsp;</label>
							</div>
							</td>
							<td class="col-prod-inf"><span>'.$value['Products'][$i]['ProductSKU'].'</span></td>
							<td class="text-center col-prod-code" aria-controls="tb-product-list">'.$value['Products'][$i]['ProductName'].'</td>
							<td class="text-center col-price"><span>'.$value['Products'][$i]['ProductPrice'].'</span></td>
							<td class="text-center col-status"><span>'.$value['Products'][$i]['ProductStatus'].'</span></td>
							<th class="text-center"><span>'. $value['Products'][$i]['StockQuantity'].'</span></th>
							<th class="text-center"><span>'. $row['0']['shopName'].'</span></th>
							
							</tr>
							';
						}
					// <th class="text-center"><span>'. $row['0']['shopId'].'</span></th>
					}
					
				}
				else
				{
					$output .='
					<tr>
					<td class="col-ck">
					<div class="checkbox-nice">
					<input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
					<label for="checkbox-all">&nbsp;</label>
					</div>
					</td>
					<td class="col-prod-inf"><span></span></td>
					<td class="text-center col-prod-code" aria-controls="tb-product-list"></td>
					<td class="text-center col-price"><span></span></td>
					<td class="text-center col-status"><span></span></td>
					<th class="text-center"><span></span></th>
					<th class="text-center"><span></span></th>
					</tr>
					';
				}
			}
		}
		return $output;
	}
}

?>