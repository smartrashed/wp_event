<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<div class="product-item-counter-area">
		<div class="p-item-counter">
			<p>
				<?php if ( ! $product->is_sold_individually() ) : ?>
					<?php woocommerce_quantity_input( array( 'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ) ); ?>
				<?php endif; ?>
			</p>
		</div><!-- /.p-item-counter -->
	</div><!-- /.product-item-counter-area -->
	<div class="add-cart">
		<button type="submit" class="custom-btn single_add_to_cart_button button alt "><i class="fa fa-shopping-cart"></i><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
	</div>
	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->id ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->id ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
