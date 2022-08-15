<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['delete_wishlist_submit'])){
        $deletedrecord=$cart->deleteCart($_POST['item_id'],'wishlist');
    }
    if(isset($_POST['cart_submit'])){
        $cart->saveforlater($_POST['item_id'],'cart','wishlist');
    }
}



?>
<!--  shopping cart section -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-12">Wishlist</h5>
        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($product->getData('wishlist') as $item){
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

                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                        <button type="submit" name="delete_wishlist_submit" class="btn rounded-0 border-0 text-danger font-baloo border-end  pl-0 pr-3">Delete</button>

                                    </form>
                                    <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                        <button type="submit" name ="cart_submit" class="btn border-0 text-danger font-baloo">Add to Cart</button>

                                    </form>


                                </div>

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

        </div>
        <!-- !shopping cart items -->
    </div>
</section>
<!--  !shopping cart section -->


