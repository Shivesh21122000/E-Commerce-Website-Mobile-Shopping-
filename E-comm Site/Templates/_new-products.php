<!-- New Products -->
<?php

    //request method , taking item_id and user_id for cart table
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['new-product-submit'])){
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<section id="new-product">
    <div class="container py-5">
        <h4 class="font-size-20 font-rubik">New Products</h4>
        <hr>

        <!-- Owl carousel -->
        <div class="owl-carousel owl-theme bg-light">

            <?php foreach ($product_shuffle as $items){ ?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'products.php',$items['item_id'] );?>"><img src="<?php echo $items['item_image'] ?? './Assets/products/1.png'; ?>" alt="1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $items['item_name'] ?? 'Unknown';?></h6>
                            <div class="rating text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $items['item_price'] ?? '0';?></span>
                            </div>
                            <div class="cart">
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $items['item_id']??1; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                    if(in_array($items['item_id'],$Cart->cartIdArray($product->getProductDetail('cart'))??[])){
                                        echo '<button type="submit" disabled name="top-sale-submit" class="btn btn-success font-size-12">In the Cart</button>';
                                    }
                                    else{
                                        echo '<button type="submit" name="top-sale-submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Owl carousel -->
        </div>
</section>
<!-- New Products -->
