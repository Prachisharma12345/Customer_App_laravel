<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['product_submit'])) {
        $cart->addtoCart($_POST['user_id'], $_POST['item_id']);
        header("Location:",$_SERVER['PHP_SELF']);
    }
}

$item_id=$_GET['item_id']??'1';
foreach ($product->getData() as $item){
    if($item['item_id']==$item_id){?>

    <!--  product-->
    <section id="product">
        <div class="container">
            <div class="row d flex flex-row">
                <div class="col-lg-6 pt-5 ">
                    <img src="<?php echo $item['item_image']??"./assets/products/1.png"; ?>" alt="product" class="img-fluid">
                    <div class="row pt-5 text-center">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-danger font-rale font-size-20 mx-5 "> <a href="cart.php" class="text-white ">Proceed to Buy</a> </button>
                        </div>
                        <div class="col-sm-3">
                            <form method="post">
                                <input type="hidden" name="user_id" value="<?php echo $item['user_id']??1;?>">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??1;?>">
                                <?php
                                if(in_array($item['item_id'],$cart->getCartId($product->getData('cart'))??[])){
                                    echo '<button type="submit" name="product_submit" disabled class="btn btn-success">In the cart</button>';
                                }else{
                                    echo '<button type="submit" name="product_submit" class="btn btn-warning">Add to cart</button>';
                                }
                                ?>


                            </form>

                        </div>
                    </div>




                </div>
                <div class="col-lg-6 ">
                    <h5 class="font-baloo font-size-20 mt-5"><?php echo $item['item_name']??"Unknown"; ?></h5>
                    <small>By <?php echo $item['item_name']??"Unknown"; ?></small>
                    <div class="rating text-warning mt-1 mb-0 font-size-14">
                        <span><i class="fas fa-star  "></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <small class="color-second">20,534 ratings | 1000+ answered questions</small>
                        <hr class="mt-0">
                    </div>
                    <div class="price mt-3">
                        <span class="font-rale ">M.R.P <small class="mx-3"> $<strike>162.00</strike></small></span>
                        <br>
                        <span class="  font-rale">Deal Price  <span class="text-danger font-size-20 ">$<?php echo $item['item_price']??"0"; ?></span> <small>Inclusive of all taxes</small></span>
                        <br>
                        <span class="  font-rale">You Save  <span class="text-danger font-size-20 ">$10.00</span> </span>
                    </div>
                    <!--policy return-->
                    <div id="policy" >
                        <div class="d-flex flex-row mt-3 font-size-20">
                            <div class="return text-center color-second">
                                <div class="font-size-20  mr-5  color-second">
                                <span class="fas fa-retweet rounded-pill border p-3"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                            </div>
                            <div class="return text-center color-second">
                                <div class="font-size-20  mr-5  color-second">
                                    <span class="fas fa-truck rounded-pill border p-3"></span>

                                </div>
                                <a href="#" class="font-size-12 font-rale">Tech <br>Delivery</a>

                            </div>
                            <div class="return text-center mx-2 color-second">
                                <div class="font-size-20 color-second">
                                    <span class="fas fa-check-double rounded-pill border p-3"></span>
                                </div>
                                <a href="#" class="font-size-12 font-rale">1 Year <br>Warranty</a>
                            </div>


                        </div>
                    </div>
                    <!--!policy return-->
                    <hr class="mt-3">
                    <!-- order details-->
                    <div id="order-details"class=" mt-2 d-flex flex-column text-dark font-rale">
                        <small>Delivery by:Mar 29-Apr 1</small>
                        <small>Sold by <a href="#" class="color-second">Tech Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Deliver to Customer-134109</small>
                    </div>
                        <!-- !order details-->
                    <div class="row mt-4">
                    <!-- color-->
                        <div class="col-lg-6">

                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo  font-size-16">Color:</h6>
                                <div class=" col-lg-2 p-2 color-yellow-bg rounded-circle ">
                                    <button class=" btn font-size-14 border-0"></button>
                                </div>

                                <div class=" col-lg-2 p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-14 border-0"></button>
                                </div>
                                <div class=" col-lg-2 p-2 color-second-bg rounded-circle    ">
                                    <button class="btn font-size-14 border-0"></button>
                                </div>

                            </div>
                        </div>
                    <!--!color-->
                        <!-- product qty-->
                        <div class="col-lg-6">
                            <div class="qty d-flex ">
                                <h6 class="font-baloo">Qty:</h6>
                                <div class="d-flex  px-4 font-rale">
                                    <button class="qty-up border bg-light"data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="pro1"  class="qty_input border w-50 bg-light px-2" disabled value="1" placeholder="1">
                                    <button data-id="pro1" class="qty-down border bg-light" ><i class="fas fa-angle-down"></i></button>
                                </div>

                            </div>

                        </div>
                        <!--!product qty-->
                    </div>
                    <!--   size-->
                    <div id="size" class="py-2">
                        <h3 class="font-baloo " >Size:</h3>
                        <div class="d-flex justify-content-between  w-75">

                            <button class=" btn font-size-14 font-rubik border p-2">4GB RAM</button>
                            <button class="btn font-size-14 font-rubik border p-2">6GB RAM</button>
                            <button class="btn font-size-14 font-rubik border p-2">8GB RAM</button>
                        </div>
                    </div>
                    <!--  ! size-->

                    </div>

                <div class="col-12 my-5">
                    <h6>Product Description</h6>
                    <hr class="mt-3">
                    <p class="font-rale font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illum impedit tempore eaque laborum consectetur labore aspernatur earum? Neque reprehenderit accusamus hic ex quibusdam dolorum cupiditate sint officia alias dolore?</p>

                     <p class="font-rale font-size-14">   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illum impedit tempore eaque laborum consectetur labore aspernatur earum? Neque reprehenderit accusamus hic ex quibusdam dolorum cupiditate sint officia alias dolore?</p>
                </div>
            </div>
        </div>

    </section>
    <!-- ! product-->

    <?php   }
}?>

