<?php

// Register menus

function register_menus() {
    register_nav_menu('header-menu', 'Header menu');
    register_nav_menu('header-mobile-menu', 'Header mobile menu');
    register_nav_menu('footer-menu', 'Footer menu');
}

add_action( 'after_setup_theme', 'register_menus' );