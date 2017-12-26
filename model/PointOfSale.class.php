<?php
require_once '../config/classload.php';

class PointOfSale
{
    function __construct() {
        $dbObj          = new Database();
        $this->tb_prefix = DB_PREFIX;
        $this->dbconn   = $dbObj->dbconn;
    }
    
	function scan($productname,$qty)
	{
		$qrystmt  = $this->dbconn->prepare("SELECT * FROM ".$this->tb_prefix."products WHERE product_name = :product_name  ");
        $arrVal = array('product_name'=>$productname);
        $qrystmt->execute($arrVal) or die(print_r($qrystmt->errorInfo(),TRUE));
        $row      = array();
        $result   = array();
        $i = 0;
		$row = $qrystmt->fetch(PDO::FETCH_ASSOC);
		if ( $qty>=$row['discount_qty']  && $row['discount_qty'] != 0)
		{
			if ( $qty==$row['discount_qty'] )
		   {
			return $row['discount_price'];
		   }

			$totLoops = (int)($qty)/($row['discount_qty']);
			$disPrice = 0;
			for($i=1;$i<$totLoops;$i++)
			{
				$disPrice = $disPrice+$row['discount_price'];
			}
			$remLoops = $qty-($totLoops*$row['discount_qty']);
			if ($remLoops == 0)
			{
				$remLoops = 1;
			}
			$remCost = $remLoops*$row['price'];
			return $disPrice+$remCost;
			
			
		}
		else
		{
			return $qty*$row['price'];	
		}
	} 
}

?>