<!-- Filter select -->
<?php
    $product_shuffle = $product->getProductDetail();
    $brands = array_map(function ($newpro){return $newpro['item_brand'];}, $product_shuffle);
    $unique = array_unique($brands);
    sort($unique);
    shuffle($product_shuffle);

    //request method , taking item_id and user_id for cart table
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['special-price-submit'])){
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Filters for you</h4>

        <div id="filters" class="button-group text-end font-baloo font-size-20">
            <button class="btn is-checked btn-light" data-filter="*">All brands</button>
            <?php foreach ($unique as $brand){  ?>
            <button class="btn btn-light" data-filter=".<?php echo $brand; ?>"><?php echo $brand;?></button>
            <?php } ?>

        </div>
        <hr>
        <div class="grid">
            <?php foreach ($product_shuffle as $items){?>
            <div class="grid-item <?php echo $items['item_brand']; ?> border">
                <div class="item py-2" style="width: 210px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'products.php',$items['item_id'] );?>"><img src="<?php echo $items['item_image'] ?? './Assets/products/1.png'; ?>" alt="13" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $items['item_name'] ?? 'Unknown';  ?></h6>
                            <div class="rating text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$ <?php echo $items['item_price'] ?? '0'; ?></span>
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
            </div>
            <?php } ?>

        </div>
</section>
<!-- Filter select -->