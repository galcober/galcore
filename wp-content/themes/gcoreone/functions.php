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

if ( ! function_exists("galcore_add_widgets_footer")) {
	function galcore_add_widgets_footer() {
		register_sidebar( array(
			'name' => __('Footer Left','galcore'),
			'id' => 'sidebar-footer-left',
			'description' => __('Widgets para el footer','galcore'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));

		register_sidebar( array(
			'name' => __('Footer Right','galcore'),
			'id' => 'sidebar-footer-right',
			'description' => __('Widgets para el footer','galcore'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));

		register_sidebar( array(
			'name' => __('Footer Center','galcore'),
			'id' => 'sidebar-footer-center',
			'description' => __('Widgets para el footer','galcore'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		));

	}
	add_action("widgets_init","galcore_add_widgets_footer");
}