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
	<div class="flex items-start justify-between flex-wrap mx-auto">
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
			<button id="menu-btn" class="flex items-center px-3 py-2 text-red focus:outline-none">
			<svg class="fill-current h-5 w-5"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>
				Menu</title>
				<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
			</svg>
			</button>
		</div>
		<div id="menu-items" class="h-0 lg:pt-0 w-full lg:h-full flex-grow lg:flex lg:items-start items-center lg:w-auto overflow-hidden lg:overflow-visible | transition-all ease-in-out duration-300 opacity-0 lg:opacity-100">
			<div class="text-lg font-expanded lowercase lg:flex-grow flex justify-center items-center mb-1 lg:mb-0 md:space-x-8 md:flex-row flex-col pt-4 lg:pt-1">
				<?php

				if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
					foreach ( $header_menus as $header_menu ) {
						if ($header_menu->object_id == 79) {
							get_template_part( 'template-parts/header/dropdown', '', array('menu' => $header_menu) );
						}
						else {
							printf(
							'<a class="block lg:inline-block text-red" href="%1$s">%2$s</a>',
							esc_url( $header_menu->url ),
							esc_html( $header_menu->title )
							);
						}
					}

				}
				?>

			</div>
			<div class="text-sm font-medium flex justify-center lg:justify-end mt-5 lg:mt-1 mb-3 lg:mb-0">
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
