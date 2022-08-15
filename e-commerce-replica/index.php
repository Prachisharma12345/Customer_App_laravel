<?php
ob_start();
include 'header.php';

?>

 <!-- start main site -->
 <main id="main-site">
  <!-- banner Own Carousel  -->
    <?php include 'template/_banner-area.php';?>
  <!-- !banner owl carousel -->
  <!-- start top-sale section -->
  <?php include 'template/_top-sale.php'; ?>
    <!-- end top sale section -->
             <!-- special price -->
             <?php include 'template/_special-price.php'; ?>
             <!-- ! special price -->
            <!-- banner ads -->
            <?php include 'template/_banner-ads.php';?>
            <!-- !banner ads -->
          <!-- new phones -->
          <?php include 'template/_newphones.php';?>
            <!-- !new phones -->

         <!-- blogs -->
         <?php include 'template/_blogs.php';?>
            <!-- !blogs -->
  </main>
  <!-- !main-site -->
  <?php include 'footer.php'; ?>
