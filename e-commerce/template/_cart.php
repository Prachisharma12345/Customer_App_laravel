<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['delete_cart_submit'])){
        $deletedrecord=$cart->deleteCart($_POST['item_id']);
    }
    if(isset($_POST['wishlist_submit'])){
        $cart->saveforlater($_POST['item_id']);
    }
}
?>
<!--  shopping cart section -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-12">Shopping Cart</h5>
        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($product->getData('cart') as $item){
                    $cart1=$product->getProduct($item['item_id']);
                    $subtotal[]=array_map(function ($item){ ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown"; ?></h5>
                                <small><?php echo $item['item_brand']??"Unknown"; ?></small>
                                <!--product rating  -->
                                <div class="d-flex">
                                    <div class="rating text-warning">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!-- !product rating  -->
                                <!-- product qty -->
                                <div class="qty d-flex pt-2">

                                    <div class="d-flex w-25  font-rale ">
                                        <button class="  qty-up bg-light border" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty_input bg-light border  px-2" data-id="<?php echo $item['item_id']??'0';?>" style="width: 100px;" disabled value="1" placeholder="1">
                                        <button class=" qty-down bg-light border" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                        <button type="submit" name="delete_cart_submit" class="btn rounded-0 border-0 text-danger font-baloo border-end  ps-5">Delete</button>

                                    </form>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                        <button type="submit" name ="wishlist_submit" class="btn border-0 text-danger font-baloo">Save for later</button>

                                    </form>


                                </div>
                                <!-- !product qty -->
                            </div>
                            <div class="col-sm-2  text-end">
                                <div class="font-size-20 font-baloo text-danger">
                                    $ <span class="product_price" data-id="<?php echo $item['item_id']??'0';?>"><?php echo $item['item_price']??0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php return $item['item_price'];
                    },$cart1); } ?>
            </div>
            <!-- sub-total section -->
            <div class="col-sm-3   ">
                <div class="sub-total border text-center mt-2  ">
                    <h6 class="font-size-12 font-rale text-success py-3"> <i class="fas fa-check"></i> Your order is eligible for FREE Delivery</h6>

                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal(<?php echo isset($subtotal)? count($subtotal):0; ?> item):&nbsp;<span class="text-danger">$</span><span id="deal-price"class="text-danger"><?php echo isset($subtotal)?$cart->getSum($subtotal):0 ; ?></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>

            </div>
            <!-- !sub-total section -->
        </div>
        <!-- !shopping cart items -->
    </div>
</section>
<!--  !shopping cart section -->


