<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$product_name 			= $product->name;
$product_description 	= $product->description;
$artist 				= wp_get_post_terms($post->ID, 'artista')[0];
	$artist_name 		= $artist->name;
	$artist_url  		= get_term_link( $artist );
$attributes				= $product->attributes;
	$dimensiones		= $attributes['dimensiones'];
	$dimensiones_name	= $dimensiones['data']['name'];
	$dimensiones_value	= $dimensiones['data']['options'][0];

woocommerce_output_all_notices();

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" class="single_product-content flex space-x-20 mb-14">
	<!-- Gallery Slider -->
	<?php get_template_part( '/woocommerce/single-product/ac-product-slider' ); ?>

	<div class="summary entry-summary mt-8">
		<!-- Product Name -->
		<h1 class="summary-title | text-2xl font-bold font-expanded uppercase">
			<?php echo $product_name ?>
		</h1>

		<!-- Artist name and link -->
		<?php if ($artist) : ?>
		<div class="summary-artist | mb-12 | text-xl lowercase">
			<a href="<?php echo $artist_url ?>" class="hover:text-red"><?php echo $artist_name ?></a>
		</div>
		<?php endif; ?>
		
		<!-- Product price -->
		<p class="single_product-price | mb-12 | text-xl"><?php echo $product->get_price_html(); ?></p>
		
		<!-- Product Attributes -->
		<?php if ($product->is_type( 'simple' ) && $attributes) : ?>
			<div class="single_product-attributes | mb-12">
				<?php 
				foreach ($attributes as $attribute => $value) :
					$attribute_name  = $value['data']['name'];
					$attribute_value = $value['data']['options'][0];
					?>
					<div class="single_product-attribute italic">
						<span class="attribute-name"><?php echo $attribute_name; ?>: </span>
						<span class="attribute-value"><?php echo $attribute_value; ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Add to Cart -->
		<div class="single_product-cart | mb-12">
			<?php woocommerce_template_single_add_to_cart(); ?>
		</div>

		<!-- Product Description -->
		<?php if ($product_description) : ?>
			<div class="single_product-description">
				<div class="single_product-description-title | text-xl | border-b | mb-4">
					<?php echo _e('Description'); ?>:
				</div>
				<div class="single_product-description-text">
					<?php echo $product_description ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
	
</div>

<div class="single_product-relative">
	<?php
	if ($product->upsell_ids) {
		woocommerce_upsell_display('4');
	} else {
		woocommerce_output_related_products();
	}
	?>
</div>