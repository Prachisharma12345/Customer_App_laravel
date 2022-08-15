<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- own carousel 2  css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- own carousel2 predefined styling theme link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css link -->
    <link rel="stylesheet" href="./sass/includes/style.css">
    <?php
    //require Mysql Connection
    require 'functions.php';
    ?>

</head>
<body>
<!-- header -->
    <header id="header">
    <div class="strip bg-light px-2 py-1 d-flex justify-content-between ">
        <p class="font-size-12 font-rale text-black m-0">
            Street:  102-a, 10th Floor, F Wing, Maker Tower, Gd Somani Marg, Cuffe Parade
       </p>
       <div class="font-size-14 font-rale">

            <a href="#" class="text-black border-start border-end px-3 ">Login</a>
            <a href="#"class="text-black px-3 border-end"><a href="cart.php" class="text-black ">Wishlist(<?php echo count($product->getData('wishlist')); ?>)</a>
       </div>
       </div>
       <!-- start primary navigation -->
       <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mobile Shopee</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>t
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">On Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Products <i class="fas fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Category <i class="fas fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Coming Soon</a>
              </li>
            </ul>
            <form action="#" class="font-rale font-size-16">
              <a href="cart.php" class="rounded-pill color-primary-bg py-2">
                <span class="text-white font-size-16 px-2"><i class="fas fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light" ><?php echo count($product->getData('cart')); ?></span>
              </a>
            </form>
          </div>
        </div>
        
      </nav>
      
        <!-- ! primary navigation -->

  </header> 
  <!-- !header -->