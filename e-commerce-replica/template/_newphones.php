<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['newphones_sale_submit'])){
$cart->addtoCart($_POST['user_id'],$_POST['item_id']);

}
?>
<!-- new phones -->
<section id="new-phones">
              <div class="container py-5">
                <h4 class="font-rubik fot-size-20">New Phones</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <?php foreach($product_shuffle as $item){ ?>
                        <div class="item py-2 bg-light">
                            <div class="product font-rale">
                                <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'];?>" alt="product1" class="img-fluid"></img></a>
                                <div class="text-center">
                                    <h6><?php echo $item['item_name'];?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span> <i class="fas fa-star"></i></span>
                                        <span> <i class="fas fa-star"></i></span>
                                        <span> <i class="fas fa-star"></i></span>
                                        <span> <i class="fas fa-star"></i></span>
                                        <span> <i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2 ">
                                        <span><?php echo $item['item_price'];?></span>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                                        <button type="submit" name="newphones_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
              </div>
              </div>
            </section>
            <!-- !new phones -->