<?php

function register_custom_posts()
{
    // Example
    
	// register_post_type('city', [
	// 	'labels'             => [
	// 		'name'               => 'Cities',
	// 		'singular_name'      => 'City',
	// 		'menu_name'          => 'Cities'
	// 	],
	// 	'public'             => true,
	// 	'capability_type'    => 'post',
	// 	'has_archive'        => true,
	// 	'supports'           => ['title', 'editor']
	// ]);

}

add_action('init', 'register_custom_posts');
