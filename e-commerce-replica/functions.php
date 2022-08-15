<?php
//require PDO Connection
require 'database/DBController.php';
require 'database/cart.php';
//DBController object
$db=new DBController();
//require product class
require 'database/product.php';

// product object
$product=new product($db);
$product_shuffle= $product->getData();
$cart=new cart($db);


