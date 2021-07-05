<?php

if ( ! defined( 'AWT_DIR_PATH' ) ) {
	define( 'AWT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AWT_DIR_URI' ) ) {
	define( 'AWT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'AWT_BUILD_URI' ) ) {
	define( 'AWT_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'AWT_BUILD_PATH' ) ) {
	define( 'AWT_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'AWT_BUILD_JS_URI' ) ) {
	define( 'AWT_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'AWT_BUILD_JS_DIR_PATH' ) ) {
	define( 'AWT_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'AWT_BUILD_IMG_URI' ) ) {
	define( 'AWT_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'AWT_BUILD_SVG_URI' ) ) {
	define( 'AWT_BUILD_SVG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/svgs' );
}

if ( ! defined( 'AWT_BUILD_CSS_URI' ) ) {
	define( 'AWT_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'AWT_BUILD_CSS_DIR_PATH' ) ) {
	define( 'AWT_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'AWT_BUILD_LIB_URI' ) ) {
	define( 'AWT_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

// File Includes
require_once AWT_DIR_PATH . '/classes/class-agarracamote-woocommerce-theme-assets.php';
new agarracamote_Woocommerce_Theme_Assets();
require_once AWT_DIR_PATH . '/classes/class-agarracamote-woocommerce-theme-menus.php';
new agarracamote_Woocommerce_Theme_Menus();
require_once AWT_DIR_PATH . '/classes/class-agarracamote-woocommerce-theme.php';
new agarracamote_Woocommerce_Theme();

// // Add theme support Producto Gallery (slider, lightbox, zoom)
// add_action( 'after_setup_theme', 'yourtheme_setup', 50 );
 
// function yourtheme_setup() {
//     add_theme_support( 'wc-product-gallery-zoom' );
//     add_theme_support( 'wc-product-gallery-lightbox' );
//     add_theme_support( 'wc-product-gallery-slider' );
// }


/* -------- ACF custom --------- */

	// Define path and URL to the ACF plugin.
	define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
	define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

	// Include the ACF plugin.
	include_once( MY_ACF_PATH . 'acf.php' );

	// Customize the url setting to fix incorrect asset URLs.
	add_filter('acf/settings/url', 'my_acf_settings_url');
	function my_acf_settings_url( $url ) {
		return MY_ACF_URL;
	}

	// Custumize Options Pages
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			// 'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Opciones Generales',
			'menu_slug' 	=> 'eala-general-settings',
			'position' => '21',
			// 'capability'	=> 'edit_posts',
			// 'redirect'		=> false
		));
		
		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Opciones de Menú',
		// 	'menu_title'	=> 'Menú',
		// 	'parent_slug'	=> 'eala-general-settings',
		// ));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Opciones de Cabecera',
			'menu_title'	=> 'Cabecera',
			'parent_slug'	=> 'eala-general-settings',
		));

		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Opciones de Pie de página',
		// 	'menu_title'	=> 'Pie de página',
		// 	'parent_slug'	=> 'eala-general-settings',
		// ));
		
	}

	// (Optional) Hide the ACF admin menu item.
		// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
		// function my_acf_settings_show_admin( $show_admin ) {
		// 	return false;
		// }



/* -------- Edit Admin Pages --------- */

	add_action('admin_head', 'my_custom_admincss');

	function my_custom_admincss() {
	echo '<style>
		.edit-php.post-type-product table {
			table-layout:auto;
		}
	</style>';
	}

/**========================
 * Disable the emoji's
 ===========================*/
 function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**========================
 * Requires function files.
===========================*/
require get_template_directory() . '/functions/ac-hooks.php';
require get_template_directory() . '/functions/ac-theme-functions.php';
require get_template_directory() . '/functions/ac-shortcodes.php';


