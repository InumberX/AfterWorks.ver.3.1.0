<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package wordpressAW
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wordpressaw_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'wordpressaw_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function my_delete_local_jquery() {
  wp_deregister_script('jquery');
}
function add_styles_and_scripts() {
  wp_enqueue_style( 'common_pc', get_template_directory_uri() . '/style_pc.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js' );
  wp_enqueue_script( 'common_js', get_template_directory_uri() . '/js/common.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );
add_action( 'wp_enqueue_scripts', 'add_styles_and_scripts' );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
