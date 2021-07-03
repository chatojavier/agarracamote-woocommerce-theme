<?php
/**
 * Header Navigation.
 *
 * @package Advance WooCommerce Theme
 */

$menu_class     = new agarracamote_Woocommerce_Theme_Menus();
$header_menu_id = $menu_class->get_menu_id( 'awt-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );

?>

<nav class="p-4 max-w-1280 m-auto">
	<div class="flex items-start justify-between flex-wrap container mx-auto">
		<div class="header_logo w-60">
		<?php
		$logo = get_field('header_logo', 'option');
		if( $logo ): ?>
			<div>
				<a class="" href="<?php echo home_url(); ?>"><img src="<?php echo $logo['logo_1x'] ?>" alt="" srcset="<?php echo $logo['logo_2x'] ?>"></a>
			</div>
		<?php endif; ?>
		</div>
		<div class="block lg:hidden">
			<button id="menu-btn" class="flex items-center px-3 py-2 border rounded text-red border-red hover:text-red hover:border-red">
				<img width="16" height="16" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/hamburger.svg'; ?>" alt="wishlist">
			</button>
		</div>
		<div id="menu-items" class="h-0 w-full overflow-hidden lg:h-full flex-grow lg:flex lg:items-start lg:w-auto">
			<div class="text-lg font-expanded lowercase lg:flex-grow flex justify-center">
				<?php

				if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
					foreach ( $header_menus as $header_menu ) {
						printf(
							'<a class="block mt-4 lg:inline-block lg:mt-0 text-red mr-8" href="%1$s">%2$s</a>',
							esc_url( $header_menu->url ),
							esc_html( $header_menu->title )
						);
					}

				}
				?>

			</div>
			<div class="text-sm font-medium md:flex">
				<?php if( have_rows('social_icons', 'option') ) :
				while( have_rows('social_icons', 'option') ) : the_row();
				$icon = get_sub_field('icon');
				$name = get_sub_field('social_media');
				$url  = get_sub_field('url');
				?>
				<a href="<?php echo $url ?>" class="flex items-center md:flex-col lg:mt-0 text-black hover:text-black mr-2">
					<img width="20" height="20" src="<?php echo $icon ?>" alt="<?php echo $name ?>">
				</a>
				<?php 
				endwhile;
				endif; ?>
				<a class="flex lg:mt-0 text-red hover:text-black ml-4" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
					<span class="text-xs font-expanded font-bold"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
					<img width="20" height="20" src="<?php echo AWT_DIR_URI . '/assets/src/svgs/icon_bag.svg'; ?>" alt="cart">
				</a>
			</div>
		</div>
	</div>
</nav>
