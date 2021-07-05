<?php
/**
<<<<<<< HEAD
 * campaign Card Template.
 *
 * @package Advance WooCommerce Theme
 */

$campaign_id 		= get_the_ID();
$block_id = custom_get_acf_block_ids_from_post($campaign_id)[0];
$campaign_img_id	= get_field_from_block('image', $campaign_id, $block_id);
$image1x 			= wp_get_attachment_image_url( $campaign_img_id, 'shop_gallery') ?: wc_placeholder_img_src('shop_gallery');
$image2x 			= wp_get_attachment_image_url( $campaign_img_id, 'shop_single') ?: '';
$image_alt 			= get_post_meta($image_id, '_wp_attachment_image_alt', TRUE) ?: 'No image found';
$campaign_title 	= get_the_title();
$campaign_link 		= get_the_permalink();

?>
<div class="campaign relative">
	<div class="relative">
		<img src="<?php echo $image1x; ?>" srcset="<?php echo $image2x; ?>"  alt="<?php echo esc_html( $image_alt ); ?>" loading="lazy" >
	</div>
	<a href="<?php echo esc_url( $campaign_link ); ?>">
		<div class="campaign-info absolute top-0 bg-red text-white text-sm font-expanded font-bold lowercase w-full h-full flex justify-center items-center text-center opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out cursor-pointer">
			<div class="campaign-content">
				<h3 class="campaign-title"><?php echo esc_html( $campaign_title ); ?></h3>
			</div>
		</div>
	</a>
</div>
