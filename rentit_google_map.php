<?php
/**
 * @package RentIt_Google_Map
 * @version 1.0
 */
/*
Plugin Name: RentIt Google Map
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this plugin apply google map api on your theme!
Version: 1.0
Author URI: https://ma.tt/
Text Domain: RentIt_Google_Map
*/
include_once( 'customizer.php' );
//line 566 of rentit/js/map_init.js there is a function which make map options in a variable names mapOptions2
//use @ to prevent warning
if ( ( get_post_type(@ $_GET[ 'post' ] ) == 'product'  or @ $_GET[ 'post_type' ] == 'product' ) ) {
	add_action( 'admin_enqueue_scripts', 'RentIt_Google_Map_pass_mapOptions_vars', 9999 );
}
add_action( 'wp_enqueue_scripts', 'RentIt_Google_Map_pass_mapOptions_vars', 9999 );
$mapOptionsVars = array(
	//map_api
	'api' => get_theme_mod( 'map_api', 'AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs' ),
	//map_max_zoom
	'min_zoom' => get_theme_mod( 'map_min_zoom', NULL ),
	//map_max_zoom
	'max_zoom' => get_theme_mod( 'map_max_zoom', NULL ),
	//map_zoom_control
	'zoom_control' => get_theme_mod( 'map_zoom_control', NULL ),
	//map_zoom_scroll
	'zoom_scroll' => get_theme_mod( 'map_zoom_scroll', NULL ),
	//map_map_type_control
	'map_type_control' => get_theme_mod( 'map_map_type_control', NULL ),
	//map_language
	'language' => get_theme_mod( 'map_language', NULL ),
);

//pass variable
function RentIt_Google_Map_pass_mapOptions_vars() {
	global $mapOptionsVars;
	//pass momentVars object to js
	wp_localize_script( 'renita_map_int', 'mapOptionsVars', $mapOptionsVars );
}