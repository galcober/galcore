<?php

if (!function_exists("galcore_setup")) {
	function galcore_setup() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		$args = array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		);
		add_theme_support( 'hmtl5', $args );
	}
	add_action('after_setup_theme','galcore_setup');
}

if (!function_exists( "galcore_scripts")) {
	function galcore_scripts() {
		wp_register_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'));
		wp_register_script('functions', get_template_directory_uri() . '/js/function.js', array('jquery'));
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('functions');

	}
	add_action("wp_enqueue_scripts","galcore_scripts");
}

if (!function_exists( "galcore_styles")) {
	function galcore_styles() {
		//wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',true);
		wp_register_style('bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
		wp_register_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
		wp_register_style('styles', get_template_directory_uri() . '/css/styles.css');
		wp_enqueue_style('bootstrap-min');
		wp_enqueue_style('font-awesome');
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

if ( ! function_exists("galcore_add_widgets_footer")) {
	function galcore_add_widgets_footer() {
		register_sidebar( array(
			'name' => __('Footer Left','galcore'),
			'id' => 'sidebar-footer-left',
			'description' => __('Widgets izquierdo para el footer','galcore'),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));

		register_sidebar( array(
			'name' => __('Footer Right','galcore'),
			'id' => 'sidebar-footer-right',
			'description' => __('Widgets derecho para el footer','galcore'),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));

		register_sidebar( array(
			'name' => __('Footer Center','galcore'),
			'id' => 'sidebar-footer-center',
			'description' => __('Widgets central para el footer','galcore'),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));

	}
	add_action("widgets_init","galcore_add_widgets_footer");
}