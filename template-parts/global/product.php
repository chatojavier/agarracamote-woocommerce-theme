<?php
/**
<<<<<<< HEAD
 * Product Card Template.
 *
 * @package Advance WooCommerce Theme
 */

$product_id             = get_the_ID();
$product                = wc_get_product( $product_id );
$product_thumbnail_url  = get_the_post_thumbnail_url( $product_id, 'medium' );
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
		<div class="relative">
			<?php if ($product_thumbnail_url) : ?>
				<img src="<?php echo esc_url( $product_thumbnail_url ); ?>" alt="<?php echo esc_html( $product_title ); ?>">
			<?php else : ?>
				<img src="<?php echo wc_placeholder_img_src('shop_gallery'); ?>" alt="No image found">
			<?php endif; ?>
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
			<div class="product-info absolute top-0 bg-red text-white text-sm font-expanded font-bold lowercase w-full h-full flex justify-center items-center text-center opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out cursor-pointer">
				<div class="product-content">
					<div class="product-artist"><?php echo esc_html( $artista_name ); ?></div>
					<h3 class="product-title"><?php echo esc_html( $product_title ); ?></h3>
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
		<?php if($is_wawa_print) : ?>
		<div class="wawa-seal absolute -bottom-20 -right-10 z-10">
			<img src="<?php echo AWT_BUILD_IMG_URI . '/wawa_prints@1x.png' ?>" alt="Wawa-print" srcset="<?php echo AWT_BUILD_IMG_URI . '/wawa_prints@2x.png' ?>" width="228">
		</div>
		<?php endif; ?>
	</div>
	<?php
}
