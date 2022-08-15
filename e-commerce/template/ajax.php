<?php
require ('../database/DBController.php');
$db=new DBController();

require ('../database/product.php');
$product=new product($db);

if(isset($_POST['itemid'])){
    $result=$product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

?>
