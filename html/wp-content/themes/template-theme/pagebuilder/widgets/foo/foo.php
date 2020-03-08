<?php

/*
Widget Name: Fio
Description: Foo description
Author: Enrique Moreno Tent
Author URI: https://enriquemorenotent.com
*/

class WidgetFoo extends SiteOrigin_Widget
{

    function __construct()
    {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'foo',

            // The name of the widget for display purposes.
            __('Foo', 'foo-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            [
                'description' => __('Foo', 'foo-text-domain'),
                'panels_title' => false,
                'panels_groups' => ['dummy-widgets'],
            ],

            //The $control_options array, which is passed through to WP_Widget
            [],

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            [
                'body' => [
                    'type' => 'tinymce',
                    'label' => __('Body', 'foo-text-domain'),
                    'default' => ''
                ],
            ],

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function initialize()
    {
        $this->register_frontend_scripts(
            [['foo', get_template_directory_uri() . "/pagebuilder/widgets/foo/js/index.js", ['jquery']]]
        );
    }
}

siteorigin_widget_register('foo', __FILE__, 'WidgetFoo');
