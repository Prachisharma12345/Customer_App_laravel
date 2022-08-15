<?php

ob_start();
include 'header.php';

?>
<!--include cart items if it is not empty-->

<?php
count($product->getData('cart'))?include ('template/_cart.php'):include ('template/notfound/_cart_notfound.php'); ?>

<?php
//include wishlist items if it is not empty

count($product->getData('wishlist'))?include ('template/_wishlist.php'):include ('template/notfound/_wishlist_notfound.php');
?>



<!-- include top sale section -->
<?php include 'template/_newphones.php'; ?>
    <!-- include top sale section -->

<?php
include 'footer.php';

?>
  