<?php
/**
 * Plugin Name: kwidget
 * Description: The bro learning elementor widgets
 * Version:     1.0.0
 * Author:      kauri beguely
 * Text Domain: elementor-addon
 *
 * Requires Plugins: elementor
 */

function register_hello_world_widget( $widgets_manager ) {

	// require_once( __DIR__ . '/widgets/helloWidge.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	// $widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );

/**
 * Register scripts and styles for Elementor test widgets.
 */
function kwidgets_dependencies() {

	/* Scripts */
	wp_register_script( 'three-export-script', plugins_url( 'js/threeExport.js', __FILE__ ) );

	/* Styles */
	wp_register_script( 'three-export-script', plugins_url( 'css/threeExport.js', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'kwidgets_dependencies' );
