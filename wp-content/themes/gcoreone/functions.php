<?php

if (!function_exists( "galcore_scripts")) {
	function galcore_scripts() {
		wp_enqueue_script('bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',array('jquery'),true);
		wp_register_script('functions', get_template_directory_uri() . '/js/function.js', array('jquery'));
		wp_enqueue_script('functions');

	}
	add_action("wp_enqueue_scripts","galcore_scripts");
}

if (!function_exists( "galcore_styles")) {
	function galcore_styles() {
		wp_enqueue_style('bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css',true);
		wp_register_style('styles', get_template_directory_uri() . '/css/styles.css');
		wp_enqueue_style('styles');

	}
	add_action("wp_enqueue_scripts","galcore_styles");
}

/**
* Utilizamos el archivo navwalker/wp_bootrstrap_navwalker.php
*/
require_once('navwalker/wp_bootstrap_navwalker.php');

register_nav_menus( array(
	'primary' => __('Primary Menu', 'galcore'),
));