<?php

function custom_attributes($wp_customize)
{
	$wp_customize->add_panel('dummy-settings', array(
		'title' => 'Dummy settings',
		'description' => 'This is dummy panel',
		'priority' => 10,
	));

	$wp_customize->add_section('dummy-section', array(
		'title' => 'Dummy section',
		'priority' => 10,
		'panel' => 'dummy-settings',
	));

	$wp_customize->add_setting('dummy-setting', array('default' => '',));

	$wp_customize->add_control('dummy-attributes', array(
		'label' => 'Dummy attribute',
		'type' => 'text',
		'section' => 'dummy-section',
		'settings' => 'dummy-setting',
	));
}

add_action('customize_register', 'custom_attributes');