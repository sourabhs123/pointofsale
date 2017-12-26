<?php
ini_set('display_errors','on');
require_once '../config/classload.php';

$pointOfSale = new PointOfSale();

if ( isset($_REQUEST['action']) && $_REQUEST['action'] == 'scan' )
{
	$allProductNames        = $_REQUEST['prodsname'];
	$indProductNames       = str_split($allProductNames);
	$indProductNamesQty  = array_count_values($indProductNames);
	$totalPrice                     = 0;
	foreach($indProductNamesQty as $key=>$value)
	{
		$totalPrice = $totalPrice+$pointOfSale->scan($key,$value);	
	}
    echo $totalPrice;
}


?>