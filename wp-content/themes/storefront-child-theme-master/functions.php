<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

 /**
 * Bootstrap & jQuery install
 */
// function bootstrap_full_install() {

// 	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '../../../../node_modules/bootstrap/dist/css/bootstrap.css' );
// 	wp_enqueue_script( 'jquery', get_template_directory_uri() . '../../../../node_modules/jquery/dist/jquery.js'  );
// 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '../../../../node_modules/bootstrap/dist/js/bootstrap.bundle.js' );

// }
// add_action( 'wp_enqueue_scripts', 'bootstrap_full_install' );

/**
* Déplacement Primary Menu
*/ 
add_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       1 );
add_action( 'storefront_header', 'storefront_primary_navigation',               2 );
add_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 3 );


/**
* Remove StoreFront
*/ 
function item_display() {

    remove_action( 'woocommerce_after_shop_loop_item_title',      'woocommerce_show_product_loop_sale_flash', 6 );
    add_action( 'woocommerce_before_shop_loop_item_title',  'woocommerce_show_product_loop_sale_flash', 10 );

}
add_action( 'init', 'item_display' );


/**
* Remove StoreFront
*/ 
function remove_sf_actions() {

    // Search
    remove_action( 'storefront_header', 'storefront_product_search',                   40 );


    // Cart
    remove_action( 'storefront_header', 'storefront_header_cart',                      60 );


    // Primary Menu
    remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
    remove_action( 'storefront_header', 'storefront_primary_navigation',               50 );
    remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );


    // Sort Menu
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper',        9 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',     10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',         20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination',           30 );
    remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper_close', 31 );

    remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper',         9 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering',      10 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count',          20 );
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination',            30 );
    remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper_close',  31 );

}
add_action( 'init', 'remove_sf_actions' );













 /**
 * Hook test
 */ 
add_action('woocommerce_after_shop_loop_item','show_stock', 10);
 
function show_stock() {
    global $product;
    if ( $product->stock ) {
        wc_get_template_part('template-parts/product-remaining'); 
    }
}


