<?php

// Add custom widgets

function add_custom_pagebuilder_widgets($folders)
{
	$folders[] = get_template_directory() . '/pagebuilder/widgets/';
	return $folders;
}

add_filter('siteorigin_widgets_widget_folders', 'add_custom_pagebuilder_widgets');

// Create custom category

function mytheme_add_widget_tabs($tabs)
{
	$tabs[] = [
		'title' => __('Dummy widgets', 'dummy-widgets'),
		'filter' => ['groups' => ['dummy-widgets']]
	];

	return $tabs;
}

add_filter('siteorigin_panels_widget_dialog_tabs', 'mytheme_add_widget_tabs', 20);
