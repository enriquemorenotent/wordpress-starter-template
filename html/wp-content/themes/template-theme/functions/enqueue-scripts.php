<?php

function enqueue_scripts()
{
	// Styles

	wp_enqueue_style('main-style', get_stylesheet_uri());
	wp_enqueue_style('header-style', get_template_directory_uri() . '/styles/header.css');
	wp_enqueue_style('header-style', get_template_directory_uri() . '/styles/footer.css');

	// Scripts

	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/index.js', ['jquery']);

	// Plugins

	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.12.0/css/all.css');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

