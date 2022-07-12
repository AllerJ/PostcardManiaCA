<?php
/**
 * AP Properties Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ap_theme
 */

require get_template_directory() . '/inc/diet.php';

function ap_theme_setup() {
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ap_theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'ap_theme_setup' );

function ap_scripts() {
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null );
	wp_enqueue_style( 'ap_theme-style', get_stylesheet_directory_uri().'/style.css', array(), null );
	wp_enqueue_script('ap_theme-script', get_stylesheet_directory_uri().'/theme.js', array(), null, true);
	wp_enqueue_style( 'fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), null );
//	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'wp-webfonts' );
	remove_filter('render_block', 'wp_render_duotone_support');
}
add_action( 'wp_enqueue_scripts', 'ap_scripts' );
