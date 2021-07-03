<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

//Remove "Have a Coupon?" from checkoutpage.
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

//Add Title to checkout
add_action( 'woocommerce_before_checkout_form', 'ac_get_title_serif', 1 );
add_action( 'woocommerce_checkout_order_review', 'ac_order_review_heading', 1 );