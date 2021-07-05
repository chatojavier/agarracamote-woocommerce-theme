<?php
/**
 *
 * Wawa Seal Template.
 *
 * @package Advance WooCommerce Theme
 */

$product_id    = get_the_ID();
$is_wawa_print = has_term(28, 'product_cat', $product_id);

if($is_wawa_print) : ?>
<div class="wawa-seal absolute -bottom-10 -right-10 z-50">
    <img src="<?php echo AWT_BUILD_IMG_URI . '/wawa_prints@1x.png' ?>" alt="Wawa-print" srcset="<?php echo AWT_BUILD_IMG_URI . '/wawa_prints@2x.png' ?>" width="228">
</div>
<?php endif; ?>