<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Owl Carousel 2 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="  crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file-->
    <link rel="stylesheet" href="style.css">

    <?php
        /* require function template*/
        require('functions.php');
    ?>

</head>
<header id="header">
<!--    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">-->
<!--        <p class="font-rale font-size-12 text-black-60 m-0">Baheti colony, Row no 4, Indore road, Sanawad, Madhya Pradesh</p>-->
<!--        <div class="font-size-14 font-rale">-->
<!--            <a href="#" class="px-3 border-right border-left text-dark">Login</a>-->
<!--            <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Ṇavbar -->

    <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mobilians</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">On Sale</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comming Soon</a>
                    </li>

                </ul>

                <div class="mx-3">
                    <button class="mr-3 btn btn-light" type="submit">Login</button>
                    <button class="mx-2 btn btn-light" type="submit">Signup</button>
                </div>

                <form action="#" class="font-size-14 font-rale">

                    <a href="./cart.php" class="rounded-pill py-2 color-primary-bg" style="text-decoration: none;">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill bg-light text-dark"><?php echo count($product->getProductDetail('cart')); ?></span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Close navbar -->
</header>
<!-- Close Header -->

<!-- Start main -->


<main id="main-site">