<?php

// Add Support WooCommerce
function myWoo_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'myWoo_add_woocommerce_support' );

// Disable WooCommerce CSS
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// My Style
function myMainStyle(){
	wp_enqueue_style( 'myMainStyle', get_stylesheet_directory_uri() . '/style.css' );
}   
add_action( 'wp_enqueue_scripts', 'myMainStyle' );