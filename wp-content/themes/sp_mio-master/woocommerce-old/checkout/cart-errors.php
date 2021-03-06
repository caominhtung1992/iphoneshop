<?php
/**
 * Cart errors page
 */
?>

<?php $woocommerce->show_messages(); ?>

<p><?php _e('There are some issues with the items in your cart (shown above). Please go back to the cart page and resolve these issues before checking out.', 'sp') ?></p>

<?php do_action('woocommerce_cart_has_errors'); ?>

<p><a class="button" href="<?php echo get_permalink(woocommerce_get_page_id('cart')); ?>"><?php _e('&larr; Return To Cart', 'sp') ?></a></p>