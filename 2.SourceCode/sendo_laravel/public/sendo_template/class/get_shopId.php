<?php
include "DB.PHP";
include "../php/sendo_lib.php";
$DB=new DB();
$DB->connect_DB();
$GLOBALS['$http']=new sendo();
$output='';
$option = $_GET["search"];
$query='SELECT * FROM shop WHERE sellerId="'.$option.'"';
$data=$DB->get_Row($query);
$output= '<input type="text" name="shopid" value="'.$data[0].'">';
echo $output;	