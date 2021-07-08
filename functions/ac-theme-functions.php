<?php

/**========================
 * Functions with own hooks.
===========================*/
function register_custom_sidebars() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Main Sidebar', 'agarracamote' ),
            'id'            => 'main',
            'description'   => esc_html__( 'Add widgets here to appear in your page.', 'agarracamote' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title font-bold font-expanded">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Obras Sidebar', 'agarracamote' ),
            'id'            => 'obras',
            'description'   => esc_html__( 'Add widgets here to appear in your obras page.', 'agarracamote' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s pb-6 mb-4">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title pb-1 mb-4 font-bold text-xs uppercase border-b-1">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'register_custom_sidebars');


/**==================================
 * Shortcut for Custom Taxonomy List.
====================================*/
function list_terms_custom_taxonomy( $atts ) {
 
    // Inside the function we extract custom taxonomy parameter of our shortcode
     
        extract( shortcode_atts( array(
            'custom_taxonomy' => '',
        ), $atts ) );
    
    //Get Taxonomy Label
    $obj_taxonomy    = get_taxonomy( $custom_taxonomy );
    $labels_taxonomy = get_taxonomy_labels( $obj_taxonomy );
    $title_taxonomy  = $labels_taxonomy->name;
    
    // arguments for function wp_list_categories
    $args = array( 
        'show_count'    => 0,
        'taxonomy'      => $custom_taxonomy,
        'title_li'      => '<h2 class="widget-title pb-1 mb-4 font-bold uppercase text-xs border-b-1">' . $title_taxonomy . '</h2>',
    );
     
    // We wrap it in unordered list 
    echo '<ul>'; 
    echo wp_list_categories($args);
    echo '</ul>';
}
     
// Add a shortcode that executes our function
add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );
    
//Allow Text widgets to execute shortcodes
add_filter('widget_text', 'do_shortcode');


//Get the Title Sans Font
function ac_get_title_sans($str_title, $title_class="") {
    return
    '<h2 class="products-section-title main-title mb-8 text-xl text-center uppercase ' . $title_class .'">
		<span class="main-title-inner">' . $str_title . '</span>
	</h2>';
};

//Get the title Serif Font
function ac_get_title_serif() {
    echo
    '<h2 class="products-section-title mb-16 pb-3 text-4xl text-center text-red font-gtsuper italic w-full border-b-1 border-gray-light border-solid">
		<span class="main-title-inner">' . get_the_title() . '</span>
	</h2>';
};

//Get the title for Order Reviwe
function ac_order_review_heading() {
    echo '<h3 id="order_review_heading" class="font-bold font-expanded text-lg mb-6">' . esc_html__( 'Your order', 'woocommerce' ) . '</h3>';
}

/**
 * Remove all possible fields on checkout
 **/
function wc_remove_checkout_fields( $fields ) {

    // Billing fields
    // unset( $fields['billing']['billing_company'] );
    // unset( $fields['billing']['billing_email'] );
    // unset( $fields['billing']['billing_phone'] );
    // unset( $fields['billing']['billing_state'] );
    // unset( $fields['billing']['billing_first_name'] );
    // unset( $fields['billing']['billing_last_name'] );
    // unset( $fields['billing']['billing_address_1'] );
    // unset( $fields['billing']['billing_address_2'] );
    // unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );

    // Shipping fields
    // unset( $fields['shipping']['shipping_company'] );
    // unset( $fields['shipping']['shipping_phone'] );
    // unset( $fields['shipping']['shipping_state'] );
    // unset( $fields['shipping']['shipping_first_name'] );
    // unset( $fields['shipping']['shipping_last_name'] );
    // unset( $fields['shipping']['shipping_address_1'] );
    // unset( $fields['shipping']['shipping_address_2'] );
    // unset( $fields['shipping']['shipping_city'] );
    // unset( $fields['shipping']['shipping_postcode'] );

    // Order fields
    // unset( $fields['order']['order_comments'] );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );

/* ========================
 * Create new Post Type
 =========================== */
 
 function create_posttype() {
 
    register_post_type( 'campaigns',
    // PT Options
        array(
            'labels' 		=> array(
                'name' 			=> __( 'Campañas' ),
                'singular_name' => __( 'Campaña' )
            ),
			'supports' 		=> array( 'title', 'editor', 'thumbnail' ),
            'public' 		=> true,
            'has_archive' 	=> true,
            'rewrite' 		=> array('slug' => 'campanas'),
            'show_in_rest' 	=> true,
			'menu_position' => 21,
			'menu_icon'		=> 'dashicons-megaphone'
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/**========================
 * Create new taxonomies
 ===========================*/
	// hook into the init action and call create_artista_taxonomies when it fires
		add_action( 'init', 'create_artista_taxonomies', 0 );

	function create_artista_taxonomies() {

		// Add new taxonomy
		$labels = array(
			'name' => _x( 'Artistas', 'taxonomy general name', 'agarracamote' ),
			'singular_name' => _x( 'Artista', 'taxonomy singular name', 'agarracamote' ),
			'search_items' => __( 'Search Artistas', 'agarracamote' ),
			'all_items' => __( 'All Artistas', 'agarracamote' ),
			'parent_item' => __( 'Parent Artista', 'agarracamote' ),
			'parent_item_colon' => __( 'Parent Artista:', 'agarracamote' ),
			'edit_item' => __( 'Edit Artista', 'agarracamote' ),
			'update_item' => __( 'Update Artista', 'agarracamote' ),
			'add_new_item' => __( 'Add New Artista', 'agarracamote' ),
			'new_item_name' => __( 'New Artista Name', 'agarracamote' ),
			'menu_name' => __( 'Artistas', 'agarracamote' ),
		);

		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'artistas' ),
			'public' => true,
			'show_in_nav_menus' => true
		);

		register_taxonomy( 'artista', array('product'), $args );
	}


/**========================
 * Add ACF Blocks.
===========================*/

function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        /* ------- Campaign Content Block -------- */
        acf_register_block_type(array(
            'name'              => 'campaign_content',
            'title'             => __('Campaign Content', 'agarracamote'),
            'description'       => __('A custom Campaign Content.', 'agarracamote'),
            'render_template'   => 'template-parts/campaigns/block-content.php',
            'category'          => 'media',
            'icon'              => 'megaphone',
            'keywords'          => array( 'campaign', 'description', 'content' ),
            // 'post_types'        => 'campaigns',
        ));

        /* ------- Campaign Gallery Block -------- */
        acf_register_block_type(array(
            'name'              => 'campaign_galley',
            'title'             => __('Campaign Gallery', 'agarracamote'),
            'description'       => __('A custom Campaign Gallery.', 'agarracamote'),
            'render_template'   => 'template-parts/campaigns/block-gallery.php',
            'category'          => 'media',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'gallery', 'description', 'content' ),
            // 'post_types'        => 'campaigns',
        ));

        /* ------- Agency Block -------- */
        acf_register_block_type(array(
            'name'              => 'agency',
            'title'             => __('Agency Block', 'agarracamote'),
            'description'       => __('A custom Agency Block.', 'agarracamote'),
            'render_template'   => 'template-parts/agency/block-agency.php',
            // 'enqueue_style'     => AWT_BUILD_CSS_URI . '/main.css',
            'category'          => 'media',
            'icon'              => 'block-default',
            'keywords'          => array( 'agency' ),
            // 'post_types'        => 'campaigns',
        ));
    }
}
add_action('acf/init', 'my_acf_init_block_types');

