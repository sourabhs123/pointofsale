<?php
require_once '../config/classload.php';

$addProduct = new AddProduct();

if ( isset($_REQUEST['action']) && $_REQUEST['action'] == 'add' )
{
    $stat = $addProduct->add($_REQUEST);
    
    if ($stat == TRUE)
    {
        $_SESSION['suc_msg'] = "Added the record successfully";
        
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['suc_msg'] = "Unable to add the record";
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}


?>