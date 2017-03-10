(function($){
    'use strict';        
    jQuery(document).ready(function(){
        jQuery(window).load(function(){
            jQuery('#loading').remove('.animated_bg');
        });
        
    jQuery('.testimonial-container-owl').owlCarousel({
            items: 3,
            margin: 50,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            navigation : true,
            pagination : true, 
            responsive:{
                    0:{
                        items:1
                    },
                    1024:{
                        items:2
                    },
                    1400:{
                        items:3
                    }
                }
        });     
        
        
        jQuery('.widget_search .search-form .search-submit').attr('value', ''); 

        jQuery('#myTab a').click(function (e) {
            e.preventDefault();
            jQuery(this).tab('show');
        });


        jQuery('#myTab1 a').click(function (e) {
            e.preventDefault();
            jQuery(this).tab('show');
        });

        //load counters
        countdown_init('#header-counter1');
        countdown_init('#header-counter2');
        countdown_init('#header-counter3');
        countdown_init('#header-counter4');

        jQuery(window).on('scroll', function(){
            if ( jQuery(window).scrollTop() > 60 ) {
                jQuery('.primary-menu').addClass('animated fadeInDown fixed-top-menu');
            } else {
                jQuery('.primary-menu').removeClass('animated fadeInDown fixed-top-menu');
            }
        });

        var $iW = jQuery(window).innerWidth();
        if ($iW <= 990){
            jQuery('.menu-area .navbar-nav>li.menu-item-has-children>a.dropdown-toggle').attr("href", "#");
            jQuery('.menu-area .navbar-nav>li.menu-item-has-children>a.dropdown-toggle').attr("data-toggle", "dropdown");
            jQuery('.menu-area .navbar-nav>li.menu-item-has-children>a.dropdown-toggle').attr("aria-haspopup", "true");
            jQuery('.menu-area .navbar-nav>li.menu-item-has-children>a.dropdown-toggle').attr("aria-expanded", "false");
            jQuery('.menu-area .navbar-nav>li.menu-item-has-children>a.dropdown-toggle').on('click', function() {
                jQuery(this).attr("aria-expanded", "true");
            });
        }
        
        jQuery('.related-product.ccr-section .shop-product-list .col-sm-6.col-md-4').removeClass('col-sm-6 col-md-4').addClass('col-sm-6 col-md-3');
        jQuery('.checkout>a.checkout-button').removeClass('checkout-button button alt wc-forward').addClass('custom-btn hvr-bounce-to-bottom');
    });
    
} ( jQuery ) );