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