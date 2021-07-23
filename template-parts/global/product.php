<?php
/**
<<<<<<< HEAD
 * Product Card Template.
 *
 * @package Advance WooCommerce Theme
 */

$product_id             = get_the_ID();
$product                = wc_get_product( $product_id );
$product_image1x		= get_the_post_thumbnail_url( $product_id, 'shop_catalog' ) ?: AWT_BUILD_IMG_URI . '/red-rectangle.jpg';
$product_image2x		= get_the_post_thumbnail_url( $product_id, 'shop_single' ) ?: AWT_BUILD_IMG_URI . '/red-rectangle.jpg';
$product_title          = get_the_title();
$product_link           = get_the_permalink();
$sale_price             = $product->get_sale_price();
$regular_price          = $product->get_regular_price();
$is_product_on_sale     = $product->is_on_sale();
$is_product_in_stock    = $product->is_in_stock();
$currency_symbol		= get_woocommerce_currency_symbol();
$product_price          = $product->get_price_html();
$discount_percent       = ! empty( $sale_price ) ? floatval( ( $regular_price - $sale_price ) / $regular_price * 100 )  : 0;
$artista_terms 		    = get_the_terms( $product_id, 'artista' );
$is_wawa_print			= has_term(28, 'product_cat', $product_id);
$artista_name		    = $artista_terms[0]->name;

if ( $is_product_in_stock ) {
	?>
	<div class="product relative">
		<div class="relative square-parent">
		<img src="<?php echo esc_url( $product_image1x ); ?>" srcset="<?php echo esc_url( $product_image2x ); ?> 2x" alt="<?php echo esc_html( $product_title ); ?>" loading="lazy" class="square-child" >
			<!-- Show SALE seal on corner -->
			<?php
				if ( $is_product_on_sale ) {
					?>
					<span class="absolute z-10 -top-2 -right-2 px-3 py-1 | text-red uppercase font-bold font-expanded | bg-white | border-1 border-red rounded-full">
						<?php echo _e('Sale') ?>
					</span>
					<?php
				}
			?>
		</div>
		<a href="<?php echo esc_url( $product_link ); ?>">
			<div class="product-info absolute top-0 bg-red text-white text-sm font-expanded font-bold lowercase w-full h-full flex justify-center items-center text-center opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out cursor-pointer p-4">
				<div class="product-content">
					<div class="product-artist"><?php echo esc_html( $artista_name ); ?></div>
					<h3 class="product-title leading-none"><?php echo esc_html( $product_title ); ?></h3>
					<div class="product-price font-semibold">
						<span class="product-price uppercase">
							<?php if ($is_product_on_sale) : ?>
								<span class="product-price__sale opacity-70 line-through"><?php echo $currency_symbol . $sale_price; ?></span>
								<span class="product-price__regular"><?php echo $currency_symbol . $regular_price; ?></span>
							<?php else : ?>
								<?php echo $product_price ?>
							<?php endif; ?>
							<!-- Show discount persentage -->
							<!-- <?php
							if ( ! empty( $discount_percent ) ) {
								?>
								<span class="product-discount text-green-600 font-bold text-sm">
									<?php echo round( $discount_percent, 2 ); ?>% OFF
								</span>
								<?php
							}
							?> -->
						</span>
					</div>
				</div>
				<!-- Show add to car button -->
				<!-- <div>
					<a href="<?php echo esc_url( sprintf( '%1$s/?add-to-cart=%2$s', site_url(), $product_id ) ); ?>" class="px-3 py-1 rounded-sm mr-3 text-sm border-solid border border-current hover:bg-purple-600 hover:text-white hover:border-purple-600">
						Add to cart
					</a>
				</div> -->
			</div>
		</a>
		<?php get_template_part( '/woocommerce/single-product/wawa-seal' ); ?>
	</div>
	<?php
}
