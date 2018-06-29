<?php
include "DB.PHP";
include "../php/sendo_lib.php";

$DB=new DB();
$DB->connect_DB();
$GLOBALS['$http']=new sendo();
$output='';
$option = $_GET["search"];

if ($option==1)
{
	$query='SELECT * FROM account_seller';
	$data=$DB->get_All_Row($query);
	foreach ($data as $result) {
		$cookie=$GLOBALS['$http']->getCookie();
		$GLOBALS['$http']->loginSendo($result['username'],$result['password'],$cookie);
		$query='SELECT * FROM shop where sellerId="'.$result['sellerId'].'"';
		$row=$DB->get_Row($query);
		$s=$GLOBALS['$http']->showInfomationProduct();
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
				<th class="text-center"><span>'. $row['0'].'</span></th>
				<th class="text-center"><span>'. $row['1'].'</span></th>
				</tr>
				';
			}
		}

	}
}
else
{
	$query='SELECT * FROM account_seller WHERE sellerId="'.$option.'"';
	$data=$DB->get_All_Row($query);
	foreach ($data as $result) {
		$cookie=$GLOBALS['$http']->getCookie();
		$GLOBALS['$http']->loginSendo($result['username'],$result['password'],$cookie);
		$query='SELECT * FROM shop where sellerId="'.$result['sellerId'].'"';
		$row=$DB->get_Row($query);
		$s=$GLOBALS['$http']->showInfomationProduct();
		if($s[1]['totalItems']!=0)
		{
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
					<th class="text-center"><span>'. $row['0'].'</span></th>
					<th class="text-center"><span>'. $row['1'].'</span></th>
					</tr>
					';
				}
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
			<th class="text-center"><span></span></th>
			</tr>
			';
		}
	}
}
echo $output;
?>