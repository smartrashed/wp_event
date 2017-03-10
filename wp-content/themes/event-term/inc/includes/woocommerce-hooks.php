<?php
// Remove Woocommerce Breadcrumbs
add_action( 'init', 'event_term_remove_wc_breadcrumbs' );
function event_term_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

//Remove woocommerce default sorting and Show result
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'event_term_custom_hide_sales_flash');
function event_term_custom_hide_sales_flash()
{
    return false;
}

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
function event_term_woocommerce_template_loop_product_title(){
    echo '<h3 class="p-name"><a href="'. get_permalink() .'">' . get_the_title() . '</a></h3>';
}
add_action( 'woocommerce_shop_loop_item_title', 'event_term_woocommerce_template_loop_product_title', 10 );

//Remove woocommerce_upsell_display
remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display', 15);

//Remove cross-sells at cart
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

// Ensure cart contents update when products are added to the cart via AJAX
add_filter('woocommerce_add_to_cart_fragments', 'event_term_woocommerce_header_add_to_cart_fragment');
function event_term_woocommerce_header_add_to_cart_fragment($fragments){
    ob_start();
    ?>
    <span class="item-counter">
            <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php

    $fragments['span.item-counter'] = ob_get_clean();

    return $fragments;
}


function event_term_woocommerce_cart_dropdown() {
    global $woocommerce;
    ?>
    <div class="menu-cart-content">
    <?php
    if (sizeof($woocommerce->cart->cart_contents) > 0) : foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item) :
        $_product = $cart_item['data'];
        if ($_product->exists() && $cart_item['quantity'] > 0) :
            echo ' <div class="menu-cart-item">';
            ?>

            <div class="menu-cart-img">
                <?php echo $_product->get_image(); ?>
            </div>

            <div class="menu-cart-desc">
                <a href="<?php echo get_permalink($cart_item['product_id']); ?>"><?php echo apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product); ?></a>
                <p>
                    <?php echo $cart_item['quantity']; ?>
                    x<span><?php echo woocommerce_price($_product->get_price()); ?></span>
                </p>
            </div>

            <div class="menu-cart-btn">                
                <a href="<?php echo esc_url($woocommerce->cart->get_remove_url($cart_item_key)); ?>"><i class="fa fa-times"></i></a>
            </div>

    </div>
    <?php
        endif;
    endforeach;
        ?>
        <?php
    else: echo '<div class="empty">' . esc_html__('No products in the cart.', 'event-term') . '</div>';
    endif;

    if (sizeof($woocommerce->cart->cart_contents) > 0) { ?>


    <?php } ?>
    <div class="menu-cart-bottom">
        <div class="sub-total">
            <p>Subtotal:<span><?php echo $woocommerce->cart->get_cart_total(); ?></span></p>
        </div>
        <div class="menu-cart-action">
            <a  class="menu-cart-btn-action" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"><?php _e('View Cart', 'event-term') ?></a>
        </div>
    </div>
    </div>


    <?php
}

// Handle cart in header fragment for ajax add to cart
add_filter( 'add_to_cart_fragments', 'event_term_header_add_to_cart_fragment' );

if ( !function_exists( 'event_term_header_add_to_cart_fragment' ) ) {

    function event_term_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();
        ?>


        <div class="menu-cart-content">
        <?php
        if (sizeof($woocommerce->cart->cart_contents) > 0) : foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item) :
            $_product = $cart_item['data'];
            if ($_product->exists() && $cart_item['quantity'] > 0) :
                echo ' <div class="menu-cart-item">';
                ?>

                <div class="menu-cart-img">
                    <?php echo $_product->get_image(); ?>
                </div>

                <div class="menu-cart-desc">
                    <a href="<?php echo get_permalink($cart_item['product_id']); ?>"><?php echo apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product); ?></a>
                    <p>
                        <?php echo $cart_item['quantity']; ?>
                        x<span><?php echo woocommerce_price($_product->get_price()); ?></span>
                    </p>
                </div>

                <div class="menu-cart-btn">
                    <a href="<?php echo esc_url($woocommerce->cart->get_remove_url($cart_item_key)); ?>"><i class="fa fa-times"></i></a>
                </div>

                </div>
                <?php
            endif;
        endforeach;
            ?>
            <?php
        else: echo '<div class="empty">' . esc_html__('No products in the cart.', 'event-term') . '</div>';
        endif;

        if (sizeof($woocommerce->cart->cart_contents) > 0) { ?>


        <?php } ?>
        <div class="menu-cart-bottom">
            <div class="sub-total">
                <p><?php esc_html_e('Subtotal:', 'event-term') ?><span><?php echo $woocommerce->cart->get_cart_total(); ?></span></p>
            </div>
            <div class="menu-cart-action">
                <a class="menu-cart-btn-action" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" ><?php _e('View Cart', 'event-term') ?></a>
            </div>
        </div>
        </div>

        <?php
        $fragments['div.menu-cart-content'] = ob_get_clean();

        return $fragments;
    }

}