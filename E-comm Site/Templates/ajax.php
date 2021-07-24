<?php
// require Mysql connection
require('../Database/DBController.php');

//product Details class
require('../Database/productDetails.php');

// DBController class object
$db = new DBController();

// productDetail class object
$product = new productDetails($db);
//$product_shuffle = $product->getProductDetail();

if(isset($_POST['itemid'])){
    $result = $product->getProductByID($_POST['itemid']);
    echo json_encode($result);
}