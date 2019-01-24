<?php 

require get_stylesheet_directory() . '/inc/header.php';
require get_stylesheet_directory() . '/inc/footer.php';
require get_stylesheet_directory() . '/inc/product.php';

/**
 * styles and scripts.
 */
function w_store_scripts() {
	wp_enqueue_style( 'w-sotre-header', get_stylesheet_directory_uri() . '/assets/css/header.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-footer', get_stylesheet_directory_uri() . '/assets/css/footer.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-typo', get_stylesheet_directory_uri() . '/assets/css/typo.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-breadcrumb', get_stylesheet_directory_uri() . '/assets/css/breadcrumb.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-products', get_stylesheet_directory_uri() . '/assets/css/products.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-product', get_stylesheet_directory_uri() . '/assets/css/product.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-input', get_stylesheet_directory_uri() . '/assets/css/input.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-cart', get_stylesheet_directory_uri() . '/assets/css/cart.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'w-sotre-comment', get_stylesheet_directory_uri() . '/assets/css/comment.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'w_store_scripts', 90 );

