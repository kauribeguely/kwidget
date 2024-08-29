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
