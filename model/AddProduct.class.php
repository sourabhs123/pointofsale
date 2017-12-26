<?php
require_once '../config/classload.php';

class AddProduct
{
    function __construct() {
        $dbObj          = new Database();
        $this->tb_prefix = DB_PREFIX;
        $this->dbconn   = $dbObj->dbconn;
    }
    
    function add($params)
    {
        $arrVals = array('product_name'=>$params['prodname'],'price'=>$params['prodprice'],'discount_qty'=>$params['prodqty'],'discount_price'=>$params['proddisprice']);   
        $qrystmt  = $this->dbconn->prepare("INSERT INTO ".$this->tb_prefix."products (product_name,price,discount_qty,discount_price) VALUES (:product_name,:price,:discount_qty,:discount_price) ");
        $qrystmt->execute($arrVals) or die(print_r($qrystmt->errorInfo(),TRUE));
        return TRUE;
    }
}

?>