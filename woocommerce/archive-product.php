<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<main id="main" class="archive site-main max-w-1280 m-auto mt-4 lg:p-4" role="main">
<?php
	wc_get_template_part( 'loop/breadcrumbs' );
?>
<div class="archive-content flex">
	<div class="archive-content-loop lg:order-2">
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
		
		<?php
		} else {
			wc_no_products_found();
		}
		?>
	</div>
	<!-- <div class="archive-content-sidebar w-1/4 pr-8 lg:order-1">
		<?php // get_sidebar( 'obras' ); ?>
	</div> -->
</div>
</main>

<?php
get_footer( 'shop' );
