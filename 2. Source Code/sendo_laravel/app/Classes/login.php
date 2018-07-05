<?php
include '../php/sendo_lib.php';
include '../class/DB.php';
$name=$_POST['uname'];
$pasword=urlencode($_POST['psw']);


$GLOBAL['$http']=new sendo();
$db=new DB();
$db->connect_DB();
$cookie=$GLOBAL['$http']->getCookie();
$login=$GLOBAL['$http']->loginSendo($name,$pasword,$cookie);
preg_match('/IsError\"\:(.*?)\,/',$login,$result);
if($result[1]==='false')
{

	$check_account='SELECT * FROM account_seller';
	$row=$db->get_All_Row($check_account);
	if (empty($row)===true)
	{
		$query='INSERT INTO account_seller(username,password) VALUES ("'.$name.'","'.$pasword.'")';
		$db->ExecuteNonQuery($query);
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
			$query='INSERT INTO account_seller(username,password) VALUES ("'.$name.'","'.$pasword.'")';
			$db->ExecuteNonQuery($query);
		}
		else
		{
			$query='UPDATE account_seller SET username="'.$name.'",password="'.$pasword.'" WHERE username="'.$name.'"';
			$db->ExecuteNonQuery($query);
		}
	}
	$query='SELECT * FROM account_seller WHERE username="'.$name.'"';
	$data=$db->get_Row($query);
	$sellerId=$data[0];
	$count=0;
	$shopId=$GLOBAL['$http']->getshopId();
	$shopName=$GLOBAL['$http']->getshopName();
	$check_shop='SELECT * FROM shop';
	$row=$db->get_All_Row($check_shop);
	if (empty($row)===true)
	{
		$query='INSERT INTO shop(shopId,shopName,sellerId) VALUES ("'.$shopId.'","'.$shopName.'","'.$sellerId.'")';
		$db->ExecuteNonQuery($query);
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
			$query='INSERT INTO shop(shopId,shopName,sellerId) VALUES ("'.$shopId.'","'.$shopName.'","'.$sellerId.'")';
			$db->ExecuteNonQuery($query);
		}
		else
		{
			
			$query='UPDATE shop SET shopName="'.$shopName.'" WHERE username="'.$shopId.'"';
			$db->ExecuteNonQuery($query);
		}

	}
	header('Location: http://localhost/Sendo/class/login_success.php',true,307);
}
else
{
	header('Location: http://localhost/Sendo/class/login_failed.php',true,301);
}


?>