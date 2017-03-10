<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

wc_print_notices();

?>
<div class="checkout-breadcrumb">
    <h3>
        <span class="active"><?php esc_html_e('Shopping Cart','event-term') ?></span>   
        <i class="fa fa-angle-right" aria-hidden="true"></i>    
        <span><?php esc_html_e('Checkout details','event-term') ?></span>  
        <i class="fa fa-angle-right" aria-hidden="true"></i> 
        <span><?php esc_html_e('Order Complete','event-term') ?></span>
    </h3>
</div>
<p class="cart-empty">
	<?php _e( 'Your cart is currently empty.', 'event-term' ) ?>
</p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<p class="return-to-shop">
		<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php _e( 'Return To Shop', 'event-term' ) ?>
		</a>
	</p>
<?php endif; ?>
