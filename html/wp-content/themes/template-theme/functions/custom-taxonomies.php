<?php

function register_custom_taxonomies()
{
    // Example

	// register_taxonomy(
	// 	'news-category',
	// 	'news_item',
	// 	array(
	// 		'label' => __('Category'),
	// 		'rewrite' => array('slug' => 'news-category'),
	// 		'hierarchical' => true,
	// 	)
	// );
}

add_action('init', 'register_custom_taxonomies');
