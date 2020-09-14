<?php
/**
 * RichText Control.
 *
 * @package lazyblocks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * LazyBlocks_Control_RichText class.
 */
class LazyBlocks_Control_RichText extends LazyBlocks_Control {
    /**
     * Constructor
     */
    public function __construct() {
        $this->name       = 'rich_text';
        $this->icon       = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 7V17H4V7H20ZM20 5H4C2.9 5 2.01 5.9 2.01 7L2 17C2 18.1 2.9 19 4 19H20C21.1 19 22 18.1 22 17V7C22 5.9 21.1 5 20 5ZM11 8H13V10H11V8ZM11 11H13V13H11V11ZM8 8H10V10H8V8ZM8 11H10V13H8V11ZM5 11H7V13H5V11ZM5 8H7V10H5V8ZM8 14H16V16H8V14ZM14 11H16V13H14V11ZM14 8H16V10H14V8ZM17 11H19V13H17V11ZM17 8H19V10H17V8Z" fill="currentColor"/></svg>';
        $this->type       = 'string';
        $this->label      = __( 'Rich Text (WYSIWYG)', 'lazy-blocks' );
        $this->category   = 'content';
        $this->attributes = array(
            'multiline' => 'false',
        );

        parent::__construct();
    }

    /**
     * Register assets action.
     */
    public function register_assets() {
        wp_register_script(
            'lazyblocks-control-rich-text',
            lazyblocks()->plugin_url() . 'controls/rich_text/script.min.js',
            array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components' ),
            '2.1.0',
            true
        );
    }

    /**
     * Get script dependencies.
     *
     * @return array script dependencies.
     */
    public function get_script_depends() {
        return array( 'lazyblocks-control-rich-text' );
    }
}

new LazyBlocks_Control_RichText();