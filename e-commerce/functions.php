<?php
require ('database/DBController.php');
$db=new DBController();

require ('database/product.php');
$product=new product($db);
$product_shuffle = $product->getData();
shuffle($product_shuffle);
require ('database/cart.php');
$cart=new cart($db);

?>