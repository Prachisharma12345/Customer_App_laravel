
<!--  shopping cart section -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-12">Wishlist Cart</h5>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-9">
                <hr>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img src="./assets/blog/empty_cart.png" alt="empty cart" class="img-fluid" style="height: 200px;">
                        <p>Empty Cart</p>
                    </div>
                </div>
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



