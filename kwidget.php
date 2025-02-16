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

function registerAllWidgets( $widgets_manager ) {

	// require_once( __DIR__ . '/widgets/helloWidge.php' );
	// require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	// $widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	// $widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

	require_once( __DIR__ . '/widgets/two-phones.php' );
	$widgets_manager->register( new \Two_Phones() );

	require_once( __DIR__ . '/widgets/threess.php' );
	$widgets_manager->register( new \Threess_Widget() );

	require_once( __DIR__ . '/widgets/threess2.php' );
	$widgets_manager->register( new \Threess_Widget2() );

	require_once( __DIR__ . '/widgets/blogGrid.php' );
	$widgets_manager->register( new \Post_Grid_Widget() );


}
add_action( 'elementor/widgets/register', 'registerAllWidgets' );

/**
 * Register scripts and styles for Elementor test widgets.
 */
function kwidgets_dependencies() {

	/* Scripts */
	wp_register_script( 'three-export-script', plugins_url( 'js/threeExport.js', __FILE__ ) );
	// wp_register_script( 'blog-grid-script', plugins_url( 'js/blogGrid.js', __FILE__ ) );

	/* Styles */
	wp_register_style( 'three-export-style', plugins_url( 'css/threeExport.css', __FILE__ ) );
	wp_register_style( 'blog-grid-style', plugins_url( 'css/blogGrid.css', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'kwidgets_dependencies' );




	function register_custom_widget_category( $elements_manager ) {

    $elements_manager->add_category(
        'aka-codes',  // Unique slug for the category
        [
            'title' => __( 'AkaCodes', 'text-domain' ),  // Display name of the category
            'icon' => 'fa fa-plug',  // Optional icon for the category
        ]
	    );

	}
	add_action( 'elementor/elements/categories_registered', 'register_custom_widget_category' );
