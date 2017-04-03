<?php
//deklaracja, że motyw wspiera WooCommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
	register_nav_menu( 'footer', __( 'Primary Menu', 'theme-slug' ) );
}
