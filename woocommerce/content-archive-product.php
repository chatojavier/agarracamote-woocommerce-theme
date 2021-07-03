<?php
/**
 * Template of content archive
 */
?>

<div class="archive-content">
	<div class="archive-content-loop">
		<?php
		if ( woocommerce_product_loop() ) {
			woocommerce_output_all_notices();
			?>
			<div class="lopp-top | mb-6 | flex items-center justify-between | text-red text-xs">
				<?php
				woocommerce_catalog_ordering();
				woocommerce_result_count();
				woocommerce_pagination();
				?>
			</div>
			<?php
            wc_get_template_part('loop/grid-products');
		} else {
			wc_no_products_found();
		}
		?>
	</div>
	<!-- <div class="archive-content-sidebar w-1/4 pr-8 lg:order-1">
		<?php // get_sidebar( 'obras' ); ?>
	</div> -->
</div>