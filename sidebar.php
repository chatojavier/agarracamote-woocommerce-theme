<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agarracamote-woocommerce-theme
 */

if ( ! is_active_sidebar( 'main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'main' ); ?>
</aside><!-- #secondary -->
