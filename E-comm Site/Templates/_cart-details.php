<!-- Cart Section-->
<?php
//request method , taking item_id and user_id for cart table
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['delete-cart-submit'])){
        $deleteRecord = $Cart->deleteFromCart($_POST['item_id']);
    }
}
?>
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-rubik font-size-20">Your Cart</h5>
        <!-- Cart Items -->

        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getProductDetail('cart') as $items):
                        $cart = $product->getProductByID($items['item_id']);
                        //print_r($cart);
                        $total[] = array_map(function($item){
                ?>
                <!-- Item 1-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image']??'./Assets/products/1.png'; ?>" alt="1" class="img-fluid" style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-16"><?php echo $item['item_name']?? 'Unknown'; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? 'Unknown'; ?></small>
                        <!-- Rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-text-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14" style="text-decoration: none;">20,533 ratings</a>
                        </div>
                        <!-- Rating -->

                        <!-- Quantity -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button data-id="<?php echo $item['item_id']??'0'; ?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id']??'0'; ?>" class="qty-input border px-2 w-75 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id']??'0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']??1; ?>">
                                <button type="submit" name="delete-cart-submit" class="font-baloo btn text-danger border-end">Delete</button>

                            </form>
                            <button type="submit" class="font-baloo btn text-danger">Save for Later</button>
                        </div>
                        <!-- Quantity -->
                    </div>
                    <!-- price -->
                    <div class="col-sm-2 text-end">
                        <div class="text-danger font-size-20 font-baloo">
                            $<span class="product_price" data-id="<?php echo $item['item_id']??'0'; ?>"> <?php echo $item['item_price'] ?? 0; ?></span>
                        </div>
                    </div>
                    <!-- price -->
                </div>
                <!-- Item 1 -->
                <?php
                        return $item['item_price'];
                        },$cart);
                    endforeach;
                ?>

            </div>

            <div class="col-sm-3">
                <!-- Ṭotal amount -->
                <div class="total_amount border text-center mt-2">
                    <h5 class="font-rale text-success pt-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h5>
                    <div class="total py-3">
                        <h5 class="py-3 border-top font-baloo font-size-20">Subtotal (<?php echo isset($total) ? count($total) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($total) ? $Cart->subTotal($total) : 0; ?></span> </span></h5>
                        <button type="submit" class="btn btn-warning my-1">Proceed to buy</button>
                    </div>

                </div>
                <!-- Ṭotal amount -->
            </div>
        </div>
    </div>
</section>
<!-- Cart Section-->