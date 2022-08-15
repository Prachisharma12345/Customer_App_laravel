<?php

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['product_submit'])){
        //call method addtoCart
        $cart->addtoCart($_POST['user_id'],$_POST['item_id']);
        header("Location:",$_SERVER['PHP_SELF']);
    }
}
$item_id=$_GET['item_id']??1;
foreach ($product->getData() as $item){
    if($item['item_id']==$item_id){

 ?>
<!-- product -->
<section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image']??"./assets/products/1.png"?>" alt="product" class="img-fluid">
                        <div class="form-row  font-baloo font-size-16 pt-4 d-flex  justify-content-evenly" >
                            <div class="col-sm-5" >
                                <button type="submit" class="btn btn-danger form-control " ><a href="./cart.php" class="text-white border-bottom-0" >Proceed to Buy</a></button>
                            </div> 
                            <div class="col-sm-5 " >
                                <form method="post">
                                    <input type="hidden" name="user_id" value="<?php echo $item['user_id']??1; ?>">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']??1; ?>">
                                    <?php

                                    if(in_array($item['item_id'],$cart->getCartId($product->getData('cart'))??[])){
                                    echo '<button type="submit" name="product_submit" disabled class="btn btn-success font-size-12 font-rale">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-12 font-rale">Add to Cart</button>';
                                    }
                                    ?>
                                </form>

                                </div>
                        </div>                           
                        </div>
                       
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"unknown"; ?></h5>
                            <small><?php echo $item['item_brand']??"unknown"; ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="font-rale font-size-14 px-2">20,534 ratings | 1000+ answered questions</a>
                            </div>
                            <hr class="m-0">
                            <!-- product price -->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P</td>
                                    <td><strike>$162.00</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price</td>
                                    <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??0; ?></span> <small class="text-dark font-size-12">&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-size-14 font-rale">
                                    <td>You Save</td>
                                    <td class="text-danger font-size-20">$<span>10.00</span></td>

                                </tr>
                            </table>
                             <!--! product price -->
                             <!-- policy -->
                             <div id="policy">
                                <div class="d-flex ">
                                <div class="return  text-center mr-5 ">
                                    <div class="font-size-20  mr-5  color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                                </div>
                                <div class="return  text-center mr-5">
                                    <div class="font-size-20 mr-5  color-second">
                                        <span class="fas fa-truck rounded-pill p-3 border"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Tech <br>Delivery</a>
                                </div>
                                
                                
                                <div class="return text-center  mx-2 ">
                                    <div class="font-size-20 mr-5  color-second">
                                        <span class="fas fa-check-double rounded-pill p-3 mr-2 border"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 year <br>Warranty</a>
                                    
                                </div>
                            </div>
                             </div>
                             <!-- !policy -->
                             <hr>
                             <!-- order details -->
                             <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by:Mar 29-Apr 1</small>
                                <small>Sold by <a href="#">Tech Electronics </a> (4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Deliver to Customer-134109</small>
                             </div>
                           .  <!-- !order details -->
                             <div class="row">
                                <div class="col-6">
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-baloo">Color:</h6>
                                            <div class="p-2 color-yellow-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                            <div class="p-2 color-primary-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                            <div class="p-2 color-second-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- product qty section -->
                                    <div class="qty d-flex ">
                                        <h6 class="font-baloo">Qty:</h6>
                                        <div class="d-flex  px-4 font-rale">
                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="pro1" class="qty_input border w-50 bg-light px-2" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                        </div>

                                    </div>
                                    <!-- !product qty section -->
                                </div>
                             </div>
                             <!-- size -->
                             <div id="size my-3" >
                                <h4 class="font-baloo">Size:</h4>
                                <div class="d-flex justify-content-between w-75">
                                    <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">4GB RAM</button>                                    
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">6GB RAM</button>                                    
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>                                    
                            </div>
                                </div>

                             </div>
                             <!-- !size -->
                    
                        </div>

                        <div class="col-12 mt-5">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illum impedit tempore eaque laborum consectetur labore aspernatur earum? Neque reprehenderit accusamus hic ex quibusdam dolorum cupiditate sint officia alias dolore?
                            </p>
                            <p class="font-rale font-size-14">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam illum impedit tempore eaque laborum consectetur labore aspernatur earum? Neque reprehenderit accusamus hic ex quibusdam dolorum cupiditate sint officia alias dolore?
                            </p>
                        </div>
                        </div>
                        
                    
                </div>
            </section>
<!-- !product -->
<?php } }?>

