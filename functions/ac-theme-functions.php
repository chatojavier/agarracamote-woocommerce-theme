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