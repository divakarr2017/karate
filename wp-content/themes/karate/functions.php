<?php
function wpdocs_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	//wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('parent-style')
	);
}
/*---------------------------------------------------------*/

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_the_custom_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'karate' ),
	'secondary' => __('Secondary Navigation', 'karate')
) );

function twentythirteen_excerpt_length( $length ) {
	return 400;
}
add_filter( 'excerpt_length', 'twentythirteen_excerpt_length' );
add_action( 'wp_enqueue_scripts', 'load_old_jquery_fix', 100 );

function load_old_jquery_fix() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ), false, '1.11.3' );
		wp_enqueue_script( 'jquery' );
	}
}
function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-9,-7,-5,-4,-1,-6,-20' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

function is_blog () {
    return ( is_archive() || is_author() || is_category() ||  is_single() || is_tag()) && 'post' == get_post_type();
}
