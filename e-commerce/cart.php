<?php
ob_start();
include('header.php');
//if cart items are empty
count($product->getData('cart'))?include ('template/_cart.php'):include ('template/notFound/_cartnotFound.php');
//if wishlist items are empty
count($product->getData('wishlist'))?include ('template/_wishlist.php'):include ('template/notFound/_wishlistnotFound.php');

include ('template/_new-phones.php');
include ('footer.php');
?>