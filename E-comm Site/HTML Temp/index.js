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
    // let $input = $(".qty .qty-input");

    $qty_up.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val()>=1 && $input.val()<=9){
            $input.val(function(i,oldval){
                return ++oldval;
            })
        }
    });

    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val()>1 && $input.val()<=10){
            $input.val(function(i,oldval){
                return --oldval;
            })
        }
    });

});



