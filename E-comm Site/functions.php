<?php
// require Mysql connection
require('Database/DBController.php');

//product Details class
require('Database/productDetails.php');

//Cart class
require('Database/Cart.php');

// DBController class object
$db = new DBController();

// productDetail class object
$product = new productDetails($db);
$product_shuffle = $product->getProductDetail();

// Cart class object
$Cart = new Cart($db);



















