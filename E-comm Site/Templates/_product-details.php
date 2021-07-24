<!-- Product details -->
<?php

    $item_id = $_GET['item_id']??1;
    foreach ($product->getProductDetail() as $items):
        if($items['item_id']==$item_id):

?>

<section id="product py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $items['item_image'] ?? './Assets/products/1.png'; ?>" alt="1" class="img-fluid">
                <form class="row pt-4 font-baloo font-size-16">
                    <div class="col-auto d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-danger btn-lg form-control">Proceed to buy</button>
                    </div>
                    <div class="col-auto d-grid gap-2 col-6 mx-auto">
                        <?php
                        if(in_array($items['item_id'],$Cart->cartIdArray($product->getProductDetail('cart'))??[])){
                            echo '<button type="submit" disabled class="p-auto btn btn-success btn-lg form-control">In the Cart</button>';
                        }
                        else{
                            echo '<button type="submit" class="p-auto btn btn-warning btn-lg form-control">Add to Cart</button>';
                        }
                        ?>

                    </div>
                </form>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $items['item_name']; ?></h5>
                <small>by <?php echo $items['item_brand']; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale fon-size-14" style="text-decoration: none;">20,533 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!-- Product price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>MRP:</td>
                        <td>$<strike>170</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>In sale:</td>
                        <td class="font-size-20"><span class="text-danger">$<?php echo $items['item_price'] ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td class="font-size-20"><span class="text-danger">$<?php echo 170-$items['item_price']; ?></span></td>
                    </tr>
                </table>
                <!-- Product price -->

                <!-- Policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-4">
                            <div class="my-2 font-size-20 color-second">
                                <span class="fas fa-retweet p-3 border rounded-circle"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12 color-second" style="text-decoration: none;">10 Days <br>Raplacement</a>
                        </div>
                        <div class="return text-center mx-4">
                            <div class="my-2 font-size-20 color-second">
                                <span class="fas fa-truck p-3 border rounded-circle"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12 color-second" style="text-decoration: none;">Safe Delivery</a>
                        </div>
                        <div class="return text-center mx-2">
                            <div class="my-2 font-size-20 color-second">
                                <span class="fas fa-check-double p-3 border rounded-circle"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12 color-second" style="text-decoration: none;">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- Policy -->
                <hr>
                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29  - Apr 1</small>
                    <small>Sold by <a href="#" style="text-decoration: none;">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order-details -->

                <!-- Extra features -->
                <div class="row">
                    <div class="col-6">
                        <!-- Color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="color-yellow-bg p-2 rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="color-primary-bg p-2 rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="bg-dark p-2 rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- Color -->
                    </div>
                    <!-- Quantity -->
                    <div class="col-6 my-2">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="prod1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="prod1" type="text" class="qty-input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Quantity -->
                </div>

                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik bg-light border rounded p-2">
                            <button class="btn bn-grey font-size-14 p-0">4GB RAM</button>
                        </div>
                        <div class="font-rubik bg-light border rounded p-2">
                            <button class="btn font-size-14 p-0">6GB RAM</button>
                        </div>
                        <div class="font-rubik bg-light border rounded p-2">
                            <button class="btn font-size-14 p-0">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- Extra features -->

            </div>

            <div class="col-12 mt-5">
                <h6 class="font-rubik">Product Description</h6>
                <hr>

                <p class="font-size-14 font-rale">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quod soluta quaerat,
                    eveniet commodi praesentium sint nesciunt dolor repellat pariatur fugit accusamus magni
                    saepe ea vitae? Reiciendis mollitia qui unde necessitatibus magnam voluptas, impedit possimus,
                    quo deleniti numquam est fuga laborum nostrum aspernatur, adipisci similique? Officiis id repudiandae
                    voluptatibus doloremque Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla odit fuga dolore unde illo praesentium minus adipisci doloribus. Doloribus repudiandae sapiente earum distinctio repellendus quod velit neque architecto qui porro!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex iure est cumque nam nobis amet ipsa praesentium architecto, sunt rerum delectus velit modi magnam laborum harum quo earum eum ipsum!
                </p>

            </div>
        </div>

    </div>
</section>

<?php
     endif;
     endforeach;

?>
<!-- Product details -->