<?php
include "DB.PHP";
include "../php/sendo_lib.php";

$info_product=new sendo();
$db=new DB();
$db->connect_DB();

// get info product
$shopid=$_POST['shopid'];
$name=$_POST['name'];
$Code_Model=$_POST['sku'];
$Prices=$_POST['prices'];
$UnitId='Single';
$Weight=$_POST['volume'];
$StockQuantity=$_POST['amount'];
$Description=htmlspecialchars($_POST['contact_list']);

// get account
$query="SELECT username,password FROM shop INNER JOIN account_seller ON shop.sellerId=account_seller.sellerId WHERE shopId='".$shopid."'";
$account=$db->get_Row($query);

// // getCookie
// $getcookie=$info_product->getcookie();
// // Login
// $info_product->loginSendo($account[0], $account[1],$getcookie);

// Post
// $info_product->postProduct($name,$Code_Model,$Prices,$UnitId,$Weight,$StockQuantity,$Description);

header('Location:../viewproduct.php');
?>