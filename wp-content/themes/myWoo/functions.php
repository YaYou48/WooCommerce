<?php


// Disable WooCommerce CSS
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


// // Add Support WooCommerce
// function myWoo_add_woocommerce_support() {

// 	add_theme_support( 'woocommerce' );

// }	
// add_action( 'after_setup_theme', 'myWoo_add_woocommerce_support' );


// My Style CSS
function myMainStyle(){

	wp_enqueue_style( 'myMainStyle', get_stylesheet_directory_uri() . '/style.css' );

}   
add_action( 'wp_enqueue_scripts', 'myMainStyle' );


// Bootstrap Full Install
function bootstrap_full_install() {

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '../../../../node_modules/bootstrap/dist/css/bootstrap.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '../../../../node_modules/jquery/dist/jquery.js'  );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '../../../../node_modules/bootstrap/dist/js/bootstrap.bundle.js' );

}
add_action( 'wp_enqueue_scripts', 'bootstrap_full_install' );