$(document).ready(function(){

    //owl carousel banners
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        stagePadding: 50,
        autoplay: true,
        autoplayTimeout: 4000,
        loop:true
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        nav: true,
        loop: true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }

        }
    });

    // filters isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // new-products owl-carousel
    $("#new-product .owl-carousel").owlCarousel({
        loop: true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }

        }
    });

    // qty change qty_up
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");


    // click on qty up button
    $qty_up.click(function(e){

        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //Changing product price using ajax
        $.ajax({url:"Templates/ajax.php", type:'post', data: {itemid:$(this).data("id")},success: function (result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val()>=1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });

                    //Increasing the price of the product as up button is pressed
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                    //Setting subtotal price
                    let $subTotal = parseInt($deal_price.text())+parseInt(item_price);
                    $deal_price.text($subTotal.toFixed(2));
                }

            }});//Closing ajax request

    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //Changing product price using ajax
        $.ajax({url:"Templates/ajax.php", type:'post', data: {itemid:$(this).data("id")},success: function (result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val()>1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });

                    //Increasing the price of the product as up button is pressed
                    $price.text(parseInt(item_price*$input.val()).toFixed(2));

                    //Setting subtotal price
                    let $subTotal = parseInt($deal_price.text())-parseInt(item_price);
                    $deal_price.text($subTotal.toFixed(2));
                }

            }});//Closing ajax request


    });// closing qty down button

});



