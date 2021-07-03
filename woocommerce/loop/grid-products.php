<?php
/*
 * Loop of products
 */

woocommerce_product_loop_start();
if ( wc_get_loop_prop( 'total' ) ) {
    while ( have_posts() ) {
        the_post();
        /**
         * Hook: woocommerce_shop_loop.
         */
        // do_action( 'woocommerce_shop_loop' );
        get_template_part( 'template-parts/global/product' );
    }
}
woocommerce_product_loop_end();
?>
<div class="lopp-bottom | mt-6 | flex items-center justify-center | text-red text-xs">
    <?php
    woocommerce_pagination();
    ?>
</div>