/**========================
 * get field from a Block ACF
===========================*/
function get_field_from_block( $selector, $post_id, $block_id ) {
    // If the post object doesn't even have any blocks, abort early and return false
    if ( ! has_blocks( $post_id ) ) {
        return false;
    }

    // Get our blocks from the post content of the post we're interested in
    $post_blocks = parse_blocks( get_the_content( '', false, $post_id ) );

    // Loop through all the blocks
    foreach ( $post_blocks as $block ) {

        // Only look at the block if it matches the $block_id
        if ( isset( $block['attrs']['id'] ) && $block_id == $block['attrs']['id'] ) {

            if ( isset( $block['attrs']['data'][$selector] ) ) {
                return $block['attrs']['data'][$selector];
            } else {
                break;  // If we found our block but didn't find the selector, abort the loop
            }

        }

    }

    // If we got here, we either didn't find the block by ID or we didn't find the selector by name
    return false;

}



function custom_get_acf_block_ids_from_post( $post_id, $return_count = -1, $arr_block_types = array() ) {
    // If the post object doesn't even have any blocks, abort early and return an empty array
    if ( ! has_blocks( $post_id ) ) {
        return array();
    }

    // If $arr_block_types is not an array, add the param as the only element of an array. This lets us pass a string if we wanted
    if ( ! is_array( $arr_block_types ) ) {
	    $arr_block_types = array( $arr_block_types );
    }

    // Only check the size of $arr_block_types once. Set a boolean so we know if we're filtering by block type or not
    $filter_block_types = ( 0 == count( $arr_block_types ) ) ? false : true;

    // Get our blocks from the post content of the post we're interested in
    $post_blocks = parse_blocks( get_the_content( '', false, $post_id ) );

    // Initialize some vars before we get into the loop
    $arr_return = array();
    $found_count = 0;

    // Loop through all the blocks
    foreach ( $post_blocks as $block ) {

        // Skip this item in the loop if the current block isn't one of the block types we're interested in
        if ( $filter_block_types && ! in_array( $block['blockName'], $arr_block_types ) ) {
            continue;
        }

        // Confirm the block we're looking at has an ID to return in the first place
        if ( isset( $block['attrs']['id'] ) ) {

            // Add this block ID to the return array
            $arr_return[] = $block['attrs']['id'];

            // Increment our found count, and see if we've found as many results as we wanted. Return early if so
                $found_count++;
                if ( $found_count == $return_count ) {
                    return $arr_return;
                }
        }
    }

    // If we made it all the way here, return whatever we've found
    return $arr_return;

}

/**
 * Call a shortcode function by tag name.
 *
 * @since  1.4.6
 *
 * @param string $tag     The shortcode whose function to call.
 * @param array  $atts    The attributes to pass to the shortcode function. Optional.
 * @param array  $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 */
function storefront_do_shortcode( $tag, array $atts = array(), $content = null ) {
	global $shortcode_tags;

	if ( ! isset( $shortcode_tags[ $tag ] ) ) {
		return false;
	}

	return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}