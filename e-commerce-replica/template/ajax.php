<?php
//require PDO Connection
require '../database/DBController.php';

//require product class
require('../database/product.php');

$db=new DBController();
$product=new product($db);
if(isset($_POST['itemid'])){
$result=$product->getProduct($_POST['itemid']);
echo json_encode($result);
}
?>