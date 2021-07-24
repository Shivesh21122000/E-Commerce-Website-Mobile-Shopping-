<?php
    ob_start();
    /*including header code template*/
    include('header.php');



    /*including banner code template*/
    include('Templates/_banner-area.php');


    /*including top-sale code template*/
    include('Templates/_top-sale.php');


    /*including special-price-filter code template*/
    include('Templates/_special-price-filter.php');


    /*including banner-ads code template*/
    include('Templates/_banner-ads.php');


    /*including top-sale code template*/
    include('Templates/_new-products.php');


    /*including blogs code template*/
    include('Templates/_blogs.php');

    /*including footer code template*/
    include('footer.php');

    ob_end_flush();
