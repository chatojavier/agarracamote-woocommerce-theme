<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agarracamote-woocommerce-theme
 */

if ( ! is_active_sidebar( 'obras' ) ) {
	return;
}
?>

<aside id="archive-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'obras' ); ?>
</aside><!-- #secondary -->